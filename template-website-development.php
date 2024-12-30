<?php

/**
 * Template Name: Website Development
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
                        <p>A$ 500<sub>/ month</sub></p>
                        <p>Starter Package</p>
                        <span>For most businesses that want
                            to optimize web queries</span>
                    </div>
                    <div class="Price-Border"></div>
                    <div class="Pricing-CardDetail">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Basic Website Design</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Up to 3 pages</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Standard layout and design</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Mobile-friendly</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Basic contact form</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>1 round of revisions</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Basic SEO setup</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Domain (1 year)</p>
                            </li>
                        </ul>
                        <a href="#" class="mt-5">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="Pricing-Card">
                    <div class="Pricing-CardPrice">
                        <p>A$ 800<sub>/ month</sub></p>
                        <p>Bronze Package</p>
                        <span>For most businesses that want
                            to optimize web queries</span>
                    </div>
                    <div class="Price-Border"></div>
                    <div class="Pricing-CardDetail">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Standard Website Design</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Up to 5 pages</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Custom layout and design</p>
                            </li><li><i class="fa-solid fa-check"></i>
                                <p>Mobile-friendly</p>
                            </li><li><i class="fa-solid fa-check"></i>
                                <p>Advanced contact form</p>
                            </li><li><i class="fa-solid fa-check"></i>
                                <p>2 rounds of revisions</p>
                            </li><li><i class="fa-solid fa-check"></i>
                                <p>Standard SEO optimization</p>
                            </li><li><i class="fa-solid fa-check"></i>
                                <p>Basic analytics integration</p>
                            </li><li><i class="fa-solid fa-check"></i>
                                <p>Domain and hosting included for 1 year</p>
                            </li><li><i class="fa-solid fa-check"></i>
                                <p>Online Appointment/Booking/Scheduling/Online Ordering</p>                         
                        </ul>
                        <a href="#" class="mt-5">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="Pricing-Card">
                    <div class="Pricing-CardPrice">
                        <p>A$ 1200<sub>/ month</sub></p>
                        <p>Silver Package</p>
                        <span>For most businesses that want
                            to optimize web queries</span>
                    </div>
                    <div class="Price-Border"></div>
                    <div class="Pricing-CardDetail">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Free Logo Design</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Unlimited Stock Photos</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>8-10 Pages Website</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>5 Banner Design</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>SSL</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>15 Business emails</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>FREE Google Friendly Sitemap Complete W3C Certified HTML</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Social Media Pages Design</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Online Payment Integration (Optional)</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>SEO Friendly Content</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Mobile Responsive Site</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Complete Branding Solution</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Online Appointment/Booking/Scheduling/Online Ordering</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Integration (Optional)</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Content management system (CMS)</p>
                            </li>
                        </ul>
                        <a href="#" class="mt-5">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="Pricing-Card">
                    <div class="Pricing-CardPrice">
                        <p>A$ 2,000<sub>/ month</sub></p>
                        <p>Gold Package</p>
                        <span>For most businesses that want
                            to optimize web queries</span>
                    </div>
                    <div class="Price-Border"></div>
                    <div class="Pricing-CardDetail">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Advanced Website Design</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Up to 10 pages</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Fully custom design and layout</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Blog setup and integration</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>3 rounds of revisions</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Enhanced SEO optimization</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Social media integration</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Basic e-commerce functionality (if needed)</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Domain and hosting included for 1 year</p>
                            </li>
                        </ul>
                        <a href="#" class="mt-5">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="Pricing-Card">
                    <div class="Pricing-CardPrice">
                        <p>A$ 3,500<sub>/ month</sub></p>
                        <p>Platinum Package</p>
                        <span>For most businesses that want
                            to optimize web queries</span>
                    </div>
                    <div class="Price-Border"></div>
                    <div class="Pricing-CardDetail">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Premium Website Design</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Up to 20 pages</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Premium custom design and layout</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Advanced mobile optimization</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Blog and e-commerce setup</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>5 rounds of revisions</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Advanced SEO and analytics integration</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Custom contact forms and interactive elements</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Integration with third-party services (e.g., CRM, mailing lists)</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Domain and hosting included for 1 year</p>
                            </li>
                        </ul>
                        <a href="#" class="mt-5">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="Pricing-Card">
                    <div class="Pricing-CardPrice">
                        <p>A$ 5,000+<sub>/ month</sub></p>
                        <p>Titanium Package</p>
                        <span>For most businesses that want
                            to optimize web queries</span>
                    </div>
                    <div class="Price-Border"></div>
                    <div class="Pricing-CardDetail">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>
                                <p>All-Inclusive Website Design</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Unlimited pages</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Fully bespoke design and development</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Comprehensive mobile optimization</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Blog, e-commerce, and membership functionality</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Unlimited revisions</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Complete SEO, analytics, and performance optimization</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Custom web applications and features</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Dedicated support and maintenance for 6 months</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Domain and hosting included for 1 year</p>
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