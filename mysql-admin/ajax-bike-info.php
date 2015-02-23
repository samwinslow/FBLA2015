<?php

include('../generator.php');
header("Content-Type: application/json");

if (isset($_GET['id']) && $_GET['id'] != ''){
$id = $_GET['id'];
} else {
  die("{}");
}

database_connect();
$result = mysql_query("SELECT * FROM bikes WHERE id=".$id.";");
mysql_close();

$bikes = array();

if (mysql_num_rows($result) == 1){
  while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    array_push($bikes, $row);
  }
  $bike = $bikes[0];
  echo json_encode($bike);
} else {
  die("{}");
}
?>