<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>


<section class="banner-bottom py-5">
        <div class="container">
            <div class="content-grid">
                <h2>Dashboard</h2>
                <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">LOGO</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
             
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
              </ul>
            </div>
          </div>
        </nav>
                <form id="dashForm" action="<?php echo base_url(); ?>login/dash_board" method="post">
                    <input name="id" type="hidden" value="<?php echo $user->id; ?>">
                    <br/>
                    <p>
                    <h1>Welcome Back <?php echo $this->session->userdata('userName');?></h1>
                        Name: <?php echo $user->first_name ?><br/>
                        Username: <?php echo $user->type ?><br/>
                        Email: <?php echo $user->email ?><br/>
                       
                    </p>
                    <br/>
                    <h4></h4>
                    <div class="content-input-field">                         
                        <button type="submit"  class="btn btn-primary btn-lg"></button></a> 
                    </div>
                </form>
                
            </div>
        </div>
 </section>
<?php require_once "templates/footer.php"; ?>