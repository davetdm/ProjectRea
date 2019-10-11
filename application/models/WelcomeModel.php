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

  public function registerUser($data)
  {
    $this->db->insert('users', $data);
    return true;
  }
  public function user_Login($type,$password){
    $this->db->where('type',$type);
    $this->db->where('password',$password);
    $result = $this->db->get('users',1);
    return $result;
  }
  public function activationEmail($first_name='', $last_name='', $email='', $verification_key='')
  {
    $this->load->library('email');
    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'thatomashifane@gmail.com',
      'smtp_pass' => 'xxx',
      'mailtype'  => 'html', 
      'charset'   => 'iso-8859-1'
    );
  
    $this->email->from('thatomashifane@gmail.com', 'Thato');
    $this->email->to('gmail.com'); 

    $this->email->subject('Confirm Email');
    $this->email->message('Testing the email class.');  

    $result = $this->email->send();
  }
  public function dashboard($id)
  {
    $this->db->select("*"); 
    $this->db->where('id = 1');
    //$this->db->where('id', $id);
    $query = $this->db->get("users");
    return $query->result();
  }
  public function forgot_pass(){
    $this->db->select('email');
    $this->db->from('users');
    $this->db->where('email', $email);
    $query=$this->db->get();
    return $query->row_array();
    
  }
 
 
}