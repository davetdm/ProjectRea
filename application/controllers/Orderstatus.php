<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orderstatus extends CI_Controller{
     
    public function __construct(){
        parent::__construct();
        $this->load->model('ProductModel');
    }
  
    public function index()
    {
        $data['title'] = ucfirst("Order Status");
        $data["assets"] = $this->config->item('assets');
       // $data['status'] = $this->ProductModel->getStatus(); 
        $data["page"] = "orderstatus";
        $this->load->view('orderstatus',$data);
    }

}