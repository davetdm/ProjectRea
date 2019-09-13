<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->form();
	}

	public function index()
	{
		// $this->load->database();

		$data = array(
			"id" => 1,
			"name" => "Test",
			"price" => "500",
			"color" => "Red",
			"picture" => ""
		);

		// specify the table<product> and $data
		// $this->db->insert('product', $data);
		$result = $this->WelcomeModel->add_product($data);
		if ($result == true){
			echo "insert successful";
		} else {
			var_dump($result);
		}
		$this->load->view('welcome_message');
	}

	public function products(){
		// Load model
		// $this->load->model('WelcomeModel');
		$users = $this->WelcomeModel->get_products();
		// echo "<pre/>";
		foreach($users as $user){
			echo "Name: ". $user["color"] . "<br/>";
		}
		// print_r($users);
		
	}
}
