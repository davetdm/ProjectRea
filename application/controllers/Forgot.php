<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
	public function index($page = 'forgot_password')
	{
        $data['title'] = ucfirst($page);
        $data["assets"] = $this->config->item('assets');
		$this->load->view($page, $data);
    }
    public function forgotPass()
    {
        $email = $this->input->post('email');
        $result = $this->WelcomeModel->ForgotPassword($email);
        $this->load->view('forgot_password');
        if ($result) {
        $this->WelcomeModel->sendpassword($result);
        } else {

          $this->session->set_flashdata('msg', 'Email not found!');

        }

    }
    
}   