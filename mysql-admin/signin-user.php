<?php

header("Content-Type: text/plain");

if (isset($_REQUEST['email']) && $_REQUEST['email'] !== '') {
  $email = $_REQUEST['email'];
} else {
  die("Email not provided");
}
if (isset($_REQUEST['password']) && $_REQUEST['password'] !== '') {
  $password = $_REQUEST['password'];
} else {
  die("Password not provided");
}

if ($email === 'admin' && $password === 'password'){
  setcookie("cyclefitness_email", $email, $thirty_days, "/");
  setcookie("cyclefitness_password", $password, $thirty_days, "/");
  setcookie("cyclefitness_admin", "true", $thirty_days, "/");
  die("Administrative signin successful");
}

// Connect to server and select databse.
mysql_connect("localhost", "root", "password") or die("cannot connect"); 
mysql_select_db("cyclefitness") or die("cannot select DB");

$result = mysql_query("SELECT * FROM users WHERE email_address='".$email."' and password = '".$password."';");
mysql_close();

$thirty_days = time() + 60*60*24*30;

if (mysql_num_rows($result) === 1){
  setcookie("cyclefitness_email", $email, $thirty_days, "/");
  setcookie("cyclefitness_password", $password, $thirty_days, "/");
  setcookie("cyclefitness_admin", "false", $thirty_days, "/");
  die("Signin successful");
} else {
  die("Signin unsuccessful");
}

?> 
