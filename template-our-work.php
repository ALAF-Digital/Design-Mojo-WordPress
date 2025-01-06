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
                <a href="<?php echo get_site_url();?>/services" class="btn mt-4">Learn More</a>
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
                        <?php
                        if (have_rows('branding_&_graphic_design')):
                            while (have_rows('branding_&_graphic_design')):
                                the_row();
                                // Get sub field values.
                                $heading = get_sub_field('heading');
                                $description = get_sub_field('description');
                                ?>
                                <h1><?php echo $heading ?></h1>
                                <p><?php echo $description ?></p>
                                <a href="<?php echo get_site_url(); ?>/Contact">Contact Us</a>
                            <?php endwhile;
                        endif;
                        wp_reset_query(); ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <?php
                    if (have_rows('branding_&_graphic_design')):
                        while (have_rows('branding_&_graphic_design')):
                            the_row(); ?>
                            <div class="swiper myswiper9">

                                <div class="swiper-wrapper">
                                    <?php
                                    // Get sub field values.
                                    if (have_rows('projects')):
                                        while (have_rows('projects')):
                                            the_row();
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="our-card">
                                                    <img src="<?php echo get_sub_field('images'); ?>" class="img-fluid" alt="">

                                                </div>
                                            </div>
                                            <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </div>

                                <div class="swiper-pagination"></div>
                            </div>
                        <?php endwhile;
                    endif;
                    wp_reset_query();
                    ?>
                </div>

            </div>

            <div class="row align-items-center g-5">
                <div class="col-md-6 order-md-2 order-lg-2">
                    <div class="our-workText">

                        <?php
                        if (have_rows('website_development')):
                            while (have_rows('website_development')):
                                the_row();
                                // Get sub field values.
                                $heading = get_sub_field('heading');
                                $description = get_sub_field('description');
                                ?>
                                <h1><?php echo $heading ?></h1>
                                <p><?php echo $description ?></p>
                                <a href="<?php echo get_site_url(); ?>/Contact">Contact Us</a>
                            <?php endwhile;
                        endif;
                        wp_reset_query();
                        ?>
                    </div>
                </div>

                <div class="col-md-6 order-md-1 order-lg-1">
                    <?php
                    if (have_rows('website_development')):
                        while (have_rows('website_development')):
                            the_row(); ?>
                            <div class="swiper myswiper9">
                                <div class="swiper-wrapper">

                                    <?php
                                    // Get sub field values.
                                    if (have_rows('projects')):
                                        while (have_rows('projects')):
                                            the_row();
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="our-card">
                                                    <img src="<?php echo get_sub_field('images'); ?>" class="img-fluid" alt="">

                                                </div>
                                            </div>
                                        <?php endwhile;
                                    endif;
                                    wp_reset_query();
                                    ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        <?php endwhile;
                    endif;
                    wp_reset_query();
                    ?>
                </div>
            </div>

            <div class="row align-items-center g-5">
                <div class="col-md-6  order-lg-1">
                    <div class="our-workText">
                        <?php
                        if (have_rows('mobile_app_design')):
                            while (have_rows('mobile_app_design')):
                                the_row();
                                // Get sub field values.
                                $heading = get_sub_field('heading');
                                $description = get_sub_field('description');
                                ?>
                                <h1><?php echo $heading ?></h1>
                                <p><?php echo $description ?></p>
                                <a href="<?php echo get_site_url(); ?>/Contact">Contact Us</a>
                            <?php endwhile;
                        endif;
                        wp_reset_query();
                        ?>
                    </div>
                </div>

                <div class="col-md-6  order-lg-2">
                    <?php
                    if (have_rows('mobile_app_design')):
                        while (have_rows('mobile_app_design')):
                            the_row();

                            ?>
                            <div class="swiper myswiper9">
                                <div class="swiper-wrapper">
                                    <?php
                                    // Get sub field values.
                                    if (have_rows('projects')):
                                        while (have_rows('projects')):
                                            the_row();
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="our-card">
                                                    <img src="<?php echo get_sub_field('images'); ?>"
                                                        class="img-fluid" alt="">

                                                </div>
                                            </div>
                                        <?php endwhile;
                                    endif;
                                    wp_reset_query();
                                    ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        <?php endwhile;
                    endif;
                    wp_reset_query();
                    ?>
                </div>
            </div>

            <div class="row align-items-center g-5">
                <div class="col-md-6 order-md-2 order-lg-2">
                    <div class="our-workText">

                        <?php
                        if (have_rows('web_app_design')):
                            while (have_rows('web_app_design')):
                                the_row();
                                // Get sub field values.
                                $heading = get_sub_field('heading');
                                $description = get_sub_field('description');
                                ?>
                                <h1><?php echo $heading ?></h1>
                                <p><?php echo $description ?></p>
                                <a href="<?php echo get_site_url(); ?>/Contact">Contact Us</a>
                            <?php endwhile;
                        endif;
                        wp_reset_query();
                        ?>
                    </div>
                </div>

                <div class="col-md-6 order-md-1 order-lg-1">
                    <?php
                    if (have_rows('web_app_design')):
                        while (have_rows('web_app_design')):
                            the_row(); ?>
                            <div class="swiper myswiper9">
                                <div class="swiper-wrapper">

                                    <?php
                                    // Get sub field values.
                                    if (have_rows('projects')):
                                        while (have_rows('projects')):
                                            the_row();
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="our-card">
                                                    <img src="<?php echo get_sub_field('images'); ?>" class="img-fluid" alt="">

                                                </div>
                                            </div>
                                        <?php endwhile;
                                    endif;
                                    wp_reset_query();
                                    ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        <?php endwhile;
                    endif;
                    wp_reset_query();
                    ?>
                </div>
            </div>

            <div class="row align-items-center g-5">
                <div class="col-md-6  order-lg-1">
                    <div class="our-workText">
                        <?php
                        if (have_rows('social_media_marketing')):
                            while (have_rows('social_media_marketing')):
                                the_row();
                                // Get sub field values.
                                $heading = get_sub_field('heading');
                                $description = get_sub_field('description');
                                ?>
                                <h1><?php echo $heading ?></h1>
                                <p><?php echo $description ?></p>
                                <a href="<?php echo get_site_url(); ?>/Contact">Contact Us</a>
                            <?php endwhile;
                        endif;
                        wp_reset_query();
                        ?>
                    </div>
                </div>

                <div class="col-md-6  order-lg-2">
                    <?php
                    if (have_rows('social_media_marketing')):
                        while (have_rows('social_media_marketing')):
                            the_row();

                            ?>
                            <div class="swiper myswiper9">
                                <div class="swiper-wrapper">
                                    <?php
                                    // Get sub field values.
                                    if (have_rows('projects')):
                                        while (have_rows('projects')):
                                            the_row();
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="our-card">
                                                    <img src="<?php echo get_sub_field('images'); ?>"
                                                        class="img-fluid" alt="">

                                                </div>
                                            </div>
                                        <?php endwhile;
                                    endif;
                                    wp_reset_query();
                                    ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        <?php endwhile;
                    endif;
                    wp_reset_query();
                    ?>
                </div>
            </div>

            <div class="row align-items-center g-5">
                <div class="col-md-6 order-md-2 order-lg-2">
                    <div class="our-workText">

                        <?php
                        if (have_rows('seo')):
                            while (have_rows('seo')):
                                the_row();
                                // Get sub field values.
                                $heading = get_sub_field('heading');
                                $description = get_sub_field('description');
                                ?>
                                <h1><?php echo $heading ?></h1>
                                <p><?php echo $description ?></p>
                                <a href="<?php echo get_site_url(); ?>/Contact">Contact Us</a>
                            <?php endwhile;
                        endif;
                        wp_reset_query();
                        ?>
                    </div>
                </div>

                <div class="col-md-6 order-md-1 order-lg-1">
                    <?php
                    if (have_rows('seo')):
                        while (have_rows('seo')):
                            the_row(); ?>
                            <div class="swiper myswiper9">
                                <div class="swiper-wrapper">

                                    <?php
                                    // Get sub field values.
                                    if (have_rows('projects')):
                                        while (have_rows('projects')):
                                            the_row();
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="our-card">
                                                    <img src="<?php echo get_sub_field('images'); ?>" class="img-fluid" alt="">

                                                </div>
                                            </div>
                                        <?php endwhile;
                                    endif;
                                    wp_reset_query();
                                    ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        <?php endwhile;
                    endif;
                    wp_reset_query();
                    ?>
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