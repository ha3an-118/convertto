<?php
/**
 *
 */
 add_action( 'widgets_init' , function() { register_widget( 'RegisterOrder' ); } );


class RegisterOrder extends WP_Widget
{

  public function __construct()
  {
    // code...
    parent::__construct(
    'registerorder',
    'registerorder');
  }
  public function widget($arg , $instance){
    ?>
    <!-- start Order part -->
    <?php
        $page_id = (int)get_option('haorderpage');
        $wp_query_temp = new WP_Query(array(
          'page_id' => $page_id,
        ));
        $link = "";
        if($wp_query_temp->have_posts()):
          while($wp_query_temp->have_posts()):
            $wp_query_temp->the_post();
            $link = get_permalink();
          endwhile;
        endif;
     ?>
    <section name="order">

        <div class="text-right mt-3 p-3">
            <h4>
              <?php echo $instance['title']; ?>
            </h4>
        </div>
        <div class="d-flex flex-column flex-md-row  justify-content-center pt-5" comment="this is row div have flex display">

          <!-- start item -->
          <div class="col-11 col-md-3 " comment="this is flex " style="min-height:300px;max-height:300px;">

            <div class="dg-btn-spider dg-btn-spider-background " comment="this is for absolute position">

              <div class="dg-btn-spider dg-btn-spider-forground" commnet="this is for absolute position that contian background spider "></div>

              <div class="dg-btn-spider-normal-content text-center d-flex  justify-content-center">
                  <a href="<?php echo $link ?>" class="flg text-2  hover-text-1 align-self-center"> موشن گرافیک</a>
              </div>


            </div>

          </div>
          <!-- End of item -->

          <!-- start item -->
          <div class="col-11 col-md-3 " comment="this is flex " style="min-height:300px;max-height:300px;">

            <div class="dg-btn-spider dg-btn-spider-background " comment="this is for absolute position">

              <div class="dg-btn-spider dg-btn-spider-forground" commnet="this is for absolute position that contian background spider "></div>

              <div class="dg-btn-spider-normal-content text-center d-flex  justify-content-center">
                  <a href="<?php echo $link ?>" class="flg text-2  hover-text-1 align-self-center">طراحی وب سایت</a>
              </div>


            </div>

          </div>
          <!-- End of item -->

        </div>

    </section>
    <!-- End Order Part -->


    <?php
  }

  public function form($instance){
    ?>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id("title")); ?>"> عنوان </label>
        <input type="text"
               id="<?php echo esc_attr($this->get_field_id("title")); ?>"
               name="<?php echo esc_attr($this->get_field_name("title")); ?>"
               value="<?php echo $instance["title"] ?>">
    </p>
    <?php
  }
  public function update($new_instance,$old_instance){
    return $new_instance;
  }
}


 ?>
