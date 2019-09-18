<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>

 <h2>Products</h2>
<table class="table" style="color: #000000">
    <thead>
        <tr>
            <th>Name</th>
            <th>color</th>
            <th>price</th>
            <th>picture</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach($products  as $product){ ?>
        <tr>
            <td> <?php echo $product->name; ?></td>
            <td><?php echo  $product->color;?></td>
            <td><?php echo  $product->price; ?></td>
            <td><img src="<?php echo $product->picture;?>" height="40" width="60"></td>
            <td><i class="fa fa-edit"></i>
            <a href="<?php echo base_url(); ?>product/delete?id=<?php echo $product->id; ?>
                 <i class="fa fa-trash-o text-danger"></i></a></td>      
        </tr>
        <?php }; ?>
    </tbody>          
</table>

<?php require_once "templates/footer.php"; ?>