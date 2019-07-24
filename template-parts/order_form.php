<div id="orderform" class="dgnavphone"
beforewidth="0" beforeheight="100%" beforepositiontop="100%" beforepositionleft="0"
afterwidth="100%" afterheight="100%" afterpositiontop="0" afterpositionleft="0" >




    <div class="container p-5">

      <button expandwinid="orderform" class="btn btn-danger" >
        بستن

      </button>

      <form class="mx-auto col-12 col-md-10 col-lg-7  d-flex justify-content-center flex-column text-right" >
        <h2>همین الان سفارش خودتون را ثبت کنید</h2>
        <hr class="bg-3">
        <div class="form-group">

          <label for="haordername">نام </label>
          <input class="form-control" id="haordername" type="text" name="haordername" value="">


        </div>
        <div class="form-group">

          <label for="haorderbusinessname">نام کسب و کار </label>
          <input class="form-control" id="haorderbusinessname" type="text" name="haorderbusinessname" value="">


        </div>
        <div class="form-group">

          <label for="haordertype">دسته بندی سفارش</label>
          <select class="form-control" name="haordertype" id="haordertype" required>

            <option value="">--</option>
            <?php
            $terms = get_terms( array(
                                  'taxonomy' => 'portfolio_cat',
                                  'hide_empty' => true,
                                  'parent' => 0,
                                  )
                                );
            foreach($terms as $term):
              echo '<option value="'.$term->term_id.'">'.$term->name.'</option>';
            endforeach;

             ?>

          </select>

        </div>
        <div class="form-group">

          <label for="haorderbusinessphone">شماره تماس </label>
          <input class="form-control" id="haorderbusinessphone" type="text" name="haorderbusinessphone" value="">


        </div>
        <div class="form-group">

          <label for="haordercontent">توضیحات</label>
          <textarea class="form-control" id="haordercontent" type="text" name="haordercontent" value="">
          </textarea>

        </div>
        <div class="form-group">

          <input type="button" onclick="sendOrderAjax()"
                  class="form-control btn btn-success" id="haordercontent" name="haordercontent" value=" ثبت سفارش">



        </div>

      </form>


    </div>


</div>


<script type="text/javascript">

  function sendOrderAjax(){





    var data = {
                'action': 'save_order',
                'haordername' : $('[name=haordername]').val(),
                'haorderbusinessname' : $('[name=haorderbusinessname]').val(),
                'haordertype' : $('[name=haordertype]').val(),
                'haorderbusinessphone' : $('[name=haorderbusinessphone]').val(),
                'haordercontent' : $('[name=haordercontent]').val(),
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
