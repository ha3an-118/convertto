<?php
/**
 *
 */
 require_once(__DIR__."/../widgets_function.php");
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
    <section id="<?php echo esc_attr($this->get_field_id("haportfolio")) ?>" role="haportfolio" class="bg-color2 container-fluid mb-5 ">

        <!-- header   -->
        <?php
            // must get the parent of taxanomi and any
            // wp-get terms with taxanomi of portfolio_cat and parent 0
            // then get the term name and print it on top menu with link

            $terms = get_terms( array(
                                  'taxonomy' => 'portfolio_cat',
                                  'hide_empty' => true,
                                  'parent' => 0,
                                  )
                                );
          ?>
          <div id="<?php echo esc_attr($this->get_field_id("haportfolilonavigation")) ?>" class="mx-auto d-flex flex-row flex-wrap  my-4 justify-content-center justify-content-md-start">

            <?php  foreach( $terms as  $term ): ?>
            <div class="ha-portfolio-nav-btn my-1">
               <button type="button" name="button" showid="<?php echo $term->term_id; ?>" onclick="hafilterportfolio(this)"
                        class="btn bg-3 text-2 p-2 px-4 mx-2 rounded mw-100" >
                   <?php echo $term->name; ?>
               </button>
            </div>
          <?php endforeach; ?>
          <div class="ha-portfolio-nav-btn my-1">
             <button type="button" name="button" showid="0" onclick="hafilterportfolio(this)"
                      class="btn bg-3 text-2 p-2 px-4 mx-2 rounded mw-100" >
                      نمایش همه
             </button>
          </div>
          </div>




        <!-- content -->
        <div id="<?php echo esc_attr($this->get_field_id("haPortfolioItems")) ?>" class=" d-flex flex-row flex-wrap justify-content-around ">

          <?php
            $posts_id = array();
            for($index=0 ;$index < (int)$instance["numberOfPortfolio"] ; $index++):
                if(isset($instance["pageid".$index])):
                  array_push($posts_id,(int)$instance["pageid".$index]);
                endif;
            endfor;
            
            $portfolio_arg = array(
                                    'post_type'  => 'haportfolio',
                                    'posts_per_page' => (int)$instance["numberOfPortfolio"],
                                    'post__in' => $posts_id,



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

    ?>
    <div class="widefat">

      <p>
          <label for="<?php echo esc_attr($this->get_field_id("numberOfPortfolio")); ?>"> تعداد نمونه کار</label>
          <input type="number"
                 id="<?php echo esc_attr($this->get_field_id("numberOfPortfolio")); ?>"
                 name="<?php echo esc_attr($this->get_field_name("numberOfPortfolio")); ?>"
                 value="<?php echo $instance["numberOfPortfolio"] ?>">
      </p>
      <?php
      if(isset($instance["numberOfPortfolio"])):
        for($index=0 ;$index < (int)$instance["numberOfPortfolio"] ; $index++):
          $name = esc_attr($this->get_field_name("pageid".$index));
          print_posttype_posts_list($name,"pageid".$index , "haportfolio" ,$instance);
        endfor;
      endif;

       ?>


    </div>

    <?php

    // print_posttype_posts_list($this->get_field_name("test") , "post" ,$instance);

    echo "this is test";
  }
  public function update($new_instance,$old_instance){
    return $new_instance;
  }
}


 ?>
