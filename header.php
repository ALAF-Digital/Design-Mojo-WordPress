<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="Description" content="Enter your description here" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

  <title><?php echo get_bloginfo('name'); ?> - <?php echo get_bloginfo('description'); ?> </title>

  <?php wp_head(); ?>
</head>


<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img
          src="<?php echo get_template_directory_uri() . '/images/Mojo_Logo.png' ?>" class="img-fluid" alt="" /></a>
      <div>
        <a data-bs-toggle="offcanvas" data-bs-target="#letsTalk" class="btn d-lg-none">Lets Talk</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav"
          aria-controls="mobileNav">
          <span class="fas fa-bars"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">




        <ul class="navbar-nav mx-auto">

          <li class="nav-item dropdownmy">
            <a class="nav-link" href="<?php echo get_site_url(); ?>/services" tabindex="-1"
              aria-disabled="true">Services</a>
          </li>

          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'nav-menu',
              // 'menu_class' => "navbar-nav mx-auto",
              'navbar' => 'false',
              'items_wrap' => '%3$s',
              'container' => 'false',
              'add_a_class' => 'nav-link',
              'add_li_class' => 'nav-item'

            )
          );
          ?>

          <!-- <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Our Work</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact Us</a>
          </li> -->
        </ul>
        <a data-bs-toggle="offcanvas" data-bs-target="#letsTalk" class="btn">Lets Talk</a>
        <a href="https://wa.me/61413367012" class="btn ms-2" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>


      </div>


    </div>
    <div class="shop-menu" id="shop-dropdown">
      <div class="container-fluid">
        <div class="row g-3 justify-content-center">
          <div class="col-lg-2 col-md-2">

            <a class="shop-menu-head" href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Branding & Graphic Design</a>
            <ul>
              <li><a href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Logo Design</a>
              <p>Customizable Designs</p>
              </li>
              <li><a href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Business Card Design</a>
              <p>Advanced Customization Options</p>
              </li>
              <li><a href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Brochure Design</a>
              <p>Premium Custom Design Solutions</p>
              </li>
			 <li><a href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Packaging Design</a>
              <p>Premium Custom Design Solutions</p>
              </li>
			 <li><a href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Corporate Identity Design</a>
              <p>Premium Custom Design Solutions</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-2">
            <a class="shop-menu-head" href="<?php echo get_site_url(); ?>/web-development-in-australia">Web Development</a>
            <ul>
              <li><a href="<?php echo get_site_url(); ?>/web-development-in-australia">Wordpress Development</a>
              <p>Customizable, SEO-Friendly Websites</p>
              </li>
              <li><a href="<?php echo get_site_url(); ?>/web-development-in-australia">E-commerce Development</a>
              <p>Powerful Stores with Shopify & WooCommerce</p>
              </li>
              <li><a href="<?php echo get_site_url(); ?>/web-development-in-australia">CMS Development</a>
              <p>Streamlined Content Management Solutions</p>
              </li>
			 <li><a href="<?php echo get_site_url(); ?>/web-development-in-australia">Custom Landing Pages</a>
              <p>Designed to Convert More Leads</p>
              </li>
			 <li><a href="<?php echo get_site_url(); ?>/web-development-in-australia">Website Migration Services</a>
              <p>Smooth Transition Without Downtime</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-2">
            <a class="shop-menu-head" href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">Mobile App Development</a>
            <ul>
              <li><a href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">iOS App Development</a>
              <p>Custom Apps for Apple Devices</p>
              </li>
              <li><a href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">Android App Development</a>
              <p>Seamless Apps for Android Users</p>
              </li>
              <li><a href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">Hybrid App Development</a>
              <p>One App, Multiple Platforms</p>
			 </li>
			 <li><a href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">Cross-Platform App Development</a>
              <p>Efficient Solutions for All Devices</p>
			 </li>
			 <li><a href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">App Maintenance & Support</a>
              <p>Keep Your App Running Smoothly</p>
			 </li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-2">
            <a class="shop-menu-head" href="<?php echo get_site_url(); ?>/web-app-design">Web App Development</a>
            <ul>
              <li><a href="<?php echo get_site_url(); ?>/web-app-design">Custom Web Applications</a>
              <p>Tailored Solutions for Complex Needs</p>
              </li>
              <li><a href="<?php echo get_site_url(); ?>/web-app-design">Enterprise Web Applications</a>
              <p>Scalable Tools for Businesses</p>
              </li>
              <li><a href="<?php echo get_site_url(); ?>/web-app-design">Web Portal Development</a>
              <p>Centralized Platforms for Teams & Users</p>
              </li>
			 <li><a href="<?php echo get_site_url(); ?>/web-app-design">Cloud-Based Web Applications</a>
              <p>Accessible Solutions Powered by the Cloud</p>
              </li>
			 <li><a href="<?php echo get_site_url(); ?>/web-app-design">Database-Driven Web Apps</a>
              <p>Manage Data with Precision and Speed</p>
              </li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-2">
            <a class="shop-menu-head" href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">Digital & Social Marketing</a>
            <ul>
              <li><a href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">LinkedIn Marketing</a>
              <p>Build Connections, Drive B2B Growth</p>
              </li>
              <li><a href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">TikTok Marketing</a>
              <p>Go Viral, Engage Creatively</p>
              </li>
              <li><a href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">Meta Marketing</a>
              <p>Connect, Engage, Convert Across Meta Platforms</p>
              </li>
			 <li><a href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">Email Marketing</a>
              <p>Targeted Campaigns, Higher Conversions</p>
              </li>
			 <li><a href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">Online Reputation Management</a>
              <p>Protect Your Brand, Build Trust Online</p>
              </li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-2">
            <a class="shop-menu-head" href="<?php echo get_site_url(); ?>/seo-in-australia">SEO</a>
            <ul>
              <li><a href="<?php echo get_site_url(); ?>/seo-in-australia">Local SEO</a>
              <p>Get Found by Nearby Customers</p>
              </li>
              <li><a href="<?php echo get_site_url(); ?>/seo-in-australia">Technical SEO</a>
              <p>Enhance Website Speed & Structure</p>
              </li>
              <li><a href="<?php echo get_site_url(); ?>/seo-in-australia">E-commerce SEO</a>
              <p>Drive Traffic to Your Online Store</p>
              </li>
			 <li><a href="<?php echo get_site_url(); ?>/seo-in-australia">Google My Business Optimization</a>
              <p>Stand Out in Local Listings</p>
              </li>
			 <li><a href="<?php echo get_site_url(); ?>/seo-in-australia">SEO Audits</a>
              <p>Identify & Fix SEO Issues</p>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End-->

  <!-- Lets Talk OffCanvas -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="letsTalk" aria-labelledby="lestTalkLabel">
    <div class="offcanvas-header">
      <!-- <h5 class="offcanvas-title" id="mobileNavLabel">Offcanvas</h5> -->
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <h2>got a project?</h2>
      <p>Share the details of your project – like scope, timeframes, or business challenges. Our team will thoroughly
        review the materials and respond to you promptly.</p>
      <div class="col-lg-12">
        <div class="contact Development-form">
          <!-- <div class="our-team contact-form Development-form1">
            <div class="row">
              <div class="col-md-6">
                <div class="first">
                  <input type="text" class="text form-control" placeholder="Your Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="first">

                  <input type="email" class="text form-control" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="col-12">
                <div class="first first1">
                  "+1" "+971" "+90" "+92"

                  <div class="number-field number-field1">
                    <ul class="form-ul">
                      <li><img src="<?php echo get_template_directory_uri() . '/images/Frame 15.png' ?>" alt=""></li>
                      <li class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          +1 </a>
                        <ul class="dropdown-menu">
                          <li> <a class="dropdown-item" href="#">+971</a>
                          </li>
                          <li> <a class="dropdown-item" href="#">+90</a>
                          </li>
                          <li> <a class="dropdown-item" href="#">+92</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <input type="number" class="text form-control" placeholder="Phone number" required="">
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="first">

                  <div class="dropdown">
                    <button class="block d-flex justify-content-between align-items-center" type="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Services
                      <i class="fa-solid fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu1" aria-labelledby="">
                      <li><a class="dropdown-item" href="#">Logo branding</a></li>
                      <li><a class="dropdown-item" href="#">website development</a></li>
                      <li><a class="dropdown-item" href="#">Mobile App Design</a></li>
                      <li><a class="dropdown-item" href="#">Web App Design</a></li>
                      <li><a class="dropdown-item" href="#">Social Media Marketing</a></li>
https://chatgpt.com/c/675bda06-9bc8-8012-a799-a72e678184f5                      <li><a class="dropdown-item" href="#">Search Engine Opt</a></li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="first">

                  <input type="text" class="text form-control" placeholder="Your Business Nature" required="">
                </div>
              </div>
              <div class="col-12">
                <div class="first">

                  <textarea class="text form-control" placeholder="How did you first hear about us" rows="5"
                    required=""></textarea>
                </div>

                <button class="btn">Submit</button>
              </div>
            </div>
          </div> -->

          <?php echo do_shortcode('[contact-form-7 id="aa20041" title="Lets Talk"]')?>
        </div>

      </div>


    </div>
  </div>
<!-- Lets Talk OffCanvas End -->

  <!-- Mobile navbar -->

  <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileNav" aria-labelledby="mobileNavLabel">
    <div class="offcanvas-header">
      <!-- <h5 class="offcanvas-title" id="mobileNavLabel">Offcanvas</h5> -->
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

      <ul class="link-mobile">

        <li> <a href="<?php echo get_site_url(); ?>/services" class="mobile-link">Services</a>
          <div class="accordion" id="mobileDropdown">
            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#highlight" aria-expanded="false" aria-controls="highlight">Branding & Graphic Design
              </button>
              <div id="highlight" class="accordion-collapse collapse" data-bs-parent="#mobileDropdown">
                <div class="accordion-body">
                  <ul>
                    <li><a href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Logo Design</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Business Card Design</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Brochure Design</a></li>
					<li><a href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Packaging Design</a></li>
					<li><a href="<?php echo get_site_url(); ?>/brand-identity-in-australia">Corporate Identity Design</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#productType" aria-expanded="false" aria-controls="productType">Web Development
              </button>
              <div id="productType" class="accordion-collapse collapse" data-bs-parent="#mobileDropdown">
                <div class="accordion-body">
                  <ul>
                    <li><a href="<?php echo get_site_url(); ?>/web-development-in-australia">Wordpress Development</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/web-development-in-australia">E-commerce Development</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/web-development-in-australia">CMS Development</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/web-development-in-australia">Custom Landing Pages</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/web-development-in-australia">Website Migration Services</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collection" aria-expanded="false" aria-controls="collection">Mobile App Development
              </button>
              <div id="collection" class="accordion-collapse collapse" data-bs-parent="#mobileDropdown">
                <div class="accordion-body">
                  <ul>
                    <li><a href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">iOS App Development</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">Android App Development</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">Hybrid App Development</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">Cross-Platform App Development</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/mobile-app-development-in-australia">App Maintenance & Support</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#hairType" aria-expanded="false" aria-controls="hairType">Web App Development
              </button>
              <div id="hairType" class="accordion-collapse collapse" data-bs-parent="#mobileDropdown">
                <div class="accordion-body">
                  <ul>
                    <li><a href="<?php echo get_site_url(); ?>/web-app-design">Custom Web Applications</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/web-app-design">Enterprise Web Applications</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/web-app-design">Web Portal Development</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/web-app-design">Cloud-Based Web Applications</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/web-app-design">Database-Driven Web Apps</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#branding" aria-expanded="false" aria-controls="branding">Digital & Social Marketing
              </button>
              <div id="branding" class="accordion-collapse collapse" data-bs-parent="#mobileDropdown">
                <div class="accordion-body">
                  <ul>
                    <li><a href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">LinkedIn Marketing</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">TikTok Marketing</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">Meta Marketing</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">Email Marketing</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/social-media-marketing-in-australia">Online Reputation Management</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Logo"
                aria-expanded="false" aria-controls="Logo">SEO
              </button>
              <div id="Logo" class="accordion-collapse collapse" data-bs-parent="#mobileDropdown">
                <div class="accordion-body">
                  <ul>
                    <li><a href="<?php echo get_site_url(); ?>/seo-in-australia">Local SEO</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/seo-in-australia">Technical SEO</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/seo-in-australia">E-commerce SEO</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/seo-in-australia">Google My Business Optimization</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/seo-in-australia">SEO Audits</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href="<?php echo get_site_url(); ?>/work" class="mobile-link">Our Work </a>
        </li>
        <li>
          <a href="<?php echo get_site_url(); ?>/about" class="mobile-link">About Us</a>
        </li>
        <li>
          <a href="<?php echo get_site_url(); ?>/contact" class="mobile-link">Contact Us</a>
        </li>
      </ul>

    </div>
  </div>

  <!-- Mobile navbar End-->