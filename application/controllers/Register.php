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
        $data["page"] = "register";
        $this->load->view($page, $data);
        //$this->load->view("myscript");
    }
    public function register_user()
    {
       // $encryptpass = $this->encryption->sha1($salt.'password');
        $data=array(
            'first_name'=>$this->input->post('first_name'),
            'surname'=>$this->input->post('surname'),
            'email'=>$this->input->post('email'),
            'type'=>$this->input->post('userName'),           
            'is_online'=> false,
            'password'=>Sha1($this->input->post('password1')),
            'phone_number'=>$this->input->post('phone_number')
            );
           // print_r($data);
       // $result = $this->WelcomeModel->registerUser($data);
       // if ($result == true){
        //    echo "registration successful";
        //    redirect('login');
       // } else {
        //    var_dump($result);
      //  }

        if($this->WelcomeModel->registerUser($data)){
                
            if($this->WelcomeModel->sendEmail($this->input->post('email')))
            {
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">
                Successfully registered. Please confirm the mail that has been sent to your email. </div>');               
            }else
            {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">
                Failed!! Please try again.</div>');
                
            }
        } 
        $email = $this->input->post('email');
        $exists = $this->WelcomeModel->forgot_pass($email);

        $count = count($exists);
        if (empty($count)) 
        {
            return true;
        } else {
            return false;
        }   
    }
    public function confirmEmail($hashcode){
        if($this->WelcomeModel->verifyEmail($hashcode)){
            $this->session->set_flashdata('verify', '<div class="alert alert-success text-center">
            Email address is confirmed. Please login to the system</div>');
            redirect('login');
        }else{
            $this->session->set_flashdata('verify', '<div class="alert alert-danger text-center">
            Email address is not confirmed. Please try to re-register.</div>');
            redirect('login');
        }
    }
    public function filename_exists()
    {
        $email = $this->input->post('email');
        $exists = $this->WelcomeModel->forgot_pass($email);

        $count = count($exists);
        if (empty($count)) 
        {
            return true;
        } else {
            return false;
        }
    }

}