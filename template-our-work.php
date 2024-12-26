<?php

/**
 * Template Name: Our Work
 */
?>
<?php get_header() ?>


<!-- Hero Section -->
<main class="main About-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-text ">
                <h1>Inspiring brands</h1>
                <h2 class="">for the Digital future.</h2>
                <p>
                    We are fully-integrated agency to bag case studies covering digital marketing, advertising,
                    design & development, packaging.
                </p>
                <a href="#" class="btn mt-4">Learn More</a>
            </div>
            <div class="col-lg-6">
                <div class="about-usImg">
                    <img src="<?php echo get_template_directory_uri() . '/images/7b04e496-274d-4529-ab4b-1ab342a497fe 1.png' ?>"
                        class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Hero Section End -->

<section class="Customer Asked">
    <div class="container">
        <div class="col-md-7 mx-auto">
            <div class="Customer-main mb-5">
                <h1>Our Work</h1>
                <p>People, awareness and growth. The conceptual idea of ​​the value system is a consistent trinity.
                    Our people, being the main value of the company, </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="Our-Work">
            <div class="row align-items-center g-5">
                <div class="col-md-6">
                    <div class="our-workText">
                        <h1>Digital Strategy Development</h1>
                        <p>We create customized strategies that align with your business goals, using data-driven
                            insights to enhance your brand's online presence.</p>
                        <a href="<?php echo get_site_url(); ?>/Contact">Contact Us</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="swiper myswiper9">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="our-card">
                                    <img src="<?php echo get_template_directory_uri() . '/images/our.png' ?>"
                                        class="img-fluid" alt="">

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="our-card">
                                    <img src="<?php echo get_template_directory_uri() . '/images/our.png' ?>"
                                        class="img-fluid" alt="">

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="our-card">
                                    <img src="<?php echo get_template_directory_uri() . '/images/our.png' ?>"
                                        class="img-fluid" alt="">

                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>

            <div class="row align-items-center g-5">
                <div class="col-md-6 order-md-2 order-lg-2">
                    <div class="our-workText">
                        <h1>Digital Strategy Development</h1>
                        <p>We create customized strategies that align with your business goals, using data-driven
                            insights to enhance your brand's online presence.</p>
                        <a href="<?php echo get_site_url(); ?>/Contact">Contact Us</a>
                    </div>
                </div>

                <div class="col-md-6 order-md-1 order-lg-1">
                    <div class="swiper myswiper9">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="our-card">
                                    <img src="<?php echo get_template_directory_uri() . '/images/our.png' ?>"
                                        class="img-fluid" alt="">

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="our-card">
                                    <img src="<?php echo get_template_directory_uri() . '/images/our.png' ?>"
                                        class="img-fluid" alt="">

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="our-card">
                                    <img src="<?php echo get_template_directory_uri() . '/images/our.png' ?>"
                                        class="img-fluid" alt="">

                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center g-5">
                <div class="col-md-6  order-lg-1">
                    <div class="our-workText">
                        <h1>Digital Strategy Development</h1>
                        <p>We create customized strategies that align with your business goals, using data-driven
                            insights to enhance your brand's online presence.</p>
                        <a href="<?php echo get_site_url(); ?>/Contact">Contact Us</a>
                    </div>
                </div>

                <div class="col-md-6  order-lg-2">
                    <div class="swiper myswiper9">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="our-card">
                                    <img src="<?php echo get_template_directory_uri() . '/images/our.png' ?>"
                                        class="img-fluid" alt="">

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="our-card">
                                    <img src="<?php echo get_template_directory_uri() . '/images/our.png' ?>"
                                        class="img-fluid" alt="">

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="our-card">
                                    <img src="<?php echo get_template_directory_uri() . '/images/our.png' ?>"
                                        class="img-fluid" alt="">

                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Asked Question Section -->
<?php get_template_part('includes/faqs') ?>
<!-- Asked Question Section End -->

<?php get_template_part('includes/newsletter') ?>
<?php get_footer() ?>