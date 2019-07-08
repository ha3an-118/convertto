<?php
/*
*  weblog archive template
*
*/
get_header("single");
?>
  <div class="d-flex flex-row flex-nowrap ">

    <div class="col-2 d-flex flex-column p-0 m-0">

        <div class="dg-cat-aside">

          <?php dynamic_sidebar("weblogwidgetareaside"); ?>

        </div>
    </div>

    <div class="dg-posts col-10 d-flex flex-wrap jastify-content-between ">

      <?php



      if(have_posts()){

        while(have_posts() ){
           the_post();
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


dynamic_sidebar("weblogwidgetarea");
get_footer();





 ?>
