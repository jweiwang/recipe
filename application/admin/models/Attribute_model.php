<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Attribute_model extends Base_Model {

  protected $mTable = 'w_attribute';
  protected $mPkId = 'id';

  public function get_child($arr) {
    foreach ($arr as $item) {
      $arr[$item['parent_id']]['son'][$item['id']] = &$arr[$item['id']];
    } 
    return isset($arr[0]['son']) ? $arr[0]['son'] : array();
  }

  public function get_parent($arr,$id){
    $list = [];  
    foreach ($arr as $v) {  
      if ($v['id'] == $id) {
        if ($v['parent_id'] > 0) {
          $list = array_merge($list,$this->get_parent($arr,$v['parent_id']));  
        }  
        $list[] = $v; 
      }  
    }  
    return $list;  
  }
}