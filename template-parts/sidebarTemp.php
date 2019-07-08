<?php
/*
* this template need
* Global sidebarID variable
*/
  global $sidebarID;
  $widget_area_ID = $sidebarID."sidebar_widget_area";
 ?>
 <div class="fixed-bottom d-block d-lg-none " style="left:unset !important;">
   <button expandwinid="<?php echo $widget_area_ID; ?>" class="btn btn-danger" >

     <i class="fas fa-filter fa-2x fa-spin"></i>
   </button>
 </div>

 <div id="<?php echo $widget_area_ID; ?>" class="dgnavphone"
     beforewidth="0%" beforeheight="0" beforepositiontop="0" beforepositionleft="0"
     afterwidth="100%" afterheight="100%" afterpositiontop="0" afterpositionleft="0" >
     <div class="align-self-center">
       <button expandwinid="<?php echo $widget_area_ID; ?>" class="btn btn-danger" >
         <i class="fa fa-times fa-2x fa-spin"></i>
       </button>
     </div>
      <?php dynamic_sidebar($sidebarID) ?>

  </div>
