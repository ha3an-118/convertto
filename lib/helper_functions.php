<?php
/*
* this function must enable widget by require_one
*/
function ha_add_widget( $widgetName )
{
  $fileName = __DIR__."/widget/".$widgetName.".php";

    require_once($fileName);

}




 ?>
