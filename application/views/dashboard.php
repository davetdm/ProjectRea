<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>


<section class="banner-bottom py-5">
        <div class="container">
            <div class="content-grid">
                <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
             
              
            </div>
            <div id="navbar" class="navbar-collapse collapse">
             
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <?php foreach($users  as $user){ ?>
                   
                    
                <form id="dashForm" action="<?php echo base_url(); ?>login/dash_board" method="post">
                    <input name="id" type="hidden" value="<?php echo $user->id; ?>">
                    <br/>
                    <p>
                    <h2>Hello  <?php echo $this->session->userdata('userName');?></h2>
                    <h4>Browse through and enjoy our online store</h4>
                    </p>
                    <br/>
                    <h4></h4>
                    <div class="content-input-field">                         
                    </div>
                    <a href="<?php echo base_url('cart'); ?>" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Start Shopping</a>
                </form>
                <?php }; ?>
            </div>
        </div>
 </section>
<?php require_once "templates/footer.php"; ?>