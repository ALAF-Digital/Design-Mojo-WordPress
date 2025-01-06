<?php

/**
 * Template Name: Logo Form
 */
?>
<?php get_header()?>

    <!-- Hero Section -->
    <main class="main contact-us template-formMain">
        <div class="container">
            <div class="col-md-6 mx-auto text-center">
                <h1>Logo and Branding Form</h1>
                <p>We’re here to help! Whether you have questions, feedback, or need assistance,
                our team is ready to support you.</p>
            </div>

        </div>
    </main>
    <!-- Hero Section End -->

    <!-- Contact Form Section -->
    <Section class="contact template-form">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-9 col-sm-12">
                    
                    <?php echo do_shortcode('[contact-form-7 id="d44f4ce" title="Logo Form"]')?>
                </div>
            </div>
        </div>
    </Section>
    <!-- Contact Form Section End -->


<?php get_footer()?>