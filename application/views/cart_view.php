<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>

</head>
<body>
<div class="container"><br/>
    <h2>Shopping Cart</h2>
    <hr/>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
            <?php foreach ($data->result() as $row) : ?>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img width="200" src="<?php echo base_url().'assets/images/'.$row->picture;?>">
                        <div class="caption">
                            <h6><?php echo $row->name;?></h6>
                            <h6>(<?php echo $row->color;?>)</h6>
                            <div class="row">
                                <div class="col-md-7">
                                    <h6>R<?php echo ($row->price);?>.00</h6>
                                </div>
                                <div class="col-md-5">
                                    <input type="number" name="quantity" id="<?php echo $row->id;?>" value="1" class="quantity form-control">
                                </div>
                            </div>
                            <button class="add_cart btn btn-success btn-block" 
                                data-id="<?php echo $row->id;?>" 
                                data-name="<?php echo $row->name;?>" 
                                data-price="<?php echo $row->price;?>"
                                data-color="<?php echo $row->color;?>"
                                data-url="<?php echo base_url() . "cart/add_to_cart"; ?>">
                                Add To Cart
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
                 
            </div>
 
        </div>
        <div class="col-md-4">
            <h4>Shopping Cart</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Items</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody name="detail_cart" id="detail_cart">
                <script>let cart_url = "<?php echo base_url() . "cart/load_cart"; ?>";</script>
                <script>let carts_url = "<?php echo base_url() . "cart/delete_cart"; ?>";</script>
                </tbody>
                 
            </table>
            <a href="<?php echo base_url('product/checkout'); ?>" class="btn btn-warning"><i class="glyphicon glyphicon-menu-Right"></i> Continue To checkout</a>
        </div>
    </div>
</div>

</body>
</html>
<?php require_once "templates/footer.php"; ?>