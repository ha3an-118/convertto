<?php
/*
* this template for haportfolio post type single page
*/

get_header("single");

?>
<div  class="d-flex flex-row justify-content-between mt-3">

  <div class="col-9">

    <?php get_template_part("template-parts/portfolio/portfolio","singlepage"); ?>

  </div>
  <div class="col-3  m-0 d-flex flex-column  justify-content-around ">
        <?php
        $portfolio_arg = array(
                                'post_type'  => 'haportfolio',
                                'posts_per_page' => 4,
                              );
       $portfolio_items = new WP_Query($portfolio_arg);

      if($portfolio_items->have_posts()){

      while( $portfolio_items->have_posts() ){
               $portfolio_items->the_post();
               get_template_part("template-parts/portfolio/portfolio","singlepageitem");
        }//end while

      }//end if
      else {
            echo "متاسفانه ننمونه کار پیدا نشد";
      }


         ?>
  </div>


</div>


<?php




dynamic_sidebar("portfoliowidgetarea");
get_footer();

 ?>
