<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        $this->load->library('cart');
        $this->load->model('productModel');
    }
    
    function index(){
        $data = array();
        
        // Retrieve cart data from the session
        $data['cartItems'] = $this->cart->products();
        
        // Load the cart view
        $this->load->view('cart/index', $data);
    }
    
    function updateItemQty(){
        $update = 0;
        
        // Get cart item info
        $id = $this->input->get('id');
        $qty = $this->input->get('qty');
        
        // Update item in the cart
        if(!empty($rid) && !empty($qty)){
            $data = array(
                'id' => $id,
                'qty'   => $qty
            );
            $update = $this->cart->update($data);
        }
        
        // Return response
        echo $update?'ok':'err';
    }
    
    function removeItem($id){
        // Remove item from cart
        $remove = $this->cart->remove($id);
        
        // Redirect to the cart page
        redirect('cart/');
    }
    
}