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
                    <form id="registerForm" action="<?php echo site_url('register/register_user'); ?>" method="post">
                        <div class="field-group">

                        <div class="content-input-field">
                                <input name="userName" id="userName" type="text" value="" placeholder="User Name" required="">
                            </div>
                        </div>
                        <div class="field-group">

                            <div class="content-input-field">
                                <input name="email" id="email" type="email" value="" placeholder="User Email" required="">
                            </div>
                        </div>
                        <div class="field-group">

                            <div class="content-input-field">
                                <input name="phone_number" id="phone_number" type="text" value="" placeholder="UserPhone" required="">
                            </div>
                        </div>
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="password1" id="password1" type="Password" placeholder="Password">
                            </div>
                        </div>
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="cPassword" id="cPassword" type="Password" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="content-input-field">
                            <button type="submit" class="btn">Sign Up</button>
                        </div>
                        <div class="list-login-bottom text-center mt-lg-5 mt-4">

                            <a href="#" class="">By clicking Signup, I agree to your terms</a>



                        </div>
                    </form>
                </div>
            </div>
        </div>
 </section>
 <?php require_once "templates/footer.php"; ?>