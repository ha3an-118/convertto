<!-- ================ post media ============== -->

    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid " style="max-height:50%;width:100%" alt="">


<!-- =============== post context ============= -->
<section class="text-right pt-4">
  <header class="h4 p-3">
    <?php the_title(); ?>
  </header>
  <article class="p-4">
        <?php the_content(); ?>
  </article>
</section>
