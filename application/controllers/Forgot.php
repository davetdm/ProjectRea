<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->helper('url');
       // $this->load->form();
    }
    
	public function index($page = "forgot_password")
	{
        $data['title'] = ucfirst($page);
        $data["assets"] = $this->config->item('assets');
        $this->load->view($page, $data);
       
    }
}   