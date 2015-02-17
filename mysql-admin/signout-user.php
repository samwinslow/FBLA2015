<?php

header("Content-Type: text/plain");

setcookie("cyclefitness_email", $_COOKIE['cyclefitness_email'], time()-3600, "/");
setcookie("cyclefitness_password", $_COOKIE['cyclefitness_password'], time()-3600, "/");
setcookie("cyclefitness_admin", $_COOKIE['cyclefitness_admin'], time()-3600, "/");

die("Signout successful");

?> 
