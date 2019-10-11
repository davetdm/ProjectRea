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
       $data["page"] = "login";
        $this->load->view($page, $data);
   }
   public function userLogin()
   {
       $type = $this->input->post('userName',TRUE);
       $password =Sha1($this->input->post($this->salt.'password1',TRUE));
       $result = $this->WelcomeModel->user_Login($type,$password);
      // $encryptpass = $this->encryption->sha1($salt.$password);
       if($result->num_rows() > 0){
           $data  = $result->row_array();
           $type = $data['type'];
           $password = $data['password'];
           $sesdata = array(
               'userName'  => $type,
               'password'  => $password,
               'is_online' => TRUE
           );
          // echo "login successful";
          $this->session->set_userdata($sesdata);
          redirect('login/dash_board');
       }else{
       echo $this->session->set_flashdata('msg','Username or Password is Wrong');
       redirect('login');
   }
        print_r($sesdata);
   }
   public function dash_board($page = 'dashboard'){
       $id = $this->input->get('id');
       $result = $this->WelcomeModel->dashboard($id);
       $data = [
           "title" => "Dashboard",
           "assets" => $this->config->item('assets'),
           "page" => "dashboard",
           "users" => $result
       ];
       $this->load->view("dashboard", $data);
   }
   public function logout(){
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
}