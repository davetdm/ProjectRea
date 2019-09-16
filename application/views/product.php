<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>

<div class="row page-content">
  <div class="col-lg-12">
    <h2>Product Form</h2>
    <?php if(validation_errors()) { ?>
      <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
      </div>
    <?php } ?>
    <?php echo form_open('product/actionadd'); ?>
    
      <div class="form-group">
         <input type="text" name="name" class="form-control" id="name" placeholder="Product Name">
      </div>
      <div class="form-group">
         <input type="text" name="color" class="form-control" id="color" placeholder="Product Color">
      </div>
      <div class="form-group">
         <input type="text" name="price" class="form-control" id="price" placeholder="Product Price">
      </div>
      <div class="form-group pull-right">
         <button type="submit" id="add" class="btn btn-primary">Add Product</button>
      </div>
    </div>
    <?php echo form_close(); ?>
  
</div>
<?php require_once "templates/footer.php"; ?>