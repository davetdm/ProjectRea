<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->helper('url');
       // $this->load->form();
    }
    
	public function index($page = "register")
	{
        $data['title'] = ucfirst($page);
        $data["assets"] = $this->config->item('assets');
        $this->load->view($page, $data);
        //$this->load->view("myscript");
    }
    public function register_user()
    {
        $data=array(
            'first_name'=>$this->input->post('first_name'),
            'surname'=>$this->input->post('surname'),
            'type'=>$this->input->post('userName'),
            'email'=>$this->input->post('email'),
            'is_online'=> false,
            'password'=>md5($this->input->post('password1')),
            'phone_number'=>$this->input->post('phone_number')
            );
            print_r($data);
        $result = $this->WelcomeModel->registerUser($data);
        if ($result == true){
            echo "registration successful";
        } else {
            var_dump($result);
        }

    }

}