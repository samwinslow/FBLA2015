<?php

header("Content-Type: text/plain");

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="password"; // Mysql password 
$db_name="cyclefitness"; // Database name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect"); 
mysql_select_db("$db_name") or die("cannot select DB");
$result = mysql_query("SELECT * FROM users;");

$users = array();
while ($row = mysql_fetch_array($result)) {
  array_push($users, $row);
}
print_r($users);

mysql_close();

?>
