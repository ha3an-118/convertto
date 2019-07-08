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

 <div class="fixed-bottom d-block d-lg-none " style="left:unset !important;">
   <button expandwinid="portfolio_sidebar_widget_area" class="btn btn-danger" >

     <i class="fas fa-filter fa-2x fa-spin"></i>
   </button>
 </div>

 <div id="portfolio_sidebar_widget_area" class="dgnavphone"
     beforewidth="0%" beforeheight="0" beforepositiontop="0" beforepositionleft="0"
     afterwidth="100%" afterheight="100%" afterpositiontop="0" afterpositionleft="0" >
     <div class="align-self-center">
       <button expandwinid="portfolio_sidebar_widget_area" class="btn btn-danger" >
         <i class="fa fa-times fa-2x fa-spin"></i>
       </button>
     </div>
      <?php dynamic_sidebar('portfoliowidgetareaside') ?>

</div>
 <?php
 dynamic_sidebar('portfoliowidgetarea');

 get_footer();
?>
