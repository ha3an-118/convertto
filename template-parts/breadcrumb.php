<div class="shadow p-3   rounded">
  <nav aria-label="breadcrumb ">
     <ol class="breadcrumb">
       <li class="breadcrumb-item">
         <a href="<?php echo bloginfo("url") ?>">
            خانه
          </a>
      </li>

<?php
  $breadcrumb_items = array(
    "home" => 'خانه',
  );
  if(is_page()):
    if(have_posts()):
      while(have_posts()):
        the_post();
        echo('
            <li class="breadcrumb-item active" aria-current="page">'.get_the_title().'</li>
        ');
      endwhile;
      wp_reset_postdata();
    endif;
  endif;
  global $portfolio_page_id;
  if(is_singular("haportfolio")):
    //must get the static page link
    $portfolio_page_id = (int)get_option('haportfoliopage');
    get_template_part("template-parts/breadcrumb","list");
  endif;
  if(is_singular("post")):
    //must get the static page link
    $portfolio_page_id = (int)get_option('haweblogpage');
    get_template_part("template-parts/breadcrumb","list");
  endif;
  if(is_archive()){
    echo('
        <li class="breadcrumb-item active" aria-current="page">'.get_the_archive_title().'</li>
    ');
  }
 ?>

     </ol>
 </nav>


</div>
