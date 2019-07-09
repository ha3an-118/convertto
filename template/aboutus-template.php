<?php
/*
* Template Name: about us
*
*/

 get_header('single');

 get_template_part("template-parts/breadcrumb");

 if(have_posts()):
   while(have_posts()):
     the_post();
     the_content();
   endwhile;
 endif;

 dynamic_sidebar("aboutuswidgetarea");

 get_footer();
?>
