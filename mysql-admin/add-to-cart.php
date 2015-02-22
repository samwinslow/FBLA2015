<?php

include('../generator.php');

if (isset($_REQUEST['id']) && $_REQUEST['id'] != ''){
  $id = $_REQUEST['id'];
} else {
  header("Location: ../bikes.php");
}
if (isset($_COOKIE['cyclefitness_cart_json']) && $_COOKIE['cyclefitness_cart_json'] != ''){
  $cart_json = json_decode($_COOKIE['cyclefitness_cart_json']);
} else {
  $cart_json = array();
}

database_connect();
$result = mysql_query("SELECT * FROM bikes WHERE id=".$id.";");
mysql_close();

if (mysql_num_rows($result) == 1){
  while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    array_push($cart_json, $row['id']);
  }
  $json = json_encode($cart_json);
  
} else {
  header("Location: ../mysql_error.html");
}

$thirty_days = time() + 60*60*24*30;
if (!isset($_COOKIE['cyclefitness_cart_json'])){
  setcookie("cyclefitness_cart_json", $json, $thirty_days, "/");
} else {
  setcookie("cyclefitness_cart_json", $json, $thirty_days, "/");
}

header("Location: ../bikes.php");

?> 
