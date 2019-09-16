<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
	public function index($page = "product")
	{
        $data['title'] = ucfirst($page);
        $data["assets"] = $this->config->item('assets');
		$this->load->view($product, $data);
    }
    
    public function add(){
        $this->load->library('form_validation');
    
    $this->form_validation->set_rules('name', 'Product Name');
    $this->form_validation->set_rules('color', 'Product Color');
    $this->form_validation->set_rules('price', 'Price');
 
    if($this->form_validation->run() == FALSE) {
      $this->add();
    } else {
      // post values
      $name = $this->input->post('name');
      $color = $this->input->post('color');
      $price = $this->input->post('price');
      
      // set post values
      $this->product->setName($name);
      $this->product->setColor($color);
      $this->product->setPrice($price);
      
      $this->product->setStatus(1);
      // insert values in database
      $this->product->createUser();
      redirect('users/index');
    }

