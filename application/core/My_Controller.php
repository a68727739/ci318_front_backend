<?php
defined('BASEPATH') || exit('NO direct script access allowed');
class Admin_Controller extends MY_Controller{
	public function __construct(){
		parent::__construct();
		// 判斷用戶是否登入
		if(empty($_SESSION['user'])){
			echo '<script>top.location.href="'.site_url(MODULE.'/login/index').'";</script>';		
			exit();
		}
	}
	// 分類級別
	protected function _cate_level($data,$pid=0,$level=1){
		$array=array();
		foreach($data as $k=>$v){
			if($v['pid']==$pid){
				$v['level']=$level;
				$array[]=$v;
				unset($data[$k]);
				$array=array_merge($array,$this->_cate_level($data,$v['id'],$level+1));
			}
		}
		return $array;
	}
}
class My_Controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		session_start();
		define('PUB','public');
		define('MODULE','admin');
		define('C',$this->uri->segment(2,'main'));
		define('M',$this->uri->segment(3,'index'));
	}
	// 密碼加密
	protected function _password($pass){
		return md5(md5($pass).'ci');
	}
	protected function _captcha(){
		$this->load->helper('captcha');
		$_SESSION['verify']=rand(10000,99999);
		$config=array(
			'word'      => $_SESSION['verify'],
			'img_path'  => './'.PUB.'/captcha/',
			'img_url'   => base_url('public/captcha'),
			'font_path' => './system/fonts/texb.ttf',
			'img_width' => '150',
			'img_height'    => 30,
			'expiration'    => 7200,
		);
		$captcha=create_captcha($config);
		return $config['img_url'].'/'.$captcha['filename'];
		//print_r($captcha);
	}
}
