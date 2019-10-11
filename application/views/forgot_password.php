<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>
 <section class="banner-bottom py-5">
    <div class="container">
        <div class="content-grid">
            <div class="text-center icon">
                <span class="fa fa-unlock-alt"></span>
                <h2>Forgot Password</h2>
            </div>
            <div class="content-bottom">
                 <form name="forgotForm" id="forgotForm" action="<?php echo base_url('login/forgotPass'); ?>" method="post">
                     <div class="field-group">
                        <div class="content-input-field">
                            <input name="email" id="email" type="email" value="" placeholder="Enter Email" required="">
                        </div>
                    </div>
                    <div class="content-input-field">
                        <button type="submit" class="btn" onclick="validate();">Submit</button>
                     </div>                       
                 </form>
            </div>
        </div>
    </div>
</section> 
<?php require_once "templates/footer.php"; ?>