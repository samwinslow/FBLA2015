<?php

include('../generator.php');
if (isset($_REQUEST['email']) && $_REQUEST['email'] !== '') {
  $email = $_REQUEST['email'];
} else {
  header("Location: ../index.php?error=subscribe_no_email#signupEmail");
}

// Connect to server and select databse.
database_connect();
$result = mysql_query("SELECT * FROM email_list WHERE email_address='".$email."';");

if (mysql_num_rows($result) >= 1){
  mysql_close();
  header("Location: ../index.php?error=subscribe_email_taken#signupEmail");
} else {
  $result = mysql_query("INSERT INTO email_list (`email_address`) VALUES ('$email');");
  mysql_close();
  if (!$result){
    header("Location: ../mysql_error.html");
  } else {
    header("Location: ../index.php");
  }
}

?> 
