<?php
defined('BASEPATH') || exit('NO direct script access allowed');
class Document_model extends My_Model{
	private $t='document';
	// 列表
	public function lists($limit=2,$offset=0,$where=array(),$like=array()){
		$this->db->select($this->t.'.*,'.$this->t.'cate.name AS cate_name');
		$this->db->where($where);
		if(!empty($like)){
			$this->db->like($like);
		}
		
		$this->db->order_by($this->t.'cate_id ASC,'.$this->t.'.sort ASC,'.$this->t.'.id DESC');
		$this->db->limit($limit,$offset);
		$this->db->join($this->t.'cate',$this->t.'.'.$this->t.'cate_id='.$this->t.'cate.id','LEFT');
		$query=$this->db->get($this->t);
		//p($this->db->last_query());
		
		$result=$query->result_array();
		return $result;

	}
	//總條數
	public function total_rows($where=array(),$like=array()){
			
		$this->db->where($where);
		if(!empty($like)){
			$this->db->like($like);
		}
		
		$row=$this->db->select('COUNT(id) AS total')->get($this->t)->row_array();
		if(empty($row)){
			return 0;
		}
		// p($this->db->last_query());
		return $row['total'];
		// $query=$this->db->get($this->t);
		// $result=$query->result_array();
		
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
	public function del($where=array(),$id=array()){
		if(empty($where)){
			$this->db->where_in('id',$id)->delete($this->t);
		}else{
			$this->db->where($where)->delete($this->t);
		}
		
		return $this->db->affected_rows();
	}
}
