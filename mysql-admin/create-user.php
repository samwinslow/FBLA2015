<?php

if (isset($_REQUEST['email']) && $_REQUEST['email'] !== '') {
  $email = $_REQUEST['email'];
} else {
  header("Location: ../index.php?error=register_no_email");
}
if (isset($_REQUEST['password']) && $_REQUEST['password'] !== '') {
  $password = $_REQUEST['password'];
} else {
  header("Location: ../index.php?error=register_no_password");
}
$first    = $_REQUEST['first'];
$last     = $_REQUEST['last'];

// Connect to server and select databse.
mysql_connect("localhost", "root", "password") or header("Location: ../mysql_error.html"); 
mysql_select_db("cyclefitness") or header("Location: ../mysql_error.html");

$result = mysql_query("SELECT * FROM users WHERE email_address='".$email."';");

if (mysql_num_rows($result) >= 1){
  mysql_close();
  header("Location: ../index.php?error=register_email_taken");
} else {
  $result = mysql_query("INSERT INTO users (`email_address`, `password`, `first_name`, `last_name`) VALUES ('$email', '$password', '$first', '$last');");
  mysql_close();
  if (!$result){
    header("Location: ../mysql_error.html");
  } else {
    die("New user $first $last created");
  }
}

?> 
