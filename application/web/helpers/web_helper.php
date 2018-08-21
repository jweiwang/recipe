<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function get_page(){
	$CI =& get_instance();
	return max(1,$CI->input->get('page'));
}

function date_format_ch($timestamp){
	$ntime = time();
	$sec = $ntime - $timestamp;
	if ($sec < 60*30) {
		return '刚刚';
	} elseif ($sec < 60*60) {
		return '半小时前';
	} elseif ($sec < 60*60*24) {
		return '1小时前';
	} elseif ($sec < 60*60*24*7) {
		return '1天前';
	} elseif ($sec < 60*60*24*30) {
		return '1周前';
	} elseif ($sec < 60*60*24*365) {
		return '1月前';
	} else {
		return '1年前';	
	}
}