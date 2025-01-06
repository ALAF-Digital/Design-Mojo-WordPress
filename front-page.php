<?php get_header(); ?>


<!-- Hero Section -->
<main class="main">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-8 hero-text text-center mx-auto">
        <p class="mb-3">We provide</p>
        <?php
        if (have_rows('hero_section')):
          while (have_rows('hero_section')):
            the_row();
            // Get sub field values.


            $heading = get_sub_field('heading');
            $s_heading = get_sub_field('sub-heading');
            $description = get_sub_field('description');
            $action = get_sub_field('action');
        ?>
            <h1><?php echo $heading ?></h1>
            <h2 class=""><?php echo $s_heading ?></h2>
            <p>
              <?php echo $description ?>
            </p>
            <a href="<?php echo $action ?>" class="btn mt-5">Learn More</a>
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  </div>
</main>
<!-- Hero Section End -->

<!-- Partner Section -->
<?php get_template_part('includes/partnerswhite') ?>
<!-- Partner Section End -->

<!-- Sevices Section -->
<section class="Services">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="Service-main">
          <h1>Our<br />Service</h1>
          <p>
            We provide expert growth marketing solutions, working as your full stack team or extending your in house
            marketing efforts to drive results.
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
                <h1>Logo & Branding</h1>
                <div class="service-cardButton">
                  <a class="Service-acnhor" href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Logo Design</a>
                  <a class="Service-acnhor Service-acnhor1" href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Brand Identity</a>
                </div>
                <div class="service-cardButton service-cardButton1">
                  <a class="Service-acnhor Service-acnhor1" href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Graphic Design</a>
                  <a class="Service-acnhor" href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Responsive Website Design</a>
                </div>
                <div class="service-cardImages">
                  <img
                    src="<?php echo get_template_directory_uri() . '/images/Free-Stationery-Branding-PSD-Mockup 1.png' ?>"
                    class="img-fluid service-cardImg" alt="" />
                  <img
                    src="<?php echo get_template_directory_uri() . '/images/Vector1.png" class="img-fluid service-cardImg1' ?>"
                    alt="" />
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="service-card service-card1">
                <h1>Website Development</h1>
                <div class="service-cardButton">
                  <a class="Service-acnhor Service-acnhor2" href="<?php echo get_site_url(); ?>/web-development-in-australia">CMS Development</a>
                  <a class="Service-acnhor Service-acnhor1" href="<?php echo get_site_url(); ?>/web-development-in-australia">Wordpress Development</a>
                </div>
                <div class="service-cardButton service-cardButton1">
                  <a class="Service-acnhor Service-acnhor1" href="<?php echo get_site_url(); ?>/web-development-in-australia">PHP Development</a>
                  <a class="Service-acnhor Service-acnhor2" href="<?php echo get_site_url(); ?>/web-development-in-australia">Laravel Development</a>
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
                  <a class="Service-acnhor" href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">Hybrid App Development</a>
                  <a class="Service-acnhor Service-acnhor1" href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">iOS App Development</a>
                </div>
                <div class="service-cardButton service-cardButton1">
                  <a class="Service-acnhor Service-acnhor1" href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">Android App Development</a>
                  <a class="Service-acnhor" href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">Flutter App Development</a>
                </div>
                <div class="service-cardImages">
                  <img
                    src="<?php echo get_template_directory_uri() . '/images/Free-Stationery-Branding-PSD-Mockup 1.png' ?>"
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
                  <a class="Service-acnhor Service-acnhor2" href="<?php echo get_site_url(); ?>/web-app-design">Brand Identity Design</a>
                  <a class="Service-acnhor Service-acnhor1" href="<?php echo get_site_url(); ?>/web-app-design">Brand Guidelines Creation</a>
                </div>
                <div class="service-cardButton service-cardButton1">
                  <a class="Service-acnhor Service-acnhor1" href="<?php echo get_site_url(); ?>/web-app-design">Website and Social Media Branding</a>
                  <a class="Service-acnhor Service-acnhor2" href="<?php echo get_site_url(); ?>/web-app-design">Rebranding Services</a>
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
                  <a class="Service-acnhor" href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">LinkedIn Marketing</a>
                  <a class="Service-acnhor Service-acnhor1" href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">Instagram Marketing</a>
                </div>
                <div class="service-cardButton service-cardButton1">
                  <a class="Service-acnhor Service-acnhor1" href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">Facebook Marketing</a>
                  <a class="Service-acnhor" href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">Social Media Optimization</a>
                </div>
                <div class="service-cardImages">
                  <img
                    src="<?php echo get_template_directory_uri() . '/images/Free-Stationery-Branding-PSD-Mockup 1.png' ?>"
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
                  <a class="Service-acnhor Service-acnhor2" href="<?php echo get_site_url(); ?>/seo-in-australia">Brand Identity Design</a>
                  <a class="Service-acnhor Service-acnhor1" href="<?php echo get_site_url(); ?>/seo-in-australia">Brand Guidelines Creation</a>
                </div>
                <div class="service-cardButton service-cardButton1">
                  <a class="Service-acnhor Service-acnhor1" href="<?php echo get_site_url(); ?>/seo-in-australia">Website and Social Media Branding</a>
                  <a class="Service-acnhor Service-acnhor2" href="<?php echo get_site_url(); ?>/seo-in-australia">Rebranding Services</a>
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
      </div>
    </div>
  </div>
</section>
<!-- Sevices Section End -->

<!-- Customer Section -->
<?php get_template_part('includes/testimonialswhite') ?>
<!-- Customer Section End -->

<!-- Project Section -->
<?php get_template_part('includes/projects') ?>
<!-- Project Section End -->

<!-- Agencies Section -->
<section class="Agencies">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-6">
        <div class="agencies-text">
          <?php
          $text = get_field('breaker_text');
          ?>
          <h1>
            <?php
            echo $text
            ?>
          </h1>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="agencies-images">
          <figure>
            <img src="<?php echo get_template_directory_uri() . '/images/placehlder3.png' ?>" alt="" />
            <img src="<?php echo get_template_directory_uri() . '/images/placeholder4.png' ?>" alt="" />
          </figure>
          <!-- <div class="agencies-review"> -->
          <img src="<?php echo get_template_directory_uri() . '/images/placehlder-2.png' ?>" alt="" />
          <!-- <img src="assets/images/card-removebg-preview.png" class="review" alt=""> -->
          <!-- </div> -->
        </div>
        <div class="agencies-review">
          <img src="<?php echo get_template_directory_uri() . '/images/favorite.png' ?>" alt="" />
          <div class="review-text">
            <p>User Review</p>
            <h4>650.00+</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Agencies Section End -->

<!-- Pricing Section -->
<section class="Customer Pricing">
  <div class="container">
    <div class="col-md-7 mx-auto">
      <div class="Customer-main mb-5">
        <h1>Simple Pricing No Contract</h1>
        <p>Enjoy simple, transparent pricing with no contract pay only for what you need. When you need it.</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
              role="tab" aria-controls="home" aria-selected="true"><span><img
                  src="<?php echo get_template_directory_uri() . '/images/Logo design.png' ?>" class="img-fluid"
                  alt="">Logo and Branding</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
              role="tab" aria-controls="profile" aria-selected="false"><span><img
                  src="<?php echo get_template_directory_uri() . '/images/Group (1).png' ?>" class="img-fluid"
                  alt="">Website Development</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
              role="tab" aria-controls="contact" aria-selected="false"><span><img
                  src="<?php echo get_template_directory_uri() . '/images/Group (2) (1).png' ?>" class="img-fluid"
                  alt="">Mobile App Design</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="web-tab" data-bs-toggle="tab" data-bs-target="#webapp" type="button"
              role="tab" aria-controls="webapp" aria-selected="false"><span><img
                  src="<?php echo get_template_directory_uri() . '/images/Group (3) (1).png' ?>" class="img-fluid"
                  alt="">Web App Design</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" type="button"
              role="tab" aria-controls="social" aria-selected="false"><span><img
                  src="<?php echo get_template_directory_uri() . '/images/Social media (1).png' ?>" class="img-fluid"
                  alt="">Social Media
                Marketing</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo" type="button"
              role="tab" aria-controls="seo" aria-selected="false"><span><img
                  src="<?php echo get_template_directory_uri() . '/images/Seo (1).png' ?>" class="img-fluid"
                  alt="">Search Engine Opt</span></button>
          </li>
        </ul>

      </div>
      <div class="col-lg-8">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Base Package
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>3 Creative Logo Design Concepts</li>
                        <li>4 Revisions</li>
                        <li>1 Dedicated Designer</li>
                        <li>File Format (JPG)</li>
                        <li>100% Satisfaction Guarantee</li>
                        <li>Standard Delivery 48 Hours</li>
                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>A$ 100</p> &nbsp; &nbsp;<span>/ month</span>
                          </li>
                        </ul>
                        <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Plus Package
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>6 Creative Logo Design Concepts</li>
                        <li>Unlimited Revisions</li>
                        <li>2 Dedicated Designers</li>
                        <li>Business Stationery Included</li>
                        <li>Email Signature Included</li>
                        <li>Business Card Design Included</li>
                        <li>MS Word Letterhead Included</li>
                        <li>All File Formats (AI, PSD, EPS, PNG, GIF, JPG, PDF)</li>
                        <li>100% Satisfaction Guarantee</li>
                        <li>Standard Delivery 48 Hours</li>

                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>A$ 200</p> &nbsp; &nbsp;<span>/ month</span>
                          </li>
                        </ul>
                        <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>


          </div>


          <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item  ">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapsFour">
                    Starter Package
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse show" aria-labelledby="flush-headingFour"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>Basic Website Design</li>
                        <li>Up to 3 pages</li>
                        <li>Standard layout and design</li>
                        <li>Mobile-friendly</li>
                        <li>Basic contact form</li>
                        <li>1 round of revisions</li>
                        <li>Basic SEO setup</li>
                        <li>Domain (1 year)</li>

                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>A$ 500</p> &nbsp; &nbsp;<span>/ month</span>
                          </li>
                        </ul>
                        <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Bronze Package
                  </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>Standard Website Design</li>
                        <li>Up to 5 pages</li>
                        <li>Custom layout and design</li>
                        <li>Mobile-friendly</li>
                        <li>Advanced contact form</li>
                        <li>2 rounds of revisions</li>
                        <li>Standard SEO optimization</li>
                        <li>Basic analytics integration</li>
                        <li>Domain and hosting included for 1 year</li>
                        <li>Online Appointment/Booking/Scheduling/Online Ordering</li>
                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>A$ 800</p> &nbsp; &nbsp;<span>/ month</span>
                          </li>
                        </ul>
                        <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    Silver Package
                  </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>Free Logo Design</li>
                        <li>Unlimited Stock Photos</li>
                        <li>8-10 Pages Website</li>
                        <li>5 Banner Design</li>
                        <li>SSL</li>
                        <li>15 Business emails</li>
                        <li>FREE Google Friendly Sitemap Complete W3C Certified HTML</li>
                        <li>Social Media Pages Design</li>
                        <li>Online Payment Integration (Optional)</li>
                        <li>SEO Friendly Content</li>
                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>A$ 1200</p> &nbsp; &nbsp;<span>/ month</span>
                          </li>
                        </ul>
                        <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>


          <div class="tab-pane fade show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                    UI/UX Design
                  </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse show" aria-labelledby="flush-headingSeven"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>FREE Landing Page</li>
                        <li>5 Custom App Screens</li>
                        <li>Editable Figma / PSD Format</li>

                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>A$ 500</p> &nbsp; &nbsp;<span>/ Starting From</span>
                          </li>
                        </ul>
                        <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEight">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                    Custom App
                  </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>AFREE Landing Page</li>
                        <li>FREE UI/UX Design</li>
                        <li>iOS & Android App</li>
                        <li>Custom Features as per Requirement</li>

                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>A$ 2,500</p> &nbsp; &nbsp;<span>/ Starting From</span>
                          </li>
                        </ul>
                        <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>

          </div>

          <div class="tab-pane fade show" id="webapp" role="tabpanel" aria-labelledby="webapp-tab">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingNine">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                    Base
                  </button>
                </h2>
                <div id="flush-collapseNine" class="accordion-collapse collapse show" aria-labelledby="flush-headingNine"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>FREE Landing Page</li>
                        <li>5 Custom App Screens</li>
                        <li>Editable Figma / PSD Format</li>

                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>A$ 500</p> &nbsp; &nbsp;<span>/ Starting From</span>
                          </li>
                        </ul>
                        <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTen">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                    Pro
                  </button>
                </h2>
                <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>AFREE Landing Page</li>
                        <li>FREE UI/UX Design</li>
                        <li>iOS & Android App</li>
                        <li>Custom Features as per Requirement</li>

                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>A$ 2,500</p> &nbsp; &nbsp;<span>/ Starting From</span>
                          </li>
                        </ul>
                        <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>

          </div>

          <div class="tab-pane fade show" id="social" role="tabpanel" aria-labelledby="social-tab">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEleven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                    Social Media Starter
                  </button>
                </h2>
                <div id="flush-collapseEleven" class="accordion-collapse collapse show" aria-labelledby="flush-headingEleven"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>3 Unique Posts each week along with 1 Engagement Videos</li>
                        <li>Content Creation for Each Post</li>
                        <li>Hashtags Research</li>
                        <li>Ad Campaign Management</li>
                        <li>Spam Monitoring</li>
                        <li>Business Page Optimization to rank your page</li>
                        <li>Facebook and Instagram Likes/Followers Campaign</li>
                        <li>Social Media Strategy for better conversion</li>

                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>A$ 600</p> &nbsp; &nbsp;<span>/ 3 Months</span>
                          </li>
                        </ul>
                        <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwelve">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
                    Social Media Advance
                  </button>
                </h2>
                <div id="flush-collapseTwelve" class="accordion-collapse collapse" aria-labelledby="flush-headingTwelve"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>AFREE Landing Page</li>
                        <li>FREE UI/UX Design</li>
                        <li>iOS & Android App</li>
                        <li>Custom Features as per Requirement</li>

                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>A$ 1,000</p> &nbsp; &nbsp;<span>/ 6 Months</span>
                          </li>
                        </ul>
                        <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>

          </div>

          <div class="tab-pane fade show" id="seo" role="tabpanel" aria-labelledby="seo-tab">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThirteen">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThirteen" aria-expanded="false" aria-controls="flush-collapseThirteen">
                    Basic Package
                  </button>
                </h2>
                <div id="flush-collapseThirteen" class="accordion-collapse collapse show" aria-labelledby="flush-headingThirteen"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>Prior Analysis</li>
                        <li>Business Analysis</li>
                        <li>Consumer Analysis</li>
                        <li>Competitor Analysis</li>
                        <li>5 Selected Keywords Targeting</li>
                        <li>5 Pages Keyword Targeted</li>
                        <li>Meta Tags Creation</li>
                        <li>Keyword Optimization</li>
                        <li>Image Optimization</li>
                        <li>Inclusion of anchors</li>

                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>A$ 500</p> &nbsp; &nbsp;<span>/ 3 Months</span>
                          </li>
                        </ul>
                        <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFourteen">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFourteen" aria-expanded="false" aria-controls="flush-collapseFourteen">
                    Standard Package
                  </button>
                </h2>
                <div id="flush-collapseFourteen" class="accordion-collapse collapse" aria-labelledby="flush-headingFourteen"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>Prior Analysis</li>
                        <li>Business Analysis</li>
                        <li>Consumer Analysis</li>
                        <li>Competitor Analysis</li>
                        <li>15 Selected Keywords Targeting</li>
                        <li>15 Pages Keyword Targeted</li>
                        <li>Meta Tags Creation</li>
                        <li>Keyword Optimization</li>
                        <li>Inclusion of anchors</li>
                        <li>Tracking & Analysis</li>
                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>A$ 1,000</p> &nbsp; &nbsp;<span>/ 3 Months</span>
                          </li>
                        </ul>
                        <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFifteen">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFifteen" aria-expanded="false" aria-controls="flush-collapseFifteen">
                    Premium Package
                  </button>
                </h2>
                <div id="flush-collapseFifteen" class="accordion-collapse collapse" aria-labelledby="flush-headingFifteen"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>Prior Analysis</li>
                        <li>Business Analysis</li>
                        <li>Consumer Analysis</li>
                        <li>Competitor Analysis</li>
                        <li>30 Selected Keywords Targeting</li>
                        <li>30 Pages Keyword Targeted</li>
                        <li>Meta Tags Creation</li>
                        <li>Keyword Optimization</li>
                        <li>Inclusion of anchors</li>
                        <li>Tracking & Analysis</li>
                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>A$ 1,500</p> &nbsp; &nbsp;<span>/ 3 Months</span>
                          </li>
                        </ul>
                        <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pricing Section End -->


<!-- Pricing Section Mobile -->
<section class="Customer Pricing pricing-mobile">
  <div class="container">
    <div class="col-md-7 mx-auto">
      <div class="Customer-main mb-5">
        <h1>Simple Pricing No Contract</h1>
        <p>Enjoy simple, transparent pricing with no contract pay only for what you need. When you need it.</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="home-tab" data-bs-toggle="modal" data-bs-target="#detailspopup" type="button"
              role="tab" aria-controls="home" aria-selected="true"><span><img
                  src="<?php echo get_template_directory_uri() . '/images/Logo design.png' ?>" class="img-fluid"
                  alt="">Logo and Branding</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="modal" data-bs-target="#detailspopup1"
              type="button" role="tab" aria-controls="profile" aria-selected="false"><span><img
                  src="<?php echo get_template_directory_uri() . '/images/Group (1).png' ?>" class="img-fluid"
                  alt="">Website Development</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="modal" data-bs-target="#detailspopup2"
              type="button" role="tab" aria-controls="contact" aria-selected="false"><span><img
                  src="<?php echo get_template_directory_uri() . '/images/Group (2) (1).png' ?>" class="img-fluid"
                  alt="">Mobile App Design</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="web-tab" data-bs-toggle="modal" data-bs-target="#detailspopup3" type="button"
              role="tab" aria-controls="contact" aria-selected="false"><span><img
                  src="<?php echo get_template_directory_uri() . '/images/Group (3) (1).png' ?>" class="img-fluid"
                  alt="">Web App Design</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="social-tab" data-bs-toggle="modal" data-bs-target="#detailspopup4"
              type="button" role="tab" aria-controls="contact" aria-selected="false"><span><img
                  src="<?php echo get_template_directory_uri() . '/images/Social media (1).png' ?>" class="img-fluid"
                  alt="">Social Media
                Marketing</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="social-tab" data-bs-toggle="modal" data-bs-target="#detailspopup5"
              type="button" role="tab" aria-controls="contact" aria-selected="false"><span><img
                  src="<?php echo get_template_directory_uri() . '/images/Seo (1).png' ?>" class="img-fluid"
                  alt="">Search Engine Opt</span></button>
          </li>
        </ul>

      </div>
      <div class="col-lg-8">
        <div class="tab-content" id="myTabContent">
          <!-- Modal -->
          <div class="modal fade" id="detailspopup" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Base Package
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
                          data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="accordion-content">
                              <ul class="pb-3">
                                <li>3 Creative Logo Design Concepts</li>
                                <li>4 Revisions</li>
                                <li>1 Dedicated Designer</li>
                                <li>File Format (JPG)</li>
                                <li>100% Satisfaction Guarantee</li>
                                <li>Standard Delivery 48 Hours</li>
                              </ul>
                              <div class="accordian-price">
                                <ul>
                                  <li>
                                    <p>A$ 100</p> &nbsp; &nbsp;<span>/ month</span>
                                  </li>
                                </ul>
                                <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Plus Package
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                          data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="accordion-content">
                              <ul class="pb-3">
                                <li>6 Creative Logo Design Concepts</li>
                                <li>Unlimited Revisions</li>
                                <li>2 Dedicated Designers</li>
                                <li>Business Stationery Included</li>
                                <li>Email Signature Included</li>
                                <li>Business Card Design Included</li>
                                <li>MS Word Letterhead Included</li>
                                <li>All File Formats (AI, PSD, EPS, PNG, GIF, JPG, PDF)</li>
                                <li>100% Satisfaction Guarantee</li>
                                <li>Standard Delivery 48 Hours</li>

                              </ul>
                              <div class="accordian-price">
                                <ul>
                                  <li>
                                    <p>A$ 200</p> &nbsp; &nbsp;<span>/ month</span>
                                  </li>
                                </ul>
                                <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>


                  </div>



                </div>

              </div>
            </div>
          </div>


          <!-- Modal -->
          <div class="modal fade" id="detailspopup1" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                  <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item  ">
                        <h2 class="accordion-header" id="flush-headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapsFour">
                            Starter Package
                          </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse show" aria-labelledby="flush-headingFour"
                          data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="accordion-content">
                              <ul class="pb-3">
                                <li>Basic Website Design</li>
                                <li>Up to 3 pages</li>
                                <li>Standard layout and design</li>
                                <li>Mobile-friendly</li>
                                <li>Basic contact form</li>
                                <li>1 round of revisions</li>
                                <li>Basic SEO setup</li>
                                <li>Domain (1 year)</li>

                              </ul>
                              <div class="accordian-price">
                                <ul>
                                  <li>
                                    <p>A$ 500</p> &nbsp; &nbsp;<span>/ month</span>
                                  </li>
                                </ul>
                                <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            Bronze Package
                          </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                          data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="accordion-content">
                              <ul class="pb-3">
                                <li>Standard Website Design</li>
                                <li>Up to 5 pages</li>
                                <li>Custom layout and design</li>
                                <li>Mobile-friendly</li>
                                <li>Advanced contact form</li>
                                <li>2 rounds of revisions</li>
                                <li>Standard SEO optimization</li>
                                <li>Basic analytics integration</li>
                                <li>Domain and hosting included for 1 year</li>
                                <li>Online Appointment/Booking/Scheduling/Online Ordering</li>
                              </ul>
                              <div class="accordian-price">
                                <ul>
                                  <li>
                                    <p>A$ 800</p> &nbsp; &nbsp;<span>/ month</span>
                                  </li>
                                </ul>
                                <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            Silver Package
                          </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                          data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="accordion-content">
                              <ul class="pb-3">
                                <li>Free Logo Design</li>
                                <li>Unlimited Stock Photos</li>
                                <li>8-10 Pages Website</li>
                                <li>5 Banner Design</li>
                                <li>SSL</li>
                                <li>15 Business emails</li>
                                <li>FREE Google Friendly Sitemap Complete W3C Certified HTML</li>
                                <li>Social Media Pages Design</li>
                                <li>Online Payment Integration (Optional)</li>
                                <li>SEO Friendly Content</li>
                              </ul>
                              <div class="accordian-price">
                                <ul>
                                  <li>
                                    <p>A$ 1200</p> &nbsp; &nbsp;<span>/ month</span>
                                  </li>
                                </ul>
                                <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>



                </div>

              </div>
            </div>
          </div>




          <!-- Modal -->
          <div class="modal fade" id="detailspopup2" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                  <div class="tab-pane fade show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSeven">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                            UI/UX Design
                          </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse show" aria-labelledby="flush-headingSeven"
                          data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="accordion-content">
                              <ul class="pb-3">
                                <li>FREE Landing Page</li>
                                <li>5 Custom App Screens</li>
                                <li>Editable Figma / PSD Format</li>

                              </ul>
                              <div class="accordian-price">
                                <ul>
                                  <li>
                                    <p>A$ 500</p> &nbsp; &nbsp;<span>/ Starting From</span>
                                  </li>
                                </ul>
                                <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingEight">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                            Custom App
                          </button>
                        </h2>
                        <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight"
                          data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="accordion-content">
                              <ul class="pb-3">
                                <li>AFREE Landing Page</li>
                                <li>FREE UI/UX Design</li>
                                <li>iOS & Android App</li>
                                <li>Custom Features as per Requirement</li>

                              </ul>
                              <div class="accordian-price">
                                <ul>
                                  <li>
                                    <p>A$ 2,500</p> &nbsp; &nbsp;<span>/ Starting From</span>
                                  </li>
                                </ul>
                                <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                    </div>

                  </div>

                </div>

              </div>
            </div>
          </div>


          <!-- Modal -->
          <div class="modal fade" id="detailspopup3" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                  <div class="tab-pane fade show" id="webapp" role="tabpanel" aria-labelledby="webapp-tab">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingNine">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                            Base
                          </button>
                        </h2>
                        <div id="flush-collapseNine" class="accordion-collapse collapse show" aria-labelledby="flush-headingNine"
                          data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="accordion-content">
                              <ul class="pb-3">
                                <li>FREE Landing Page</li>
                                <li>5 Custom App Screens</li>
                                <li>Editable Figma / PSD Format</li>

                              </ul>
                              <div class="accordian-price">
                                <ul>
                                  <li>
                                    <p>A$ 500</p> &nbsp; &nbsp;<span>/ Starting From</span>
                                  </li>
                                </ul>
                                <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTen">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                            Pro
                          </button>
                        </h2>
                        <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen"
                          data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="accordion-content">
                              <ul class="pb-3">
                                <li>AFREE Landing Page</li>
                                <li>FREE UI/UX Design</li>
                                <li>iOS & Android App</li>
                                <li>Custom Features as per Requirement</li>

                              </ul>
                              <div class="accordian-price">
                                <ul>
                                  <li>
                                    <p>A$ 2,500</p> &nbsp; &nbsp;<span>/ Starting From</span>
                                  </li>
                                </ul>
                                <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                    </div>

                  </div>

                </div>

              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="detailspopup4" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                  <div class="tab-pane fade show" id="social" role="tabpanel" aria-labelledby="social-tab">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingEleven">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                            Social Media Starter
                          </button>
                        </h2>
                        <div id="flush-collapseEleven" class="accordion-collapse collapse show" aria-labelledby="flush-headingEleven"
                          data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="accordion-content">
                              <ul class="pb-3">
                                <li>3 Unique Posts each week along with 1 Engagement Videos</li>
                                <li>Content Creation for Each Post</li>
                                <li>Hashtags Research</li>
                                <li>Ad Campaign Management</li>
                                <li>Spam Monitoring</li>
                                <li>Business Page Optimization to rank your page</li>
                                <li>Facebook and Instagram Likes/Followers Campaign</li>
                                <li>Social Media Strategy for better conversion</li>

                              </ul>
                              <div class="accordian-price">
                                <ul>
                                  <li>
                                    <p>A$ 600</p> &nbsp; &nbsp;<span>/ 3 Months</span>
                                  </li>
                                </ul>
                                <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwelve">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
                            Social Media Advance
                          </button>
                        </h2>
                        <div id="flush-collapseTwelve" class="accordion-collapse collapse" aria-labelledby="flush-headingTwelve"
                          data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="accordion-content">
                              <ul class="pb-3">
                                <li>AFREE Landing Page</li>
                                <li>FREE UI/UX Design</li>
                                <li>iOS & Android App</li>
                                <li>Custom Features as per Requirement</li>

                              </ul>
                              <div class="accordian-price">
                                <ul>
                                  <li>
                                    <p>A$ 1,000</p> &nbsp; &nbsp;<span>/ 6 Months</span>
                                  </li>
                                </ul>
                                <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                    </div>

                  </div>

                </div>

              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="detailspopup5" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                  <div class="tab-pane fade show" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThirteen">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThirteen" aria-expanded="false" aria-controls="flush-collapseThirteen">
                            Basic Package
                          </button>
                        </h2>
                        <div id="flush-collapseThirteen" class="accordion-collapse collapse show" aria-labelledby="flush-headingThirteen"
                          data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="accordion-content">
                              <ul class="pb-3">
                                <li>Prior Analysis</li>
                                <li>Business Analysis</li>
                                <li>Consumer Analysis</li>
                                <li>Competitor Analysis</li>
                                <li>5 Selected Keywords Targeting</li>
                                <li>5 Pages Keyword Targeted</li>
                                <li>Meta Tags Creation</li>
                                <li>Keyword Optimization</li>
                                <li>Image Optimization</li>
                                <li>Inclusion of anchors</li>

                              </ul>
                              <div class="accordian-price">
                                <ul>
                                  <li>
                                    <p>A$ 500</p> &nbsp; &nbsp;<span>/ 3 Months</span>
                                  </li>
                                </ul>
                                <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFourteen">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFourteen" aria-expanded="false" aria-controls="flush-collapseFourteen">
                            Standard Package
                          </button>
                        </h2>
                        <div id="flush-collapseFourteen" class="accordion-collapse collapse" aria-labelledby="flush-headingFourteen"
                          data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="accordion-content">
                              <ul class="pb-3">
                                <li>Prior Analysis</li>
                                <li>Business Analysis</li>
                                <li>Consumer Analysis</li>
                                <li>Competitor Analysis</li>
                                <li>15 Selected Keywords Targeting</li>
                                <li>15 Pages Keyword Targeted</li>
                                <li>Meta Tags Creation</li>
                                <li>Keyword Optimization</li>
                                <li>Inclusion of anchors</li>
                                <li>Tracking & Analysis</li>
                              </ul>
                              <div class="accordian-price">
                                <ul>
                                  <li>
                                    <p>A$ 1,000</p> &nbsp; &nbsp;<span>/ 3 Months</span>
                                  </li>
                                </ul>
                                <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFifteen">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFifteen" aria-expanded="false" aria-controls="flush-collapseFifteen">
                            Premium Package
                          </button>
                        </h2>
                        <div id="flush-collapseFifteen" class="accordion-collapse collapse" aria-labelledby="flush-headingFifteen"
                          data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <div class="accordion-content">
                              <ul class="pb-3">
                                <li>Prior Analysis</li>
                                <li>Business Analysis</li>
                                <li>Consumer Analysis</li>
                                <li>Competitor Analysis</li>
                                <li>30 Selected Keywords Targeting</li>
                                <li>30 Pages Keyword Targeted</li>
                                <li>Meta Tags Creation</li>
                                <li>Keyword Optimization</li>
                                <li>Inclusion of anchors</li>
                                <li>Tracking & Analysis</li>
                              </ul>
                              <div class="accordian-price">
                                <ul>
                                  <li>
                                    <p>A$ 1,500</p> &nbsp; &nbsp;<span>/ 3 Months</span>
                                  </li>
                                </ul>
                                <a data-bs-toggle="modal" data-bs-target="#pricingpop">Choose Plan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>

                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pricing Section Mobile End -->


<!-- Appointment Section -->
<section class="Agencies">
  <div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <div class="appointment-text text-center">
          <h1>
            We love our customers, so feel free to schedule an appointment
            at:
          </h1>
          <a href="tel:+61 (413) 367 012">+61 (413) 367 012</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Appointment Section End -->

<!-- Asked Question Section -->
<?php get_template_part('includes/faqs') ?>
<!-- Asked Question Section End -->

<?php get_template_part('includes/newsletter') ?>


<!-- Pricing Modal -->

<!-- Modal -->
<div class="modal fade" id="pricingpop" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <div class="contact Development-form">
          

          <?php echo do_shortcode('[contact-form-7 id="babe94d" title="Logo Pricing"]') ?>
        </div>



      </div>

    </div>
  </div>
</div>

<!-- Pricing Modal End -->
<?php get_footer(); ?>