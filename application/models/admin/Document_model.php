<?php
defined('BASEPATH') || exit('NO direct script access allowed');
class Document_model extends My_Model{
	private $t='document';
	// 列表
	public function lists(){
		return $this->db->order_by('sort ASC,id DESC')->get($this->t)->result_array();
	}
	// 查詢一條紀錄
	public function row($where=array()){
		if(empty($where)){
			return array();
		}
		return $this->db->get_where($this->t,$where)->row_array();
	}
	// 編輯
	public function edit($where=array()){
		if(empty($where)){
			return 0;
		}
		$data=$this->_get_data($this->t);
		if(empty($data)){
			return 0;
		}
		$data['addtime']=empty($data['addtime'])?time():strtotime($data['addtime']);
		$this->db->update($this->t,$data,$where);
		return $this->db->affected_rows();
	}
	// 添加
	public function add(){
		$data=$this->_get_data($this->t);
		$data['addtime']=empty($data['addtime']) ? time() : strtotime($data['addtime']);
		$this->db->insert($this->t,$data);
		return $this->db->insert_id();
	}
	// 刪除
	public function del($where=array()){
		if(empty($where)){
			return 0;
		}
		$this->db->delete($this->t,$where);
		return $this->db->affected_rows();
	}
}
