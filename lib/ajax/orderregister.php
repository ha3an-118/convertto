<?php
add_action( 'wp_ajax_save_order', 'save_order' );
add_action( 'wp_ajax_nopriv_save_order', 'save_order' );



function save_order(){

  if(isset($_POST['link'])){
      $link = $_POST['link'];
  }
  if(isset($_POST['message'])){
      $message = $_POST['message'];
  }

  $post_arr = array(
    'post_title'   => $link,
    'post_content' => $message,
    'post_status'  => 'pending',
    'post_type' => 'hacontact',
    'post_author'  => get_current_user_id(),
    'meta_input'   => array(
        'ha_contact_link' => $link,
    ),
);
  $postId = wp_insert_post($post_arr);

  echo $postId;


}



 ?>
