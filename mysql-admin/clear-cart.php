<?php

$thirty_days = time() + 60*60*24*30;
setcookie("cyclefitness_cart_json", '', $thirty_days, "/");

header("Location: ../bikes.php");

?> 
