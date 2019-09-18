<?php
class ProductModel extends CI_Model
{
    public function __construct() {
        parent::__construct();
      }

      public function addproduct($data){
          
        $this->db->insert('product', $data);
        return true;
      }
      
      function getProduct()
      {
        $this->db->select("name,color,price, picture"); 
        $this->db->from('product');
        $query = $this->db->get();
        return $query->result();
       }
       
      public function update($id, $name, $color, $price, $picture) {
      
        $data = array(
              'name' => $name,
              'color' => $color,
              'price' => $price,
              'picture' => $picture 
            );        
        $this->db->where('id', $id);
        $this->db->update($this->products, $data);
        
        if ($this->db->affected_rows()) {
          return TRUE;
        }
        
        return FALSE;
      }

    Public function deleteProduct($id) 
    {
      $this->db->query("delete  from product where id='".$id."'");
      }
  
 
  }
