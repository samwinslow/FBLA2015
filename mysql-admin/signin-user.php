<?php
$thirty_days = time() + 60*60*24*30;

if (isset($_REQUEST['email']) && $_REQUEST['email'] !== '') {
  $email = $_REQUEST['email'];
} else {
  header("Location: ../index.php?error=login_no_email");
}
if (isset($_REQUEST['password']) && $_REQUEST['password'] !== '') {
  $password = $_REQUEST['password'];
} else {
  header("Location: ../index.php?error=login_no_password");
}

if ($email === 'admin@example.com' && $password === 'password'){
  setcookie("cyclefitness_email", $email, $thirty_days, "/");
  setcookie("cyclefitness_password", $password, $thirty_days, "/");
  setcookie("cyclefitness_admin", "true", $thirty_days, "/");
  header("Location: ../index.php");
}

// Connect to server and select databse.
mysql_connect("localhost", "andrewsh_root", "shamlamdoobly2015") or header("Location: ../mysql_error.html");
mysql_select_db("andrewsh_cyclefitness") or header("Location: ../mysql_error.html");

$result = mysql_query("SELECT * FROM users WHERE email_address='".$email."' and password = '".$password."';");
mysql_close();

if (mysql_num_rows($result) === 1){
  setcookie("cyclefitness_email", $email, $thirty_days, "/");
  setcookie("cyclefitness_password", $password, $thirty_days, "/");
  header("Location: ../index.php");
} else {
  header("Location: ../index.php?error=login_wrong_password");
}

?> 
