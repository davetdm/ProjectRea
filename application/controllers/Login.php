<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

   public function __construct() 
   {
       parent::__construct();
       // $this->load->helper('url', 'form');
       // $this->load->form();
   }
    public function index($page = "login")
    {
      $data['title'] = ucfirst($page);
      $data["assets"] = $this->config->item('assets');
      $data["page"] = "login";
       $this->load->view($page, $data);
    }
    public function userLogin()
    {
        $email = $this->input->post('email',TRUE);
        $password =Sha1($this->input->post($this->salt.'password1',TRUE));
        $result = $this->WelcomeModel->user_Login($email,$password);
       // $encryptpass = $this->encryption->sha1($salt.$password);

        if($result->num_rows() > 0)
        {
          $data  = $result->row_array();
          $email = $data['email'];
          $password = $data['password'];
          $sesdata = array(
            'email'  => $email,
            'password'  => $password,
            'is_online' => TRUE
        );
           // echo "login successful";
          $this->session->set_userdata($sesdata);
          redirect('dashboard');
       
        }else{
          echo $this->session->set_flashdata('msg','email or Password is Wrong');
          redirect('login');
        }
         print_r($sesdata);
    }  
  
    public function logout()
    {
      $this->session->sess_destroy();
      redirect('login');
    }
    public function forgotPass()
    {
      $email = $this->input->post('email');
       // $result = $this->WelcomeModel->forgotPassword($email);
      $data = [
        "title" => "Forgot Password",
        "assets" => $this->config->item('assets'),
        "page" => "forgot_password",
          //  "users" => $result
        ];
        $this->load->view('forgot_password', $data);
        
       // if ($result) {
       // $this->WelcomeModel->sendpassword($result);
       // } else {

       //   $this->session->set_flashdata('msg', 'Email not found!');

       // }
    }
    public function login(){
        $data['title'] = ucfirst("Login / Register");
        $data["assets"] = $this->config->item('assets');
        $data["page"] = "new";
        $data['cartItems'] = $this->ProductModel->getItems(); 
        $this->load->view("new", $data);
        
    }
    public function change(){
      $data['title'] = ucfirst('Change Passwword');
      $data['assets'] = $this->config->item('assets');
      $data['page'] = 'change_password';
      $this->load->view('change_password', $data);

      $oldPass=$this->input->post('old_password');
      $newPass=$this->input->post('password1');
      $rePass=$this->input->post('cPassword');

    }

}