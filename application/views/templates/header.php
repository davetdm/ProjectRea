<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <!-- Custom-Files -->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
        <!-- Bootstrap-Core-CSS -->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" type="text/css" media="all" />
        <!-- Style-CSS -->
        <!-- font-awesome-icons -->
        <link href="<?php echo base_url($assets."/css/font-awesome.css"); ?>" rel="stylesheet">
        <!-- //font-awesome-icons -->
        <!-- /Fonts -->
        <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    </head>
    <body>
        <?php if ($page == "home"){ ?>
            <div class="main-sec">
        <?php } else { ?>
            <div class="min-main-sec">
        <?php } ?>
            <!-- //header -->
            <header class="py-sm-3 pt-3 pb-2" id="home">
                <div class="container">
                    <!-- nav -->
                    <div class="top-w3pvt d-flex">
                        <div id="logo">
                            <h1> <a href="home"><span class="log-w3pvt">B</span>aggage</a> <label class="sub-des">Online Store</label></h1>
                        </div>
                        <?php if($this->session->is_online){ ?>
                            <div class="forms ml-auto">
                                <a href="<?php echo base_url(); ?>login/dash_board" class="btn"><span class="fa fa-user-circle-o"></span> Profile</a>
                                <a href="<?php echo base_url(); ?>login/logout" class="btn"><span class="fa fa-sign-out"></span> Logout</a>
                            </div>
                        <?php } else { ?>
                            <div class="forms ml-auto">
                                <a href="<?php echo base_url(); ?>login" class="btn"><span class="fa fa-sign-in"></span> Sign In</a>
                                <a href="<?php echo base_url(); ?>register" class="btn"><span class="fa fa-pencil-square-o"></span> Sign Up</a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="nav-top-wthree">
                        <nav>
                            <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                            <input type="checkbox" id="drop" />
                            <ul class="menu">
                                <li class="active"><a href="<?php echo base_url(); ?>home">Home</a></li>
                                <li><a href="<?php echo base_url(); ?>about">About Us</a></li>
                                <li><a href="<?php echo base_url(); ?>product">Product</a></li>
                                <li>
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle">
                                        Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                                    </label>
                                    <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul>
                                        <li><a href="coming" class="drop-text">Services</a></li>
                                        <li><a href="about" class="drop-text">Features</a></li>
                                        <li><a href="single" class="drop-text">Single Page</a></li>

                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url(); ?>shop">Collections</a></li>
                                <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                                <li><a href="<?php echo base_url(); ?>cart">Shopping Cart</a></li>
                            </ul>
                        </nav>
                        <!-- //nav -->
                        <div class="search-form ml-auto">
                            <div class="form-w3layouts-grid">
                                <form action="#" method="post" class="newsletter">
                                    <input class="search" type="search" placeholder="Search here..." required="">
                                    <button class="form-control btn" value=""><span class="fa fa-search"></span></button>
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </header>
            <!-- //header -->
            <!--/banner-->
            <?php if ($page == "home"){ ?>
                <div class="banner-wthree-info container">
                    <div class="row">
                        <div class="col-lg-3 banner-left-info">
                            <h3>The Largest Range <span>of HandBags</span></h3>
                            <a href="shop" class="btn shop">Shop Now</a>
                        </div>
                        <div class="col-lg-7 banner-img">
                            <img src="<?php echo base_url($assets."/images/bag.png") ?>" alt="part image" class="img-fluid">
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
