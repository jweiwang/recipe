<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Moduels extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Moduels_model");
	}

	public function index() {
		$ver = [];
		$result = $this->Moduels_model->get_moduel_arr($ver);

		$this->assign('result',$result);
		$this->assign('ver',$ver);
		$this->display('moduels/index.html');
	}

	public function add() {
		if ($this->input->is_ajax_request()) {
			$res['code'] = 0;
			$res['data'] = [];
			$level = 1;
			$parent_id = (int)$this->input->post('parent_id');
			if ($parent_id) {
				$parent = $this->Moduels_model->get_info_by_id($parent_id,'level');
				$level = $parent['level'] + 1;
			}
			$data = [
				'name'=>$this->input->post('name'),
				'parent_id'=>(int)$this->input->post('parent_id'),
				'directory'=>$this->input->post('directory'),
				'class'=>$this->input->post('class'),
				'method'=>$this->input->post('method'),
				'index'=>$this->input->post('index'),
				'sort'=>(int)$this->input->post('sort'),
				'icon'=>$this->input->post('icon'),
				'level'=>$level,
				'is_menu'=>(int)$this->input->post('is_menu'),
			];
			$id = (int)$this->input->post('id');
			if ($id) {
				if ($this->Moduels_model->update_by_id($id,$data)) {
					$res['code'] = 200;
					add_option('edit_moduel', array('id'=>$id));
				}
			} else {
				if ($id = $this->Moduels_model->insert($data)) {
					$res['code'] = 200;
					add_option('add_moduel', array('id'=>$id));
				}
			}
			
			$this->json($res);
		}
		$id = (int)$this->input->get('id');
		$info = [];
		if ($id) {
			$info =  $this->Moduels_model->get_info_by_id($id,'*');
		}
		$parent = $this->Moduels_model->get_moduel_arr(['level <'=>3]);
	
		$this->assign('parent',$parent);
		$this->assign('info',$info);
		$this->display('moduels/add.html');
	}

	public function del(){
		$res['code'] = 0;
		$res['data'] = [];
		$id = (int)$this->input->post('id');
		if ($id) {
			//如果有下级不可删除
			$count = $this->Moduels_model->count(['parent_id'=>$id]);
			if ($count) {
				$res['code'] = 500;
				$res['data']['error_message'] = '有关联权限，不可删除！';
			} else {
				if ($this->Moduels_model->delete_by_id($id)) {
					$res['code'] = 200;
				}
			}
		}
		$this->json($res);
	}
}