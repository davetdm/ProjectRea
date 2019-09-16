<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->helper('url', 'form');
        // $this->load->form();    
    }
    
	public function index($page = "login")
	{
        $data['title'] = ucfirst($page);
        $data["assets"] = $this->config->item('assets');
		$this->load->view($page, $data);
    }
    public function userLogin()
    {
        $user_login=array(  
        'type'=>$this->input->post('userName'),
        'password'=>md5($this->input->post('password1'))); 

        $data['users']=$this->WelcomeModel->userLogin();
       
            $this->session->set_userdata('id',$data['users'][0]['id']);
            $this->session->set_userdata('type',$data['users'][0]['type']);
            $this->session->set_userdata('email',$data['users'][0]['email']);
            $this->session->set_userdata('first_name',$data['users'][0]['first_name']);
            $this->session->set_userdata('surname',$data['users'][0]['surname']);
            $this->session->set_userdata('phone_number',$data['users'][0]['phone_number']);
            echo $this->session->set_userdata('id'); 
    }
    
}