<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends Admin_Controller{
	public function index(){
		$this->load->view(MODULE.'/'.C.'/'.M);
	}
	public function right(){
		$this->load->view(MODULE.'/'.C.'/'.__FUNCTION__);
	}
	// 退出
	public function login_out(){
		if(!empty($_SESSION['user'])){
			unset($_SESSION['user']);
			$_SESSION['user']=NULL;
		}
		echo '<script>top.location.href="'.site_url('admin/login').'"</script>';
		exit();
	}
}
