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
    <section name="order">

        <div class="text-right mt-3 p-3">
            <h4>همین الان سفارش خودتون رو ثبت کنید</h4>
        </div>
        <div class="d-flex flex-row justify-content-center pt-5" comment="this is row div have flex display">

          <!-- start item -->
          <div class="col-3 " comment="this is flex " style="min-height:300px">

            <div class="dg-btn-spider dg-btn-spider-background " comment="this is for absolute position">

              <div class="dg-btn-spider dg-btn-spider-forground" commnet="this is for absolute position that contian background spider "></div>

              <div class="dg-btn-spider-normal-content text-center d-flex  justify-content-center">
                  <a href="#" class="flg text-2  hover-text-1 align-self-center"> موشن گرافیک</a>
              </div>


            </div>

          </div>
          <!-- End of item -->

          <!-- start item -->
          <div class="col-3 " comment="this is flex " style="height:500px">

            <div class="dg-btn-spider dg-btn-spider-background " comment="this is for absolute position">

              <div class="dg-btn-spider dg-btn-spider-forground" commnet="this is for absolute position that contian background spider "></div>

              <div class="dg-btn-spider-normal-content text-center d-flex  justify-content-center">
                  <a href="#" class="flg text-2  hover-text-1 align-self-center">طراحی وب سایت</a>
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
    echo "this is test";
  }
  public function update($new_instance,$old_instance){
    return $new_instance;
  }
}


 ?>
