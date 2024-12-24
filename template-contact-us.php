<?php

/**
 * Template Name: Contact Us
 */
?>
<?php get_header()?>

    <!-- Hero Section -->
    <main class="main contact-us">
        <div class="container">
            <div class="col-md-6 mx-auto text-center">
                <h1>Contact Us</h1>
                <p>We’re here to help! Whether you have questions, feedback, or need assistance,
                    our team is ready to support you.</p>
            </div>

        </div>
    </main>
    <!-- Hero Section End -->

    <!-- Contact Form Section -->
    <Section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="our-team">
                        <div class="our-teamText">
                            <h4>Talk to our team today to:</h4>
                            <p>Our experts will provide tailored solutions to ensure efficient and secure cloud
                                operations
                                for your organization.</p>
                        </div>
                        <div class="our-teamText1">
                            <ul>
                                <li><i class="fa-solid fa-check"></i>
                                    <p>Understand how our API product may fulfill your needs</p>
                                </li>
                                <li><i class="fa-solid fa-check"></i>
                                    <p>Discover the capabilities and get answers to your questions</p>
                                </li>
                                <li><i class="fa-solid fa-check"></i>
                                    <p>Get a customized quote for your busines</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="our-team contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="first">
                                    <label>First name</label>
                                    <input type="text" class="text form-control" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="first">
                                    <label>Last name</label>
                                    <input type="text" class="text form-control" required="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="first first1">
                                    <label>Phone number</label>
                                    <div class="number-field">
                                        <ul>
                                            <li><img src="assets/images/Frame 15.png" alt=""></li>
                                            <li>+6</li>

                                        </ul>
                                        <input type="number" class="text form-control" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="first">
                                    <label>Work email address</label>
                                    <input type="email" class="text form-control" required="">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="first">
                                    <label>Company name</label>
                                    <input type="text" class="text form-control" required="">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="first">
                                    <label>Your company size</label>
                                    <div class="dropdown">
                                        <button class="block d-flex justify-content-between align-items-center"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select one
                                            <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu1" aria-labelledby="">
                                            <li><a class="dropdown-item" href="#">I’m contacting for</a></li>
                                            <li><a class="dropdown-item" href="#">I’m contacting for</a></li>
                                            <li><a class="dropdown-item" href="#">I’m contacting for</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="first">
                                    <label>How did you first hear about us</label>
                                    <textarea class="text form-control" rows="3" required=""></textarea>
                                </div>

                                <button class="btn">Submit</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Section>
    <!-- Contact Form Section End -->

<!-- Partner Section -->
<?php get_template_part('includes/partnersgrey')?>
<!-- Partner Section End -->
    <!-- Asked Question Section -->
<?php get_template_part('includes/faqs')?>
<!-- Asked Question Section End -->

 
    <?php get_template_part('includes/newsletter')?>
<?php get_footer()?>