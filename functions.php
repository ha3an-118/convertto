<?php


// register menu one menu for phone one for social menu and one for top menu
require_once(__DIR__."/lib/helper_functions.php");
require_once(__DIR__."/lib/admin/option.php");
require_once(__DIR__."/lib/ajax/handelar.php");
require_once(__DIR__."/lib/ajax/orderregister.php");




function ha_register_menu(){
  $arg = array(
      "top-menu" => __("Desktop header menu "),
      "phone-menu" => __("Phone header menu"),
      "social-menu" => __("social media menu"),
      "social-menu-footer" => __("social media menu footer"),
      "contact-info-footer" => __('contact information footer'),
  );
  register_nav_menus($arg);
}
add_action('init', 'ha_register_menu');


// add thme suport coustem logo to theme
$custom_logo_arg = array(
    'height'      => 50,
    'width'       => 50,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
);

add_theme_support( 'custom-logo' );
// add_theme_support();
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header');
add_action( 'widgets_init', 'ha_widgets_init' );
function ha_widgets_init() {
    register_sidebar( array(
        'name' => __( 'footer name and adress' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
      	'after_widget'  => '</li>',
      	'before_title'  => '<h2 class="widgettitle">',
      	'after_title'   => '</h2>',
        ) );
    register_sidebar( array(
            'name' => __( 'portfolio widget area' ),
            'id' => 'portfoliowidgetarea',
            'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
          	'after_widget'  => '</li>',
          	'before_title'  => '<h2 class="widgettitle">',
          	'after_title'   => '</h2>',
            ) );

    register_sidebar( array(
                    'name' => __( 'weblog widget area' ),
                    'id' => 'weblogwidgetarea',
                    'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
                    'before_widget' => '<li id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</li>',
                    'before_title'  => '<h2 class="widgettitle">',
                    'after_title'   => '</h2>',
                    ) );
    register_sidebar( array(
                                    'name' => __( 'weblog widget area side' ),
                                    'id' => 'weblogwidgetareaside',
                                    'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
                                    'before_widget' => '<div class="dg-cat-aside text-right">',
                                    'after_widget'  => '</div>',
                                    'before_title'  => '<a href="#" class="list-group-item dg-list-header">',
                                    'after_title'   => '</a>',
                                    ) );
    register_sidebar( array(
                         'name' => __( 'portfolio widget area side' ),
                         'id' => 'portfoliowidgetareaside',
                         'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
                         'before_widget' => '<div class="dg-cat-aside text-right">',
                         'after_widget'  => '</div>',
                         'before_title'  => '<a href="#" class="list-group-item dg-list-header">',
                         'after_title'   => '</a>',
                      ) );
    register_sidebar( array(
                    'name' => __( 'single page header' ),
                    'id' => 'singlepageheader',
                    'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
                    'before_widget' => '<li id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</li>',
                    'before_title'  => '<h2 class="widgettitle">',
                    'after_title'   => '</h2>',
                                                    ) );

        }


// ----------------------------------------------------------
ha_add_widget("aboutus");//function on lib/helper_functions
ha_add_widget("portfolio");
ha_add_widget("registerorder");
ha_add_widget("aboutuspageshow");
ha_add_widget("slider");
ha_add_widget("sidebarCat");
ha_add_widget("partner");








 ?>
