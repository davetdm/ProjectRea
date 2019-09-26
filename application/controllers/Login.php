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
           redirect('dashboard');
       
        }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('login');
    }
         print_r($sesdata);
    }
    public function dash_board($page = 'dashboard'){
       // $data['title'] = ucfirst("dashboard");
       // $data["assets"] = $this->config->item('assets');
        //$data['users'] = $this->WelcomeModel->getUser_Login(); 
        //$this->load->view("dashboard", $data);
        $id = $this->input->get('id');
        $result = $this->WelcomeModel->user_Login($id);
        $data = [
            "title" => "Dashboard",
            "assets" => $this->config->item('assets'),
            "result" => $result
        ];
       // $this->load->view("dashboard", $data);
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}