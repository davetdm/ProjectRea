<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>

<section class="banner-bottom py-5">
        <div class="container">
            <div class="content-grid">
                <div class="text-center icon">
                    <span class="fa fa-user-circle-o"></span>
                </div>
                <div class="content-bottom">
                    <form id="changeForm" action="<?php echo site_url('register/register_user'); ?>" method="post">
                        <?php echo $this->session->flashdata('msg'); ?>
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="old_password" id="old_password" type="Password" value="" placeholder="Old Password" required="">
                            </div>
                        </div>
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="password1" id="password1" type="Password" placeholder="New Password">
                            </div>
                        </div>
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="cPassword" id="cPassword" type="Password" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="content-input-field">
                            <button type="submit" class="btn">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
 </section>
 <?php require_once "templates/footer.php"; ?>