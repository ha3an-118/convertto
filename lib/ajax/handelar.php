<?php
add_action( 'wp_ajax_save_message', 'save_message' );
add_action( 'wp_ajax_nopriv_save_message', 'save_message' );



function save_message(){

  $response = "";
  $error_flag = false;
  if(empty($_POST['link']) || empty($_POST['message'])){
      $response = __("Error: All entries must be filled in","dgtheme");
      $error_flag = true;
  }

  if(isset($_POST['link']) && isset($_POST['message'])){
      $link =sanitize_text_field( $_POST['link'] );
      $message =sanitize_text_field( $_POST['message'] );
  }
  else{
    $response = __("Error:There is a problem with the packets that you contact with support or try again","dgtheme");
    $error_flag = true;
  }
  if(!$error_flag){
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
    if($postId){
      $response = __("Success: Your message has been registered and I'll be calling you as soon as possible","dgtheme");
    }
    else{
      $response = __("Error: Register the error message again. Try again","dgtheme");
    }


  }
  

    echo $response;


}



 ?>
