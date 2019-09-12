<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once "templates/header.php"; ?>

<section class="banner-bottom py-5">
        <div class="container py-md-5">
            <h3 class="title-wthree mb-lg-5 mb-4 text-center">Contact Us </h3>
            <div class="row contact_information">
                <div class="col-md-6">
                    <div class="contact_right p-lg-5 p-4">
                        <form action="#" method="post">
                            <div class="field-group">

                                <div class="content-input-field">
                                    <input name="text1" id="text1" type="text" value="" placeholder="User Name" required="">
                                </div>
                            </div>
                            <div class="field-group">

                                <div class="content-input-field">
                                    <input name="text1" id="text1" type="email" value="" placeholder="User Email" required="">
                                </div>
                            </div>
                            <div class="field-group">

                                <div class="content-input-field">
                                    <input name="text1" id="text3" type="text" value="" placeholder="User Phone" required="">
                                </div>
                            </div>
                            <div class="field-group">
                                <div class="content-input-field">
                                    <input name="password" id="myInput" type="Password" placeholder="Password">
                                </div>
                            </div>
                            <div class="field-group">
                                <div class="content-input-field">
                                    <textarea placeholder="Your Message Here..." required=""></textarea>
                                </div>
                            </div>
                            <div class="content-input-field">
                                <button type="submit" class="btn">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-md-6 contact_left p-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14341.093855021036!2d28.185735!3d-26.024607!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x52ded792dc303785!2sEkurhuleni%20West%20College%20for%20Further%20Education%20%26%20Training!5e0!3m2!1sen!2sza!4v1568119451062!5m2!1sen!2sza" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>


                <div class="col-lg-4 col-md-6 mt-lg-4 contact-inn-w3pvt">
                    <div class="mt-5 information-wthree">
                        <h4 class="text-uppercase mb-4"><span class="fa fa-comments"></span> Communication</h4>
                        <p class="cont-wthree-para mb-3 text-capitalize">for general queries, including property Sales and constructions, please email us at <a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-4 contact-inn-w3pvt">
                    <div class="mt-5 information-wthree">
                        <h4 class="text-uppercase mb-4"><span class="fa fa-life-ring"></span> Technical Support</h4>
                        <p class="cont-wthree-para mb-3 text-capitalize">we are ready to help! if you have any queries or issues, contact us for support <label>+12 388 455 6789</label>.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-4 contact-inn-w3pvt">
                    <div class="mt-5 information-wthree">
                        <h4 class="text-uppercase mb-4"><span class="fa fa-map"></span> Others</h4>
                        <p class="cont-wthree-para mb-3 text-capitalize">we are ready to help! if you have any queries or issues, contact us for support <label>+12 388 455 6789</label>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//contact -->


    <!--/newsletter -->
    <section class="newsletter-w3pvt py-5">
        <div class="container py-md-5">
            <form method="post" action="#">
                <p class="text-center">Subscribe to the Handbags Store mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                <div class="row subscribe-sec">
                    <div class="col-md-9">
                        <input type="email" class="form-control" id="email" placeholder="Enter Your Email.." name="email" required="">

                    </div>
                    <div class="col-md-3">

                        <button type="submit" class="btn submit">Subscribe</button>
                    </div>

                </div>


    <?php require_once "templates/footer.php"; ?>

