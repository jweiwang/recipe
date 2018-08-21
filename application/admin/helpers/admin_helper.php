<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 登录信息
 */
function get_loginid_by_cookie()
{
	$CI =& get_instance();
	$loginID = 0;
	$loginAdmin = $CI->input->cookie('loginAdmin');
	if ($loginAdmin) {
		$strmd5 = substr($loginAdmin, 0, 32);
		$str = substr($loginAdmin,32);
		if (md5($_SERVER['HTTP_USER_AGENT'].$CI->input->ip_address().$str) == $strmd5) {
			$loginID = (int)$str;
		}
	}
	return $loginID;
}

/**
 * 操作日志
 */
function add_option($type,$content)
{
	$CI =& get_instance();
	$options = array(
			'type'=>$type,
			'content'=>json_encode($content),
			'create_name'=>$CI->loginUser['account'],
			'create_id'=>$CI->loginUser['id'],
			'created'=>$CI->timestamp,
			'ip'=>ip_long($CI->input->ip_address())
	);

	$CI->load->model('Options_model');
	return $CI->Options_model->insert($options);
}

function get_page(){
	$CI =& get_instance();
	return max(1,$CI->input->get('page'));
}