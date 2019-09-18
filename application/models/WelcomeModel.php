<?php

class WelcomeModel extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function addproduct($data){

    $this->db->insert('product', $data);
    return true;
  }

  public function getproducts(){
    $this->db->select('*'); // select statement; gets the fields to select from database table
    // $this->db->where('id = 1'); // select condition
    $query = $this->db->get("product"); // database table to get the products
    return $query->result(); // return type
  }
        
}