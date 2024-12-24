<!-- Asked Question Section -->
<section class="Customer Asked">
  <div class="container">
    <div class="col-md-7 mx-auto">
      <div class="Customer-main mb-5">
        <h1>Frequently asked question</h1>
        <p>Got questions? We’ve got answer. Explore our FAQ section to find all the details about our services,
          pricing and more.</p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="accordion-buttons">
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <?php
        $first_iteration = true;
        if (have_rows('accordion', 'option')):
          while (have_rows('accordion', 'option')):
            the_row();
            // Get sub field values.
        
            $Title = get_sub_field('accordion_title');
            $Description = get_sub_field('accordion_description');
            ?>
            <div class="accordion-item">
              <?php
              $collapseClass = $first_iteration ? 'show' : '';
              ?>

              <h2 class="accordion-header" id="flush-headingOne-<?php echo get_row_index(); ?>">
                <button class="accordion-button <?php echo $collapseClass; ?> " type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne-<?php echo get_row_index(); ?>" aria-expanded="false"
                  aria-controls="flush-collapseOne-<?php echo get_row_index(); ?>">
                  <?php echo $Title ?>
                </button>
              </h2>
              <div id="flush-collapseOne-<?php echo get_row_index(); ?>"
                class="accordion-collapse collapse <?php echo $collapseClass; ?>"
                aria-labelledby="flush-headingOne-<?php echo get_row_index(); ?>" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="accordion-content">
                    <div class="row">
                      <div class="col-md-11">
                        <p><?php echo $Description ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <?php
            $first_iteration = false;
          endwhile;
        endif;
        wp_reset_query();
        ?>
      </div>

    </div>
  </div>
</section>
<!-- Asked Question Section End -->