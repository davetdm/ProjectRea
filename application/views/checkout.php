<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>
<div class="col-md-4 ">
    <h2>Order Preview </h2>
    <table class="table" style="text-align: center;" style="color: #000000">
        <thead>
            <tr>
                <th>Image</td>
                <th>Items</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
        </thead>
     <tbody>
        <?php if($this->cart->total_items() > 0){  foreach ($this->cart->contents() as $items){ ?>
        <tr>
            <td><img src="<?php echo base_url().'assets/images/'.$items["picture"];?>" height="40" width="60"></td> 
            <td><?php echo $items["name"]; ?></td>
            <td><?php echo 'R'.$items["price"].' '; ?></td>
            <td><?php echo $items["qty"]; ?></td>          
            <td><?php echo 'R'.$items["subtotal"].' '; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr>
            <td colspan="5"><p>No items in your cart...</p></td>
        </tr>
        <?php } ?>
     </tbody>
    <tfoot>
        <tr>
            <td colspan="4"></td>
            <?php if($this->cart->total_items() > 0){ ?>
            <td class="text-center">
                <strong>Total <?php echo 'R'.$this->cart->total(); ?></strong>
            </td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    </div>
    <div class="container">
        <div class="content-grid">
            <h2>Shipping Info</h2>
            <br>
<<<<<<< HEAD
                <div class="content-bottom">
                    <form id="orderForm" action="<?php echo base_url(); ?>checkout/addOrder"  method="post">
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="first_name" id="name" type="text" value="" placeholder="First Name" required="">
                            </div>
=======
            <div class="content-bottom">
                <form id="orderForm" action="<?php echo base_url(); ?>product/addCustomer"  method="post">
                    <div class="field-group">
                         <div class="content-input-field">
                            <input name="first_name" id="name" type="text" value="" placeholder="First Name" required="">
>>>>>>> ac0a1cdda392aaa7014afbd18dd2f5d79f38acb8
                        </div>
                    </div>
                    <div class="field-group">
                        <div class="content-input-field">
                            <input name="surname" id="surname" type="text" value="" placeholder="Surname" required="">
                        </div>
                    </div>
                    <div class="field-group">
                        <div class="content-input-field">
                            <input name="email" id="email" type="email" value="" placeholder="Email Address" required="">
                        </div>
                    </div>
                    <div class="field-group">
                        <div class="content-input-field">
                            <input name="phone_number" id="phone" type="text" value="" placeholder="Phone Number" required="" >
                        </div>
                    </div>
                    <div class="footBtn">
                     <a href="<?php echo base_url('cart'); ?>" class="btn btn-warning">
                     <i class="glyphicon glyphicon-menu-left"></i> Back to Cart</a>
                    <button type="submit" name="placeOrder" class="btn btn-success orderBtn">Place Order 
                    <i class="glyphicon glyphicon-menu-right"></i></button>
                 </div>    
                </form>
            </div>
        </div>
    </div>
</div>        
<?php require_once "templates/footer.php"; ?>