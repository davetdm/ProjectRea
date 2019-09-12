<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <!-- Custom-Files -->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
        <!-- Bootstrap-Core-CSS -->
        <link rel="stylesheet" href="<?php echo base_url($assets."/css/style.css"); ?>" type="text/css" media="all" />
        <!-- Style-CSS -->
        <!-- font-awesome-icons -->
        <link href="<?php echo base_url($assets."/css/font-awesome.css"); ?>c" rel="stylesheet">
        <!-- //font-awesome-icons -->
        <!-- /Fonts -->
        <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <body>
    <div class="main-sec">
        <!-- //header -->
        <header class="py-sm-3 pt-3 pb-2" id="home">
            <div class="container">
                <!-- nav -->
                <div class="top-w3pvt d-flex">
                    <div id="logo">
                        <h1> <a href="index.php"><span class="log-w3pvt">B</span>aggage</a> <label class="sub-des">Online Store</label></h1>
                    </div>`

                    <div class="forms ml-auto">
                        <a href="<?php echo base_url(); ?>login" class="btn"><span class="fa fa-user-circle-o"></span> Sign In</a>
                        <a href="<?php echo base_url(); ?>register" class="btn"><span class="fa fa-pencil-square-o"></span> Sign Up</a>
                    </div>
                </div>
                <div class="nav-top-wthree">
                    <nav>
                        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>about">About Us</a></li>
                           <li><a href="<?php echo base_url(); ?>collections">Collections</a></li>
                            <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                        </ul>
                    </nav>
                    </div>
