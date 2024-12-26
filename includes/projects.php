<!-- Project Section -->
<section class="Customer">
  <div class="container">
    <div class="col-md-6 mx-auto">
      <div class="Customer-main">
        <h1>Our Top Rated Projects</h1>
        <p>Discover our top rated projects, where innovation meets excellence in design and branding.</p>
      </div>
    </div>
  </div>

  <!-- Swiper One -->
  <div class="swiper myswiper6 mt-5">
    <div class="swiper-wrapper">
      <?php
      if (have_rows('projects', 'option')):
        while (have_rows('projects', 'option')):
          the_row();
          // Get sub field values.
          $image = get_sub_field('project');
          ?>
          <div class="swiper-slide">
            <div class="Project-card">
              <img src="<?php echo $image ?>" class="img-fluid" alt="" />
            </div>
          </div>

        <?php endwhile;
      endif; ?>

    </div>
  </div>

  <!-- Swiper Two -->
  <div class="swiper myswiper7 mt-5">
    <div class="swiper-wrapper">
      <?php
      if (have_rows('projects', 'option')):
        while (have_rows('projects', 'option')):
          the_row();
          // Get sub field values.
          $image = get_sub_field('project');
          ?>
          <div class="swiper-slide">
            <div class="Project-card">
              <img src="<?php echo $image ?>" class="img-fluid" alt="" />
            </div>
          </div>

        <?php endwhile;
      endif; ?>

    </div>
  </div>

  <!-- Swiper Two End -->
</section>