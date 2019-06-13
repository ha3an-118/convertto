<?php
/*
*this is template for weblog post
*/

get_header("single");

?>
<div class="d-flex flex-row flex-nowrap pt-5 ">

  <!-- =================== aside ========================  -->
      <div class="col-2 d-flex flex-column p-0 m-0">

          <div class="dg-cat-aside">
            <?php dynamic_sidebar('weblogwidgetareaside'); ?>
          </div>
      </div>

      <div class="dg-posts col-10 d-flex flex-column jastify-content-between ">

          <?php if(have_posts()): ?>
              <?php while(have_posts()): the_post(); ?>

                  <?php get_template_part("template-parts/weblog/weblog","single"); ?>

              <?php endwhile; ?>
          <?php endif; ?>

          <?php wp_reset_postdata(); ?>

          <?php // get_template_part("template-parts/gettag"); ?>
      </div>


</div>

<?php


dynamic_sidebar("weblogwidgetarea");
get_footer();


 ?>
