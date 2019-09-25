<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>


<section class="banner-bottom py-5">
        <div class="container">
            <div class="content-grid">
                <h2>Delete Product</h2>
                
                <form id="deleteForm" action="<?php echo base_url(); ?>product/deleteData" method="post">
                    <input name="id" type="hidden" value="<?php echo $product->id; ?>">
                    <br/>
                    <p>
                        Name: <?php echo $product->name ?><br/>
                        Price: R<?php echo $product->price ?><br/>
                        Color: <?php echo $product->color ?><br/>
                        <img src="<?php echo $product->picture ?>">
                    </p>
                    <br/>
                    <h4>Are you you want to delete this product?</h4>
                    <div class="content-input-field">                         
                        <button type="submit"  class="btn btn-primary btn-lg">Delete</button></a> 
                    </div>
                </form>
                
            </div>
        </div>
 </section>
<?php require_once "templates/footer.php"; ?>