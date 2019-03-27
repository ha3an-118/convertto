<?php


// register menu one menu for phone one for social menu and one for top menu


function ha_register_menu(){
  $arg = array(
      "top-menu" => __("Desktop header menu "),
      "phone-menu" => __("Phone header menu"),
      "social-menu" => __("social media menu"),
  );
  register_nav_menus($arg);
}
add_action('init', 'ha_register_menu');






 ?>
