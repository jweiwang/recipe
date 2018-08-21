<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Attribute extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Attribute_model");
	}

	public function index() {
		$parent_id = $this->input->get('parent_id') ?  $this->input->get('parent_id') : 0;
		$result = $this->Attribute_model->fetch_rows(['parent_id'=>$parent_id],'*');
		//面包屑
		if ($parent_id) {
			$arr = $this->Attribute_model->fetch_rows([],'*');
			$parents = $this->Attribute_model->get_parent($arr,$parent_id);
			$this->assign('parents',$parents);
		}
		
		$this->assign('result',$result);
		$this->assign('parent_id',$parent_id);
		$this->display('attribute/index.html');
	}

	public function add() {
		if ($this->input->is_ajax_request()) {
			$res['code'] = 0;
			$res['data'] = [];
			$data = [
				'attr_name'=>$this->input->post('attr_name'),
				'sort'=>(int)$this->input->post('sort'),
			];
			$id = (int)$this->input->post('id');
			if ($id) {
				if ($this->Attribute_model->update_by_id($id,$data)) {
					$res['code'] = 200;
					add_option('edit_moduel', array('id'=>$id));
				}
			} else {
				$data['parent_id'] = (int)$this->input->post('parent_id');
				if ($id = $this->Attribute_model->insert($data)) {
					$res['code'] = 200;
					add_option('add_attribute', array('id'=>$id));
				}
			}
			$this->json($res);
		}
		$id = (int)$this->input->get('id');
		$parent_id = (int)$this->input->get('parent_id');
		$info = [];
		if ($id) {
			$info =  $this->Attribute_model->get_info_by_id($id,'*');
		}
		
		$this->assign('info',$info);
		$this->assign('parent_id',$parent_id);
		$this->display('attribute/add.html');
	}

	public function del(){
		$res['code'] = 0;
		$res['data'] = [];
		$id = (int)$this->input->post('id');
		if ($id) {
			//如果有下级不可删除
			$count = $this->Attribute_model->count(['parent_id'=>$id]);
			if ($count) {
				$res['code'] = 500;
				$res['data']['error_message'] = '有关联权限，不可删除！';
			} else {
				if ($this->Attribute_model->delete_by_id($id)) {
					$res['code'] = 200;
				}
			}
		}
		$this->json($res);
	}
}