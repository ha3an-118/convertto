<?php
/*
* Template for show page
*/
get_header('single');

if(have_posts()):
  while(have_posts()):
    the_post();
    the_content();
  endwhile;
endif;

get_footer();

 ?>
