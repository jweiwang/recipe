<?php if (!defined('BASEPATH')) exit('No direct access allowed.'); 
class MY_Controller extends CI_Controller { 
    public function __construct() { 
        parent::__construct(); 
    } 
 
    public function assign($key,$val) { 
        $this->ci_smarty->assign($key,$val); 
    } 
 
    public function display($html) { 
        $this->ci_smarty->display($html); 
    } 
    public function json($data){
		echo json_encode($data);
		exit;
    }
}
