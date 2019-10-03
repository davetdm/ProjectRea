<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>

<h2>Order Preview</h2>
            <table class="table" style="color: #000000">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
    <tbody>
        <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){ ?>
        <tr>
            <td>
            <img width="200" src="<?php echo base_url().'assets/images/'.$row->picture;?>">
                <img src="<?php echo $imageURL; ?>" width="75"/>
            </td>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' USD'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
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
                <strong>Total <?php echo '$'.$this->cart->total().' USD'; ?></strong>
            </td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
        <div class="container">
            <div class="content-grid">
            <h2>Shipping Info</h2>
            <br>
                <div class="content-bottom">
                    <form id="orderForm" action="<?php echo base_url(); ?>product/order"  method="post">
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="name" id="name" type="text" value="" placeholder="First Name" required="">
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
                                <input name="phone" id="phone" type="number" value="" placeholder="Phone Number" required="" >
                            </div>
                        </div>
                        <div class="footBtn">
                     <a href="<?php echo base_url('cart/'); ?>" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Back to Cart</a>
                 <button type="submit" name="placeOrder" class="btn btn-success orderBtn">Place Order <i class="glyphicon glyphicon-menu-right"></i></button>
                 </div>    
                </form>
             </div>
            </div>
        </div>
<?php require_once "templates/footer.php"; ?>