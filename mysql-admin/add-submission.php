<?php

header("Content-Type: text/plain");

$uid = $_REQUEST['user_id'];
$name = $_REQUEST['name'];

date_default_timezone_set('America/Los_Angeles');
$date = date("Y-m-d H:i:s");

$inquiry = $_REQUEST['inquiry'];
$text = $_REQUEST['text'];

if ($uid==''&&$name==''&&$inquiry==''&&$text=='') {
    die("No information provided");
}

// Connect to server and select databse.
mysql_connect("localhost", "root", "password") or die("cannot connect"); 
mysql_select_db("cyclefitness") or die("cannot select DB");

$result = mysql_query("INSERT INTO contact_submissions (`user_id`,`name`,`date`,`inquiry`,`text`) VALUES ($uid,'$name','$date','$inquiry','$text');");
mysql_close();
if (!$result){
  die("A MySQL error occurred");
} else {
  die("New submission added");
}

?> 
