<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>
<section class="banner-bottom py-5">
        <div class="container py-md-3">
            <div class="row grids-wthree-info text-center">
                <div class="col-lg-4 ab-content">
                    <div class="ab-info-con">
                        <h4>Fast & Free Delivery</h4>
                        <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus libero.</p>
                    </div>
                </div>
                <div class="col-lg-4 ab-content">
                    <div class="ab-info-con">
                        <h4>Safe & Secure Payments</h4>
                        <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus libero.</p>
                    </div>
                </div>
                <div class="col-lg-4 ab-content">
                    <div class="ab-info-con">
                        <h4>100% Money Back Guarantee</h4>
                        <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus libero.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /banner-bottom -->
    <!--/banner-bottom -->
    <section class="collections">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 ab-content-img">

                </div>
                <div class="col-md-4 ab-content text-center p-lg-5 p-3 my-lg-5">
                    <h4>Travel Must Haves</h4>
                    <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus libero.</p>
                    <a href="shop" class="btn shop mt-3">Shop Now</a>

                </div>
            </div>
        </div>
    </section>
    <!-- /banner-bottom -->
    <!--/collections -->
    <section class="banner-bottom py-5">
        <div class="container py-md-5">

            <h3 class="title-wthree mb-lg-5 mb-4 text-center">Safety Meets Style </h3>
            <div class="row text-center">


                <div class="col-md-4 content-gd-wthree">
                    <img src="<?php echo base_url($assets."/images/c1.jpg"); ?>" class="img-fluid" alt="" />
                </div>
                <div class="col-md-4 content-gd-wthree ab-content py-lg-5 my-lg-5">
                    <h4>Need Extra Space ?</h4>
                    <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus libero.</p>
                    <a href="shop" class="btn shop mt-3">Shop Now</a>

                </div>
                <div class="col-md-4 content-gd-wthree">
                    <img src="<?php echo base_url($assets."/images/c2.jpg"); ?>" class="img-fluid" alt="" />
                </div>
            </div>

        </div>
    </section>
    <!-- //collections-->
    <!-- /mid-section -->
    <section class="mid-section">
        <div class="d-lg-flex p-0">
            <div class="col-lg-6 bottom-w3pvt-left p-lg-0">
                <img src="<?php echo base_url(); ?>assets/images/ab1.jpg" class="img-fluid" alt="" />
                <div class="pos-wthree">
                    <h4 class="text-wthree">50% Off Any <br> Women's Bags</h4>
                    <a href="shop" class="btn shop mt-3">Shop Now</a>
                </div>
            </div>
            <div class="col-lg-6 bottom-w3pvt-left bottom-w3pvt-right p-lg-0">
                <img src="<?php echo base_url(); ?>assets/images/ab2.jpg" class="img-fluid" alt="" />
                <div class="pos-w3pvt">
                    <h4 class="text-w3pvt">30% Off Any <br> Men's Bags</h4>
                    <a href="shop" class="btn shop mt-3">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //mid-section -->

    <!--/gallery -->
    <section class="banner-bottom py-5">
        <div class="container py-md-5">


            <div class="row">
                <div class="col-lg-4 gallery-content-info text-center mt-lg-5">
                    <h3 class="title-wthree mb-lg-5 mb-4">Trending Now </h3>
                    <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus libero.</p>
                    <a href="shop" class="btn shop mt-3">Shop Now</a>

                </div>
                <div class="col-lg-8 gallery-content">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 gal-img">
                            <a href="#gal1"><img src="<?php echo base_url($assets."/images/g1.jpg"); ?>" alt="Baggage" class="img-fluid mt-4"></a>
                        </div>
                        <div class="col-md-4 col-sm-6 gal-img">
                            <a href="#gal2"><img src="<?php echo base_url(); ?>assets/images/g2.jpg" alt="Baggage" class="img-fluid mt-4"></a>
                        </div>
                        <div class="col-md-4 col-sm-6 gal-img">
                            <a href="#gal3"><img src="<?php echo base_url(); ?>assets/images/g3.jpg" alt="Baggage" class="img-fluid mt-4"></a>
                        </div>
                        <div class="col-md-4 col-sm-6 gal-img">
                            <a href="#gal1"><img src="<?php echo base_url(); ?>assets/images/g4.jpg" alt="Baggage" class="img-fluid mt-4"></a>
                        </div>
                        <div class="col-md-4 col-sm-6 gal-img">
                            <a href="#gal2"><img src="<?php echo base_url(); ?>assets/images/g5.jpg" alt="Baggage" class="img-fluid mt-4"></a>
                        </div>
                        <div class="col-md-4 col-sm-6 gal-img">
                            <a href="#gal3"><img src="<?php echo base_url(); ?>assets/images/g6.jpg" alt="Baggage" class="img-fluid mt-4"></a>
                        </div>

                    </div>
                    <!-- gallery popups -->
                    <!-- popup-->
                    <div id="gal1" class="popup-effect">
                        <div class="popup">
                            <img src="<?php echo base_url(); ?>assets/images/g1.jpg" alt="Popup image" class="img-fluid mt-4" />
                            <a class="close" href="#gallery">&times;</a>
                        </div>
                    </div>
                    <!-- //popup -->
                    <!-- popup-->
                    <div id="gal2" class="popup-effect">
                        <div class="popup">
                            <img src="<?php echo base_url(); ?>assets/images/g2.jpg" alt="Popup image" class="img-fluid mt-4" />
                            <a class="close" href="#gallery">&times;</a>
                        </div>
                    </div>
                    <!-- //popup -->
                    <!-- popup-->
                    <div id="gal3" class="popup-effect">
                        <div class="popup">
                            <img src="<?php echo base_url(); ?>assets/images/g3.jpg" alt="Popup image" class="img-fluid mt-4" />
                            <a class="close" href="#gallery">&times;</a>
                        </div>
                    </div>
                    <!-- //popup -->
                    <!-- //gallery popups -->

                </div>
            </div>

        </div>
    </section>
    <!-- //gallery-->
   <?php require_once "templates/footer.php"; ?>
