<?php
  if(have_posts()):
    while(have_posts()):
      the_post();
      $tax = get_taxonomies();
      $terms = get_the_terms($post,$tax);
      echo "<div class='bg-1 p-3 col-12 d-flex flex-row flex-wrap my-2'>";
      foreach($terms as $term){

        ?>
          <a class="px-2 mx-2 btn bg-3 text-2 my-2" href="<?php echo get_term_link($term) ?>" >
                <?php echo $term->name; ?>
          </a>
        <?php

      }
      echo "</div>";
    endwhile;
    wp_reset_postdata();
  endif;

 ?>
