<?php
/*
* Template Name: portfolio
*
*/

 get_header('single');



 // get all term of taxanamin

 $portfolio_cats = get_terms( array(
                       'taxonomy' => 'portfolio_cat',
                       'hide_empty' => false,
                       )
                     );
 ?>
 <!-- Start protofile part  -->
 <div class="d-flex flex-row justify-content-between mt-3">
   <!--catgory part -->
   <div class="col-3 m-0 bg-2">

       <ul class="dg-cat-menu p-0 m-0">
         <?php foreach($portfolio_cats as $portfolio_cat ) : ?>

             <li class="dg-cat-menu-item d-flex flex-row mt-2 ">
               <div class="col-11 d-flex flex-column justify-content-center bg-4 hover-bg-1 hover-text-2">
                   <a href="#" class="text-right text-1  " >
                     <?php echo $portfolio_cat->name; ?>
                   </a>
               </div>
               <div class="col-1 bg-4 h-100"></div>

             </li>

       <?php endforeach; ?>
       </ul>

   </div>
   <!-- end portfolio part -->

   <!-- portfolio items part -->
   <div class="col-9 m-0 d-flex flex-row flex-wrap justify-content-around ">
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


 </div>

 <?php







 get_footer();
?>
