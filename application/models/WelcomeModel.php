<?php

class WelcomeModel extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function add_product($data){

    $this->db->insert('product', $data);
    return true;
  }

  public function get_products(){
    $this->db->select('*'); // select statement; gets the fields to select from database table
    // $this->db->where('id = 1'); // select condition
    $query = $this->db->get("product"); // database table to get the products
    return $query->result_array(); // return type
  }
        
}