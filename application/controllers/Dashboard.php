<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();  
        $this->load->helper('url');
    }
    
	public function index($page = "dashboard")
	{
        $id = $this->input->get('id');
        $result = $this->WelcomeModel->dashboard($id);
        $data = [
            "title" => "Dashboard",
            "assets" => $this->config->item('assets'),
            "page" => "dashboard",
            "users" => $result
        ];
		$this->load->view($page, $data);
    }
    
} 
