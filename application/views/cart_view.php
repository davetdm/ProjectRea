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
                            <h4><?php echo $row->name;?></h4>
                            <div class="row">
                                <div class="col-md-7">
                                    <h4><?php echo number_format($row->price);?></h4>
                                </div><br />
                                <div class="col-md-5">
                                    <input type="number" name="quantity" id="<?php echo $row->id;?>" value="1" class="quantity form-control">
                                </div>
                            </div>
                            <button class="add_cart btn btn-success btn-block" data-id="<?php echo $row->id;?>" data-name="<?php echo $row->name;?>" data-productprice="<?php echo $row->price;?>" data-productcolor="<?php echo $row->color;?>">Add To Cart</button>
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
                <tbody id="detail_cart">
 
                </tbody>
                 
            </table>
        </div>
    </div>
</div>
 

<script type="text/javascript">
    $(document).ready(function(){
        $('.add_cart').click(function(){
            var id    = $(this).data("id");
            var name  = $(this).data("name");
            var color = $(this).data("color");
            var price = $(this).data("price");
            var quantity      = $('#' + id).val();
            $.ajax({
                url : "<?php echo site_url('cart/add_to_cart');?>",
                method : "POST",
                data : {id: id, name: name, price: price,color: color, quantity: quantity},
                success: function(data){
                    $('#detail_cart').php(data);
                }
            });
        });
 
         
        $('#detail_cart').load("<?php echo site_url('cart/load_cart');?>");
 
         
        $(document).on('click','.romove_cart',function(){
            var row_id=$(this).attr("id"); 
            $.ajax({
                url : "<?php echo site_url('cart/delete_cart');?>",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').php(data);
                }
            });
        });
    });
</script>
</body>
</html>

<?php require_once "templates/footer.php"; ?>