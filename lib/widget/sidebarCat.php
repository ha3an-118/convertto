<?php
/**
 *
 */
 require_once(__DIR__."/../widgets_function.php");
 add_action( 'widgets_init' , function() { register_widget( 'SidebarCat' ); } );


class SidebarCat extends WP_Widget
{

  public function __construct()
  {
    // code...
    parent::__construct(
      'SidebarCat',
      'SidebarCat');
  }
  public function widget($arg , $instance){


    $terms = get_terms( array(
                        'taxonomy' => $instance['taxname'],
                        'hide_empty' => false,
) );
    ?>
    <div class="dg-cat-aside">



      <div class="list-group text-right p-0 m-0">
          <a href="#" class="list-group-item dg-list-header">
            <?php echo $instance['title']; ?>
          </a>

          <?php foreach($terms as $term): ?>
          <a href="<?php echo get_term_link($term); ?>" class="list-group-item text-1 hover-text-3 "><?php echo $term->name ?> </a>
        <?php endforeach; ?>
      </div>

    </div>


    <?php
  }

  public function form($instance){

    ?>
    <div class="widefat">

      <p >
          <label for="<?php echo esc_attr($this->get_field_id("title")); ?>" class="widefat">
                  عنوان
           </label>
      </p>
      <p>
          <input type="text" class="widefat"
                 id="<?php echo esc_attr($this->get_field_id("title")); ?>"
                 name="<?php echo esc_attr($this->get_field_name("title")); ?>"
                 value="<?php echo $instance["title"] ?>">
      </p>

    </div>



    <?php

    print_taxonomies_list($this->get_field_name('taxname'),"taxname"  ,$instance);




  }
  public function update($new_instance,$old_instance){
    return $new_instance;
  }
}


 ?>
