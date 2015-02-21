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
  setcookie("cyclefitness_cart_items", 0, $thirty_days, "/");
  setcookie("cyclefitness_cart_total", 0, $thirty_days, "/");
  header("Location: ../user-profile/purchases.php");
}

?> 
