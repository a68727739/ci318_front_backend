<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends MY_Controller{
	public function index(){
		
		$data=array();
		
		if(!empty($_POST)){
			$username=$this->input->post('username',NULL);
			$password=$this->input->post('password',NULL);
			$verify=$this->input->post('verify',NULL);
			// p($_SESSION['verify']);
			// p($verify);
			// die();
			if(empty($username)||empty($password)||empty($verify)){
				echo '<script>alert("用戶名,密碼,和驗證碼都不能為空");history.back()</script>';
				exit();
			}
			if($verify != $_SESSION['verify']){
				echo '<script>alert("驗證碼不正確");history.back()</script>';
				exit();
			}
			
			$this->load->model(MODULE.'/User_model');
			$where=array(
				'username'=>$username,
				'password'=>$this->_password($password)
			);
			// p($where);exit();
			$user=$this->User_model->login($where);
			if(empty($user)){
				echo '<script>alert("用戶名或者密碼錯誤");history.back()</script>';
				exit();
			}
			if(empty($user['status'])){
				echo '<script>alert("你已經被禁用,請聯繫管理員");history.back()</script>';
				exit();
			}
			unset($_SESSION['verify']);
			$_SESSION['verify']=NULL;
			$_SESSION['user']=$user;
			// p($_SESSION['user']);
			// die();
			redirect(MODULE.'/main/index');
			exit();
			
			// p($_POST);
			//  p($_SESSION['verify']);
		}
		$data['captcha']=$this->_captcha();
		// p($_SESSION['verify']);
		//exit($captcha);
		$this->load->view(MODULE.'/user/login',$data);
	}
	public function captcha(){
		if(empty($this->input->get('i',NULL))){
			exit();
		}
		echo $this->_captcha();
	}
}
