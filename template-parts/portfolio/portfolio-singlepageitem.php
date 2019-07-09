<?php
/*
* this is template part of portfolio post type in portfolio page in single page
*/
?>

<!-- start protofile item  -->

<div class="col-12 col-sm-6 col-lg-12  my-1">

  <div class="w-100 ">
    <div class="w-100">
      <img class=" maskimg img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'portfolio-item'); ?>" alt="">
    </div>

    <div class="flex-column justify-content-center text-center text-1 container-fluid  ">
      <h5><?php the_title(); ?></h5>

      <a href="<?php the_permalink(); ?>" class="btn bg-3  text-2 hover-text-2 hover-bg-5"> دیدن نمونه کار </a>
    </div>
  </div>

</div>

<!-- End protofile item -->
