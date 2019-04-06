<?php
/**
 *
 */
 add_action( 'widgets_init' , function() { register_widget( 'Portfoliowidget' ); } );


class Portfoliowidget extends WP_Widget
{

  public function __construct()
  {
    // code...
    parent::__construct(
    'portfoliotest',
    'protfolio');
  }
  public function widget($arg , $instance){


    ?>
    <section id="haportfolio" class="bg-color2 container-fluid mb-5 ">

        <!-- header   -->
        <?php
            // must get the parent of taxanomi and any
            // wp-get terms with taxanomi of portfolio_cat and parent 0
            // then get the term name and print it on top menu with link

            $terms = get_terms( array(
                                  'taxonomy' => 'portfolio_cat',
                                  'hide_empty' => false,
                                  'parent' => 0,
                                  )
                                );
          ?>
          <div id="haPortfolioNav" class="mx-auto d-flex flex-row flex-wrap  my-4 justify-content-center justify-content-md-start">

            <?php  foreach( $terms as  $term ): ?>
            <div class="ha-portfolio-nav-btn my-1">
               <button type="button" name="button" class=" bg-3 text-2 p-2 px-4 mx-2 rounded mw-100">
                   <?php echo $term->name; ?>
               </button>
            </div>
          <?php endforeach; ?>

          </div>




        <!-- content -->
        <div id="haPortfolioItems" class=" d-flex flex-row flex-wrap justify-content-around ">

          <?php

            $portfolio_arg = array(
                                    'post_type'  => 'haportfolio',
                                    'posts_per_page' => 12,



            );
            $portfolio_items = new WP_Query($portfolio_arg);
            if($portfolio_items->have_posts()){
              while($portfolio_items->have_posts()){
                  $portfolio_items->the_post();
                  ?>
                    <?php get_template_part("template-parts/portfolio/portfolio","item") ?>

                  <?php

              }//end while

            }//end if
            wp_reset_postdata();



           ?>

        </div> <!-- End content part  -->
  </section>  <!-- End #haportfolio  -->
    <?php
  }

  public function form($instance){
    echo "this is test";
  }
  public function update($new_instance,$old_instance){
    return $new_instance;
  }
}


 ?>
