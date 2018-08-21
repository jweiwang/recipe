<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Recipe_model");
		$this->Recipe_model->db->save_queries = FALSE;
	}

	public function index() {
		$page = 1;
		while(true) {
			$result = $this->Recipe_model->db->select('id,steps')->from('w_recipe')->where('id >',135344)->limit(1000,($page-1)*1000)->get()->result_array();
			if (!$result) break;

			foreach ($result as $item) {
				$html = '';
				$item['steps'] = str_replace("\r", "", $item['steps']);
				$steps = [];
				$steps = explode("\n",$item['steps']);
				foreach ($steps as $row) {
					if ($row)
					$html = $html.'<p>'.$row.'</p>'."\n";
				}
				echo $item['id']."\r\n";
				$this->Recipe_model->db->where('id',$item['id'])->set('steps',$html)->update('w_recipe');
			}
			unset($result);
			$page++;
		}
	}
}