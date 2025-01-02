<?php

/**
 * Template Name: Services
 */
?>
<?php get_header() ?>

<!-- Hero Section -->
<main class="main development-main website-main">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-text ">
                <h1 class="m-0">Website Design</h1>

                <h2>Services that make
                    Conversions</h2>
                <p>
                    Our website design agency creates marketing websites & landing pages that build trust, loyalty
                    and increase conversions.
                </p>
                <div class="development-btn">
                    <a href="#" class="btn">Talk to Our Experts</a>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-usImg">
                    <img src="<?php echo get_template_directory_uri() . '/images/3d-rendering-website-hosting-concept 1.png' ?>"
                        class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Hero Section End -->

<!-- Web Presence Section -->
<section class="Web-Presence">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="web-presenceContent">
                    <div class="web-presenceImg">
                        <img src="<?php echo get_template_directory_uri() . '/images/Group (5).png' ?>" alt="">
                    </div>
                    <div class="web-presenceText">
                        <h3>Get strong Web Presence</h3>
                        <p>Improve your reputation and brand awareness.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="web-presenceContent">
                    <div class="web-presenceImg">
                        <img src="<?php echo get_template_directory_uri() . '/images/Sales (1).png' ?>" alt="">
                    </div>
                    <div class="web-presenceText">
                        <h3>Get strong Web Presence</h3>
                        <p>Improve your reputation and brand awareness.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="web-presenceContent">
                    <div class="web-presenceImg">
                        <img src="<?php echo get_template_directory_uri() . '/images/Group (6).png' ?>" alt="">
                    </div>
                    <div class="web-presenceText">
                        <h3>Get strong Web Presence</h3>
                        <p>Improve your reputation and brand awareness.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Web Presence Section End -->

<!-- Customer Section -->
<?php get_template_part('includes/testimonialswhite') ?>
<!-- Customer Section End -->

<!-- Sevices Section -->
<section class="Services main-services">
    <div class="container">
        <div class="col-md-9 mx-auto">
            <div class="WordPress-main">
                <h1>Our Service</h1>
                <p>
                    We provide expert growth marketing solutions, working as your full stack team or extending your in
                    house marketing efforts to drive results.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!-- <div class="col-lg-4">
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
            </div> -->
            <div class="col-lg-12">
                <div class="swiper new-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-card">
                                <h1>Logo & Branding</h1>
                                <div class="service-cardButton">
                                    <a class="Service-acnhor"
                                        href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Logo Design</a>
                                    <a class="Service-acnhor Service-acnhor1"
                                        href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Brand
                                        Identity</a>
                                </div>
                                <div class="service-cardButton service-cardButton1">
                                    <a class="Service-acnhor Service-acnhor1"
                                        href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Graphic
                                        Design</a>
                                    <a class="Service-acnhor"
                                        href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Responsive
                                        Website Design</a>
                                </div>
                                <div class="service-cardImages">
                                    <img src="<?php echo get_template_directory_uri() . '/images/Free-Stationery-Branding-PSD-Mockup 1.png' ?>"
                                        class="img-fluid service-cardImg" alt="" />
                                    <img src="<?php echo get_template_directory_uri() . '/images/Vector1.png" class="img-fluid service-cardImg1' ?>"
                                        alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-card service-card1">
                                <h1>Website Development</h1>
                                <div class="service-cardButton">
                                    <a class="Service-acnhor Service-acnhor2"
                                        href="<?php echo get_site_url(); ?>/web-development-in-australia">CMS
                                        Development</a>
                                    <a class="Service-acnhor Service-acnhor1"
                                        href="<?php echo get_site_url(); ?>/web-development-in-australia">Wordpress
                                        Development</a>
                                </div>
                                <div class="service-cardButton service-cardButton1">
                                    <a class="Service-acnhor Service-acnhor1"
                                        href="<?php echo get_site_url(); ?>/web-development-in-australia">PHP
                                        Development</a>
                                    <a class="Service-acnhor Service-acnhor2"
                                        href="<?php echo get_site_url(); ?>/web-development-in-australia">Laravel
                                        Development</a>
                                </div>
                                <div class="service-cardImages">
                                    <img src="<?php echo get_template_directory_uri() . '/images/clipart1891602 1.png' ?>"
                                        class="img-fluid service-cardImg" alt="" />
                                    <img src="<?php echo get_template_directory_uri() . '/images/Mask group.png' ?>"
                                        class="img-fluid service-cardImg1" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-card">
                                <h1>Mobile App Design</h1>
                                <div class="service-cardButton">
                                    <a class="Service-acnhor"
                                        href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">Hybrid
                                        App Development</a>
                                    <a class="Service-acnhor Service-acnhor1"
                                        href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">iOS App
                                        Development</a>
                                </div>
                                <div class="service-cardButton service-cardButton1">
                                    <a class="Service-acnhor Service-acnhor1"
                                        href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">Android
                                        App Development</a>
                                    <a class="Service-acnhor"
                                        href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">Flutter
                                        App Development</a>
                                </div>
                                <div class="service-cardImages">
                                    <img src="<?php echo get_template_directory_uri() . '/images/Free-Stationery-Branding-PSD-Mockup 1.png' ?>"
                                        class="img-fluid service-cardImg" alt="" />
                                    <img src="<?php echo get_template_directory_uri() . '/images/Vector1.png' ?>"
                                        class="img-fluid service-cardImg1" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-card service-card1">
                                <h1>Web App Design</h1>
                                <div class="service-cardButton">
                                    <a class="Service-acnhor Service-acnhor2"
                                        href="<?php echo get_site_url(); ?>/web-app-design">Brand Identity Design</a>
                                    <a class="Service-acnhor Service-acnhor1"
                                        href="<?php echo get_site_url(); ?>/web-app-design">Brand Guidelines
                                        Creation</a>
                                </div>
                                <div class="service-cardButton service-cardButton1">
                                    <a class="Service-acnhor Service-acnhor1"
                                        href="<?php echo get_site_url(); ?>/web-app-design">Website and Social Media
                                        Branding</a>
                                    <a class="Service-acnhor Service-acnhor2"
                                        href="<?php echo get_site_url(); ?>/web-app-design">Rebranding Services</a>
                                </div>
                                <div class="service-cardImages">
                                    <img src="<?php echo get_template_directory_uri() . '/images/clipart1891602 1.png' ?>"
                                        class="img-fluid service-cardImg" alt="" />
                                    <img src="<?php echo get_template_directory_uri() . '/images/Mask group.png' ?>"
                                        class="img-fluid service-cardImg1" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card">
                                <h1>Social Media Marketing </h1>
                                <div class="service-cardButton">
                                    <a class="Service-acnhor"
                                        href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">LinkedIn
                                        Marketing</a>
                                    <a class="Service-acnhor Service-acnhor1"
                                        href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">Instagram
                                        Marketing</a>
                                </div>
                                <div class="service-cardButton service-cardButton1">
                                    <a class="Service-acnhor Service-acnhor1"
                                        href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">Facebook
                                        Marketing</a>
                                    <a class="Service-acnhor"
                                        href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">Social
                                        Media Optimization</a>
                                </div>
                                <div class="service-cardImages">
                                    <img src="<?php echo get_template_directory_uri() . '/images/Free-Stationery-Branding-PSD-Mockup 1.png' ?>"
                                        class="img-fluid service-cardImg" alt="" />
                                    <img src="<?php echo get_template_directory_uri() . '/images/Vector1.png' ?>"
                                        class="img-fluid service-cardImg1" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card service-card1">
                                <h1>SEO</h1>
                                <div class="service-cardButton">
                                    <a class="Service-acnhor Service-acnhor2"
                                        href="<?php echo get_site_url(); ?>/seo-in-australia">Brand Identity Design</a>
                                    <a class="Service-acnhor Service-acnhor1"
                                        href="<?php echo get_site_url(); ?>/seo-in-australia">Brand Guidelines
                                        Creation</a>
                                </div>
                                <div class="service-cardButton service-cardButton1">
                                    <a class="Service-acnhor Service-acnhor1"
                                        href="<?php echo get_site_url(); ?>/seo-in-australia">Website and Social Media
                                        Branding</a>
                                    <a class="Service-acnhor Service-acnhor2"
                                        href="<?php echo get_site_url(); ?>/seo-in-australia">Rebranding Services</a>
                                </div>
                                <div class="service-cardImages">
                                    <img src="<?php echo get_template_directory_uri() . '/images/clipart1891602 1.png' ?>"
                                        class="img-fluid service-cardImg" alt="" />
                                    <img src="<?php echo get_template_directory_uri() . '/images/Mask group.png' ?>"
                                        class="img-fluid service-cardImg1" alt="" />
                                </div>
                            </div>
                        </div>


                    </div>
                    
                </div>
                <div class="swiper-buttons swiper-buttons1">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Sevices Section End -->

<!-- Simple Pricing Section -->
<!-- <section class="Customer Pricing1 simple-pricing">
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
                        <p>$ 10 <sub>/ month</sub></p>
                        <p>Basic</p>
                        <span>For most businesses that want
                            to optimize web queries</span>
                    </div>
                    <div class="Price-Border"></div>
                    <div class="Pricing-CardDetail">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>
                                <p>All limited link</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Own analytics platform</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Chat support</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Optimize hastags</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Unlimited user</p>
                            </li>
                        </ul>
                        <a href="#" class="mt-5">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="Pricing-Card">
                    <div class="Pricing-CardPrice">
                        <p>$ 10 <sub>/ month</sub></p>
                        <p>Basic</p>
                        <span>For most businesses that want
                            to optimize web queries</span>
                    </div>
                    <div class="Price-Border"></div>
                    <div class="Pricing-CardDetail">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>
                                <p>All limited link</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Own analytics platform</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Chat support</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Optimize hastags</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Unlimited user</p>
                            </li>
                        </ul>
                        <a href="#" class="mt-5">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="Pricing-Card">
                    <div class="Pricing-CardPrice">
                        <p>$ 10 <sub>/ month</sub></p>
                        <p>Basic</p>
                        <span>For most businesses that want
                            to optimize web queries</span>
                    </div>
                    <div class="Price-Border"></div>
                    <div class="Pricing-CardDetail">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>
                                <p>All limited link</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Own analytics platform</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Chat support</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Optimize hastags</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Unlimited user</p>
                            </li>
                        </ul>
                        <a href="#" class="mt-5">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="Pricing-Card">
                    <div class="Pricing-CardPrice">
                        <p>$ 10 <sub>/ month</sub></p>
                        <p>Basic</p>
                        <span>For most businesses that want
                            to optimize web queries</span>
                    </div>
                    <div class="Price-Border"></div>
                    <div class="Pricing-CardDetail">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>
                                <p>All limited link</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Own analytics platform</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Chat support</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Optimize hastags</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Unlimited user</p>
                            </li>
                        </ul>
                        <a href="#" class="mt-5">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="Pricing-Card">
                    <div class="Pricing-CardPrice">
                        <p>$ 10 <sub>/ month</sub></p>
                        <p>Basic</p>
                        <span>For most businesses that want
                            to optimize web queries</span>
                    </div>
                    <div class="Price-Border"></div>
                    <div class="Pricing-CardDetail">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>
                                <p>All limited link</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Own analytics platform</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Chat support</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Optimize hastags</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Unlimited user</p>
                            </li>
                        </ul>
                        <a href="#" class="mt-5">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="Pricing-Card">
                    <div class="Pricing-CardPrice">
                        <p>$ 10 <sub>/ month</sub></p>
                        <p>Basic</p>
                        <span>For most businesses that want
                            to optimize web queries</span>
                    </div>
                    <div class="Price-Border"></div>
                    <div class="Pricing-CardDetail">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>
                                <p>All limited link</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Own analytics platform</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Chat support</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Optimize hastags</p>
                            </li>
                            <li><i class="fa-solid fa-check"></i>
                                <p>Unlimited user</p>
                            </li>
                        </ul>
                        <a href="#" class="mt-5">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> -->
<!-- Simple Pricing Section End -->

<!-- Project Section -->
<?php get_template_part('includes/projects') ?>
<!-- Project Section End -->

<!-- Asked Question Section -->
<?php get_template_part('includes/faqs') ?>
<!-- Asked Question Section End -->

<?php get_template_part('includes/newsletter') ?>
<?php get_footer() ?>