<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function index() {
		if ($this->input->is_post()) {
			$res = [];
			$res['code'] = 0;
			$account = $this->input->post('account');
			$password = $this->input->post('password');
			$rememberme = $this->input->post('rememberme');
			if ($account && $password) {
				$this->load->model('Members_model');
				$member = $this->Members_model->fetch_row(['account'=>$account,'is_del'=>0], 'id,account,password');
				if ($member && $member['password'] == md5($password)) {
					$data = [
						'loginID'=>get_key_val($member['id']),
					];
					$this->session->set_userdata($data);
					$str = $member['id'];
					$str = md5($_SERVER['HTTP_USER_AGENT'].$this->input->ip_address().$str).$str;
					$expire = 0;
					if ($rememberme) {
						$expire = $this->timestamp+7*24*3600;
					}
					$this->input->set_cookie('loginAdmin', $str, $expire);
					$this->loginUser = $member;
					add_option('loginadmin', array('id'=>$member['id'],'account'=>$member['account']));
					$res['code'] = 200;
					$res['data']['forward'] = site_url('/welcome');
				} else {
					$res['data']['error_message'] = '用户名或者密码不正确';
				}
				
			}		
			$this->json($res);
		}
		$this->display('login.html');
	}

	public function out() {
		$data = ['loginID'=>0];
		$this->session->set_userdata($data);
		$this->input->set_cookie('loginAdmin', '');
		redirect('/login');
	}
}