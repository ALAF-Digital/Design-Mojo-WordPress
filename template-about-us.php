<?php

/**
 * Template Name: About Us
 */
?>
<?php get_header() ?>

<!-- Hero Section -->
<main class="main About-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-text ">

            <?php
        if (have_rows('hero_section')):
          while (have_rows('hero_section')):
            the_row();
            // Get sub field values.
        

            $heading = get_sub_field('heading');
            $s_heading = get_sub_field('sub_heading');
            $description = get_sub_field('description');
            $action = get_sub_field('action');
            ?>
                <h1><?php echo $heading?></h1>
                <h2 class=""><?php echo $s_heading?></h2>
                <p><?php echo $description?></p>
                <a href="<?php echo $action?>" class="btn mt-4">Learn More</a>

                <?php endwhile;
        endif; ?>
            </div>
            <div class="col-lg-6">
                <div class="about-usImg">
                    <img src="<?php echo get_template_directory_uri() . '/images/about-main.png' ?>" class="img-fluid"
                        alt="">
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Hero Section End -->

<!-- Partner Section -->
<?php get_template_part('includes/partnerswhite') ?>
<!-- Partner Section End -->

<!-- Our Mission Section -->
<section class="Our-mission">
    <div class="container">
        <div class="row">
        <?php
        if (have_rows('mission_and_vision_section')):
          while (have_rows('mission_and_vision_section')):
            the_row();
            // Get sub field values.
        

            $Mission_And_Vision_Heading = get_sub_field('mission_and_vision_heading');
            $Mission_Heading = get_sub_field('mission_heading');
            $Mission_Description = get_sub_field('mission_description');
            $Vision_Heading = get_sub_field('vision_heading');
            $Vision_Description = get_sub_field('vision_description');
            ?>
            <div class="col-md-5">
                <div class="mission-main">
                    <h1><?php echo $Mission_And_Vision_Heading ?></h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mission-textMain">
                    <div class="mission-text">
                        <h1><?php echo $Mission_Heading ?></h1>
                        <p><?php echo $Mission_Description ?></p>
                    </div>
                    <div class="mission-text">
                        <h1><?php echo $Vision_Heading ?></h1>
                        <p><?php echo $Vision_Description ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile;
        endif; ?>
        </div>
    </div>
</section>
<!-- Our Mission Section End -->

<!-- Our Values Section -->
<section class="Customer Our-Values">
    <div class="container">
        <div class="col-md-6 mx-auto">
            <div class="Customer-main">
                <h1>Our Values</h1>
                <p>People, awareness and growth. The conceptual idea of ​​the value system is a consistent trinity.
                    Our people, being the main value of the company.</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row g-5">

            <div class="col-md-4">
                <div class="values-card">
                    <div class="values-cardText">
                        <h1>Growth</h1>
                        <p>Constantly working on improving our skills and knowledge base, so that we can continue to
                            provide the best service to our clients, with the best quality end results.</p>

                    </div>
                    <img src="<?php echo get_template_directory_uri() . '/images/values.png'?>" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="values-card">
                    <div class="values-cardText">
                        <h1>People</h1>
                        <p>Constantly working on improving our skills and knowledge base, so that we can continue to
                            provide the best service to our clients, with the best quality end results.</p>

                    </div>
                    <img src="<?php echo get_template_directory_uri() . '/images/values.png'?>" alt="">
                </div>
            </div>

            <div class="col-md-4">
                <div class="values-card">
                    <div class="values-cardText">
                        <h1>Awareness</h1>
                        <p>Constantly working on improving our skills and knowledge base, so that we can continue to
                            provide the best service to our clients, with the best quality end results.</p>

                    </div>
                    <img src="<?php echo get_template_directory_uri() . '/images/values.png'?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Values Section End -->

<!-- Customer Section -->
<?php get_template_part('includes/testimonialsgrey')?>
<!-- Customer Section End -->

<!-- Asked Question Section -->
<?php get_template_part('includes/faqs')?>
<!-- Asked Question Section End -->

<?php get_template_part('includes/newsletter') ?>
<?php get_footer() ?>