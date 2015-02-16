<?php

header("Content-Type: text/plain");

if (isset($_REQUEST['email']) && $_REQUEST['email'] !== '') {
    $email = $_REQUEST['email'];
} else {
  die("Email not provided");
}

// Connect to server and select databse.
mysql_connect("localhost", "root", "password") or die("cannot connect"); 
mysql_select_db("cyclefitness") or die("cannot select DB");

$result = mysql_query("SELECT * FROM email_list WHERE email_address='".$email."';");

if (mysql_num_rows($result) >= 1){
  mysql_close();
  die("An subscriber with that email already exists");
} else {
  $result = mysql_query("INSERT INTO email_list (`email_address`) VALUES ('$email');");
  mysql_close();
  if (!$result){
    die("A MySQL error occurred");
  } else {
    die("New subscriber $email created");
  }
}

?> 
