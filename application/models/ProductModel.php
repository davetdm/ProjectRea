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
       
     public function update($id, $data)
     {

      $data=array(
        'name'=>$this->input->post('name'),
        'color'=>$this->input->post('color'),
        'price'=>$this->input->post('price'),
        'picture'=>$this->input->post('picture'),
       
        );
      if($id==0){
          return $this->db->insert('product',$data);
      }else{
          $this->db->where('id',$id);
          return $this->db->update('product',$data);
      }        

  }

    Public function delete($id) 
     {
      $this->db->query("delete  from product where id='".$id."'");
      }

    public function saveProduct($id){
        
       $this->db->set('product', $data);
        return true;
        $this->load->view('saveForm');
      }

      function getItems()
      {
          $this->db->select("id, name,color,price,quantity"); 
          $this->db->from('order_item');
          $query = $this->db->get();
          return $query->result();
       }
 
  }
