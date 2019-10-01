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
        <p><?php echo $order['first_name']; ?></p>
        <p><?php echo $order['surname']; ?></p>
        <p><?php echo $order['email']; ?></p>
        <p><?php echo $order['phone']; ?></p>
    </div>
    <div class="col-sm-6 info">
        <div class="hdr">Order Info</div>
        <p><b>Reference ID</b> #<?php echo $order['id']; ?></p>
        <p><b>Total</b> <?php echo '$'.$order['grand_total'].' USD'; ?></p>
    </div>
</div>

<!-- Order items -->
<div class="row ord-items">
    <?php if(!empty($order['items'])){ foreach($order['items'] as $item){ ?>
    <div class="col-lg-12 item">
        <div class="col-sm-2">
            <div class="img" style="height: 75px; width: 75px;">
            <td>
            <img width="200" src="<?php echo base_url().'assets/images/'.$row->picture;?>">
                <img src="<?php echo $picture; ?>" width="75"/>
            </div>
        </div>
        <div class="col-sm-4">
            <p><b><?php echo $item["name"]; ?></b></p>
            <p><?php echo '$'.$item["price"].' USD'; ?></p>
            <p>QTY: <?php echo $item["quantity"]; ?></p>
        </div>
        <div class="col-sm-2">
            <p><b><?php echo '$'.$item["sub_total"].' USD'; ?></b></p>
        </div>
    </div>
    <?php } } ?>
</div>
</section>
<?php require_once "templates/footer.php"; ?>