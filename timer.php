<?php
$time = date("s");

if($time > 30){
  $time = $time - 30;
}

switch($time){
    case 29:
        $futureTime = 1;
        break;
    case 30:
        $futureTime = 2;
        break;
    default:
        $futureTime = ($time+2);
        break;
}
?>