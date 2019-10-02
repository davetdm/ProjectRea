<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>


<section class="banner-bottom py-5">
        <div class="container">
            <div class="content-grid">
            <h2> Products</h2>
            <br>
            <div class="text-center icon">
            <img src="<?php echo base_url($assets."/images/b3.jpg") ?>" alt="part image" class="img-fluid">
          </div>
                <div class="content-bottom">
                    <form id="productForm" action="<?php echo base_url(); ?>product/addProduct"  method="post">
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="name" id="name" type="text" value="" placeholder="Product Name" required="">
                            </div>
                        </div>
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="color" id="color" type="text" value="" placeholder="Product Color" required="">
                            </div>
                        </div>
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="price" id="price" type="number" value="" placeholder="Product Price" required="">
                            </div>
                        </div>
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="picture" id="picture" type="text" value="" placeholder="Product Image" required="" >
                            </div>
                        </div>
                        <div class="content-input-field">                         
                            <button  type="submit" class="btn btn-primary btn-lg">Add Product</button>
                        </div>
                        <br/>
                        <div class="content-input-field">
                            <a href="<?php echo base_url(); ?>product/viewProducts" class="btn btn-primary btn-lg btn-block">List Products</a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
 </section>
<?php require_once "templates/footer.php"; ?>