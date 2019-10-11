<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    $this->load->library('cart');
    $this->load->model('ProductModel');
    }    
    public function index($page = "product")
    {
       $data['title'] = ucfirst($page);
       $data["assets"] = $this->config->item('assets');
       $data["page"] = "product";
       $this->load->view($page, $data);     
    }
    public function viewProducts()
    {
        $data['title'] = ucfirst("View Products");
        $data["assets"] = $this->config->item('assets');
        $data["page"] = "View Products";
        $data['products'] = $this->ProductModel->getProducts(); 
        $this->load->view("view_products", $data);
    }

    public function editProduct()
    {
      $id = $this->input->get('id');
      $product = $this->ProductModel->singleProduct($id);
      $data = [
        "title" => "Edit Product",
        "assets" => $this->config->item('assets'),
        "page" => "edit_product",
        "product" => $product
      ];    
      $this->load->view("edit_product", $data);
    }    
    public function deleteProduct()
    {
      $id = $this->input->get('id');
      $product = $this->ProductModel->singleProduct($id);
      $data = [
        "title" => "delete Product",
        "assets" => $this->config->item('assets'),
        "page"=> "delete_product",
        "product" => $product
      ];   
     $this->load->view("delete_product", $data);
    }
    public function addProduct()
    {
      $data=array(
        'name'=>$this->input->post('name'),
        'color'=>$this->input->post('color'),
        'price'=>$this->input->post('price'),
        'picture'=>$this->input->post('picture')
        );
          // print_r($data);
       $result = $this->ProductModel->addProduct($data);
       if ($result == true){
           echo "added successfully";
       } else {
           var_dump($result);
       }    
   }
   public function saveProduct() 
   {
	 $data=array(
        'name'=>$this->input->post('name'),
        'color'=>$this->input->post('color'),
        'price'=>$this->input->post('price'),
        'picture'=>$this->upload->data()
        );
        $result = $this->ProductModel->saveProduct($data);
       
        if ($result == true){
            echo "Saved successfully";
        } else {
            var_dump($result);
        }     
    } 
    public function deleteData()
    {
        $id=$this->input->get('id');
	    $this->ProductModel->delete($id);
       redirect (base_url()."Product/deleted");
    }
    public function deleted()
    {
       $this-> viewProducts();
    }
  
  


public function order(){
    $data['title'] = ucfirst("Order");
    $data["assets"] = $this->config->item('assets');
    $data["page"] = "billing";
    $data['cartItems'] = $this->ProductModel->getItems(); 
    $this->load->view("billing", $data);
    
}


}
   
