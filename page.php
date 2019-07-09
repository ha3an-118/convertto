<?php
/*
* Template for show page
*/
get_header('single');

get_template_part("template-parts/breadcrumb");
if(have_posts()):
  while(have_posts()):
    the_post();
    the_content();
  endwhile;
endif;

get_footer();

 ?>
