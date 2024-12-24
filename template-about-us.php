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
                <h1>Fueling Digital</h1>
                <h2 class="">change for brands</h2>
                <p>
                    We offer scalable web and mobile solutions coupled with digital marketing services under one
                    roof — without silos or handoffs.
                </p>
                <a href="#" class="btn mt-4">Learn More</a>
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
            <div class="col-md-5">
                <div class="mission-main">
                    <h1>What is imprinted in our DNA</h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mission-textMain">
                    <div class="mission-text">
                        <h1>Mission</h1>
                        <p>We are a caring partner that provides innovative Design & Development solutions for
                            funded startups, technology SMEs and Fortune 500 companies.</p>
                    </div>
                    <div class="mission-text">
                        <h1>Vision</h1>
                        <p>We are a full-cycle Digital Product Agency that builds and transforms amazing projects
                            with human-centric design for the world`s top companies.</p>
                    </div>
                </div>
            </div>
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