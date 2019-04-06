<?php
/**
 *
 */
 add_action( 'widgets_init' , function() { register_widget( 'aboutuspageshow' ); } );


class aboutuspageshow extends WP_Widget
{

  public function __construct()
  {
    // code...
    parent::__construct(
    'aboutuspageshow',
    'aboutuspageshow');
  }
  public function widget($arg , $instance){
    ?>
    <!-- start about us part -->
    <div class="container-fluid about-us">

        <section class="col-11 mx-auto p-4 text-right text-2 "  name="aboutus">
            <h3 class="p-2">
                  <?php echo $instance['title']; ?>
            </h3>
            <div class="p-5 mt-1 mx-auto">

              
              <p class="text-justify">
                  <?php echo $instance['content']; ?>
              </p>
            </div>


        </section>

    </div>
    <!-- End about US part -->

    <?php
  }

  public function form($instance){
    ?>
      <input class="widefat" type="text" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo $instance['title'] ?>">
      <textarea class="widefat" name="<?php echo esc_attr($this->get_field_name('content') )?>" rows="8" cols="80">
          <?php echo $instance['content']; ?>
      </textarea>

    <?php
  }
  public function update($new_instance,$old_instance){
    return $new_instance;
  }
}


 ?>
