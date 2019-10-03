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
  public function sendpassword($data)
{
    $email = $data['email'];
    $query1=$this->db->query("SELECT *  from users where email = '".$email."' ");
    $row=$query1->result_array();
    if ($query1->num_rows()>0)
{
        $passwordplain = "";
        $passwordplain  = rand(999999999,9999999999);
        $newpass['password'] = Sha1($passwordplain);
        $this->db->where('email', $email);
        $this->db->update('employer_registration', $newpass);
        $mail_message='Dear '.$row[0]['name'].','. "\r\n";
        $mail_message.='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
        $mail_message.='<br>Please Update your password.';
        $mail_message.='<br>Thanks & Regards';
        $mail_message.='<br>Your company name';
        require 'PHPMailerAutoload.php';
        require 'class.phpmailer.php';
        $mail = new PHPMailer;
        $mail->IsSendmail();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "hostname";
        $subject = 'Testing Email';
        $mail->AddAddress($email);
        $mail->IsMail();
        $mail->From = 'admin@***.com';
        $mail->FromName = 'admin';
        $mail->IsHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $mail_message;
        $mail->Send();
        if (!$mail->send()) {

            echo "<script>alert('msg','Failed to send password, please try again!')</script>";
        } else {

            echo "<script>alert('msg','Password sent to your email!')</script>";
        }
    }
    else
    {

        echo "<script>alert('msg','Email not found try again!')</script>";
        redirect(base_url().'');
    }
}
 
}