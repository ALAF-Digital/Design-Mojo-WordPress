<?php

/**
 * Template Name: Web App Form
 */
?>
<?php get_header() ?>

<!-- Hero Section -->
<main class="main contact-us template-formMain">
    <div class="container">
        <div class="col-md-6 mx-auto text-center">
            <h1>Web App Development Form</h1>
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

                <?php echo do_shortcode('[contact-form-7 id="c79e1f2" title="WebApp Form"]') ?>
            </div>
        </div>
    </div>
</Section>
<!-- Contact Form Section End -->


<?php get_footer() ?>


<script>
    // Function to get URL parameters
    var getUrlParameter = function (sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? null : sParameterName[1];
            }
        }
        return null;
    };

    // Fetch URL parameters
    var YourName = getUrlParameter('your-name');
    var YourEmail = getUrlParameter('your-email');
    var PhoneNum = getUrlParameter('phone-number');

    // Autofill the form fields if parameters are present
    if (YourName !== null) {
        document.getElementById('name').value = YourName;
    }
    if (YourEmail !== null) {
        document.getElementById('email').value = YourEmail;
    }
    if (PhoneNum !== null) {
        document.getElementById('number').value = PhoneNum;
    }
</script>
