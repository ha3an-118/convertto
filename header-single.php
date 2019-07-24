<?php
if( !session_id() ):
  session_start();
endif;
 ?>
<!DOCTYPE html>
<html style="padding:0 !important; margin:0 !important;">
    <head>
        <meta charset='utf-8' lang='fa'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo bloginfo("name"); ?></title>
        <meta name="description" content="<?php echo bloginfo("discription"); ?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/css/bootstrap.css">
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/assets/js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/assets/js/expand.js"></script>
        <!--      slider part           -->
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/assets/js/slider.js"></script>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/css/slider.css">
        <!-- add other css file  -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/css/colorpalet.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/css/font.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/css/tiFontIcon.css">
                <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/css/fontawesome.css">

          <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/assets/js/portfolio.js"></script>
          <style media="screen">
          html{
            padding: 0 !important;
            margin: 0 !important;
          }

          </style>

<?php
  $ha_style_option = get_option("hathemeshowmode");
  if($ha_style_option == '1st'){
    ?>
    <style media="screen">
    .maskimg{
        mask:none;
        mask-repeat:no-repeat;
        mask-position:center;
        mask-size:contain;
        transition: all 1s;
    }
    </style>

    <?php

  }


 ?>
    <!--  head -->
    <?php wp_head(); ?>
    <!--  head end  -->
    </head>
    <body >
        <!-- start  header part  -->

          <header class=' text-2 d-flex flex-column dg-header    justify-content-between' style="z-index:1;">
             <!--  start navigation part          -->
              <section class="coustum-header container-fluid" style="z-index:-2">
               <!-- navigation part -->
                <nav class="" >
                  <div class="py-2  d-md-flex flex-row dg-nav d-none">
                    <div id="navBrand" class="d-flex flex-row ">

                        <div class="">
                            <!-- logo of company -->
                            <a href="#" title=" <?php bloginfo("name") ?>"  class="">
                                <?php the_custom_logo(); ?>
                            </a>

                        </div>

                        <div class="align-self-center">
                            <!-- name of company-->
                            <a href="#" title="" class="">
                                <span class=" pr-2 text-3 hover-text-2" style="font-size:1.2rem;">
                                    <?php bloginfo("name") ?>
                                </span>
                            </a>
                        </div>

                    </div>


                    <?php
                      $arg_top_menu = array(
                        'menu_class'        => "d-flex flex-row align-self-center p-0 m-0 pr-3",
                        'menu_id'           => "",
                        'container'         => "div",
                        'container_class'   => "ha-nav-menu-top d-flex",
                        'container_id'      => "navList",
                        'before'            => "",
                        'after'             => "",
                        'link_before'       => "<span class='align-self-center pr-2 text-2 hover-text-3 fmd'>",
                        'link_after'        => "</span>",
                        'theme_location'    => "top-menu",

                      );

                      wp_nav_menu( $arg_top_menu );

                      ?>

                    <?php
                      $arg_top_menu = array(
                        'menu_class'        => "d-flex flex-row align-self-center p-0 m-0 pr-3",
                        'menu_id'           => "",
                        'container'         => "div",
                        'container_class'   => "socialmenu d-flex pl-3",
                        'container_id'      => "socialmenutop",
                        'before'            => "",
                        'after'             => "",
                        'link_before'       => "<span class='align-self-center pr-2 text-2 hover-text-3 fmd'>",
                        'link_after'        => "</span>",
                        'theme_location'    => "social-menu",

                      );



                      wp_nav_menu( $arg_top_menu );

                      ?>

                    </div>

                  <div class="d-flex d-md-none dg-nav py-2 justify-content-between">
                    <div id="navBrand" class="d-flex flex-row ">

                        <div class="">
                            <!-- logo of company -->
                            <a href="#" title=" <?php bloginfo("name") ?>"  class="">
                                <?php the_custom_logo(); ?>
                            </a>

                        </div>

                        <div class="align-self-center">
                            <!-- name of company-->
                            <a href="#" title="" class="">
                                <span class=" pr-2 text-3 hover-text-2" style="font-size:1.2rem;">
                                    <?php bloginfo("name") ?>
                                </span>
                            </a>
                        </div>

                    </div>
                    <div class="align-self-center">
                      <button expandwinid="topnavphone" class="btn btn-danger" >
                        <i class="ti ti-Line-Allign"></i>
                      </button>
                    </div>
                  </div>
                </nav>
                <!-- slider part  -->
              </section>
              <!--  End  navigation part          -->
              <!--   start header  button part   -->
              <?php dynamic_sidebar('singlepageheader'); ?>
              <!--   End  header  button part   -->

           </header>
          <div id="topnavphone" class="dgnavphone"
              beforewidth="100%" beforeheight="0" beforepositiontop="0" beforepositionleft="0"
              afterwidth="100%" afterheight="100%" afterpositiontop="0" afterpositionleft="0" >
                <div class="contianer-fluid d-flex flex-column">

                  <div>
                    <div class="d-flex d-md-none dg-nav p-2 justify-content-between">
                      <div id="navBrand" class="d-flex flex-row ">

                          <div class="">
                              <!-- logo of company -->
                              <a href="#" title="" >
                                  <!-- <img  src="logo.png" title="" alt="" height="50px"> -->
                                  <?php the_custom_logo(); ?>
                              </a>

                          </div>

                          <div class="align-self-center">
                              <!-- name of company-->
                              <a href="#" title="" class="">
                                  <span class=" pr-2 text-3 hover-text-2" style="font-size:1.2rem;">
                                      <?php bloginfo("name") ?>
                                  </span>
                              </a>
                          </div>

                      </div>
                      <div class="align-self-center">
                        <button expandwinid="topnavphone" class="btn btn-danger" >
                          <i class="ti ti-Line-Allign"></i>
                        </button>
                      </div>

                    </div>
                    <div class="container-fluid">
                      <hr class="col-11 mx-auto bg-1" style=" ">
                    </div>
                  </div>




                  <?php
                    $arg_top_menu_social = array(
                      'menu_class'        => "d-flex flex-row align-self-center flex-wrap justify-content-between p-0 m-0 pr-3",
                      'menu_id'           => "",
                      'container'         => "div",
                      'container_class'   => "socialmenu d-flex align-items-center justify-content-center ",
                      'container_id'      => "socialmenutop",
                      'before'            => "",
                      'after'             => "",
                      'link_before'       => "<span class='align-self-center pr-2 text-2 hover-text-3 fmd'>",
                      'link_after'        => "</span>",
                      'theme_location'    => "social-menu",

                    );



                    wp_nav_menu( $arg_top_menu_social );

                    ?>







                  <?php
                    $arg_top_menu = array(
                      'menu_class'        => "d-flex flex-column pr-4 align-items-start p-0 m-0 phone-menu-top",
                      'menu_id'           => "",
                      'container'         => "div",
                      'container_class'   => "ha-nav-menu-top d-flex",
                      'container_id'      => "navList",
                      'before'            => "",
                      'after'             => "",
                      'link_before'       => "<span class=' pr-2 text-2 hover-text-3 fmd pt-3'>",
                      'link_after'        => "</span>",
                      'theme_location'    => "top-menu",

                    );

                    wp_nav_menu( $arg_top_menu );
                    ?>

                </div>









              </div>
        <!-- end header part -->
