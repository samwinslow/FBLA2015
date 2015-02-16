<?php

header("Content-Type: text/plain");

if (isset($_REQUEST['id']) && $_REQUEST['id'] !== '') {
    $id = $_REQUEST['id'];
} else {
  die("User ID not provided");
}

// Connect to server and select databse.
mysql_connect("localhost", "root", "password") or die("cannot connect"); 
mysql_select_db("cyclefitness") or die("cannot select DB");

$result = mysql_query("SELECT * FROM users WHERE id='".$id."';");

if (mysql_num_rows($result) === 0){
  mysql_close();
  die("User with that ID does not exist");
} else {
  $result = mysql_query("DELETE FROM users WHERE id='".$id."';");
  mysql_close();
  if (!$result){
    die("A MySQL error occurred");
  } else {
    die("User with ID #$id deleted");
  }
}

?> 
