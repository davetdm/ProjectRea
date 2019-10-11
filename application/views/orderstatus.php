<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>

<section class="banner-bottom py-5">
 <div class="container">
    <div class="content-grid">
    <?php foreach($users  as $user){ ?>

<form id="statusForm" action="<?php echo base_url(); ?>status" method="post">
   <input name="id" type="hidden" value="<?php echo $users->id; ?>">
     <br/>
     </form>
            <?php }; ?>
        <p class="ord-succ">Your order has been placed successfully.</p>
            <br/>
            <br/>

<h4>Below is your order</h4>
<div class="row ord-items">
<table class="table" style="color: #000000">
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
</section>
<?php require_once "templates/footer.php"; ?>