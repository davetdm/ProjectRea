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
       $this->load->view($page, $data);
       
       //$this->load->view('content', $data);
       //$this->load->view("myscript");
   }

   public function viewProducts(){
        $data['title'] = ucfirst("View Products");
        $data["assets"] = $this->config->item('assets');
        $data['products'] = $this->ProductModel->getProducts(); 
        $this->load->view("view_products", $data);
   }

   public function editProduct(){
        $id = $this->input->get('id');
        $product = $this->ProductModel->singleProduct($id);
        $data = [
            "title" => "Edit Product",
            "assets" => $this->config->item('assets'),
            "product" => $product
        ];
        
        $this->load->view("edit_product", $data);
   }    

   public function deleteProduct(){
        $id = $this->input->get('id');
        $product = $this->ProductModel->singleProduct($id);
        $data = [
            "title" => "delete Product",
            "assets" => $this->config->item('assets'),
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
<<<<<<< HEAD
           'picture'=>$this->input->post('picture'),
=======
           'picture'=>$this->input->post('picture')
>>>>>>> b9388dbbe601ee78fa1485b3501c8dda0dcda19f
           );
          // print_r($data);
       $result = $this->ProductModel->addProduct($data);
       if ($result == true){
           echo "added successfully";
       } else {
           var_dump($result);
       }
       
   }
  
   function saveProduct() {

	$data=array(
        'id'=>$this->input->post('id'),
        'name'=>$this->input->post('name'),
        'color'=>$this->input->post('color'),
        'price'=>$this->input->post('price'),
<<<<<<< HEAD
        'picture'=>$this->input->post('picture'),
=======
        'picture'=>$this->input->post('picture')
>>>>>>> b9388dbbe601ee78fa1485b3501c8dda0dcda19f
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
  
    Public function deleted()
    {
       $this-> viewProducts();
    }
    
    function addToCart($proID){
        
        // Fetch specific product by ID
        $product = $this->product->getProducts($proID);
        
        // Add product to the cart
        $data = array(
            'id'    => $product['id'],
            'qty'    => 1,
            'price'    => $product['price'],
            'name'    => $product['name'],
            'image' => $product['image']
        );
        $this->cart->insert($data);
        
        // Redirect to the cart page
        redirect('cart/');
    }
    public function checkout(){
        $data['title'] = ucfirst("Check-out");
        $data["assets"] = $this->config->item('assets');
        $data['cartItems'] = $this->ProductModel->getItems(); 
        $this->load->view("checkout", $data);
   }

}
   
