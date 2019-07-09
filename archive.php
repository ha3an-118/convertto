<?php
/*
*  weblog archive template
*
*/
get_header("single");
?>
  <div class="d-flex flex-row flex-nowrap ">

    <div class="col-lg-3 d-none  d-lg-flex flex-column p-0 m-0">

        <div class="dg-cat-aside">

          <?php dynamic_sidebar("weblogwidgetareaside"); ?>

        </div>
    </div>

    <div class="dg-posts col-12 col-lg-9 d-flex flex-column ">
 
      <?php

      get_template_part("template-parts/breadcrumb");

      if(have_posts()){

       echo("<div class='m-0 d-flex flex-row flex-wrap justify-content-around'>");
        while(have_posts() ){
           the_post();
           get_template_part("template-parts/weblog/weblog","page");
        }//end while
        echo("</div>");
        wp_reset_postdata();

        get_template_part('template-parts/pagination');
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
