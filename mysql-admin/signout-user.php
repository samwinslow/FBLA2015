<?php

setcookie("cyclefitness_email", '', time()-3600, "/");
setcookie("cyclefitness_password", '', time()-3600, "/");
setcookie("cyclefitness_admin", '', time()-3600, "/");

header("Location: ../index.php");

?> 
