<?php
add_action( 'wp_ajax_save_order', 'save_order' );
add_action( 'wp_ajax_nopriv_save_order', 'save_order' );



function save_order(){



if(isset($_POST['haordername'])){
    $haordername = $_POST['haordername'];
}
if(isset($_POST['haorderbusinessname'])){
    $haorderbusinessname = $_POST['haorderbusinessname'];
}
if(isset($_POST['haordertype'])){
  $haordertype = $_POST['haordertype'];
  $term = get_term_by('term_id',$haordertype,'portfolio_cat');
  $haordertype = $term->name;
}
if(isset($_POST['haorderbusinessphone'])){
  $phone = $_POST['haorderbusinessphone'];
}
if(isset($_POST['haordercontent'])){
  $content = $_POST['haordercontent'];
}

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

echo $postId;


}

 ?>
