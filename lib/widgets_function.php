<?php


function print_posttype_posts_list($idname,$name , $posttype ,$instance){

      ?>
      <div class="widefat" style="margin-top:1rem;">
          <select class="widefat" name="<?php echo $idname ?>">

      <?php
              $items = new WP_Query(array(
                                      'post_type' => $posttype,
                                      'posts_per_page' => 0,
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
?>
