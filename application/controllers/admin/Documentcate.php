<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Documentcate extends Admin_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model(MODULE.'/Documentcate_model');
	}
	public function add(){
		if(!empty($_POST)){
			$insert_id=$this->Documentcate_model->add();
			// exit($insert_id);
		}
		// p($_POST);
		$this->load->view(MODULE.'/'.C.'/'.M);
	}
}
