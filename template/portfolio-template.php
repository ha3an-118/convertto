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
   <div class="m-0 d-flex flex-row flex-wrap justify-content-around col-12 col-lg-9">
     <?php
     $portfolio_arg = array(
                             'post_type'  => 'haportfolio',
                             'posts_per_page' => 30,
                           );
     $portfolio_items = new WP_Query($portfolio_arg);

     if($portfolio_items->have_posts()){

       while( $portfolio_items->have_posts() ){
          $portfolio_items->the_post();
          get_template_part("template-parts/portfolio/portfolio","iteminpage");
       }//end while

     }//end if
     else {
       echo "متاسفانه ننمونه کار پیدا نشد";
     }

      ?>


   </div>
   <!-- end content part -->

 </div>



 <?php
 print_sidebar("portfoliowidgetareaside");


 dynamic_sidebar('portfoliowidgetarea');

 get_footer();
?>
