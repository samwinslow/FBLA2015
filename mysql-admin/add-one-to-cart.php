<?php

$thirty_days = time() + 60*60*24*30;
$add_amount = $_GET['amount'] or 0;

if (!isset($_COOKIE['cyclefitness_cart_items'])){
  setcookie("cyclefitness_cart_items", "1", $thirty_days, "/");
} else {
  setcookie("cyclefitness_cart_items", (int) $_COOKIE['cyclefitness_cart_items'] + 1, $thirty_days, "/");
}

if (!isset($_COOKIE['cyclefitness_cart_total'])){
  setcookie("cyclefitness_cart_total", $add_amount, $thirty_days, "/");
} else {
  setcookie("cyclefitness_cart_total", (double) $_COOKIE['cyclefitness_cart_total'] + (double) $add_amount, $thirty_days, "/");
}

header("Location: ../bikes.php");

?> 
