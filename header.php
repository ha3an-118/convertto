<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' lang='fa'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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

        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/assets/js/portfolio.js"></script>

    </head>
    <body >
        <!-- start  header part  -->

           <header class=' text-2 d-flex flex-column dg-nav  dg-slider-bg justify-content-between'>
             <!--  start navigation part          -->
              <section class="coustum-header container-fluid">
               <!-- navigation part -->
                <nav class="" >
                  <div class="py-2  d-md-flex flex-row dg-nav d-none">
                    <div id="navBrand" class="d-flex flex-row ">

                        <div class="">
                            <!-- logo of company -->
                            <a href="#" title=" <?php bloginfo("name") ?>"  class="">
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
                    <?php /*
                    <!--  this is code sample  -->
                    <!-- <div id="navSociai" class="d-flex flex-row ">
                      <a href="#" title="" class="align-self-center px-1">
                        <i class="ti-Line-Home text-2 hover-text-3 ti-lg"></i>
                      </a>

                    </div> -->
                     */ ?>
                    <?php
                      $arg_top_menu_social = array(
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



                      wp_nav_menu( $arg_top_menu_social );

                      ?>
                    </div>


                  <div class="d-flex d-md-none dg-nav py-2 justify-content-between">
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
                </nav>
                <!-- slider part  -->
              </section>
              <!--  End  navigation part          -->


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



                  <!-- <div id="navSociaiphone" class="d-flex flex-row align-items-center justify-content-center my-2 ">
                    <a href="#" title="" class="align-self-center px-1">
                      <i class="ti-Line-Home text-2 hover-text-3 ti-lg"></i>
                    </a>
                    <a href="#" title="" class="align-self-center px-1">
                      <i class="ti-Line-Home text-2 hover-text-3 ti-lg"></i>
                    </a>
                    <a href="#" title="" class="align-self-center px-1">
                      <i class="ti-Line-Home text-2 hover-text-3 ti-lg"></i>
                    </a>
                    <a href="#" title="" class="align-self-center px-1">
                      <i class="ti-Line-Home text-2 hover-text-3 ti-lg"></i>
                    </a>
                  </div> -->
                  <?php
                    $arg_top_menu_social = array(
                      'menu_class'        => "d-flex flex-row align-self-center  p-0 m-0 pr-3",
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





                  <!-- <div id="navListphone" class=" d-flex flex-column pr-4 align-items-start " style=";">
                      <a href="#" class=" pr-2 mt-2 text-2 hover-text-3">صفحه اصلی </a>
                      <a href="#" class=" pr-2 mt-2 text-2 hover-text-3">صفحه اصلی </a>
                      <a href="#" class=" pr-2 mt-2 text-2 hover-text-3">صفحه اصلی </a>
                      <a href="#" class=" pr-2 mt-2 text-2 hover-text-3">صفحه اصلی </a>

                  </div> -->

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
              <!--   start header  button part   -->

              <section class="d-flex flex-column  flex-sm-row align-items-center justify-content-center mb-5 pb-5">

                  <div id="btnmotiongraphic" class="dg-bg-spider header-btn mx-5 ">
                    <a href="#" class="text-2 hover-text-1">
                      <div class=" dg-test">
                            <div class="dg-test-text">
                            موشن گرافیک
                            </div>
                        <!--    <div class="header-btn-hover-text flex-column align-items-center justify-content-center text-2">
                                <div class="">
                                  <a href="#" class="text-2 hover-text-1">  سفارش</a>

                                </div>
                                <hr>
                                <div class="">
                                  دیدن نمونه کار ها
                                </div>
                            </div> -->
                    </div>
                    </a>
                  </div>


                  <div id="btnWebsite" class="dg-bg-spider mx-5">
                    <a href="#" class="text-2 hover-text-1">
                      <div class="dg-test">
                            <div class="dg-test-text">
                                طراحی وب سایت
                            </div>
                    </div>
                    </a>
                  </div>


              </section>

              <!--   End  header  button part   -->

           </header>

        <!-- end header part -->
