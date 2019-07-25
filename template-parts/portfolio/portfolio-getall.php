<?php
  if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
  elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
  else { $paged = 1; }

  global $wp_query;
  $wp_query_arg = array(
                        'post_type'  => 'haportfolio',
                        'paged'=> $paged,
                      );
   $wp_query = new WP_Query($wp_query_arg);
  
   echo "<section id='portfolioshowall' role='haportfolio'>";
   get_template_part('template-parts/gettag','filter');

   if($wp_query->have_posts()):
     echo '<div class="m-0 d-flex flex-row flex-wrap justify-content-around ha-side-content">';
     while($wp_query->have_posts()):
       $wp_query->the_post();
       get_template_part("template-parts/portfolio/portfolio","item");
     endwhile;
     echo "</div>";
     wp_reset_postdata();

     get_template_part('template-parts/pagination');

    else:
       echo "محصولی یافت نشد";
    endif;
    echo "</section>";
 ?>
