<?php

if (isset($_COOKIE['cyclefitness_email'])){
  $signedin = true;
  $signin_email = $_COOKIE['cyclefitness_email'];
  $signin_password = $_COOKIE['cyclefitness_password'];

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
  $uid = $user['id'];
} else {
  $uid = 0;
}
$name = $_REQUEST['name'];

date_default_timezone_set('America/Los_Angeles');
$date = date("Y-m-d H:i:s");

$inquiry = $_REQUEST['inquiry'];

if (isset($_REQUEST['text']) && $_REQUEST['text'] !== '') {
  $text = mysql_real_escape_string($_REQUEST['text']);
} else {
  header("Location: ../contact.php?error=contact_no_info");
}

// Connect to server and select databse.
mysql_connect("localhost", "root", "password") or header("Location: ../mysql_error.html"); 
mysql_select_db("cyclefitness") or header("Location: ../mysql_error.html");

$result = mysql_query("INSERT INTO contact_submissions (`user_id`,`name`,`date`,`inquiry`,`text`) VALUES ($uid,'$name','$date','$inquiry','$text');");
mysql_close();
if (!$result){
  header("Location: ../mysql_error.html");
} else {
  header("Location: ../contact.php");
}

?> 
