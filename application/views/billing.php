<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>


<section class="banner-bottom py-5">
        <div class="container">
            <div class="content-grid">
                

<?php
$total = 0;

if ($this->cart->total_items()):
foreach ($this->cart->contents() as $items):
$total = $total + $items['subtotal'];
endforeach;
endif;
?>
<div id="bill_info">

<?php // Create form for enter user imformation and send values 'shopping/save_order' function?>
<form name="billing" method="post" action="<?php echo base_url() . 'index.php/shopping/save_order' ?>" >
<input type="hidden" name="command" />
<div align="center">
<h1 align="center">Billing Info</h1>
<table border="0" cellpadding="2px">
<tr><td>Order Total:</td><td><strong>R<?php echo number_format($total, 2); ?></strong></td></tr>
<tr><td>Your Name:</td><td><input type="text" name="name" required=""/></td></tr>
<tr><td>Address:</td><td><input type="text" name="address" required="" /></td></tr>
<tr><td>Email:</td><td><input type="text" name="email" required="" /></td></tr>
<tr><td>Phone:</td><td><input type="text" name="phone" required="" /></td></tr>
<tr><td><?php
// This button for redirect main page.
echo "<a class ='fg-button teal'  id='back' href=" . base_url() . "index.php/shopping>Back</a>"; ?>
</td><td><input class ='fg-button teal' type="submit" value="Place Order" /></td></tr>

</table>
</div>
</form>
</div>



            </div>
        </div>
 </section>
<?php require_once "templates/footer.php"; ?>