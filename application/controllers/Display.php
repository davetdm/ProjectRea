<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Display extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProductModel');
    }
    
    public function index($page = "display")
    {
       $data['title'] = ucfirst($page);
       $data["assets"] = $this->config->item('assets');
       $data['products'] = $this->ProductModel->getProduct(); 
       $this->load->view($page, $data);
   }
   public function deleteData()
   {
   $id=$this->input->get('id');
   $this->ProductModel->deleteProduct($id);
   echo "Product deleted successfully !";
   }
}
?>