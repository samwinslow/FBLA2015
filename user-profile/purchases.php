<?php

if (isset($_COOKIE['cyclefitness_email'])){
  $signedin = true;
  $signin_email = $_COOKIE['cyclefitness_email'];
  $signin_password = $_COOKIE['cyclefitness_password'];

  // Connect to server and select databse.
  mysql_connect("localhost", "root", "password") or header("Location: ../mysql_error.html");
  mysql_select_db("cyclefitness") or header("Location: ../mysql_error.html");
  $result = mysql_query("SELECT * FROM users WHERE email_address = '".$signin_email."' and password = '".$signin_password."';");
  mysql_close();

  $users = array();
  while ($row = mysql_fetch_array($result)) {
    array_push($users, $row);
  }
  $user = $users[0];
}
if (isset($_COOKIE['cyclefitness_admin']) && $_COOKIE['cyclefitness_admin']=='true'){
  header("Location: ../admin-panel/index.php");
}
if (isset($_GET['error'])){
  $page_error = $_GET['error'];
}

// Generate list of all users
mysql_connect("localhost", "root", "password") or header("Location: ../mysql_error.html");
mysql_select_db("cyclefitness") or header("Location: ../mysql_error.html");
$result = mysql_query("SELECT * FROM purchases WHERE user_id=".$user['id']." ORDER BY date DESC;");
mysql_close();

$purchases = array();
while ($row = mysql_fetch_array($result)) {
  array_push($purchases, $row);
}

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Cycle Fitness</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="../res/css/FBLA2015.min.css">
  <link rel="stylesheet" href="../res/css/fonts.css">
  <script src="../res/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php">
            <img class="logo" alt="Cycle Fitness" src="../res/img/logos/logo-white.png" title="Cycle Fitness">
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../bikes.php">Bikes</a></li>
            <li><a href="../trips.php">Trips</a></li>
            <li><a href="../seminars.php">Seminars</a></li>
            <li><a href="../faq.php">FAQ</a></li>
            <li><a href="../contact.php">Contact</a></li>
            <li class="cart-li dropdown">
              <a href="#" data-toggle="dropdown" aria-expanded="false">
                <span class="badge">3</span> <span class="cart-money">$200</span></a>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li class="cart-number">
                  <span class="text-orange">3</span> items in your cart
                </li>
                <li class="">
                  <a href="#">Item 1</a>
                </li>
                <li class="">
                  <a href="#">Item 2</a>
                </li>
              </ul>
            </li>
            <?php if($signedin){ ?>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" aria-expanded="false" style="color:#fff;">
                  <?php echo($user['first_name']." ".$user['last_name']); ?>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li class="">
                    <a href="../mysql-admin/signout-user.php">Sign Out</a>
                  </li>
                </ul>
              </li>
            <?php } else { ?>
              <li><a href="#" style="color:#fff;" data-toggle="modal" data-target="#signinModal">Log In / Sign Up</a></li>
            <?php } ?>
          </ul>
        </div><!--/.navbar-collapse -->
  </nav>

  
  <!-- Modal -->
  <div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="signinModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="col-md-7 gray-section">
            <h2>Register</h2>
            <form action="">
              <div class="col-md-6">
                <input type="text" class="form-control" id="registerFirstName" placeholder="FIRST NAME" required>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="registerLastName" placeholder="LAST NAME" required>
              </div>
              <input type="email" class="form-control" id="registerEmail" placeholder="EMAIL ADDRESS" required>
              <input type="password" class="form-control" id="registerPassword" placeholder="PASSWORD" required>
              <p class="text-right"><button type="submit" class="btn btn-success btn-lg" role="button">Sign Up</button></p>
            </form>
          </div>
          <div class="col-md-5">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h2>Login</h2>
            <form action="">
              <input type="email" class="form-control" id="signinEmail" placeholder="EMAIL ADDRESS" required>
              <input type="password" class="form-control" id="signinPassword" placeholder="PASSWORD" required>
              <p><button type="submit" class="btn btn-success btn-ghost btn-lg small-chevron" role="button">
                Log In <span class="chevron-right chevron-orange"></span>
              </button></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Jumbotron -->
	<div class="jumbotron nhp-header reference-header">
	  <h1><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></h1>
	</div><!--/Jumbotron -->
  <div class="fullwidth-wrapper admin-panel-wrapper">
      <div class="col-md-3 admin-panel-sidebar">
        <div class="list-group">
          <a href="basic_info.php" class="list-group-item">Basic Info</a>
          <a href="purchases.php" class="list-group-item active">
            Purchase History
          </a>
        </div>
      </div>
      <div class="col-md-9 admin-panel-container">
        <h2>Purchase History</h2>
        <table class="table">
          <thead>
            <tr>
              <th>ID#</th>
              <th>Date</th>
              <th>Amount</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($purchases as $index){
              $timestamp = strtotime($index['date']);
              $date = date('M j, Y g:i A', $timestamp);
              
              echo "<tr>";
              echo "<td>".$index['id']."</td>";
              echo "<td>".$date."</td>";
              echo "<td>$".$index['amount']."</td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
  </div>
  
  <footer>
    <div class="col-md-2">
      <img class="logo" alt="Cycle Fitness" src="../res/img/logos/logo-white.png" title="Cycle Fitness" style="-webkit-filter: invert(1);">
    </div>
    <div class="col-md-2">
      <ul class="icon-truck">
        <li>FREE shipping on all orders</li>
      </ul>
      <ul class="icon-creditcard">
        <li>30 days money back guarantee</li>
      </ul>
    </div>
    <div class="col-md-2">
      <p>We accept</p>
      <p>
        <img class="credit-card" alt="PayPal" title="PayPal" src="../res/img/icons/cc-paypal.png">
        <img class="credit-card" alt="Visa" title="Visa" src="../res/img/icons/cc-visa.png">
        <img class="credit-card" alt="MasterCard" title="MasterCard" src="../res/img/icons/cc-mastercard.png">
        <img class="credit-card" alt="American Express" title="American Express" src="../res/img/icons/cc-amex.png">
        <img class="credit-card" alt="Chase Cards" title="Chase Cards" src="../res/img/icons/cc-chase.png">
      </p>
    </div>
    <div class="col-md-3">
      <form action="../mysql-admin/add-subscriber.php">
        <p>Get all the latest updates and discounts</p>
        <?php if($page_error==='subscribe_no_email'){ ?><p>Please provide an email below.</p><?php } ?>
        <?php if($page_error==='subscribe_email_taken'){ ?><p>A subscriber with that email already exists.</p><?php } ?>
        <div class="input-group">
          <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Your email address" width="24" required>
          <span class="input-group-btn">
            <button class="btn btn-form" id="signupButton" type="submit">
              <img alt="Sign up" title="Sign up" src="../res/img/icons/arrow-right-black.png">
            </button>
          </span>
        </div>
      </form>
    </div>
    <div class="col-md-2 col-md-offset-1">
      <p>Connect with us</p>
      <p>
        <a href="http://facebook.com"><img class="social" alt="Facebook" title="Facebook" src="../res/img/icons/facebook.png"></a>
        <a href="http://twitter.com"><img class="social" alt="Twitter" title="Twitter" src="../res/img/icons/twitter.png"></a>
        <a href="http://instagram.com"><img class="social" alt="Instagram" title="Instagram" src="../res/img/icons/instagram.png"></a>
        <a href="http://youtube.com"><img class="social" alt="YouTube" title="YouTube" src="../res/img/icons/youtube.png"></a>
      </p>
    </div>
    <div class="col-md-12">
      <p class="footer-text">Copyright 2015 Cycle Fitness. Created by Andrew Shen and Samuel Winslow. No templates used. <a href="../reference.php">Reference Page</a></p>
    </div>
  </footer>
    	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../res/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="../res/js/vendor/bootstrap.min.js"></script>
  <script src="../res/js/vendor/jquery.easing.min.js"></script>
  <script src="../res/js/main.js"></script>
</body>
</html>
