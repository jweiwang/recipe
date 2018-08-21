<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Message_model");
		$this->load->model('Message_read_model');
	}

	public function index(){
		$this->load->model("Members_model");
		$members = $this->Members_model->fetch_rows([],'*');
		$members = get_key_arr($members,'id');
	
		$ver = $this->input->get();
		$where = [];
		if(isset($ver['is_public']) && $ver['is_public']) {
			if ($ver['is_public'] == 1) {
				$where['is_public'] = 1;
			} else {
				$where['is_public'] = 0;
			}
		}
		if(isset($ver['poster_id']) && $ver['poster_id']) {
			$where['poster_id'] = $ver['poster_id'];
		}
		if(isset($ver['receive_id']) && $ver['receive_id']) {
			$where['receive_id'] = $ver['receive_id'];
		}
		if(isset($ver['date_start']) && $ver['date_start']) {
			$where['send_time >='] = strtotime($ver['date_start']);
		}
		if(isset($ver['date_end']) && $ver['date_end']) {
			$where['send_time <='] = strtotime($ver['date_end'].' 23:59:59');
		}
		$where['is_del'] = 0;
		$page = get_page();
		$pagesize = $this->input->get('pagesize') ? $this->input->get('pagesize') : 10;
		$result = $this->Message_model->fetch_page($page,$pagesize,$where,'*','id desc');

		if ($result['count']) {
			foreach ($result['rows'] as $key=>$item) {
				if ($item['poster_id']) $item['poster'] = $members[$item['poster_id']]['account'];
				if ($item['receive_id']) $item['receiver'] = $members[$item['receive_id']]['account'];
				$item['type'] = $item['is_public'] ? '系统' : '私信';
				$result['rows'][$key] = $item;
			}
		} 
		$this->assign('result',$result);
		$this->assign('members',$members);
		$this->assign('ver',$ver);
		$this->display('message/message.html');
	}
	public function add(){
		if ($this->input->is_ajax_request()) {
			$res['code'] = 0;
			$res['data'] = [];
			$is_public = (int)$this->input->post('is_public');
			$data = [
				'title'=>$this->input->post('title'),
				'content'=>$this->input->post('content',false,false),
				'is_public'=>$is_public,
			];
			if (!$is_public) {
				$data['receive_id'] = (int)$this->input->post('receive_id');
			}
			$id = (int)$this->input->post('id');
			if ($id) {
				if ($this->Message_model->update_by_id($id,$data)) {
					$res['code'] = 200;
					add_option('edit_message', array('id'=>$id));
				}
			} else {
				$data['poster_id'] = $this->loginUser['id'];
				if ($id = $this->Message_model->insert($data)) {
					$res['code'] = 200;
					add_option('add_message', array('id'=>$id));
				}
			}
			//增加消息查看信息
			if ($is_public) {
				$this->load->model("Members_model");
				$members = $this->Members_model->fetch_rows(['is_del'=>0,'status'=>1],'*');
				if ($members) 
					foreach ($members as $item) {
						$read = [
							'message_id'=>$id,
							'member_id'=>$item['id'],
						];
						$this->Message_read_model->insert_ignore($read);
					}
			} else {
				if ($data['receive_id']) {
					$read = [
						'message_id'=>$id,
						'member_id'=>$data['receive_id'],
					];
					$this->Message_read_model->insert_ignore($read);
				}
			}
			
			$this->json($res);
		}
		$info = [];
		$id = $this->input->get('id');
		if ($id) {
			$info =  $this->Message_model->get_info_by_id($id,'*');
		}
		$this->load->model('Members_model');
		$members = $this->Members_model->fetch_rows(['is_del'=>0,'status'=>1],'id,account');
		$this->assign('members',$members);
		$this->assign('info',$info);
		$this->display('message/add.html');
	}

	public function my(){
		$public = $this->input->get('public') ? $this->input->get('public') : 'all';
		$page = get_page();
		$pagesize = $this->input->get('pagesize') ? $this->input->get('pagesize') : 10;
		$fields_count = 'count(A.id) as count';
		$fields = 'A.*,B.read_time,B.del_time';
		$db = $this->Message_model->db;
		$db->select($fields_count)->from('message A')->join('message_read B','A.id=B.message_id');
		$db->where('A.is_del',0);
		$db->where('A.is_send',1);
		$db->where('B.del_time',0);
		$db->where('B.member_id',$this->loginUser['id']);
		if ($public == 'system') {
			$db->where('A.is_public',1);
		} else if($public == 'letter') {
			$db->where('A.is_public',0);
		}
		$result = $db->get()->row_array();
		if ($result['count']) {
			$sql =  $this->Message_model->db->last_query();
			$sql = str_replace($fields_count, $fields, $sql);
			$sql .= ' ORDER BY id DESC';
			$sql .= ' LIMIT '.(($page-1)*$pagesize).','.$pagesize;
			$result['rows'] =  $this->Message_model->db->query($sql)->result_array();
			$result['page'] = $page;
			$result['pagesize'] = $pagesize;
		} 
		//统计未读
		$count = [];
		$gcount = $this->Message_model->db->select('count(1) as num,is_public')->from('w_message_read A')->join('w_message B','A.message_id=B.id')->where('B.is_del',0)->where('B.is_send',1)->where('A.del_time',0)->where('A.read_time',0)->where('A.member_id',$this->loginUser['id'])->group_by('is_public')->get()->result_array();
		if ($gcount) {
			foreach ($gcount as $v) {
				if ($v['is_public']) {
					$count['system'] = $v['num'];
				} else {
					$count['letter'] = $v['num'];
				}
				$count['all'] += $v['num'];
			}
		}
		$this->assign('result',$result);
		$this->assign('public',$public);
		$this->assign('count',$count);
		$this->display('message/my_message.html');
	}
	//发送消息
	public function send(){
		$res['code'] = 0;
		$res['data'] = [];
		$id = (int)$this->input->post('id');
		if ($id) {
			$data['is_send'] = 1;
			$data['send_time'] = $this->timestamp;
			if ($this->Message_model->update_by_id($id,$data)) {
				$res['code'] = 200;
				add_option('send_message', array('id'=>$id));
			}
		}
		$this->json($res);
	}
	//管理员删除
	public function del(){
		$res['code'] = 0;
		$res['data'] = [];
		$id = (int)$this->input->post('id');
		if ($id) {
			$data['is_del'] = 1;
			if ($this->Message_model->update_by_id($id,$data)) {
				$res['code'] = 200;
				add_option('del_message', array('id'=>$id));
			}
		}
		$this->json($res);
	}
	//查看
	public function view(){
		$info = [];
		$id = (int)$this->input->get('id');
		if ($id) {
			$info = $this->Message_model->get_info_by_id($id,'*');
			//更新已读标识
			$this->Message_read_model->update_by_where(['message_id'=>$id,'member_id'=>$this->loginUser['id']], ['read_time'=>$this->timestamp]);
		}
		$this->assign('info',$info);
		$this->display('message/view.html');
	}

	//个人删除查看
	public function read(){
		$res['code'] = 0;
		$res['data'] = [];
		$ids = $this->input->post('ids');
		$events = $this->input->post('events');
		if ($ids && $events) {
			$ids = explode(',',$ids);
			if ($events == 'del') {
				if ($this->Message_read_model->db->where_in('message_id',$ids)->where('member_id',$this->loginUser['id'])->set('del_time',$this->timestamp)->update('w_message_read')) {
					$res['code'] = 200;
				}
			} else {
				if ($this->Message_read_model->db->where_in('message_id',$ids)->where('member_id',$this->loginUser['id'])->set('read_time',$this->timestamp)->update('w_message_read')) {
					$res['code'] = 200;
				}
			}
		}
		$this->json($res);
	}
}