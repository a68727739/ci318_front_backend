<?php
defined('BASEPATH') || exit('NO direct script access allowed');
class MY_Model extends CI_Model{
	
	protected function _get_data($t=NULL){
		if(empty($t)){
			return array();
		}
		$result=$this->db->query('DESC '.$this->db->dbprefix($t))->result_array();
		// p($result);
		$field=array();
		foreach($result as $v){
			if($v['Field']=='id'){
				continue;
			}
			$fields[]=$v['Field'];
		}
		$data=array();
		foreach($_POST as $k => $v){
			if(in_array($k,$fields)){
				$data[$k]=$this->input->post($k);
			}
		}
		return $data;
		//p($data);
	}
}
