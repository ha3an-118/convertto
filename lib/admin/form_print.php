<?php


function ha_print_admin_form(){
  ?>
  <div class="wrap">
    <form class="" action="#" method="post">


      <table class="form-table">

        <tr>
          <p>

              این صفحه برای تنظیمات خاص تم میباشد

          </p>
        </tr>

        <tr>
          <th>
              <label for="hathemeshowmode">
                    نحوه نمایش
               </label>
          </th>
          <td>
              <input id="hathemeshowmode" type="checkbox" name="hathemeshowmode" class="regular-text "
                        <?php if(get_option('hathemeshowmode')=='1st'){ echo 'checked="true"'; } ?>>
              <p class="description">
              نحوه نمایش سایت: چهار ظلی  یا شکل نامنظم
              </p>

          </td>
        </tr>
        <tr>
          <th>
              <label for="hathemeshowmode">
                    صفحه سفارش
               </label>
          </th>
          <td>
              <?php
                  $instance = array(
                      'haorderpage' => (int)get_option('haorderpage'),

                  );

                  print_posttype_posts_list('haorderpage','haorderpage' , 'page' ,$instance); ?>
              <p class="description">
                صفحه مربوط به ثبت سفارش
              </p>

          </td>
        </tr>
<!-- ############################################## -->
        <tr>
          <th>
              <label for="hathemeshowmode">
                  صفحه نمونه کار ها
               </label>
          </th>
          <td>
              <?php
                  $instance = array(
                      'haportfoliopage' => (int)get_option('haportfoliopage'),

                  );

                  print_posttype_posts_list('haportfoliopage','haportfoliopage' , 'page' ,$instance); ?>
              <p class="description">

              </p>

          </td>
        </tr>
<!-- ############################################# -->
        <tr>
          <th>
              <label for="hathemeshowmode">
                  صفحه وبلاگ
               </label>
          </th>
          <td>
              <?php
                  $instance = array(
                      'haweblogpage' => (int)get_option('haweblogpage'),

                  );

                  print_posttype_posts_list('haweblogpage','haweblogpage' , 'page' ,$instance); ?>
              <p class="description">
              این صفحه برای مشخص کردن صفحه وبلاگ میباشد
              </p>

          </td>
        </tr>
<!-- ############################################# -->
        <tr>
          <th>
              <label for="hathemeshowmode">
                  متن کلید صفحه
               </label>
          </th>
          <td>
              <input type="text" name="habtntext1" value='<?php echo get_option("habtntext1") ?>'>
              <input type="text" name="habtntext2" value='<?php echo get_option("habtntext2") ?>'>
              <p class="description">
              این قسمت برای نوشتن های کلید در صفحه اصلی و ابزارک ثبت سفارش میباشد
              </p>

          </td>
        </tr>
<!-- ############################################# -->
      </table>
      <p>
          <input type="submit" name="submit" value="ذخیره تغییرات " class="button button-primary">
      </p>

    </form>

  </div>




  <?php
}

function ha_set_default_option(){


  add_option("hathemeshowmode","1st");
  add_option('haorderpage','0');
  add_option('haportfoliopage','0');
  add_option('haweblogpage','0');
  add_option('habtntext1','animation');
  add_option('habtntext2','webdesine');





}

function ha_update_option(){

  if(isset($_POST['hathemeshowmode'])&& $_POST['hathemeshowmode'] == 'on'){
      $hathemeshowmode = '1st';
      //1st mean the show must as spider
  }
  else{
    $hathemeshowmode = '2st';
  }
  update_option("hathemeshowmode",$hathemeshowmode);
  update_option("haorderpage",$_POST['haorderpage']);
  update_option('haportfoliopage',$_POST['haportfoliopage']);
  update_option('haweblogpage',$_POST['haweblogpage']);
  update_option('habtntext1',$_POST['habtntext1']);
  update_option('habtntext2',$_POST['habtntext2']);

}

 ?>
