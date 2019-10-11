<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_Password extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        
    }
	public function index($page = "forgot_password")
	{
        $email = $this->input->post('email');
       // $result = $this->WelcomeModel->forgotPassword($email);
        $data = [
            "title" => "Forgot Password",
            "assets" => $this->config->item('assets'),
            "page" => "forgot_password",
          //  "users" => $result
        ];
        $this->load->view($page, $data);
        
       // if ($result) {
       // $this->WelcomeModel->sendpassword($result);
       // } else {

       //   $this->session->set_flashdata('msg', 'Email not found!');

       // }
    }
    
}