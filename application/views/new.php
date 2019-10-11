<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>

<section class="banner-bottom py-5">
        <div class="container py-md-5">
            <div class="row contact_information">
                <div class="col-md-6">
                    <div class="contact_right p-lg-5 p-4">
                    <div class="text-center icon">
                    <h1> Login</h1>
                </div>
                    <form name="loginForm" id="loginForm" action="<?php echo site_url('login/userLogin'); ?>" method="post">
                 <?php echo $this->session->flashdata('msg');?>
                 <div class="field-group">
                         <div class="content-input-field">
                             <input name="id" id="id" type="hidden" value="" placeholder="User Name" required="">
                         </div>
                    </div>
                     <div class="field-group">
                         <div class="content-input-field">
                             <input name="userName" id="userName" type="text" value="" placeholder="User Name" required="">
                         </div>
                    </div>
                    <div class="field-group">
                        <div class="content-input-field">
                               <input name="password1" id="password1" type="Password" placeholder="Password">
                          </div>
                     </div>
                    <div class="content-input-field">
                            <button type="submit" class="btn" onclick="validate();">Sign In</button>
                        </div>
                        <ul class="list-login">
                          <li>
                              <a href="login/forgotPass" class="text-right">Forgot password?</a>
                         </li>
                 </form>
                    </div>
                </div>
                <div class="col-md-6 contact_left p-4">
                <div class="text-center icon">
                <h1>Register</h1>
                </div>
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
    </section>
 
<?php require_once "templates/footer.php"; ?>