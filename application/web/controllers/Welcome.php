<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
		$this->load->model('Recipe_model');
		$page = get_page();
		$pagesize = 20;
		$where = ['is_del'=>0,'status'=>1];
		$list = $this->Recipe_model->fetch_page($page, $pagesize, $where, '*', 'update_time desc,id desc');
		if ($list['count']) {
			foreach ($list['rows'] as $key=>$item) {
				$item['update_time'] = date_format_ch($item['update_time']);
				$item['id_key'] = get_key_val($item['id']);
				$list['rows'][$key] = $item;
			}
		}

		$list['next_page'] = $page*$pagesize < $list['count'] ? $page + 1 : 0;
		$this->config->load('seo', TRUE);
		$seo = $this->config->item('index', 'seo');
		$this->assign('seo',$seo);
		$this->assign('list',$list);
        $this->display('index.html');
	}
}
