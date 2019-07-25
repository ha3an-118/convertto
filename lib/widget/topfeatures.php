<?php
 /**
* Author: hasan abedi
* Author URI: http://ha3an.ir
* Text Domain: dgtheme
* Description: This tool should take the top features of your  and display it  
* Version: 0.9
*/


  add_action( 'widgets_init', function() { register_widget( 'topFeatures' ); } );



  /**
   *  Topfeatures.
   *
   * @since 1.0.0
   */
  class topFeatures extends WP_Widget
  {
   /**
    *  Name: numberOfCells
    *  
    *  Description: store the Number of features 
    *
    * @since 1.0.0
    */
    public static $numberOfCells = 3;

   /**
    *  Name: Construct
    *  
    *
    * @since 1.0.0
    */

    public function __construct()
    {
      parent::__construct(
          'ha-top-features',  // Base ID
          'Top Features'  , // Name
          array(
            'description' => esc_html__( 'Widget to display top featurers  ', 'dgtheme' ),
          )
        );
    }

    /**
    *  Name: widget 
    *  
    *  Description: for render the out put in client side 
    *
    * @since 1.0.0
    */
    public function widget($args, $instance)
    {
      // ui code
    ?>
    <section class="bg-color2 container-fluid d-flex flex-md-row flex-xs-column flex-wrap justify-content-around">

       <?php for($index=0 ; $index < self::$numberOfCells ; $index++){ ?>
            <div class=" col-xl-3 col-md-4 col-xs-12 p-lg-5 p-md-2">
                <div class="bg-spider-ourservice  text-center">
                  <h3 class="pb-3">
                      <?php echo $instance['featuretitle'.$index] ?>
                  </h3>
                  <p class="px-3 ">
                    <?php echo $instance['featurecontent'.$index] ?>
                  </p>
                </div>
            </div>
       <?php } //end of for  ?>

      </section>


    <?php

    }

    /**
    *  Name: form 
    *  
    *  Description: for render the out put in admin side 
    *
    * @since 1.0.0
    */

    public function form($instance)
    {
      // admin panel form
      ?>
      <p class="widefat">

        برای نمایش دادن ویژگی های برتر شما در صفحه اصلی سایت است
        

      </p>
      <hr>

      <?php
      for ($index=0 ; $index < self::$numberOfCells ;$index++) {
        // code...

      ?>

      <div class="" style="padding:10px 0;">
          <label for="">
            ویژگی <?php echo $index+1; ?>
          </label>
          <input  type="text" class="widefat"
                  id="<?php echo esc_attr( $this->get_field_id( 'featuretitle'.$index ) ); ?>"
                  name="<?php echo esc_attr( $this->get_field_name( 'featuretitle'.$index ) ); ?>"
                  value="<?php echo $instance['featuretitle'.$index] ?>"
                  placeholder="عنوان ویژگی "
                  >
          <textarea class="widefat"
                    style="margin-top:5px;"
                    name="<?php echo esc_attr( $this->get_field_name( 'featurecontent'.$index ) ); ?>" >
                    <?php
                      echo $instance['featurecontent'.$index]
                     ?>
          </textarea>
      </div>
      <hr>

      <?php
      } //end for each

    }

    public function update($new_instance, $old_instance)
    {
      $tempInstance = array();
      for($index=0; $index < self::$numberOfCells ; $index++){

          $titleIndex = 'featuretitle'.$index;
          $contentIndex = 'featurecontent'.$index;

          $tempInstance += array(
             $titleIndex => $new_instance[$titleIndex],
             $contentIndex =>$new_instance[$contentIndex],
          );
      }
      return $tempInstance;

    }

  }//end class

 ?>
