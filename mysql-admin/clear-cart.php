<?php

$thirty_days = time() + 60*60*24*30;

setcookie("cyclefitness_cart_items", 0, $thirty_days, "/");
setcookie("cyclefitness_cart_total", 0, $thirty_days, "/");

header("Location: ../bikes.php");

?> 
