<?php
  /*
  *this template must get all posts terms and print the filter btn
  */
  global $wp_query;
  $terms_id =array();
  if(have_posts()):
    while(have_posts()):
      the_post();
      $post_taxs = get_object_taxonomies($post);
      foreach($post_taxs as $post_tax):
          if(is_taxonomy_hierarchical($post_tax)):
            $terms = get_the_terms($post,$post_tax);
            if(!empty($terms)):
                foreach($terms as $term):

                      array_push($terms_id,(int)$term->term_id);

                endforeach;
            endif; //empty condition
        endif; //hierarchical condition
      endforeach;
    endwhile;
    wp_reset_postdata();
    $terms_id = array_unique($terms_id,SORT_REGULAR);
    ?>
    <div id="" class="mx-auto d-flex flex-row flex-wrap  my-4 justify-content-center justify-content-md-start">

      <?php  foreach( $terms_id as  $term_id ):


              $term = get_term((int)$term_id);

        ?>
      <div class="ha-portfolio-nav-btn my-1">
         <button type="button" name="button" showid="<?php echo $term->term_id; ?>" onclick="hafilterportfolio(this)"
                  class="btn bg-3 text-2 p-2 px-4 mx-2 rounded mw-100" >
             <?php echo $term->name; ?>
         </button>
      </div>
    <?php endforeach; ?>
    <div class="ha-portfolio-nav-btn my-1">
       <button type="button" name="button" showid="0" onclick="hafilterportfolio(this)"
                class="btn bg-3 text-2 p-2 px-4 mx-2 rounded mw-100" >
                نمایش همه
       </button>
    </div>
    </div>




    <?php
  endif;
 ?>
