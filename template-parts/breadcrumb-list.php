<?php
    global $portfolio_page_id ;
    echo('
        <li class="breadcrumb-item " aria-current="page"><a href="'.get_permalink($portfolio_page_id).'">'
          .get_the_title($portfolio_page_id).
        '</a></li>
    ');
    //print the page get_the_title

    if(have_posts()):
      while(have_posts()):
        the_post();
        echo('
            <li class="breadcrumb-item active" aria-current="page">'.get_the_title().'</li>
        ');
      endwhile;
      wp_reset_postdata();
    endif; 
?>
