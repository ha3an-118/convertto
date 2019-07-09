<?php
/*
* Template Name: portfolio
*
*/
 get_header('single');
 ?>

 <div class="d-flex flex-row justify-content-between mt-3">
   <!--side bar -->
   <div class="m-0 bg-2 col-lg-3 d-none d-lg-flex flex-column">

      <?php dynamic_sidebar('portfoliowidgetareaside') ?>

   </div>
   <!-- end side bar  -->

   <!-- content part -->
   <div class="m-0 d-flex flex-column  col-12 col-lg-9">
     <?php

    if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
    elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
    else { $paged = 1; }
    global $wp_query;
     $portfolio_arg = array(
                             'post_type'  => 'haportfolio',
                             'paged' => $paged,
                           );
     $wp_query = new WP_Query($portfolio_arg);

     if($wp_query->have_posts()){
       echo("<div class='m-0 d-flex flex-row flex-wrap justify-content-around'>");
       while( $wp_query->have_posts() ){
          $wp_query->the_post();
          get_template_part("template-parts/portfolio/portfolio","iteminpage");
       }//end while
       echo("</div>");
       wp_reset_postdata();

       get_template_part('template-parts/pagination');
     }//end if
     else {
       echo "متاسفانه ننمونه کار پیدا نشد";
     }

      ?>
      </div> <!-- end content part -->



 </div>



 <?php
 print_sidebar("portfoliowidgetareaside");


 dynamic_sidebar('portfoliowidgetarea');

 get_footer();
?>
