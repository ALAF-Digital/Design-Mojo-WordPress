<!-- Customer Section -->
<section class="Customer">
  <div class="container">
    <div class="col-md-6 mx-auto">
      <div class="Customer-main">
        <h1>What They Customer Say</h1>
        <p>Hear from our customer about how we have transformed their vision into success stories:</p>
      </div>
    </div>
  </div>

  <!-- Swiper One -->
  <div class="swiper myswiper4 mt-5">
    <div class="swiper-wrapper">
      <?php
      if (have_rows('testimonials', 'option')):
        while (have_rows('testimonials', 'option')):
          the_row();
          // Get sub field values.
      

          $image = get_sub_field('testimonial_image');
          $name = get_sub_field('testimonial_name');
          $business = get_sub_field('testimonial_business');
          $comment = get_sub_field('testimonial_comment');
          ?>
          <div class="swiper-slide">
            <div class="Customer-card">
              <div class="customer-head">
                <img src="<?php echo $image ?>" class="img-fluid" alt="" />
                <div class="customer-name">
                  <h3><?php echo $name ?></h3>
                  <p><?php echo $business ?></p>
                </div>
              </div>
              <div class="customer-content">
                <p><?php echo $comment ?></p>
                <div class="cardicon pt-2">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>

                </div>
              </div>

            </div>
          </div>
        <?php endwhile;
      endif; ?>
    </div>
  </div>
  <!-- Swiper One End -->

  <!-- Swiper Two -->
  <div class="swiper myswiper5 mt-5">
    <div class="swiper-wrapper">
      <?php
      if (have_rows('testimonials', 'option')):
        while (have_rows('testimonials', 'option')):
          the_row();
          // Get sub field values.
      

          $image = get_sub_field('testimonial_image');
          $name = get_sub_field('testimonial_name');
          $business = get_sub_field('testimonial_business');
          $comment = get_sub_field('testimonial_comment');
          ?>
          <div class="swiper-slide">
            <div class="Customer-card">
              <div class="customer-head">
                <img src="<?php echo $image ?>" class="img-fluid" alt="" />
                <div class="customer-name">
                  <h3><?php echo $name ?></h3>
                  <p><?php echo $business ?></p>
                </div>
              </div>
              <div class="customer-content">
                <p><?php echo $comment ?></p>
                <div class="cardicon pt-2">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>

                </div>
              </div>

            </div>
          </div>
        <?php endwhile;
      endif; ?>

    </div>
  </div>
  <!-- Swiper Two End -->
</section>
<!-- Customer Section End -->