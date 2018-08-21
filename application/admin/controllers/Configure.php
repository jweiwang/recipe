<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Configure extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Configure_model");
	}

	public function website() {
		if ($this->input->is_ajax_request()) {
			$res['code'] = 0;
			$res['data'] = [];
			$data = [
				'configure'=>json_encode($this->input->post('configure')),
			];
			if ($this->Configure_model->db->where('mtype','website-config')->update('configure',$data)) {
				$res['code'] = 200;
				add_option('edit_configure_website-config', array('mtype'=>'website-config'));
			}
			$this->json($res);
		}
		$configure = [];
		$info =  $this->Configure_model->fetch_row(['mtype'=>'website-config'],'configure');
		if ($info['configure']) {
			$configure = json_decode($info['configure'],true);
		}
		$this->assign('configure',$configure);
		$this->display('configure/website.html');
	}

	public function smtp() {
		if ($this->input->is_ajax_request()) {
			$res['code'] = 0;
			$res['data'] = [];
			$data = [
				'configure'=>json_encode($this->input->post('configure')),
			];
			if ($this->Configure_model->db->where('mtype','smtp-config')->update('configure',$data)) {
				$res['code'] = 200;
				add_option('edit_configure_smtp-config', array('mtype'=>'smtp-config'));
			}
			$this->json($res);
		}
		$configure = [];
		$info =  $this->Configure_model->fetch_row(['mtype'=>'smtp-config'],'configure');
		if ($info['configure']) {
			$configure = json_decode($info['configure'],true);
		}
		$this->assign('configure',$configure);
		$this->display('configure/smtp.html');
	}

	
}