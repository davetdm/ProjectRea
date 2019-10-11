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

    public function delete($id) 
    {
      $this->db->query("delete  from product where id='".$id."'");
    }

    public function saveProduct($id)
    {
      $this->db->set('product', $data);
      return true;
      $this->load->view('saveForm');
    }
 
    public function get_product(){
      $result=$this->db->get('product');
      return $result;
    }
    
    function getItems()
     {
         $this->db->select("id, name,quantity,price,color,picture"); 
         $this->db->from('order_item');
         $query = $this->db->get();
         return $query->result();
      }

    public function orderItem($data)
      {
        $this->db->insert('users', $data);
        return true;
        $this->load->view('orderForm');
      }

     public function inserOrder($data)
       {
        $this->db->insert('orders', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ;
      }

     public function insert_order_detail($data)
       {
        $this->db->insert('order_item', $data);
  
    }

    function getStatus()
    {
        $this->db->select("id, status,status_date,order_id"); 
        $this->db->from('order_status');
        $query = $this->db->get();
        return $query->result();
     }
     public function status($id)
     {
       $this->db->select("*"); 
       $this->db->where('id = 1');
       //$this->db->where('id', $id);
       $query = $this->db->get("users");
       return $query->result();
     }
} 
 