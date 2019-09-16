<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>
<!-- //banner-->
<!--/login -->
 <section class="banner-bottom py-5">
     <div class="container">
         <div class="content-grid">
             <div class="text-center icon">
                  <span class="fa fa-unlock-alt"></span>
          </div>
            <div class="content-bottom">
                 <form name="loginForm" id="loginForm" action="<?php echo base_url('login/userLogin'); ?>" method="post">
                     <div class="field-group">

                         <div class="content-input-field">
                             <input name="userName" id="userName" type="text" value="" placeholder="User Name" required="">
                         </div>
                    </div>
                    <div class="field-group">
                        <div class="content-input-field">
                               <input name="password1" id="myInput" type="Password" placeholder="Password">
                          </div>
                     </div>
                    <div class="content-input-field">
                            <button type="submit" class="btn" onclick="validate();">Sign In</button>
                        </div>
                        <ul class="list-login">
                            <li class="switch-slide">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                    keep Logged in
                            </label>
                          </li>
                          <li>
                              <a href="forgot_password" class="text-right">Forgot password?</a>
                         </li>
                          <li class="clearfix"></li>
                     </ul>
                     <ul class="list-login-bottom">
                          <li class="">
                              <a href="register" class="">Don't have an Account?</a>
                         </li>
                         <li class="">
                              <a href="#" class="text-right">Need Help?</a>
                         </li>
                         <li class="clearfix"></li>
                     </ul>
                 </form>
            </div>
         </div>
     </div>
 </section>
 
<?php require_once "templates/footer.php"; ?>