<div class="dg-product-slider-item" role="sliderItemHolder">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="">
    <div class="col-6 dg-product-slider-item-text text-right p-3">
      <h3>
      <?php the_title(); ?>
      </h3>
      <div class="mt-1">
          <?php the_excerpt(); ?>
      </div>

    </div>

</div>
