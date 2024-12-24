<!-- Partner Section -->
<section class="Partners">
  <!-- First Swiper -->
  <div class="swiper myswiper1">
    <div class="swiper-wrapper">
      <?php
      if (have_rows('logos', 'option')):
        while (have_rows('logos', 'option')):
          the_row();
          // Get sub field values.
      

          $logos = get_sub_field('logo');
          ?>
          <div class="swiper-slide">
            <div class="partner-image">
              <figure>
                <img src="<?php echo $logos ?>" class="img-fluid" alt="" />
              </figure>
            </div>
          </div>
        <?php endwhile;
      endif; ?>

    </div>
  </div>

  <!-- Second Swiper -->
  <div class="swiper myswiper2">
    <div class="swiper-wrapper">
      <?php
      if (have_rows('logos', 'option')):
        while (have_rows('logos', 'option')):
          the_row();
          // Get sub field values.
      

          $logos = get_sub_field('logo');
          ?>
          <div class="swiper-slide">
            <div class="partner-image">
              <figure>
                <img src="<?php echo $logos ?>" class="img-fluid" alt="" />
              </figure>
            </div>
          </div>
        <?php endwhile;
      endif; ?>

    </div>
  </div>
</section>
<!-- Partner Section End -->