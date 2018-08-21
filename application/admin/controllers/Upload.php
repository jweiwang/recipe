<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends MY_Controller {
	public function __construct() {
		parent::__construct();

	}

	function index() {
		$attach_type = $this->input->post('attach_type');
		$max_size = 8*1024;
		if (isset($_FILES['Filedata']) && $_FILES['Filedata']['name']) {
			$config = array();
			$config['upload_path'] = 'uploads/'.date('Y').'/'.date('md');
			$config['allowed_types']= 'gif|jpg|jpeg|png';
			$config['max_size']     = $max_size;
			$config['overwrite']    = true;
			$config['file_name']    = md5($this->loginUser['id'].microtime(true));
			mkpath($config['upload_path']);
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('Filedata')) {
				$error = $this->upload->display_errors();
				$res = array('code'=>100,'error'=>strip_tags($error));
			} else {
				$upload_data = $this->upload->data();
				$res = array('code'=>200,'file'=>$config['upload_path'].'/'.$upload_data['file_name']);
			}
			$this->json($res);
		}
	}
}