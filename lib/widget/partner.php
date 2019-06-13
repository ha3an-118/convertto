<?php
/**
 *
 */
 require_once(__DIR__."/../widgets_function.php");
 add_action( 'widgets_init' , function() { register_widget( 'partnerwidget' ); } );


class partnerwidget extends WP_Widget
{

  public function __construct()
  {
    // code...
    parent::__construct(
    'partnertest',
    'partner');
  }
  public function widget($arg , $instance){


    ?>
    <section id="<?php echo esc_attr($this->get_field_id("hapartner")) ?>"  class="bg-color2 container-fluid mb-5 ">
      <!-- title  -->
      <div class="text-right">
              <h3>
                <?php echo $instance['title'] ?>
              </h3>
      </div>
      <hr>


        <!-- content -->
        <div id="<?php echo esc_attr($this->get_field_id("hapartnerItems")) ?>" class=" d-flex flex-row flex-wrap justify-content-around ">

          <?php
            $posts_id = array();
            for($index=0 ;$index < (int)$instance["numberOfpartner"] ; $index++):
                if(isset($instance["pageid".$index])):
                  array_push($posts_id,(int)$instance["pageid".$index]);
                endif;
            endfor;

            $partner_arg = array(
                                    'post_type'  => 'page',
                                    'posts_per_page' => (int)$instance["numberOfpartner"],
                                    'post__in' => $posts_id,



            );

            $partner_items = new WP_Query($partner_arg);
            if($partner_items->have_posts()){
              while($partner_items->have_posts()){
                  $partner_items->the_post();

                  ?>
                    <?php get_template_part("template-parts/partner","itme") ?>

                  <?php

              }//end while

            }//end if
            wp_reset_postdata();



           ?>

        </div> <!-- End content part  -->
  </section>  <!-- End #hapartner  -->
    <?php
  }

  public function form($instance){

    ?>
    <div class="widefat">
      <p>
          <label for="<?php echo esc_attr($this->get_field_id("title")); ?>"> عنوان </label>
          <input type="text"
                 id="<?php echo esc_attr($this->get_field_id("title")); ?>"
                 name="<?php echo esc_attr($this->get_field_name("title")); ?>"
                 value="<?php echo $instance["title"] ?>">
      </p>

      <p>
          <label for="<?php echo esc_attr($this->get_field_id("numberOfpartner")); ?>"> تعداد</label>
          <input type="number"
                 id="<?php echo esc_attr($this->get_field_id("numberOfpartner")); ?>"
                 name="<?php echo esc_attr($this->get_field_name("numberOfpartner")); ?>"
                 value="<?php echo $instance["numberOfpartner"] ?>">
      </p>
      <?php
      if(isset($instance["numberOfpartner"])):
        for($index=0 ;$index < (int)$instance["numberOfpartner"] ; $index++):
          $name = esc_attr($this->get_field_name("pageid".$index));
          print_posttype_posts_list($name,"pageid".$index , "page" ,$instance);
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
