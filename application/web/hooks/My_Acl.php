<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Acl
{
	public function acl()
	{
		$CI =& get_instance();
		
		$CI->timestamp = time();
		$directory = trim($CI->router->fetch_directory(), '/');
		$class  = $CI->router->fetch_class();
		$method = $CI->router->fetch_method();
		/*
		$loginID = (int)get_key_val($CI->session->userdata('loginID'), TRUE);
		if(!$loginID){
			$loginID = get_loginid_by_cookie();
		}
		if (!$loginID ){
			$this->login();
		}
		*/
		
		$CI->load->model('Configure_model');
		$CI->configure = $CI->Configure_model->fetch_field(['mtype'=>'website-config'],'configure');
		if ($CI->configure) {
			$CI->configure = json_decode($CI->configure,true);
			$CI->ci_smarty->assign('configure',$CI->configure);
		}

	}
}