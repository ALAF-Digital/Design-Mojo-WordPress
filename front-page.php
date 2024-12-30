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
<?php get_template_part('includes/partnerswhite')?>
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
                  <a class="Service-acnhor" href="#">Brand Identity Design</a>
                  <a class="Service-acnhor Service-acnhor1" href="#">Brand Guidelines Creation</a>
                </div>
                <div class="service-cardButton service-cardButton1">
                  <a class="Service-acnhor Service-acnhor1" href="#">Website and Social Media Branding</a>
                  <a class="Service-acnhor" href="#">Rebranding Services</a>
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
                  <a class="Service-acnhor Service-acnhor2" href="#">Brand Identity Design</a>
                  <a class="Service-acnhor Service-acnhor1" href="#">Brand Guidelines Creation</a>
                </div>
                <div class="service-cardButton service-cardButton1">
                  <a class="Service-acnhor Service-acnhor1" href="#">Website and Social Media Branding</a>
                  <a class="Service-acnhor Service-acnhor2" href="#">Rebranding Services</a>
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
                  <a class="Service-acnhor" href="#">Brand Identity Design</a>
                  <a class="Service-acnhor Service-acnhor1" href="#">Brand Guidelines Creation</a>
                </div>
                <div class="service-cardButton service-cardButton1">
                  <a class="Service-acnhor Service-acnhor1" href="#">Website and Social Media Branding</a>
                  <a class="Service-acnhor" href="#">Rebranding Services</a>
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
                  <a class="Service-acnhor Service-acnhor2" href="#">Brand Identity Design</a>
                  <a class="Service-acnhor Service-acnhor1" href="#">Brand Guidelines Creation</a>
                </div>
                <div class="service-cardButton service-cardButton1">
                  <a class="Service-acnhor Service-acnhor1" href="#">Website and Social Media Branding</a>
                  <a class="Service-acnhor Service-acnhor2" href="#">Rebranding Services</a>
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
                  <a class="Service-acnhor" href="#">Brand Identity Design</a>
                  <a class="Service-acnhor Service-acnhor1" href="#">Brand Guidelines Creation</a>
                </div>
                <div class="service-cardButton service-cardButton1">
                  <a class="Service-acnhor Service-acnhor1" href="#">Website and Social Media Branding</a>
                  <a class="Service-acnhor" href="#">Rebranding Services</a>
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
                <h1>Search Engine Opt</h1>
                <div class="service-cardButton">
                  <a class="Service-acnhor Service-acnhor2" href="#">Brand Identity Design</a>
                  <a class="Service-acnhor Service-acnhor1" href="#">Brand Guidelines Creation</a>
                </div>
                <div class="service-cardButton service-cardButton1">
                  <a class="Service-acnhor Service-acnhor1" href="#">Website and Social Media Branding</a>
                  <a class="Service-acnhor Service-acnhor2" href="#">Rebranding Services</a>
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
<?php get_template_part('includes/testimonialswhite')?>
<!-- Customer Section End -->

<!-- Project Section -->
<?php get_template_part('includes/projects')?>
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
            <button class="nav-link" id="web-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
              role="tab" aria-controls="contact" aria-selected="false"><span><img
                  src="<?php echo get_template_directory_uri() . '/images/Group (3) (1).png' ?>" class="img-fluid"
                  alt="">Web App Design</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
              role="tab" aria-controls="contact" aria-selected="false"><span><img
                  src="<?php echo get_template_directory_uri() . '/images/Social media (1).png' ?>" class="img-fluid"
                  alt="">Social Media
                Marketing</span></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
              role="tab" aria-controls="contact" aria-selected="false"><span><img
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
                    Base
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>Premium Custom Design Solutions</li>
                        <li>Advanced SEO and Marketing Tools</li>
                        <li>High-End Security and Data Encryption</li>
                        <li>Scalable Cloud Hosting</li>
                        <li>Fast and Reliable Performance</li>
                        <li>AI-Driven Personalization</li>
                        <li>Multi-Device and Cross-Browser Support</li>
                        <li>Automated Workflows for Efficiency</li>
                        <li>Customizable Dashboards and Analytics</li>
                        <li>Seamless Third-Party Integrations</li>
                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>$45</p> &nbsp; &nbsp;<span>/month</span>
                          </li>
                        </ul>
                        <a href="#">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Pro
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>Advanced Customization Options</li>
                        <li>High-Level Security Features</li>
                        <li>Enhanced User Experience (UX) Design</li>
                        <li>Multi-Language Support</li>
                        <li>E-commerce Integration</li>
                        <li>AI-Powered Insights and Analytics</li>
                        <li>Cross-Platform Compatibility</li>
                        <li>Custom API Integration</li>
                        <li>Cloud-Based Scalability</li>
                        <li>Real-Time Collaboration Tools</li>

                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>$45</p> &nbsp; &nbsp;<span>/month</span>
                          </li>
                        </ul>
                        <a href="#">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Enterprise
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>Premium Custom Design Solutions</li>
                        <li>Advanced SEO and Marketing Tools</li>
                        <li>High-End Security and Data Encryption</li>
                        <li>Scalable Cloud Hosting</li>
                        <li>Fast and Reliable Performance</li>
                        <li>AI-Driven Personalization</li>
                        <li>Multi-Device and Cross-Browser Support</li>
                        <li>Automated Workflows for Efficiency</li>
                        <li>Customizable Dashboards and Analytics</li>
                        <li>Seamless Third-Party Integrations</li>

                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>$45</p> &nbsp; &nbsp;<span>/month</span>
                          </li>
                        </ul>
                        <a href="#">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>


          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapsFour">
                    Base
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>Customizable Designs</li>
                        <li>User-Friendly Interface</li>
                        <li>Mobile Optimization</li>
                        <li>Fast Load Times</li>
                        <li>SEO-Friendly Structure</li>
                        <li>Secure Data Protection</li>
                        <li>Scalable Solutions</li>
                        <li>24/7 Customer Support</li>
                        <li>Easy Integration</li>
                        <li>Analytics and Reporting</li>
                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>$45</p> &nbsp; &nbsp;<span>/month</span>
                          </li>
                        </ul>
                        <a href="#">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Pro
                  </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>Advanced Customization Options</li>
                        <li>High-Level Security Features</li>
                        <li>Enhanced User Experience (UX) Design</li>
                        <li>Multi-Language Support</li>
                        <li>E-commerce Integration</li>
                        <li>AI-Powered Insights and Analytics</li>
                        <li>Cross-Platform Compatibility</li>
                        <li>Custom API Integration</li>
                        <li>Cloud-Based Scalability</li>
                        <li>Real-Time Collaboration Tools</li>
                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>$45</p> &nbsp; &nbsp;<span>/month</span>
                          </li>
                        </ul>
                        <a href="#">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    Enterprise
                  </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>Premium Custom Design Solutions</li>
                        <li>Advanced SEO and Marketing Tools</li>
                        <li>High-End Security and Data Encryption</li>
                        <li>Scalable Cloud Hosting</li>
                        <li>Fast and Reliable Performance</li>
                        <li>AI-Driven Personalization</li>
                        <li>Multi-Device and Cross-Browser Support</li>
                        <li>Automated Workflows for Efficiency</li>
                        <li>Customizable Dashboards and Analytics</li>
                        <li>Seamless Third-Party Integrations</li>
                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>$45</p> &nbsp; &nbsp;<span>/month</span>
                          </li>
                        </ul>
                        <a href="#">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>


          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                    Base
                  </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>Customizable Designs</li>
                        <li>User-Friendly Interface</li>
                        <li>Mobile Optimization</li>
                        <li>Fast Load Times</li>
                        <li>SEO-Friendly Structure</li>
                        <li>Secure Data Protection</li>
                        <li>Scalable Solutions</li>
                        <li>24/7 Customer Support</li>
                        <li>Easy Integration</li>
                        <li>Analytics and Reporting</li>
                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>$45</p> &nbsp; &nbsp;<span>/month</span>
                          </li>
                        </ul>
                        <a href="#">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEight">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                    Pro
                  </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>Advanced Customization Options</li>
                        <li>High-Level Security Features</li>
                        <li>Enhanced User Experience (UX) Design</li>
                        <li>Multi-Language Support</li>
                        <li>E-commerce Integration</li>
                        <li>AI-Powered Insights and Analytics</li>
                        <li>Cross-Platform Compatibility</li>
                        <li>Custom API Integration</li>
                        <li>Cloud-Based Scalability</li>
                        <li>Real-Time Collaboration Tools</li>
                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>$45</p> &nbsp; &nbsp;<span>/month</span>
                          </li>
                        </ul>
                        <a href="#">Choose Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingNine">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                    Enterprise
                  </button>
                </h2>
                <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="accordion-content">
                      <ul class="pb-3">
                        <li>Premium Custom Design Solutions</li>
                        <li>Advanced SEO and Marketing Tools</li>
                        <li>High-End Security and Data Encryption</li>
                        <li>Scalable Cloud Hosting</li>
                        <li>Fast and Reliable Performance</li>
                        <li>AI-Driven Personalization</li>
                        <li>Multi-Device and Cross-Browser Support</li>
                        <li>Automated Workflows for Efficiency</li>
                        <li>Customizable Dashboards and Analytics</li>
                        <li>Seamless Third-Party Integrations</li>
                      </ul>
                      <div class="accordian-price">
                        <ul>
                          <li>
                            <p>$45</p> &nbsp; &nbsp;<span>/month</span>
                          </li>
                        </ul>
                        <a href="#">Choose Plan</a>
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
          <a href="#">+61 (385) 944 036</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Appointment Section End -->

<!-- Asked Question Section -->
<?php get_template_part('includes/faqs')?>
<!-- Asked Question Section End -->

<?php get_template_part('includes/newsletter')?>
<?php get_footer(); ?>