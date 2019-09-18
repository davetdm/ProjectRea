<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    
    $this->load->model('ProductModel');
    }
    
    public function index($page = "product")
    {
       $data['title'] = ucfirst($page);
       $data["assets"] = $this->config->item('assets');
       $this->load->view($page, $data);
       //$this->load->view('content', $data);
       //$this->load->view("myscript");
   }

   public function addProduct()
   {
       $data=array(
           'name'=>$this->input->post('name'),
           'color'=>$this->input->post('color'),
           'price'=>$this->input->post('price'),
          
           );
          // print_r($data);
       $result = $this->ProductModel->addProduct($data);
       if ($result == true){
           echo "added successfully";
       } else {
           var_dump($result);
       }
     
   }
  
   function updateProduct($page = "display") {

		$id = $_POST['id'];
		$name = $_POST['name'];
		$color = $_POST['color'];
		$price = $_POST['Price'];
		$picture = $_POST['picture'];
		
		if($this->db->updateProduct($id, $name,$color , $price, $picture) === TRUE) {
			return TRUE;
		}
		
		return FALSE;
	}
  
 
}
   
