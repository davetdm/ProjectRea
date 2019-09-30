<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart extends CI_Controller{
     
     public function __construct(){
         parent::__construct();
         $this->load->model('ProductModel');
     }
  
     public function index(){
         $data['data']=$this->ProductModel->get_all_product();
         $this->load->view('cart_view',$data);
     }
  
     public function add_to_cart(){ 
         $data = array(
            'id'=>$this->input->post('id'),
            'name'=>$this->input->post('name'),
            'color'=>$this->input->post('color'),
            'price'=>$this->input->post('price'),
            'picture'=>$this->input->post('picture'), 
            'qty' => $this->input->post('quantity'), 
         );
         $this->cart->insert($data);
         echo $this->show_cart(); 
     }
  
     public function show_cart(){ 
         $result = '';
         $no = 0;
         foreach ($this->cart->contents() as $items) {
             $no++;
             $result .='
                 <tr>
                     <td>'.$items['name'].'</td>
                     <td>'.$items['color'].'</td>
                     <td>'.number_format($items['price']).'</td>
                     <td>'.$items['qty'].'</td>
                     <td>'.number_format($items['subtotal']).'</td>
                     <td><button type="button" id="'.$items['rowid'].'" class="romove_cart btn btn-danger btn-sm">Cancel</button></td>
                 </tr>
             ';
         }
         $result .= '
             <tr>
                 <th colspan="3">Total</th>
                 <th colspan="2">'.'R '.number_format($this->cart->total()).'</th>
             </tr>
         ';
         return $result;
     }
     public function load_cart(){ 
        echo $this->show_cart();
     }
  
     public function delete_cart()
     { 
        $data = array(
            'rowid' => $this->input->post('row_id'), 
            'qty' => 0, 
        );
        $this->cart->update($data);
        echo $this->show_cart();
     }
 }