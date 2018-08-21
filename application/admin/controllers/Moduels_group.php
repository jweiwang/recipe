<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Moduels_group extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Moduels_group_model");
	}

	public function index() {
		$ver = $this->input->get();
		$where = [];
		if(isset($ver['name']) && $ver['name']) {
			$where['name'] = $ver['name'];
		}
		$page = get_page();
		$pagesize = $this->input->get('pagesize') ? $this->input->get('pagesize') : 10;
		$result = $this->Moduels_group_model->fetch_page($page,$pagesize,$where,'*','id desc');

		$groups = [];
		$members = $this->Members_model->fetch_rows(['is_del'=>0,'group_id <>'=>0],'group_id,account');
		if ($members)
		foreach ($members as $item) {
			$groups[$item['group_id']][] = $item['account'];
		}

		if ($result['count'] && $groups) {
			foreach ($result['rows'] as $key=>$item) {
				if (isset($groups[$item['id']])) {
					$result['rows'][$key]['members'] = implode('、',$groups[$item['id']]);
				}
			}
		}
	
		$this->assign('result',$result);
		$this->assign('ver',$ver);
		$this->display('moduels_group/index.html');
	}

	public function add() {
		if ($this->input->is_ajax_request()) {
			$res['code'] = 0;
			$res['data'] = [];
		
			$moduel_ids = $this->input->post('moduels') ? implode(",",$this->input->post('moduels')) : '';
			$data = [
				'name'=>$this->input->post('name'),
				'moduel_ids'=>$moduel_ids,
				'des'=>$this->input->post('des'),
			];
			$id = (int)$this->input->post('id');
			if ($id) {
				if ($this->Moduels_group_model->update_by_id($id,$data)) {
					$res['code'] = 200;
					add_option('edit_moduel_group', array('id'=>$id));
				}
			} else {
				if ($id = $this->Moduels_group_model->insert($data)) {
					$res['code'] = 200;
					add_option('add_moduel_group', array('id'=>$id));
				}
			}
			$this->json($res);
		}
		$this->load->model('Moduels_model');
		$moduels = $this->Moduels_model->get_moduel_arr([]);
		$id = (int)$this->input->get('id');
		$info = [];
		if ($id) {
			$info =  $this->Moduels_group_model->get_info_by_id($id,'*');
			if ($info['moduel_ids']) {
				$t = explode(',',$info['moduel_ids']);
				foreach ($moduels as $k1=>$v1) {
					if (in_array($v1['id'],$t)) {
						$v1['checked'] = 'checked';
					}
					if (isset($v1['child']) && $v1['child'])
					foreach ($v1['child'] as $k2=>$v2) {
						if (in_array($v2['id'],$t)) {
							$v2['checked'] = 'checked';
						}
						if (isset($v2['child']) && $v2['child'])
						foreach ($v2['child'] as $k3=>$v3) {
							if (in_array($v3['id'],$t)) {
								$v3['checked'] = 'checked';
							}
							$v2['child'][$k3] = $v3;
						}
						$v1['child'][$k2] = $v2;
					}	
					$moduels[$k1] = $v1;
				}
			}
		}

		$this->assign('info',$info);
		$this->assign('moduels',$moduels);
		$this->display('moduels_group/add.html');
	}

	public function del(){
		$res['code'] = 0;
		$res['data'] = [];
		$id = (int)$this->input->post('id');
		if ($id) {
			if ($this->Moduels_group_model->delete_by_id($id)) {
				$res['code'] = 200;
			}
		}
		$this->json($res);
	}
}