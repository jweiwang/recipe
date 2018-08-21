<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

$config['cache_lifetime'] = 60;
$config['caching'] = false;
$config['template_dir'] = APPPATH .'views';
$config['compile_dir'] = APPPATH .'tmp/smarty/admin/template_c';
$config['cache_dir'] = APPPATH . 'tmp/smarty/admin/cache';
$config['config_dir'] = APPPATH . 'tmp/smarty/admin/config';
$config['use_sub_dirs'] = false; 
$config['left_delimiter'] = '{';
$config['right_delimiter'] = '}';


