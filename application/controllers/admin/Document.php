<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Document extends Admin_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model(MODULE.'/Documentcate_model');
		$this->load->model(MODULE.'/Document_model');
	}
	// 列表
	public function index(){
		$data=array();
		$data['lists']=$this->Document_model->lists();
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
	}
	// 編輯
	public function edit(){
		$data=array();
		$id=$this->uri->segment(4,0);
		
		if(empty($id)){
			exit('參數非法');
		}
		$where=array('id'=>$id);
		if(!empty($_POST)){
			$affected_rows=$this->Document_model->edit($where);
			if(empty($affected_rows)){
				echo '<script>alert("修改數據失敗");history.back();</script>';
			}else{
				echo '<script>alert("修改數據成功");location.href="'.site_url(MODULE.'/'.C.'/index').'"</script>';
			}
			exit();
		}
		$data['row']=$this->Document_model->row($where);
		if(empty($data['row'])){
			exit('數據非法');
		}
		$data['documentcate']=$this->_cate_level($this->Documentcate_model->lists());
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
		//exit();
	}
	// 添加
	public function add(){
		$data=array();
		if(!empty($_POST)){
			$insert_id=$this->Document_model->add();
			if(empty($insert_id)){
				echo '<script>alert("添加數據失敗");history.back();</script>';
			}else{
				echo '<script>alert("添加數據成功");location.href="'.site_url(MODULE.'/'.C.'/'.M).'"</script>';
			}
			exit();
		}
		$data['documentcate']=$this->_cate_level($this->Documentcate_model->lists());
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
	}
	// 刪除
	public function del(){
		$id=$this->uri->segment(4,0);
		
		if(empty($id)){
			exit('參數非法');
		}
		$where=array('id'=>$id);
		$affected_rows=$this->Document_model->del($where);
		if(empty($affected_rows)){
			echo '<script>alert("刪除數據失敗");history.back();</script>';
			exit();
		}
		redirect(MODULE.'/'.C.'/index');
	}
}
