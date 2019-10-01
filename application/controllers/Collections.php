
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collections extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('cart');
        $this->load->model('product');
    }
    
    function index(){
        $data = array();
        $data['products'] = $this->product->getProducts();
        $this->load->view('products/index', $data);
    }
    
    function addToCart($id){
        
        // Fetch specific product by ID
        $product = $this->product->getProducts($id);
        
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
    
}