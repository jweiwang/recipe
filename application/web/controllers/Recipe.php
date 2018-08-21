<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipe extends MY_Controller {

	public function index($id)
	{
		if (!$id) show_404('未找到');
		$this->load->model('Recipe_model');
		$info = $this->Recipe_model->fetch_row(['id'=>$id,'is_del'=>0,'status'=>1],'*');
		$this->Recipe_model->operate_by_id($id, ['view_num'=>'view_num+1']);
		if (!$info) show_404('未找到');
		
		$this->config->load('seo', TRUE);
		$seo = $this->config->item('recipe', 'seo');
		$seo['title'] = str_replace("{title}",$info['title'],$seo['title']);
		$seo['description'] = str_replace("{ings}",$info['ings'],$seo['description']);
	
		$this->assign('seo',$seo);
		$this->assign('info',$info);
        $this->display('recipe.html');
	}

	public function like($id)
	{
		$res['code'] = 0;
		$res['data'] = [];
		$this->load->model('Recipe_model');
		$this->load->model('Recipe_like_model');
		$ip = ip_long();
		$count = $this->Recipe_like_model->count(['info_id'=>$id,'ip'=>$ip]);
		if ($count) {
			$res['code'] = 500;
		} else {
			$this->Recipe_model->operate_by_id($id, ['like_num'=>'like_num+1']);
			$data = [
				'info_id'=>$id,
				'created'=>$this->timestamp,
				'ip'=>$ip,
			];
			$this->Recipe_like_model->insert($data);
			$res['code'] = 200;
		}
		 $this->json($res);
	}
}
