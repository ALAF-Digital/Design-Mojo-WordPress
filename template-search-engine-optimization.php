<?php

/**
 * Template Name: Search Engine Optimization
 */
?>
<?php get_header() ?>

<!-- Hero Section -->
<main class="main development-main">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-text hero-text1">
                <?php
                if (have_rows('hero_section')):
                    while (have_rows('hero_section')):
                        the_row();
                        // Get sub field values.
                

                        $heading = get_sub_field('heading');
                        $s_heading = get_sub_field('sub_heading');
                        $description = get_sub_field('description');
                        $action_one = get_sub_field('action_one');
                        $action_two = get_sub_field('action_two');
                        ?>
                        <h2><?php echo $heading ?></h2>
                        <h1><?php echo $s_heading ?></h1>
                        <p><?php echo $description ?></p>
                        <div class="development-btn">
                            <a href="<?php echo $action_one ?>" class="btn">Get Started</a>
                            <a href="<?php echo $action_two ?>" class="btn1">Pricing</a>
                        </div>
                    </div>
                <?php endwhile;
                endif; ?>
            <div class="col-lg-6">
                <div class="contact Development-form">
                    <div class="our-team contact-form Development-form1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="first">

                                    <input type="text" class="text form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="first">

                                    <input type="email" class="text form-control" placeholder="Your Email" required="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="first first1">

                                    <div class="number-field number-field1">
                                    <ul class="form-ul">
                                            <li><img src="<?php echo get_template_directory_uri() . '/images/Frame 15.png' ?>"
                                                    alt=""></li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    +1 </a>
                                                <ul class="dropdown-menu">
                                                    <li> <a class="dropdown-item" href="#">+971</a>
                                                    </li>
                                                    <li> <a class="dropdown-item" href="#">+90</a>
                                                    </li>
                                                    <li> <a class="dropdown-item" href="#">+92</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <input type="number" class="text form-control" placeholder="Phone number"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="first">

                                    <input type="text" class="text form-control" placeholder="Your Business Nature"
                                        required="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="first">

                                    <textarea class="text form-control" placeholder="How did you first hear about us"
                                        rows="5" required=""></textarea>
                                </div>

                                <button class="btn">Submit</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<!-- Hero Section End -->

<!-- Development-Slider Section -->
<section class="Partners Development-Slider">
    <!-- First Swiper -->
    <div class="swiper myswiper8">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="Development-SliderCard">

                    <img src="<?php echo get_template_directory_uri() . '/images/Ellipse 51.png' ?>" class="img-fluid"
                        alt="" />
                    <h3>DEVELOPMENT</h3>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="Development-SliderCard">

                    <img src="<?php echo get_template_directory_uri() . '/images/Ellipse 51.png' ?>" class="img-fluid"
                        alt="" />
                    <h3>animation</h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="Development-SliderCard">

                    <img src="<?php echo get_template_directory_uri() . '/images/Ellipse 51.png' ?>" class="img-fluid"
                        alt="" />
                    <h3>marketing</h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="Development-SliderCard">

                    <img src="<?php echo get_template_directory_uri() . '/images/Ellipse 51.png' ?>" class="img-fluid"
                        alt="" />
                    <h3>ui/ux</h3>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="Development-SliderCard">

                    <img src="<?php echo get_template_directory_uri() . '/images/Ellipse 51.png' ?>" class="img-fluid"
                        alt="" />
                    <h3>creative design </h3>
                </div>
            </div>

        </div>
    </div>


</section>
<!-- Development-Slider Section End -->

<!-- Customer Section -->
<?php get_template_part('includes/testimonialswhite') ?>
<!-- Customer Section End -->

<!-- Simple Pricing Section -->
<section class="Customer Pricing1" id="pricing">
    <div class="container">
        <div class="col-md-7 mx-auto">
            <div class="Customer-main">
                <h1>Simple Pricing No Contract</h1>
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie,
                    musica,
                    sport etc, litot Europa usa li sam vocabular.</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="Pricing-Card">
                    <div class="Pricing-CardPrice">
                        <p>A$ 500<sub>/ 3 Months</sub></p>
                        <p>Basic</p>
                        <span>For most businesses that want
                            to optimize web queries</span>
                    </div>
                    <div class="Price-Border"></div>
                    <div class="Pricing-CardDetail">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Prior Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Business Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Consumer Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Competitor Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>5 Selected Keywords Targeting</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>5 Pages Keyword Targeted</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Meta Tags Creation</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Keyword Optimization</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Keyword Optimization</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Image Optimization</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Inclusion of anchors</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Tracking & Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Google Analytics Installation</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Google Webmaster Installation</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Call To Action Plan</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Creation of Sitemaps</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Monthly Reporting</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Recommendations</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Email Support</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Phone Support</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Off Page Optimization</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Social Bookmarking</p>
                            </li>
                        </ul>
                        <a href="#" class="mt-5">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="Pricing-Card">
                    <div class="Pricing-CardPrice">
                        <p>A$ 1,000<sub>/ 3 Months</sub></p>
                        <p>Standard</p>
                        <span>For most businesses that want
                            to optimize web queries</span>
                    </div>
                    <div class="Price-Border"></div>
                    <div class="Pricing-CardDetail">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Prior Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Business Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Consumer Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Competitor Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>15 Selected Keywords Targeting</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>15 Pages Keyword Targeted</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Meta Tags Creation</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Keyword Optimization</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Inclusion of anchors</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Tracking & Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Google Analytics Installation</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Google Webmaster Installation</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Call To Action Plan</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Creation of Sitemaps</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Monthly Reporting</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Recommendations</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Email Support</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Phone Support</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Off Page Optimization</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Social Bookmarking</p>
                            </li>
                        </ul>
                        <a href="#" class="mt-5">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="Pricing-Card">
                    <div class="Pricing-CardPrice">
                        <p>A$ 1,500<sub>/ 3 Months</sub></p>
                        <p>Premium</p>
                        <span>For most businesses that want
                            to optimize web queries</span>
                    </div>
                    <div class="Price-Border"></div>
                    <div class="Pricing-CardDetail">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Prior Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Business Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Consumer Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Competitor Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>30 Selected Keywords Targeting</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>30 Pages Keyword Targeted</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Meta Tags Creation</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Keyword Optimization</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Image Optimization</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Inclusion of anchors</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Tracking & Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Google Analytics Installation</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Google Webmaster Installation</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Call To Action Plan</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Creation of Sitemaps</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Monthly Reporting</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Recommendations</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Email Support</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Phone Support</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Off Page Optimization</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Social Bookmarking</p>
                            </li>
                        </ul>
                        <a href="#" class="mt-5">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="Pricing-Card">
                    <div class="Pricing-CardPrice">
                        <p>A$ 2,000<sub>/ 3 Months</sub></p>
                        <p>Platinum</p>
                        <span>For most businesses that want
                            to optimize web queries</span>
                    </div>
                    <div class="Price-Border"></div>
                    <div class="Pricing-CardDetail">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Prior Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Business Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Consumer Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Competitor Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>70 Selected Keywords Targeting</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>50 Pages Keyword Targeted</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Meta Tags Creation</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Keyword Optimization</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Image Optimization</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Inclusion of anchors</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Tracking & Analysis</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Google Analytics Installation</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Call To Action Plan</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Creation of Sitemaps</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Monthly Reporting</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Recommendations</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Email Support</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Phone Support</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Off Page Optimization</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Social Bookmarking</p>
                            </li>
                        </ul>
                        <a href="#" class="mt-5">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Simple Pricing Section End -->

<!-- Project Section -->
<?php get_template_part('includes/projects') ?>
<!-- Project Section End -->

<!-- Sevices Section -->
<section class="Services WordPress-Excellence">
    <div class="container">
        <div class="col-md-9 mx-auto">
            <div class="WordPress-main">
                <h1>Gravitate Towards Unparalleled WordPress Excellence</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="Service-main">
                    <h1>Unrivaled
                        WordPress
                        Excellence.</h1>
                    <p>
                        Achieve digital success with exceptional WordPress solutions tailored to your needs.
                    </p>
                </div>
                <div class="swiper-buttons">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="swiper myswiper3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-card">

                                <div class="service-cardImages">
                                    <div class="service-cardImg">
                                        <img src="<?php echo get_template_directory_uri() . '/images/wordpress-plugin-development 1.png' ?>"
                                            class="img-fluid" alt="" />
                                        <h1>WordPress Plugin Development</h1>
                                        <p>Assessing the specific needs for enhanced functionality, ensuring a seamless
                                            and exclusive user experience. Trust our adept developers to deliver
                                            customized solutions, enriching your website with unparalleled features and
                                            performance.
                                        </p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri() . '/images/Intersect.png" class="img-fluid service-cardImg1' ?>"
                                        alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-card">

                                <div class="service-cardImages">
                                    <div class="service-cardImg">
                                        <img src="<?php echo get_template_directory_uri() . '/images/wordpress-plugin-development 2.png' ?>"
                                            class="img-fluid" alt="" />
                                        <h1>WordPress CMS Development</h1>
                                        <p>Our team diligently conducts thorough examinations to ensure seamless
                                            functionality and optimal responsiveness. We actively seek feedback from
                                            your team as well, allowing us to make necessary adjustments.
                                        </p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri() . '/images/Intersect.png" class="img-fluid service-cardImg1' ?>"
                                        alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-card">

                                <div class="service-cardImages">
                                    <div class="service-cardImg">
                                        <img src="<?php echo get_template_directory_uri() . '/images/wordpress-plugin-development 1.png' ?>"
                                            class="img-fluid" alt="" />
                                        <h1>WordPress Plugin Development</h1>
                                        <p>Assessing the specific needs for enhanced functionality, ensuring a seamless
                                            and exclusive user experience. Trust our adept developers to deliver
                                            customized solutions, enriching your website with unparalleled features and
                                            performance.
                                        </p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri() . '/images/Intersect.png" class="img-fluid service-cardImg1' ?>"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sevices Section End -->


<!-- Asked Question Section -->
<?php get_template_part('includes/faqs') ?>
<!-- Asked Question Section End -->

<?php get_template_part('includes/newsletter') ?>
<?php get_footer() ?>