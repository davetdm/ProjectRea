<?php

class WelcomeModel extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function addproduct($data)
  {

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
  public function user_Login($email,$password){
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('users',1);
    return $result;
  }
  public function sendEmail($receiver)
  {
    $from = "thatomashifane@gmail.com";    
    $subject = 'Verify email address';  
    
    $message = 'Dear User,<br><br> Please click on the below activation link to verify your email address<br><br>
    <a href=\'http://www.localhost/ProjectRea/Registger/confirmEmail/'.Sha1($receiver).'\'>
    http://www.localhost/ProjectRea/Registger/confirmEmail/'. Sha1($receiver) .'</a><br><br>Thanks';
    
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.gmail.com';
    $config['smtp_port'] = '465';
    $config['smtp_user'] = $from;
    $config['smtp_pass'] = '0729232639';  
    $config['mailtype'] = 'html';
    $config['charset'] = 'iso-8859-1';
    $config['wordwrap'] = 'TRUE';
    $config['newline'] = "\r\n"; 
    
    $this->load->library('email', $config);
    $this->email->initialize($config);
    $this->email->from($from);
    $this->email->to($receiver);
    $this->email->subject($subject);
    $this->email->message($message);
    
    if($this->email->send()){
      //for testing   
      echo "email successful";
        return true;
    }else{
        echo "email send failed";
        return false;
    }
      
  }
  public function verifyEmail($key){
    $data = array('status' => 1);
    $this->db->where('Sha1(email)',$key);
    return $this->db->update('users', $data);    
  }
  public function dashboard($id)
  {
    $this->db->select("*"); 
    $this->db->where('id = 1');
    //$this->db->where('id', $id);
    $query = $this->db->get("users");
    return $query->result();
  }
  public function forgot_pass($email){
    $this->db->select('email');
    $this->db->from('users');
    $this->db->where('email', $email);
    $query=$this->db->get();
    $result = $query->result_array();   
    return $result;
  }
 
 
}