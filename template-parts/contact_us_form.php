
<form class="" >
  <div class="d-flex flex-column text-Center justify-content-center form-group">


    <label for="" class="text-center flg text-2">ارتباط سریع با ما </label>
    <div class="form-group">
      <div class="form-row justify-content-between">
          <div class="col-9">
            <input class="p-2 bg-2 text-1 dg-footer-input form-control "
                type="text" name="hacontactlink" value="" placeholder="پست الکترونیک یا شماره تماس ">
          </div>
          <div class="col-3">
            <input class="btn form-control p-2 bg-2 text-1 dg-footer-input"
                  type="button" name="submit" placeholder="ارسال" value="ارسال" onclick="sendMessagAjax()">
          </div>

      </div>


    </div>
    <div class="form-group">
      <textarea  class="p-2 bg-2 text-1 dg-footer-input form-control "
          name="hamessage" rows="8" cols="" width="100%" placeholder="پیغام خود را بنویسید"></textarea>

    </div>


  </div>
</form>
<script type="text/javascript">

  function sendMessagAjax(){
    var data = {
                'action': 'save_message',
                'link' : $('[name=hacontactlink]').val(),
                'message' : $('[name=hamessage]').val(),
              };

    // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
    //ajaxurl = "http://localhost/wordpress/wp-admin/admin-ajax.php";
    //ajaxurl = my_ajax_obj.ajax_url;
    ajaxurl = '<?php echo get_bloginfo("wpurl")."/wp-admin/admin-ajax.php";  ?>';
    jQuery.post(ajaxurl, data, function(response) {
        alert(response);
    });
  }

</script>
