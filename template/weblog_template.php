<?php
/*
* Template Name: weblog template
*
*/
get_header("single");

?>
  <div class="d-flex flex-row flex-nowrap ">

    <div class="col-lg-3 d-none d-lg-flex flex-column p-0 m-0">

        <div class="dg-cat-aside">

          <?php dynamic_sidebar("weblogwidgetareaside"); ?>

        </div>
    </div>

    <div class="dg-posts col-12 col-lg-9 d-flex flex-wrap jastify-content-between ">

      <?php
      $portfolio_arg = array(
                              'post_type'  => 'post',
                              'posts_per_page' => 30,
                            );
      $portfolio_items = new WP_Query($portfolio_arg);

      if($portfolio_items->have_posts()){

        while( $portfolio_items->have_posts() ){
           $portfolio_items->the_post();
           get_template_part("template-parts/weblog/weblog","page");
        }//end while
        wp_reset_postdata();
      }//end if
      else {
        echo "متاسفانه ننمونه کار پیدا نشد";
      }

       ?>


    </div>

  </div>


<?php
print_sidebar("weblogwidgetareaside");

dynamic_sidebar("weblogwidgetarea");
get_footer();





 ?>
