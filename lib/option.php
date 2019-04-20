<?php
// Hook for adding admin menus
/** Step 2 (from text above). */
add_action( 'admin_menu', 'my_menu' );

/** Step 1. */
function my_menu() {
    add_theme_page(
        'Ha ThemeSeting',
        'Ha Menu',
        'manage_options',
        'ha-unique-identifier',
        'ha_themeoption'
    );
}

/** Step 3. */
function ha_themeoption() {
    if ( !current_user_can( 'manage_options' ) ) {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    if(isset($_POST["title"])):
      echo "<h1>".$_POST["title"]."</h1>";
    endif;
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
                <label for="hatellone">
                  شماره تلفن اول
                 </label>
            </th>
            <td>
                <input id="hatellone" type="text" name="hatellone" value="" class="regular-text code">
                <p class="description">
                  این شماره تلفن در سربرگ و پابرگ نشان داده میشود
                </p>
            </td>
          </tr>

          <tr>
            <th>
                <label for="hatelltwo">
                      شماره تلفن دوم
                 </label>
            </th>
            <td>
                <input id="hatelltwo" type="text" name="hatelltwo" value="" class="regular-text code">
                <p class="description">
                  این شماره تلفن در سربرگ و پابرگ نشان داده میشود
                </p>
            </td>
          </tr>

          <tr>
            <th>
                <label for="haadress">
                      نشانی
                 </label>
            </th>
            <td>
                <input id="haadress" type="text" name="haadress" value="" class="regular-text ">
                <p class="description">
                  آدرسی که در سربرگ یا پابرگ نمایش داده میشود
                </p>
            </td>
          </tr>

          <tr>
            <th>
                <label for="hainstagram">
                          instagram (url)
                 </label>
            </th>
            <td>
                <input id="hainstagram" type="url" name="hainstagram" value="" class="regular-text code">
                <p class="description">
                  این ادرس برای پیوند به صفحه اینستاگرام شما استفاده میشود
                </p>
            </td>
          </tr>

          <tr>
            <th>
                <label for="hatelegram">
                          telegram (url)
                 </label>
            </th>
            <td>
                <input id="hatelegram" type="url" name="hatelegram" value="" class="regular-text code">
                <p class="description">
                    این آدرس برای پیوند با صفحه تلگرام شما استفاده میشود
                </p>
            </td>
          </tr>

        </table>

      </form>

    </div>



    <?php
}

 ?>
