<?php

include('../generator.php');
get_cookies();

$uid = $user['id'];
$amount = $cart_total;
date_default_timezone_set('America/Los_Angeles');
$date = date("Y-m-d H:i:s");

// Connect to server and select databse.
database_connect();
$result = mysql_query("INSERT INTO purchases (`user_id`,`date`,`amount`) VALUES ($uid,'$date',$amount);");
mysql_close();

if (!$result){
  header("Location: ../mysql_error.html");
} else {
  $thirty_days = time() + 60*60*24*30;
  setcookie("cyclefitness_cart_json", '', $thirty_days, "/");
  header("Location: ../user-profile/purchases.php");
}

?> 
