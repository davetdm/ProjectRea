<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>


<section class="banner-bottom py-5">
        <div class="container">
            <div class="content-grid">
            <h2>Edit Product</h2>
            <br>
                <div class="content-bottom">
                    <form id="saveForm" action="<?php echo base_url(); ?>product/saveProduct" method="post">
                    <input name="id" type="hidden" value="<?php echo $product->id; ?>">
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="name" id="name" type="text" value="<?php echo $product->name; ?>" placeholder="Product Name" required="">
                            </div>
                        </div>
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="color" id="color" type="text" value="<?php echo $product->color; ?>" placeholder="Product Color" required="">
                            </div>
                        </div>
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="price" id="price" type="number" value="<?php echo $product->price; ?>" placeholder="Product Price" required="">
                            </div>
                        </div>
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="picture" id="image" type="text" value="<?php echo $product->picture; ?>" placeholder="Product Image" required="">
                            </div>
                        </div>
                        <div class="content-input-field">                         
                            <button type="submit" id="save" class="btn btn-primary btn-lg">Save Product</button></a> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
 </section>
<?php require_once "templates/footer.php"; ?>