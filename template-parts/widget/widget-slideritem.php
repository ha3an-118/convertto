<div class="dg-product-slider-item" role="sliderItemHolder">
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" class="">
    <div class=" dg-product-slider-item-text text-right p-3">
      <a href="<?php the_permalink(); ?>" class="text-2 hover-text-5">
          <h3>
            <?php the_title(); ?>
          </h3>
      </a>
      <div class="mt-1">
          <?php the_excerpt(); ?>
      </div>

    </div>

</div>