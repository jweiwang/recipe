<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Recipe extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Recipe_model");
		$this->sids = [
			1=>[
				'name'=>'下厨房',
				'url'=>'http://www.xiachufang.com/recipe/{var}/'
			],
			2=>[
				'name'=>'天天美食',
				'url'=>'http://www.ttmeishi.com/CaiPu/{var}.htm'
			],
			3=>[
				'name'=>'豆果美食',
				'url'=>'http://www.douguo.com/cookbook/{var}.html'
			],
			4=>[
				'name'=>'美食天下',
				'url'=>'https://home.meishichina.com/recipe-{var}.html'
			],
		];
		$this->baidu_search = 'http://image.baidu.com/search/index?lm=-1&tn=baiduimage&ct=201326592&cl=2&word={var}&istype=2&k1=%E7%8E%A9%E5%84%BF&lmm=-1&site=';
	}

	public function index() {
		$ver = $this->input->get();
		$where = [];
		if(isset($ver['category']) && $ver['category'] && isset($ver['category_val']) && $ver['category_val']) {
			$where[$ver['category'].' like '] = '%'.$ver['category_val'].'%';
		}
		if(isset($ver['status']) && $ver['status']) {
			if ($ver['status'] == 1) {
				$where['status'] = 1;
			} else {
				$where['status'] = 0;
			}
		}
		if(isset($ver['date_start']) && $ver['date_start']) {
			$where['update_time >='] = strtotime($ver['date_start']);
		}
		if(isset($ver['date_end']) && $ver['date_end']) {
			$where['update_time <='] = strtotime($ver['date_end'].' 23:59:59');
		}
		$where['is_del'] = 0;
		$page = get_page();
		$pagesize = $this->input->get('pagesize') ? $this->input->get('pagesize') : 10;
		$result = $this->Recipe_model->fetch_page($page,$pagesize,$where,'*','id desc');

		if ($result['count']) {
			foreach ($result['rows'] as $key=>$item) {
				$item['sname'] = $this->sids[$item['sid']]['name'];
				$item['surl'] = str_replace('{var}',$item['skey'],$this->sids[$item['sid']]['url']);
				$item['baidu_url'] = str_replace('{var}',$item['title'],$this->baidu_search);
				$result['rows'][$key] = $item;
			}
		} 

		$this->assign('result',$result);
		$this->assign('ver',$ver);

		$this->display('recipe/index.html');
	}

	public function add() {
		if ($this->input->is_ajax_request()) {
			$res['code'] = 0;
			$res['data'] = [];
			$data = [
				'title'=>$this->input->post('title'),
				'img'=>$this->input->post('img'),
				'ings'=>$this->input->post('ings'),
				'steps'=>$this->input->post('steps',false,false),
			];
			$id = (int)$this->input->post('id');
			if ($id) {
				
				if ($this->Recipe_model->update_by_id($id,$data)) {
					$res['code'] = 200;
					add_option('edit_recipe', array('id'=>$id));
				}
			} else {
				$data['skey'] = $this->timestamp;
				if ($id = $this->Recipe_model->insert($data)) {
					$res['code'] = 200;
					add_option('add_recipe', array('id'=>$id));
				}
			}
			$this->json($res);
		}
		$id = (int)$this->input->get('id');
		$info = [];
		if ($id) {
			$info =  $this->Recipe_model->get_info_by_id($id,'*');
		}
		$this->assign('info',$info);
		$this->display('recipe/add.html');
	}

	

	
	public function del(){
		$res['code'] = 0;
		$res['data'] = [];
		$ids = $this->input->post('ids');
		if ($ids) {
			$ids = explode(",",$ids);
			foreach ($ids as $id) {
				$data['is_del'] = 1;
				if ($this->Recipe_model->update_by_id($id,$data)) {
					$res['code'] = 200;
					add_option('del_recipe', array('id'=>$id));
				}
			}
		}
		$this->json($res);
	}

	public function send(){
		$res['code'] = 0;
		$res['data'] = [];
		$ids = $this->input->post('ids');
		if ($ids) {
			$ids = explode(",",$ids);
			foreach ($ids as $id) {
				$data['status'] = 1;
				$data['update_time'] = $this->timestamp;
				if ($this->Recipe_model->update_by_id($id,$data)) {
					$res['code'] = 200;
					add_option('status_recipe', array('id'=>$id));
				}
			}
		}
		$this->json($res);
	}

	
}