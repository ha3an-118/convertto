<?php
/*
* this is template part of portfolio post type in portfolio single page page
*/
?>

<?php if( have_posts() ) :  ?>
  <?php while(have_posts()): the_post(); ?>

    <div class="">
<?php  ?><?php  ?>
      <?php
      $meta = get_post_meta(get_the_ID(),"aparat-link");
      $meta_website = get_post_meta(get_the_ID(),"site-link");
      if(!empty($meta)):
          echo $meta[0];
      elseif(!empty($meta_website)):
        ?>

        <a href="<?php echo $meta_website[0] ?>">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>" class="img-fluid mh-70%" style="max-height:400px; min-width:100%;">
        </a>
        <?php
      else:
       ?>
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid mh-70%" style="max-height:400px; min-width:100%;">
      <?php
    endif;
        ?>
    </div>
    <div class=" text-right pt-5 pr-5">

        <h3 class="mb-5 "><?php the_title(); ?> </h3>
        <div class="">
            <?php the_content(); ?>
        </div>
    </div>


  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>
