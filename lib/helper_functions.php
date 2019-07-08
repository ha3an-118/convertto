<?php
/*
* this function must enable widget by require_one
*/
function ha_add_widget( $widgetName )
{
  $fileName = __DIR__."/widget/".$widgetName.".php";

    require_once($fileName);

}

add_action('wp_head','view_counter');
function view_counter(){

    if(!isset($_SESSION["haview".get_the_ID()])):
      $_SESSION["haview".get_the_ID()] = get_the_ID();
      global $wp_query;
      if(have_posts()):
        while(have_posts()):
          the_post();
          $view = get_post_meta(get_the_ID(),"ha-view",true);
          if(empty($view)):

            add_post_meta(get_the_ID(),"ha-view",'1',true);
          else:
            $view_temp = (int)$view[0]+1;
            update_post_meta(get_the_ID(),"ha-view",$view_temp,true);

          endif;
        endwhile;

      endif;
  else:

  endif;//sesion
}



function print_sidebar($sidebar_id)
{

  global $sidebarID ;
  $sidebarID  = $sidebar_id;
  get_template_part("template-parts/sidebarTemp");

}

 ?>
