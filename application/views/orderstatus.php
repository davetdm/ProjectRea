<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>

<section class="banner-bottom py-5">
        <div class="container">
            <div class="content-grid">
            <h2> order Status</h2>
            <br>
<p class="ord-succ">Your order has been placed successfully.</p>

<!-- Order status & shipping info -->
<div class="row col-lg-12 ord-addr-info">
    <div class="col-sm-6 adr">
        <div class="hdr">Shipping Address</div>
        <p><?php echo $users['first_name']; ?></p>
        <p><?php echo $users['surname']; ?></p>
        <p><?php echo $users['email']; ?></p>
        <p><?php echo $users['phone_number']; ?></p>
    </div>
    <div class="col-sm-6 info">
        <div class="hdr">Order Info</div>
        <p><b>Reference ID</b> #<?php echo $item['id']; ?></p>
        <p><b>Total</b> <?php echo 'R'.$item['Total'].' '; ?></p>
    </div>
</div>

<!-- Order items -->
<div class="row ord-items">
    <?php if(!empty($order['items'])){ foreach($order['items'] as $item){ ?>
    <div class="col-lg-12 item">
        <div class="col-sm-2">
            <div class="img" style="height: 75px; width: 75px;">
            <td>
            <img src="<?php echo base_url().'assets/images/'.$product->picture;?>" height="40" width="60"></td>
            </div>
        </div>
        <div class="col-sm-4">
            <p><b><?php echo $item["name"]; ?></b></p>
            <p><?php echo 'R'.$item["price"].' '; ?></p>
            <p>QTY: <?php echo $item["quantity"]; ?></p>
        </div>
        <div class="col-sm-2">
            <p><b><?php echo 'R'.$item["sub_total"].' R'; ?></b></p>
        </div>
    </div>
    <?php } } ?>
</div>
</section>
<?php require_once "templates/footer.php"; ?>