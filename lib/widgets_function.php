<?php


function print_posttype_posts_list($idname,$name , $posttype ,$instance){

      ?>
      <div class="widefat" style="margin-top:1rem;">
          <select class="widefat" name="<?php echo $idname ?>">

      <?php
              $items = new WP_Query(array(
                                      'post_type' => $posttype,
                                      'posts_per_page' => -1,
                                    ));
                      if($items->have_posts()):
                        while($items->have_posts()):
                          $items->the_post();
                          ?>
                            <option value="<?php the_ID(); ?>"
                              <?php if( (int)$instance[$name]==get_the_ID()) { echo "selected"; } ?> >
                                <?php the_title(); ?>
                            </option>
                          <?php
                        endwhile;
                      endif;
                      wp_reset_postdata();
                     ?>

                  </select>

        </div>
<?php
}


function print_taxonomies_list($idname,$name ,$instance){

      ?>
      <div class="widefat" style="margin-top:1rem;">
          <select class="widefat" name="<?php echo $idname ?>">

      <?php

              $taxs = get_taxonomies();

              foreach($taxs as $tax):
      ?>
                            <option value="<?php echo $tax; ?>"
                              <?php if( $instance[$name]==$tax) { echo "selected"; } ?> >
                                <?php echo $tax ?>
                            </option>

              <?php endforeach; ?>
                  </select>

        </div>
<?php
}









?>
