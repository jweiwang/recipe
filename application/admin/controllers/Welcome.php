<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Moduels_model');
		$moduels = $this->loginUser['moduel_ids'] ? explode(',', $this->loginUser['moduel_ids']) : [-1];
		$where = ['id'=>$moduels,'is_menu'=>1];
		$menus = $this->Moduels_model->get_moduel_arr($where);

		if ($menus) {
			foreach ($menus as $k1=>$v1) {
				if ($v1['child'])
				foreach ($v1['child'] as $k2=>$v2) {
					if ($v2['child']) {
						foreach ($v2['child'] as $k3=>$v3) {
							$url = '/';
							if ($v3['directory']) $url .= $v3['directory'].'/';
							if ($v3['class']) $url .= $v3['class'].'/';

							if ($v3['index']) {
								$url .= $v3['index'];
							} elseif ($v3['method'] == '*'){
								$url .= 'index';
							} else if($pos = strpos($v3['method'],',')){
								$url .= substr($v3['method'],0,$pos);
							} else {
								$url .= $v3['method'];
							}
							$menus[$k1]['child'][$k2]['child'][$k3]['url'] = $url;
						}
					} else {
						$url = '/';
						if ($v2['directory']) $url .= $v2['directory'].'/';
						if ($v2['class']) $url .= $v2['class'].'/';

						if ($v2['index']) {
							$url .= $v2['index'];
						} elseif ($v2['method'] == '*'){
							$url .= 'index';
						} else if($pos = strpos($v2['method'],',')){
							$url .= substr($v2['method'],0,$pos);
						} else {
							$url .= $v2['method'];
						}
						$menus[$k1]['child'][$k2]['url'] = $url;
					}
				}
			}
		}
		//消息
		$this->load->model('Message_model');
		$message = $this->Message_model->db->select('count(1) as num')
											->from('w_message_read A')
											->join('w_message B','A.message_id=B.id')
											->where('B.is_del',0)
											->where('B.is_send',1)
											->where('A.del_time',0)
											->where('A.read_time',0)
											->where('A.member_id',$this->loginUser['id'])
											->get()->row_array();
		//配置信息
		$this->load->model('Configure_model');
		$configure = $this->Configure_model->fetch_field(['mtype'=>'website-config'],'configure');
		$configure = json_decode($configure,true);

		$this->assign('web_url',$configure['domain']);

		$this->assign('menus',$menus);
		$this->assign('message',$message);
        $this->display('welcome_message.html'); 
	}

	public function console(){
		$this->display('welcome_console.html'); 
	}
}
