<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Members_model");
	}

	public function index() {
		$ver = $this->input->get();
		$where = [];
		if(isset($ver['category']) && $ver['category'] && isset($ver['category_val']) && $ver['category_val']) {
			$where[$ver['category']] = $ver['category_val'];
		}
		if(isset($ver['group_id']) && $ver['group_id']) {
			$where['group_id'] = $ver['group_id'];
		}
		if(isset($ver['date_start']) && $ver['date_start']) {
			$where['entry_time >='] = strtotime($ver['date_start']);
		}
		if(isset($ver['date_end']) && $ver['date_end']) {
			$where['entry_time <='] = strtotime($ver['date_end'].' 23:59:59');
		}
		$where['is_del'] = 0;
		$page = get_page();
		$pagesize = $this->input->get('pagesize') ? $this->input->get('pagesize') : 10;
		$result = $this->Members_model->fetch_page($page,$pagesize,$where,'*','id desc');

		$this->load->model("Moduels_group_model");
		$groups = $this->Moduels_group_model->fetch_rows([],'id,name','id desc');
		$groups = get_key_arr($groups,'id');

		if ($result['count'] && $groups) {
			foreach ($result['rows'] as $key=>$item) {
				if ($item['group_id'])
				$item['group_name'] = $groups[$item['group_id']]['name'];

				$result['rows'][$key] = $item;
			}
		} 

		$this->assign('result',$result);
		$this->assign('ver',$ver);
		$this->assign('groups',$groups);
		$this->display('members/index.html');
	}

	public function add() {
		if ($this->input->is_ajax_request()) {
			$res['code'] = 0;
			$res['data'] = [];
			$data = [
				'account'=>$this->input->post('account'),
				'name'=>$this->input->post('name'),
				'sex'=>(int)$this->input->post('sex'),
				'mobile'=>$this->input->post('mobile'),
				'email'=>$this->input->post('email'),
				'entry_time'=>strtotime($this->input->post('entry_time')),
				'group_id'=>$this->input->post('group_id'),
				'workdo'=>$this->input->post('workdo'),
			];
			$id = (int)$this->input->post('id');
			if ($id) {
				
				if ($this->Members_model->update_by_id($id,$data)) {
					$res['code'] = 200;
					add_option('edit_members', array('id'=>$id));
				}
			} else {
				$data['created'] = $this->timestamp;
				//$data['password'] = $this->input->post('password') ? md5($this->input->post('password')) : md5('123654');
				if ($id = $this->Members_model->insert($data)) {
					$res['code'] = 200;
					add_option('add_members', array('id'=>$id));
				}
			}
			
			$this->json($res);
		}
		$this->load->model("Moduels_group_model");
		$groups = $this->Moduels_group_model->fetch_rows([],'id,name','id desc');
		$id = (int)$this->input->get('id');
		$info = [];
		if ($id) {
			$info =  $this->Members_model->get_info_by_id($id,'*');
		}
		
		$this->assign('info',$info);
		$this->assign('groups',$groups);
		$this->display('members/add.html');
	}

	public function my(){
		if ($this->input->is_ajax_request()) {
			$res['code'] = 0;
			$res['data'] = [];
			$data = [
				'sex'=>(int)$this->input->post('sex'),
				'mobile'=>$this->input->post('mobile'),
				'email'=>$this->input->post('email'),
				'workdo'=>$this->input->post('workdo'),
			];
			if ($this->Members_model->update_by_id($this->loginUser['id'],$data)) {
				$res['code'] = 200;
				add_option('my_edit_members', array('id'=>$this->loginUser['id']));
			}
			$this->json($res);
		}
		$this->display('members/my.html');	
	}

	public function password(){
		if ($this->input->is_ajax_request()) {
			$res['code'] = 0;
			$res['data'] = [];
			$data = [
				'password'=>md5($this->input->post('password')),
			];
			if ($this->Members_model->update_by_id($this->loginUser['id'],$data)) {
				$res['code'] = 200;
				add_option('password_edit_members', array('id'=>$this->loginUser['id']));
			}
			$this->json($res);
		}
		$this->display('members/password.html');	
	}

	public function del(){
		$res['code'] = 0;
		$res['data'] = [];
		$id = (int)$this->input->post('id');
		if ($id) {
			$data['is_del'] = 1;
			if ($this->Members_model->update_by_id($id,$data)) {
				$res['code'] = 200;
				add_option('del_members', array('id'=>$id));
			}
		}
		$this->json($res);
	}

	public function form_verify() {
		$res['code'] = 0;
		$res['data'] = [];
		$type = $this->input->post('type');
		$value = $this->input->post('value');
		if ($type && $value) {
			switch ($type) {
				case 'account':
					$id = (int)$this->input->post('id');
					//验证
					$where = [];
					$where[$type] = $value;
					if ($id) $where['id <>'] = $id;
					$count = $this->Members_model->count($where);
					if ($count){
						$res['code'] = 500;
						$res['data']['error_message'] = '用户名已存在';
					}
					break;
				case 'oldpassword':
					
					//验证
					$where = [];
					$where['id'] = $this->loginUser['id'];
					$row = $this->Members_model->fetch_row($where);
					if ($row['password'] != md5($value)){
						$res['code'] = 500;
						$res['data']['error_message'] = '当前密码不正确';
					}
					break;
			}
		}
		$this->json($res);
	}
}