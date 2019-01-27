<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index(){
		$data = array();
		$data['lang']=array('english'=>'el_en','german'=>'el_de');
		//---
		$this->load->view('welcome_message', $data);
	}
}
