<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Acl
{
	public function acl()
	{
		$CI =& get_instance();
		$loginID = (int)get_key_val($CI->session->userdata('loginID'), TRUE);
		$CI->timestamp = time();
		$directory = trim($CI->router->fetch_directory(), '/');
		$class  = $CI->router->fetch_class();
		$method = $CI->router->fetch_method();
		if ( $class == 'login' || $directory == 'crond'){
			return;
		}
		
		if(!$loginID){
			$loginID = get_loginid_by_cookie();
		}
		if (!$loginID ){
			$this->login();
		}

		$CI->load->model('Members_model');
		$CI->loginUser = $CI->Members_model->get_info_by_id($loginID);
		if ($CI->loginUser['group_id']) {
			$CI->load->model('Moduels_group_model');
			$CI->loginUser['moduel_ids'] = $CI->Moduels_group_model->fetch_field(['id'=>$CI->loginUser['group_id']],'moduel_ids');
		}
	
		$CI->ci_smarty->assign('loginUser',$CI->loginUser);
	
		//权限判断
		$CI->load->model('Moduels_model');
		$list = $CI->Moduels_model->fetch_rows(['class'=>$class]);
		$moduel_ids = [];
		foreach($list as $item){
			if ($item['directory'] == $directory && $item['class'] == $class){
				if($item['method'] == $method || strpos(','.$item['method'].',', ','.$method.',')!==false ){
					$moduel_ids[] = $item['id'];
				}
			}
		}
		//没有匹配成功则*号匹配
		if (count($moduel_ids)==0){
			foreach($list as $item){
				if ($item['directory'] == $directory && $item['class'] == $class && $item['method'] == '*')
				{
					$moduel_ids[] = $item['id'];
				}
			}
		}
		$flag = FALSE;
		foreach($moduel_ids as $moduel_id)
		{
			if (isset($CI->loginUser['moduel_ids']) && $CI->loginUser['moduel_ids'] && strpos(','.$CI->loginUser['moduel_ids'].',', ','.$moduel_id.',')!==false){
				$flag = TRUE;
				break;
			}
		}
		if(($class == 'welcome' && $method == 'index')){
			
		}else{
			if (!$flag){
				show_error('您没有权限使用此功能',  200, '系统提示');
			}
		}
		
	}
	
	private function login()
	{
		$CI =& get_instance();
		if ($CI->input->is_ajax_request())
		{
			$res = array(
					'code'=>500,
					'data'=>array('error_message'=>'您的登陆已失效，请重新登陆！'),
			);
			echo json_encode($res);
			exit;
		}
		redirect('/login');
	}
}