<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Moduels_model extends Base_Model {
    
    protected $mTable = 'w_moduels';
    protected $mPkId = 'id';

    public function get_moduel_arr($where = []) {
        $result = [];
        $arr = $this->fetch_rows($where,'*', 'sort asc,id asc');
        if ($arr) {
        	$level1 = $level2 = $level3 = [];
            foreach ($arr as $item) {
                if ($item['level'] == 3) {
                    $level3[$item['id']] = $item;
                } else if($item['level'] == 2) {
                	$level2[$item['id']] = $item;
                } else if($item['level'] == 1) {
                	$level1[$item['id']] = $item;
                }
            }
            if ($level3)
            foreach ($level3 as $key=>$row) {
           		$level2[$row['parent_id']]['child'][$row['id']] = $row;
           	}
           	 if ($level1)
           	foreach ($level1 as $row) {
           		$result[$row['id']] = $row;
           	}
           	if ($level2)
           	foreach ($level2 as $row) {
           		$result[$row['parent_id']]['child'][$row['id']] = $row;
           	}
        }
        return $result;
    }

    
}