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
      <a class="navbar-brand" href="index.html"><img
          src="<?php echo get_template_directory_uri() . '/images/Design-Mojo-Logo-01 1.png' ?>" alt="" /></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav"
        aria-controls="mobileNav">
        <span class="fas fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'nav-menu',
            'menu_class' => "navbar-nav mx-auto",
            'navbar' => '',
            'container' => '',
            'add_a_class' => 'nav-link',
            'add_li_class' => 'nav-item'

          )
        );
        ?>


        <!-- <ul class="navbar-nav mx-auto">
          
          <li class="nav-item dropdownmy">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Services</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Our Work</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact Us</a>
          </li>
        </ul> -->




        <a class="btn">Lets Talk</a>


      </div>


    </div>
    <div class="shop-menu" id="shop-dropdown">
      <div class="container-fluid">
        <div class="row g-2 justify-content-center">
          <div class="col-lg-2 col-md-2">
            <h4>Logo branding</h4>
            <ul>
              <li><a href="#">Base</a>
                <p>Customizable Designs</p>
              </li>
              <li><a href="#">Pro</a>
                <p>Advanced Customization Options</p>
              </li>
              <li><a href="#">Enterprise</a>
                <p>Premium Custom Design Solutions</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-2">
            <h4>website development</h4>
            <ul>
              <li><a href="#">Base</a>
                <p>Customizable Designs</p>
              </li>
              <li><a href="#">Pro</a>
                <p>Advanced Customization Options</p>
              </li>
              <li><a href="#">Enterprise</a>
                <p>Premium Custom Design Solutions</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-2">
            <h4>Mobile App Design</h4>
            <ul>
              <li><a href="#">Base</a>
                <p>Customizable Designs</p>
              </li>
              <li><a href="#">Pro</a>
                <p>Advanced Customization Options</p>
              </li>
              <li><a href="#">Enterprise</a>
                <p>Premium Custom Design Solutions</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-2">
            <h4>Web App Design</h4>
            <ul>
              <li><a href="#">Base</a>
                <p>Customizable Designs</p>
              </li>
              <li><a href="#">Pro</a>
                <p>Advanced Customization Options</p>
              </li>
              <li><a href="#">Enterprise</a>
                <p>Premium Custom Design Solutions</p>
              </li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-2">
            <h4>Social Media Marketing</h4>
            <ul>
              <li><a href="#">Base</a>
                <p>Customizable Designs</p>
              </li>
              <li><a href="#">Pro</a>
                <p>Advanced Customization Options</p>
              </li>
              <li><a href="#">Enterprise</a>
                <p>Premium Custom Design Solutions</p>
              </li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-2">
            <h4>Search Engine Opt</h4>
            <ul>
              <li><a href="#">Base</a>
                <p>Customizable Designs</p>
              </li>
              <li><a href="#">Pro</a>
                <p>Advanced Customization Options</p>
              </li>
              <li><a href="#">Enterprise</a>
                <p>Premium Custom Design Solutions</p>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End-->



  <!-- Mobile navbar -->

  <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileNav" aria-labelledby="mobileNavLabel">
    <div class="offcanvas-header">
      <!-- <h5 class="offcanvas-title" id="mobileNavLabel">Offcanvas</h5> -->
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

      <ul class="link-mobile">

        <li> <a href="#" class="mobile-link">Services</a>
          <div class="accordion" id="mobileDropdown">
            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#highlight" aria-expanded="false" aria-controls="highlight">
                Logo and Branding
              </button>
              <div id="highlight" class="accordion-collapse collapse" data-bs-parent="#mobileDropdown">
                <div class="accordion-body">
                  <ul>
                    <li><a href="development.html">Customizable Designs</a></li>
                    <li><a href="development.html">User-Friendly Interface</a></li>
                    <li><a href="development.html">Mobile Optimization</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#productType" aria-expanded="false" aria-controls="productType">
                Website Development
              </button>
              <div id="productType" class="accordion-collapse collapse" data-bs-parent="#mobileDropdown">
                <div class="accordion-body">
                  <ul>
                    <li><a href="development.html">Customizable Designs</a></li>
                    <li><a href="development.html">User-Friendly Interface</a></li>
                    <li><a href="development.html">Mobile Optimization</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collection" aria-expanded="false" aria-controls="collection">
                Mobile app design
              </button>
              <div id="collection" class="accordion-collapse collapse" data-bs-parent="#mobileDropdown">
                <div class="accordion-body">
                  <ul>
                    <li><a href="development.html">Customizable Designs</a></li>
                    <li><a href="development.html">User-Friendly Interface</a></li>
                    <li><a href="development.html">Mobile Optimization</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#hairType" aria-expanded="false" aria-controls="hairType">
                Web App Design
              </button>
              <div id="hairType" class="accordion-collapse collapse" data-bs-parent="#mobileDropdown">
                <div class="accordion-body">
                  <ul>
                    <li><a href="development.html">Customizable Designs</a></li>
                    <li><a href="development.html">User-Friendly Interface</a></li>
                    <li><a href="development.html">Mobile Optimization</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#branding" aria-expanded="false" aria-controls="branding">
                Social Media Marketing
              </button>
              <div id="branding" class="accordion-collapse collapse" data-bs-parent="#mobileDropdown">
                <div class="accordion-body">
                  <ul>
                    <li><a href="development.html">Customizable Designs</a></li>
                    <li><a href="development.html">User-Friendly Interface</a></li>
                    <li><a href="development.html">Mobile Optimization</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Logo"
                aria-expanded="false" aria-controls="Logo">
                Search Engine Opt
              </button>
              <div id="Logo" class="accordion-collapse collapse" data-bs-parent="#mobileDropdown">
                <div class="accordion-body">
                  <ul>
                    <li><a href="development.html">Customizable Designs</a></li>
                    <li><a href="development.html">User-Friendly Interface</a></li>
                    <li><a href="development.html">Mobile Optimization</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href="Our-work.html" class="mobile-link">Our Work </a>
        </li>
        <li>
          <a href="About-us.html" class="mobile-link">About Us</a>
        </li>
        <li>
          <a href="contact-us.html" class="mobile-link">Contact Us</a>
        </li>
      </ul>

    </div>
  </div>

  <!-- Mobile navbar End-->