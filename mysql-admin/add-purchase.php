<?php

if (isset($_COOKIE['cyclefitness_email'])){
  $signedin = true;
  $signin_email = $_COOKIE['cyclefitness_email'];
  $signin_password = $_COOKIE['cyclefitness_password'];
  $signin_admin = $_COOKIE['cyclefitness_admin'];
  
  $cart_items = $_COOKIE['cyclefitness_cart_items'] or 0;
  $cart_total = $_COOKIE['cyclefitness_cart_total'] or 0;

  // Connect to server and select databse.
  mysql_connect("localhost", "root", "password") or header("Location: ../mysql_error.html"); 
  mysql_select_db("cyclefitness") or header("Location: ../mysql_error.html");
  $result = mysql_query("SELECT * FROM users WHERE email_address = '".$signin_email."' and password = '".$signin_password."';");
  mysql_close();

  $users = array();
  while ($row = mysql_fetch_array($result)) {
    array_push($users, $row);
  }
  $user = $users[0];
}

$uid = $user['id'];
$amount = $cart_total;
date_default_timezone_set('America/Los_Angeles');
$date = date("Y-m-d H:i:s");

// Connect to server and select databse.
mysql_connect("localhost", "root", "password") or header("Location: ../mysql_error.html");
mysql_select_db("cyclefitness") or header("Location: ../mysql_error.html");

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
