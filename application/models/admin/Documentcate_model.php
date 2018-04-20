<?php
defined('BASEPATH') || exit('NO direct script access allowed');
class Documentcate_model extends MY_Model{
	private $t='documentcate';
	// 列表
	public function lists($where=array(),$select=array()){
		return $this->db->select($select)->order_by('pid ASC, sort ASC,id ASC')->get_where($this->t,$where)->result_array();
	}
	// 獲取子分類
	public function get_child_cate($id=0){
		if(empty($id)){
			return FALSE;
		}
		$lists=$this->lists(array(),array('id','pid'));
		return $this->get_child_cate_id($lists,$id);
	}
	// 
	private function get_child_cate_id($data,$id){
		$array=array();
		foreach($data as $k=>$v){
			if($v['pid']==$id){
				$array[]=$v['id'];
				$array=array_merge($array,$this->get_child_cate_id($data,$v['id']));
			}
		}
		return $array;
	}
	// 查詢一條數據
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
		$this->db->update($this->t,$data,$where);
		return $this->db->affected_rows();
	}
	// 添加
	public function add(){
		$data=$this->_get_data($this->t);
		if(empty($data)){
			return 0;
		}
		$this->db->insert($this->t,$data);
		//p($data);
		return $this->db->insert_id();
	}
	// 刪除
	public function del($id=array()){
		if(empty($id)){
			return 0;
		}
		$this->db->where_in('id',$id)->delete($this->t);
		return $this->db->affected_rows();
	}
	
}
