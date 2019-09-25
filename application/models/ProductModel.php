<?php
class ProductModel extends CI_Model
{
    public function __construct() {
        parent::__construct();
      }

      public function addproduct($data){
          
        $this->db->insert('product', $data);
        return true;

        $this->load->view('productForm');
      }
      
      function getProducts()
      {
          $this->db->select("id, name,color,price, picture"); 
          $this->db->from('product');
          $query = $this->db->get();
          return $query->result();
       }

      function singleProduct($id){

          $this->db->select("id, name,color,price, picture"); 
          $this->db->from('product');
          $this->db->where('id', $id);
          $query = $this->db->get();
          return $query->result()[0];
      }
       
     public function updateProduct($id, $data)
      {
          $this->db->where('id', $id);
          $this->db->update($this->product, $data);
      }

    Public function deleteData($id) 
     {
      $this->db->where('id', $id);
      $this->db->delete('product');
      }

    public function saveProduct($id){
        
       $this->db->set('product', $data);
        return true;
      }
      
 
  }
