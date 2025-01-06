<!-- footer -->
<section class="footer">
  <div class="container mb-4">
    <div class="row pb-5">
      <div class="col-md-4">
        <div class="footer-main">
          <a href="<?php echo get_site_url(); ?>">
          <img src="<?php echo get_template_directory_uri() . '/images/Mojo_Logo.png' ?>" alt="" />
          </a>
          <p>
            Unleash the power of creativity with Design Mojo. We craft innovative, visually stunning designs that
            elevate your brand and captivate your audience.
          </p>
          <div class="footer-icon">
            <ul class="d-flex align-items-center text-center">
              <li>
                <a href="https://www.instagram.com/designmojo.au/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
              </li>
              <li>
                <a href="https://www.facebook.com/designmojoau/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
              </li>
              <!-- <li>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="quick-links ms-lg-5 ms-sm-0">
          <h4>QUICK LINKS</h4>

          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'footer',
              'container' => 'ul',
              'menu_class' => "",
              'container_class' => "",
            )
          );
          ?>
          <!-- <ul>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Contact us</a></li>
            </ul> -->
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-contact">
          <h4>CONTACT US</h4>
          <ul>
            <li class="contact-detail">
              <img src="<?php echo get_template_directory_uri() . '/images/email.png' ?>" alt="" /><a
                href="mailto:sales@designmojo.com.au">sales@designmojo.com.au</a>
            </li>
            <li class="contact-detail">
              <img src="<?php echo get_template_directory_uri() . '/images/location_on.png' ?>" alt="" /><a
                href="https://maps.app.goo.gl/oL6nybzb4w6SZJdQ8" target="_blank">1A/59 Fletcher Street, Essendon VIC 3040,
                Melbourne,
                Australia</a>
            </li>
            <li class="contact-detail">
              <img src="<?php echo get_template_directory_uri() . '/images/call.png' ?>" alt="" /><a
                class="text-decoration-underline" href="tel:+61 (413) 367 012">+61 (413) 367 012</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="all-rights-border"></div>
  <div class="all-text text-center">
    <p>Ⓒ 2024 All Rights Reserved. Design Mojo</p>
  </div>
</section>
<!-- footer End -->
<?php wp_footer(); ?>

</body>

</html>