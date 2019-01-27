<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Engine extends MY_Controller
{
    public function __construct() {
        parent::__construct();//
    }

    public function switch_language($language = "") {
        $language = ($language != "") ? $language : "english";
        $this->session->set_userdata('site_lang', $language);
		set_cookie($name = 'lang', $value = $language, $expire = '86500');
        //---
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function switch_skin($skin = "") {
        $skin = ($skin != "") ? $skin : "default";
        $this->session->set_userdata('skin', $skin);
		set_cookie($name = 'skin', $value = $skin, $expire = '86500');
        //---
        redirect($_SERVER['HTTP_REFERER']);
    }
}