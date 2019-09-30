<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>

<section class="banner-bottom py-5">
    <div class="container py-md-3">
        <div class="row grids-wthree-info text-center">
            
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
                        <td><img src="<?php echo base_url().'assets/images/'.$product->picture;?>" height="40" width="60"></td>
                        <td>
                            <a href="<?php echo base_url(); ?>product/editProduct?id=<?php echo $product->id; ?>" ><i class="fa fa-edit"></i></a>
                            <a href="<?php echo base_url(); ?>product/deleteData?id=<?php echo $product->id; ?>">
                                <i class="fa fa-trash-o text-danger"></i>

                            </a>
                    </tr>
                    <?php }; ?>
                </tbody>          
            </table>

        </div>
    </div>
</section>
    <!-- /banner-bottom -->
    
 
<?php require_once "templates/footer.php"; ?>