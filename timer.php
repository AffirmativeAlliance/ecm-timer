<?php
$time = date("s");

if($time > 30){
  $time = $time - 30;
}

$execTime = time()+(30-$time);
$serverTime = time()*1000;
?>