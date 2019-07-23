<?php
/*
* this is template part of portfolio post type in portfolio single page page
*/
?>

<?php if( have_posts() ) :  ?>
  <?php while(have_posts()): the_post(); ?>

    <div class="">
      <?php
      $meta = get_post_meta(get_the_ID(),"aparat-link");
      $meta_website = get_post_meta(get_the_ID(),"site-link");
      if(!empty($meta)):
          echo $meta[0];
      elseif(!empty($meta_website)):
        ?>

        <a href="<?php echo $meta_website[0] ?>">
          <?php the_post_thumbnail("ha-singlepage",['class' => 'img-fluid ']); ?>
        </a>
        <?php
      else:
       ?>
          
          <?php the_post_thumbnail("ha-singlepage",['class' => 'img-fluid d-flex mx-auto']); ?>
      <?php
    endif;
        ?>
    </div>
    <div class=" text-right pt-5 container p-0 p-md-1">

        <h3 class="mb-5 "><?php the_title(); ?> </h3>
        <div class="p-0 m-o text-justify text-md-right">
            <?php the_content(); ?>
        </div>
    </div>


  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>
