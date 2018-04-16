<?php
defined('BASEPATH') || exit('NO direct script access allowed');
class Documentcate_model extends MY_Model{
	private $t='documentcate';
	public function add(){
		$data=$this->_get_data($this->t);
		if(empty($data)){
			return 0;
		}
		$this->db->insert($this->t,$data);
		//p($data);
		return $this->db->insert_id();
	}
	
}
