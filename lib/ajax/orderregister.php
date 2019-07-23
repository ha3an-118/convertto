<?php
add_action( 'wp_ajax_save_order', 'save_order' );
add_action( 'wp_ajax_nopriv_save_order', 'save_order' );



function save_order(){
    $response ="";
    $error_flag = false;
    if(empty($_POST['haordername'])  || empty($_POST['haordercontent']) ){
      $response = __("Error: All entries must be filled in","dgtheme");
      $error_flag = true;
    }

    if(isset($_POST['haordername'])){
        $haordername = sanitize_text_field( $_POST['haordername'] );
    }
    else{
      $response = __("Error:There is a problem with the packets that you contact with support or try again","dgtheme");
      $error_flag = true;
    }
    if(isset($_POST['haorderbusinessname'])){
        $haorderbusinessname = sanitize_text_field( $_POST['haorderbusinessname'] );
    }
    if(isset($_POST['haordertype'])){
      $haordertype = sanitize_text_field( $_POST['haordertype'] );
      $term = get_term_by('term_id',$haordertype,'portfolio_cat');
      $haordertype = $term->name;
    }
    if(isset($_POST['haorderbusinessphone'])){
      $phone = sanitize_text_field( $_POST['haorderbusinessphone'] );
    }
    else{
      $response = __("Error:There is a problem with the packets that you contact with support or try again","dgtheme");
      $error_flag = true;
    }
    if(isset($_POST['haordercontent'])){
      $content = sanitize_text_field( $_POST['haordercontent'] );
    }
    
    if(!$error_flag){
      $post_arr = array(
        'post_title'   => $haordername,
        'post_content' => $content,
        'post_status'  => 'pending',
        'post_type' => 'haorder',
        'post_author'  => get_current_user_id(),
        'meta_input'   => array(
            'ha_business_name' => $haorderbusinessname,
            'ha_order_type' => $haordertype,
            'ha_order_phone' => $phone,
        ),
      );
      $postId = wp_insert_post($post_arr);
      if($postId){
        $response = __("Success: Your message has been registered and I'll be calling you as soon as possible","dgtheme");
      }
      else{
        $response = __("Error: Register the error message again. Try again","dgtheme");
      }
    } // !error_flag check if end 
    echo $response;
}

 ?>
