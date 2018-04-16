<?php
defined('BASEPATH') || exit('NO direct script access allowed');
class User_model extends CI_Model{
	private $t='user';
	// 修改密碼
	public function old_password($where=array()){
		if(empty($where)){
			return FALSE;
		}
		return $this->db->select('id')->get_where($this->t,$where)->row_array();
	}
	public function update_pass($data){
		if(empty($data)){
			return FALSE;
		}
		$where=array('id'=>$_SESSION['user']['id']);
		$this->db->update($this->t,$data,$where);
		return $this->db->affected_rows();
	}
	public function login($where=array()){
		if(empty($where)){
			return $array();
		}
		return $this->db->get_where($this->t,$where)->row_array();
	}
}
