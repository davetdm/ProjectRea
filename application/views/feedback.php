<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>


<section class="banner-bottom py-5">
        <div class="container">
            <div class="content-grid">
                <h2>Order Successful</h2>
                    <br/>
                    <h4>Thank You!! Please Call Again.</h4>
                    <div class="content-input-field">                         
                    <br/>
                    <a href="<?php echo base_url('product/shoppingcart'); ?>" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Back to Cart</a>
            </div>
        </div>
 </section>
<?php require_once "templates/footer.php"; ?>