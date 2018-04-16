<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function p($data=NULL){
	if(empty($data)){
		return FALSE;
	}
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}
