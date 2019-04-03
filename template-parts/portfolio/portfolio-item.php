<?php
/*
* this is template part of portfolio post type
*/
?>
<!-- start protofile item  -->

<div class="col-12 col-sm-11 mx-sm-auto mx-md-0 col-md-5 col-lg-4 col-xl-3 my-2 protofile-item">

  <div class="w-100">
    <div class="w-100">

      <img class=" maskimg img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    </div>

    <div class="h-100 protofile-text  flex-column justify-content-center text-center text-2 container-fluid  ">
      <h5><?php the_title(); ?></h5>
      <div class="pt-2 fr9">
          <?php the_excerpt(); ?>
      </div>
      <a href="<?php the_permalink(); ?>" class="text-3 hover-text-2"> دیدن نمونه کار </a>
    </div>
  </div>

</div>

<!-- End protofile item -->
