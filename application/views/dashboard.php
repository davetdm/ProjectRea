<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>


<section class="banner-bottom py-5">
        <div class="container">
            <div class="content-grid">
                <h1>Dashboard</h1>
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
                    <h2>Welcome Back <?php echo $this->session->userdata('userName');?></h2>
                    </p>
                    <br/>
                    <h4></h4>
                    <div class="content-input-field">                         
                       
                    </div>
                </form>
                <?php }; ?>
            </div>
        </div>
 </section>
<?php require_once "templates/footer.php"; ?>