<?php

header("Content-Type: text/plain");

if (isset($_REQUEST['user_id']) && $_REQUEST['user_id'] !== '') {
  $uid = $_REQUEST['user_id'];
} else {
  die("User ID not provided");
}
if (isset($_REQUEST['amount']) && $_REQUEST['amount'] !== '') {
  $amount = $_REQUEST['amount'];
} else {
  die("Amount not provided");
}
date_default_timezone_set('America/Los_Angeles');
$date = date("Y-m-d H:i:s");

// Connect to server and select databse.
mysql_connect("localhost", "root", "password") or die("cannot connect"); 
mysql_select_db("cyclefitness") or die("cannot select DB");

$result = mysql_query("INSERT INTO purchases (`user_id`,`date`,`amount`) VALUES ($uid,'$date',$amount);");
mysql_close();
if (!$result){
  die("A MySQL error occurred");
} else {
  die("New purchase added");
}

?> 
