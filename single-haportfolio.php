<?php
/*
* this template for haportfolio post type single page
*/

get_header("single");

?>
<div  class="d-flex  flex-column  flex-lg-row justify-content-between mt-3">

  <div class="col-12 col-lg-9">

    <?php get_template_part("template-parts/portfolio/portfolio","singlepage"); ?>

    <?php  get_template_part("template-parts/gettag"); ?>


  </div>
  <div class="col-12 col-lg-3  m-0 d-flex flex-column    justify-content-start bg-4">
      <div class="text-right text-1 p-3">
          <h5>
          نمونه کار های مشابه
        </h5>
        <hr class="bg-2">
      </div>
      <div class="d-flex flex-wrap justify-content-around">


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


</div>


<?php




dynamic_sidebar("portfoliowidgetarea");
get_footer();

 ?>
