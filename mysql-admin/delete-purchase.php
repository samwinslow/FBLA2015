<?php

include('../generator.php');
header("Content-Type: text/plain");

if (isset($_REQUEST['id']) && $_REQUEST['id'] !== '') {
    $id = $_REQUEST['id'];
} else {
  die("Purchase ID not provided");
}

// Connect to server and select databse.
database_connect();
$result = mysql_query("SELECT * FROM purchases WHERE id='".$id."';");

if (mysql_num_rows($result) === 0){
  mysql_close();
  die("Purchase with that ID does not exist");
} else {
  $result = mysql_query("DELETE FROM purchases WHERE id='".$id."';");
  mysql_close();
  if (!$result){
    header("Location: ../mysql_error.html");
  } else {
    header("Location: ../admin-panel/purchases.php");
  }
}

?> 
