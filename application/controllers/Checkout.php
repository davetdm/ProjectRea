<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checkout extends CI_Controller{
     
    public function __construct(){
        parent::__construct();
        $this->load->model('ProductModel');
    }
  
    public function index()
    {
      $data['title'] = ucfirst("Order Preview");
      $data["assets"] = $this->config->item('assets');
      $data["page"] = "checkout";
      $data['data']=$this->ProductModel->getItems();
      $this->load->view('checkout',$data);
    }
    public function addOrder()
    {
    $data=array(
        'id'=>$this->input->post('id'),
        'first_name'=>$this->input->post('first_name'),
        'surname'=>$this->input->post('surname'),
        'email'=>$this->input->post('email'),
        'phone_number'=>$this->input->post('phone_number')
        );
     
    $result = $this->ProductModel->orderItem($data);
    if ($result == true){
        echo "Thank you.. please call again!";
        $this->cart->destroy();
    } else {
        var_dump($result);
    }
        
        if ($cart = $this->cart->contents()):
            
        foreach  ($this->cart->contents() as $items):
        $data= array(
        'orderid' => $id,
        'productid' => $items['id'],
        'quantity' => $items['qty'],
        'productid' => $items['id'],
        'price' => $items['price']
        );
           
        
        
        $id = $this->ProductModel->getItems()($order_item);
        endforeach;

        endif;
}
}