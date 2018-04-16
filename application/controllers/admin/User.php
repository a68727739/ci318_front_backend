<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends Admin_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model(MODULE.'/User_model');
	}
	public function update_pass(){
		if(!empty($_POST)){
			$old_password=$this->input->post('old_password');
			$where=array(
				'password'=>$this->_password($old_password),
				'id'=>$_SESSION['user']['id']
			);
			$row=$this->User_model->old_password($where);
			if(empty($row)){
				echo '<script>alert("舊密碼錯誤");history.back();</script>';
				exit();
			}
			$new_password=$this->input->post('new_password');
			$data=array(
				'password'=>$this->_password($new_password)
			);
			$affected_rows=$this->User_model->update_pass($data);
			if(empty($affected_rows)){
				echo '<script>alert("修改失敗");history.back();</script>';
			}else{
				echo '<script>alert("修改成功");location.href="'.site_url(MODULE.'/'.C.'/'.M).'";</script>';
			}
			exit();
		}
		$this->load->view(MODULE.'/'.C.'/'.M);
	}
}
