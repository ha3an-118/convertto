<?php
/**
 *
 */
 require_once(__DIR__."/../widgets_function.php");
 add_action( 'widgets_init' , function() { register_widget( 'SliderWidget' ); } );


class SliderWidget extends WP_Widget
{
  private static $numberOfSlide = 3;
  public function __construct()
  {
    // code...
    parent::__construct(
    'sliderwidget',
    'slider');
  }
  public function widget($arg , $instance){
      if(isset($instance["SlidesNumber"])):
        // TODO: must print the slide
        $slidenumber = (int)$instance["SlidesNumber"];
        $cycleTime = ((int)$instance["SlidesTime"])*1000;
        $cycleOption = $instance["slideing"];
        ?>
        <div class="dg-product-slider ">

          <div class="" id="<?php echo esc_attr($this->get_field_id("productpageslider")); ?>"
                role="slider"
                <?php echo ($cycleOption=="on")?"cycle=".$cycleTime:"" ?>
                  pagination="true" >
                  <!-- IDEA: slider items  -->
                  <div class="" role="sliderItemsHolder">

                    <?php
                      for($index=0 ;$index<$slidenumber ; $index++):
                        $arg = array(
                                "page_id" => (int)$instance["pageid".$index],
                        );
                        $slide = new WP_Query($arg);
                        if($slide->have_posts()):
                          while($slide->have_posts()):
                              $slide->the_post();
                              get_template_part("template-parts/widget/widget","slideritem");
                          endwhile;
                        endif;
                      endfor;

                     ?>


                  </div>
                  <!-- end [role=sliderItemsHolder]  -->
                  <div class="" role="sliderNavigation">

                      <div class="" role="sliderPaginations" content>

                      </div>

                  </div>
          </div> <!-- end [role=slider] -->



        <?php

      endif;
/*
<div class="dg-product-slider ">

  <div class="" id="productpageslider" role="slider" cycle="5000"  pagination="true" >

          <!-- IDEA: slider items  -->
          <div class="" role="sliderItemsHolder">

            <div class="dg-product-slider-item" role="sliderItemHolder">
                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/image/2.png" alt="" class="">
                <div class="col-6 dg-product-slider-item-text text-right p-3">
                  <h3>این یک هدر است </h3>
                  <p class="mt-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد </p>
                </div>

            </div>

            <div class="dg-product-slider-item" role="sliderItemHolder">
                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/image/3.png" alt="" class="">
                <div class="col-6 dg-product-slider-item-text text-right p-3">
                  <h3>این یک هدر است </h3>
                  <p class="mt-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد </p>
                </div>

            </div>

          </div>

          <div class="" role="sliderNavigation">

              <div class="" role="sliderPaginations" content>

              </div>

          </div>


  </div>




</div>

*/

  }

  public function form($instance){

      self::$numberOfSlide = (empty($instance["SlidesNumber"]))?3:(int)$instance["SlidesNumber"];

    ?>
    <style media="screen">
      .ha-d-flex{
        display: flex;
      }
      .ha-justify-around{
        justify-content: space-around;
      }
      .ha-justify-between{
        justify-content: space-between;
      }

    </style>
    <div class="widget-content" >
      <p>
        <label for="">اسلایدر </label>
      </p>
      <hr>

      <p class="ha-d-flex ha-justify-between">
        <label for="<?php echo esc_attr($this->get_field_id("SlidesNumber")); ?>">
            تعداد اسلاید
        </label>
        <input type="number"
               id="<?php echo esc_attr($this->get_field_id("SlidesNumber")); ?>"
               name="<?php echo esc_attr($this->get_field_name("SlidesNumber")); ?>"
               value="<?php echo (empty($instance["SlidesNumber"]))?self::$numberOfSlide :$instance["SlidesNumber"]; ?>">
      </p>

      <p class="ha-d-flex ha-justify-between">
        <label for="<?php echo esc_attr($this->get_field_id("SlidesTime")); ?>">
            زمان اسلاید(ثانیه)
        </label>
        <input type="number"
                id="<?php echo esc_attr($this->get_field_id("SlidesTime")); ?>"
               name="<?php echo esc_attr($this->get_field_name("SlidesTime")); ?>"
               value="<?php echo (empty($instance["SlidesTime"]))?1:$instance["SlidesTime"]; ?>">
      </p>

      <p class="ha-d-flex ha-justify-between">
        <label for="<?php echo esc_attr($this->get_field_id("slideing")); ?>">
            اسلاید خوردن خودکار
        </label>
        <input type="checkbox"
               id="<?php echo esc_attr($this->get_field_id("slideing")); ?>"
                name="<?php echo esc_attr($this->get_field_name("slideing")); ?>"
                <?php echo  (isset($instance["slideing"])&&$instance["slideing"]=="on")?"checked":""; ?>
                 >
      </p>

      <p class="ha-d-flex ha-justify-between">
        <label for="<?php echo esc_attr($this->get_field_id("SlideNavigation")); ?>">
          دکمه جلو و عقب
        </label>
        <input type="checkbox"
               id="<?php echo esc_attr($this->get_field_id("SlideNavigation")); ?>"
               name="<?php echo esc_attr($this->get_field_name("SlideNavigation")); ?>"
               <?php echo  (isset($instance["SlideNavigation"])&&$instance["SlideNavigation"]=="on")?"checked":""; ?>
               >
      </p>

      <hr>
      <p>
          <label for=""> صفحات اسلایدر را انتخاب کنید :</label>
      </p>

    </div>


    <?php

    for($index=0 ; $index < self::$numberOfSlide ; $index++):

      $name = esc_attr($this->get_field_name("pageid".$index));
      print_posttype_posts_list($name,"pageid".$index , "page" ,$instance);

    endfor;

    echo "<p></p><hr>";
  }
  public function update($new_instance,$old_instance){
    return $new_instance;
  }




}


 ?>
