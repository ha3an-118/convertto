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

        <div class="container">



            <ol class="ha-list-style-none d-flex flex-row flex-wrap justify-content-around ">
              <li>
                  <a href="<?php echo $instance['instagram']; ?>" >
                    <div class="d-flex flex-column align-item-center" id="hainstagram">
                        <i class="fab fa-instagram fa-4x text-4 hover-text-3 text-center"></i>
                        <strong class="text-3 hover-text-4 pt-2">اینستاگرام</strong>
                    </div>
                  </a>
              </li>

              <li>
                  <a href="<?php echo $instance['telegram']; ?>" >
                    <div class="d-flex flex-column align-item-center" id="hainstagram">
                        <i class="fab fa-telegram fa-4x text-4 hover-text-3 text-center"></i>
                        <strong class="text-3 hover-text-4 pt-2">
                              تلگرام
                        </strong>
                    </div>
                  </a>
              </li>

              <li>
                  <a href="<?php echo $instance['aparat']; ?>" >
                    <div class="d-flex flex-column align-item-center" id="hainstagram">
                        <i class="aparat-logo  text-4 hover-text-3 text-center"></i>
                        <strong class="text-3 hover-text-4 pt-2">
                            آپارات
                        </strong>
                    </div>
                  </a>
              </li>

              <li>
                  <a href="<?php echo $instance['youtube']; ?>" >
                    <div class="d-flex flex-column align-item-center" id="hainstagram">
                        <i class="fab fa-youtube-square fa-4x text-4 hover-text-3 text-center"></i>
                        <strong class="text-3 hover-text-4 pt-2">
                          یوتیوب
                        </strong>
                    </div>
                  </a>
              </li>

              <li>

                    <div class="d-flex flex-row  flex-md-column align-item-center" id="hainstagram">
                        <i class="fa fa-phone fa-4x text-4 hover-text-3 text-center"></i>
                        <strong class="text-3 hover-text-4 pt-2 align-self-center">
                          <?php echo $instance['phone1']; ?>
                        </strong>
                        <div class="d-md-none">
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>

                        <strong class="text-3 hover-text-4 pt-2 align-self-center">

                          <?php echo $instance['phone2']; ?>

                        </strong>
                    </div>

              </li>


            </ol>





        </div>

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
    <p>
        <label for="<?php echo esc_attr($this->get_field_id("instagram")); ?>"> instagram </label>
        <input type="text"
               id="<?php echo esc_attr($this->get_field_id("instagram")); ?>"
               name="<?php echo esc_attr($this->get_field_name("instagram")); ?>"
               value="<?php echo $instance["instagram"] ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id("telegram")); ?>">telegram</label>
        <input type="text"
               id="<?php echo esc_attr($this->get_field_id("telegram")); ?>"
               name="<?php echo esc_attr($this->get_field_name("telegram")); ?>"
               value="<?php echo $instance["telegram"] ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id("youtube")); ?>">youtube</label>
        <input type="text"
               id="<?php echo esc_attr($this->get_field_id("youtube")); ?>"
               name="<?php echo esc_attr($this->get_field_name("youtube")); ?>"
               value="<?php echo $instance["youtube"] ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id("aparat")); ?>">aparat</label>
        <input type="text"
               id="<?php echo esc_attr($this->get_field_id("aparat")); ?>"
               name="<?php echo esc_attr($this->get_field_name("aparat")); ?>"
               value="<?php echo $instance["aparat"] ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id("phone1")); ?>">phone1</label>
        <input type="text"
               id="<?php echo esc_attr($this->get_field_id("phone1")); ?>"
               name="<?php echo esc_attr($this->get_field_name("phone1")); ?>"
               value="<?php echo $instance["phone1"] ?>">
    </p>
    <p>
        <label for="<?php echo esc_attr($this->get_field_id("phone2")); ?>">phone2</label>
        <input type="text"
               id="<?php echo esc_attr($this->get_field_id("phone2")); ?>"
               name="<?php echo esc_attr($this->get_field_name("phone2")); ?>"
               value="<?php echo $instance["phone2"] ?>">
    </p>
    <?php
  }
  public function update($new_instance,$old_instance){
    return $new_instance;
  }
}


 ?>
