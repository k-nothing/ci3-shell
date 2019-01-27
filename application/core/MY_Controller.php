<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller{
	var $language;
	var $base_url;
    function __construct() {
        parent::__construct();
//		$this->load->helper('url','cookie');
//		$this->load->libraries('session');
		//---
		$this->base_url = base_url();

		$this->load->helper('cookie');
		$this->language = (get_cookie('lang') != "") ? get_cookie('lang') : $this->config->item('language');
		$this->lang->load('engine', $this->language);
    }
}