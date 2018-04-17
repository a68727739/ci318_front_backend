<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Documentcate extends Admin_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model(MODULE.'/Documentcate_model');
	}
	
	// 分類列表
	public function index(){
		$data=array();
		$data['lists']=$this->_cate_level($this->Documentcate_model->lists());
		//p($data['lists']);
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
		
	}
	// 編輯
	public function edit(){
		$data=array();
		$id=$this->uri->segment(4,0);
		if(empty($id)){
			echo '<script>alert("參數非法");history.back();</script>';
			exit();
		}
		$where=array('id'=>$id);
		if(!empty($_POST)){
			$affected_rows=$this->Documentcate_model->edit($where);
			if(empty($affected_rows)){
				echo '<script>alert("修改失敗");history.back();</script>';
			}else{
				echo '<script>alert("修改成功");location.href="'.site_url(MODULE.'/'.C.'/index').'";</script>';
			}
			exit();
		}
		$data['row']=$this->Documentcate_model->row($where);
		if(empty($data['row'])){
			echo '<script>alert("數據非法");history.back();</script>';
			exit();
		}
		//p($row);
		$where=array('id !='=>$id);
		$data['lists']=$this->_cate_level($this->Documentcate_model->lists($where));
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
	}
	// 添加分類
	public function add(){
		$array=array();
		if(!empty($_POST)){
			$insert_id=$this->Documentcate_model->add();
			// exit($insert_id);
			if(empty($insert_id)){
				echo '<script>alert("添加分類失敗");history.back();</script>';
			}else{
				echo '<script>alert("添加分類成功");history.href="'.site_url(MODULE.'/'.C.'/'.M).'"</script>';
			}
		}
		// p($_POST);
		$data['lists']=$this->_cate_level($this->Documentcate_model->lists());
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
	}
	// 刪除
	public function del(){
		$id=$this->uri->segment(4,0);
		if(empty($id)){
			echo '<script>alert("參數非法");history.back();</script>';
			exit();
		}
		$where=array('id'=>$id);
		$affected_rows=$this->Documentcate_model->del($where);
		if(empty($affected_rows)){
			echo '<script>alert("刪除失敗");history.back();</script>';
			exit();
		}
		redirect(MODULE.'/'.C.'/index');
		
	}
	
}
