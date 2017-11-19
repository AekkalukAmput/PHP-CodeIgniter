<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller {
   function __construct()
	{
        parent::__construct();

	}
    function index() {

        $this->load->model('sql_model');                              
        $data['person'] = $this->sql_model->select("SELECT * FROM personel_info Inner Join personel_title ON personel_title.title_id = personel_info.title_id");

        $this->template->set('title', 'หน้าแรกของเว็บไซต์');
        $data['age'] = 17;

        $this->template->load('template_default', 'home_view', $data);
    }

}
