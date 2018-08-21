<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 选择数据库
 */
function get_db($group='default')
{
	static $db=array();
	if (!isset($db[$group])){
		$CI =& get_instance();
		$db[$group] = $CI->load->database($group, TRUE);
		$db_name = $group;
		$CI->$db_name = $db[$group];
	}
	return $db[$group];
}

/**
 * 返回加密串
 */
function get_key_val($val, $flag=FALSE)
{
	if (!$val)return '';
	if ($flag)
	{
		$md5 = substr($val, -32);
		$str = substr($val,0,-32);
		if ($md5 == md5(session_id().'@@!&))'.$str))
		{
			return $str;
		}
		else
		{
			return '';
		}
	}
	else
	{
		return $val.md5(session_id().'@@!&))'.$val);
	}
}

/**
 * 长类型ip
 */
function ip_long($ip='')
{
	$CI =& get_instance();
	return sprintf('%u', ip2long( $ip ? $ip : $CI->input->ip_address() ));
}

//返回制定key值的数组
function get_key_arr($arr,$key) {
	$r = [];
	foreach ($arr as $item) {
		$r[$item[$key]] = $item;
	}
	return $r;
}
//创建目录
function mkpath($path)
{
	!is_dir($path) && mkdir($path, 0777, TRUE);
}