<?php

if (isset($_COOKIE['cyclefitness_email'])){
  $signedin = true;
  $signin_email = $_COOKIE['cyclefitness_email'];
  $signin_password = $_COOKIE['cyclefitness_password'];
  $signin_admin = $_COOKIE['cyclefitness_admin'];
  
  $cart_items = $_COOKIE['cyclefitness_cart_items'] or 0;
  $cart_total = $_COOKIE['cyclefitness_cart_total'] or 0;

  // Connect to server and select databse.
  mysql_connect("localhost", "root", "password") or header("Location: mysql_error.html"); 
  mysql_select_db("cyclefitness") or header("Location: mysql_error.html");
  $result = mysql_query("SELECT * FROM users WHERE email_address = '".$signin_email."' and password = '".$signin_password."';");
  mysql_close();

  $users = array();
  while ($row = mysql_fetch_array($result)) {
    array_push($users, $row);
  }
  $user = $users[0];
}
if (isset($_GET['error'])){
  $page_error = $_GET['error'];
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
  <link rel="stylesheet" href="res/css/FBLA2015.min.css">
  <link rel="stylesheet" href="res/css/fonts.css">
  <script src="res/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
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
          <a class="navbar-brand" href="index.php">
            <img class="logo" alt="Cycle Fitness" src="res/img/logos/logo-white.png" title="Cycle Fitness">
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="bikes.php">Bikes</a></li>
            <li><a href="trips.php">Trips</a></li>
            <li><a href="seminars.php">Seminars</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php if($signedin){ ?>
              <li class="cart-li dropdown">
                <a href="#" data-toggle="dropdown" aria-expanded="false">
                  <span class="badge"><?php echo $cart_items; ?></span> <span class="cart-money">$<?php echo $cart_total; ?></span></a>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li class="cart-number">
                    <span class="text-orange"><?php echo $cart_items; ?></span> items in your cart
                  </li>
                  <li class="">
                    <a href="mysql-admin/clear-cart.php" class="caps">Clear Cart</a>
                  </li>
                  <li class="">
                    <a href="#" class="caps" data-toggle="modal" data-target="#checkoutModal">Check Out</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" aria-expanded="false" style="color:#fff;">
                  <?php echo($user['first_name']." ".$user['last_name']); ?>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li class="">
                    <a href="mysql-admin/signout-user.php">Sign Out</a>
                  </li>
                  <?php if($signin_admin) { ?>
                  <li class="">
                    <a href="admin-panel">Admin Panel</a>
                  </li>
                  <?php } else { ?>
                  <li class="">
                    <a href="user-profile">User Profile</a>
                  </li>
                  <?php } ?>
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
            <?php if($page_error==='register_no_email'){ ?><p>Please provide an email below.</p><?php } ?>
            <?php if($page_error==='register_no_password'){ ?><p>Please provide a password below.</p><?php } ?>
            <?php if($page_error==='register_email_taken'){ ?><p>An account with that email already exists.</p><?php } ?>
            <form action="mysql-admin/create-user.php" method="post">
              <div class="col-md-6">
                <input type="text" class="form-control" id="registerFirstName" name="first" placeholder="First Name" required>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" name="last" placeholder="Last Name" required>
              </div>
              <input type="email" class="form-control" name="email" placeholder="Email Address" required>
              <input type="password" class="form-control" name="password" placeholder="Password" required>
              <p class="text-right"><button type="submit" class="btn btn-success btn-lg" role="button">Sign Up</button></p>
            </form>
          </div>
          <div class="col-md-5">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h2>Login</h2>
            <?php if($page_error==='login_no_email'){ ?><p>Please provide an email below.</p><?php } ?>
            <?php if($page_error==='login_no_password'){ ?><p>Please provide a password below.</p><?php } ?>
            <?php if($page_error==='login_wrong_password'){ ?><p>Username or password is incorrect.</p><?php } ?>
            <form action="mysql-admin/signin-user.php" method="post">
              <input type="email" class="form-control" id="loginEmail" name="email" placeholder="Email Address" required>
              <input type="password" class="form-control" name="password" placeholder="Password" required>
              <p><button type="submit" class="btn btn-success btn-ghost btn-lg small-chevron" role="button">
                Log In <span class="chevron-right chevron-orange"></span>
              </button></p>
              <p><small>FBLA: Use <u>admin@example.com</u> and <u>password</u> as email and password.</small></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade modal-checkout" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
          <h2 class="text-center">Your Purchase</h2>
          <p class="text-center caps">
            <span class="text-orange"><?php echo $cart_items; ?></span> items <span class="text-muted">($<?php echo $cart_total; ?>)</span>
          </p>
          <form action="mysql-admin/add-purchase.php" method="post">
            <img src="res/img/form.png" style="margin-bottom: 20px; -webkit-user-select: none">
            <p><button type="submit" class="btn btn-success btn-lg btn-block" role="button">
              Pay $<?php echo $cart_total; ?>
            </button></p>
            <p class="text-center text-muted">Do not provide actual information.</p>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Jumbotron -->
	<div class="jumbotron">
		<div class="bike-feature">
	    <div class="container">
		    <h1>New Trek <br> 3 Series</h1>
        <p>3 Series gives you upright confidence, <br> control, and road-to-trail versatility, <br> wherever you ride.</p>
        <a class="btn btn-ghost btn-lg" href="bikes.php" role="button">See Collection <span class="chevron-right chevron-orange"></span></a>
		  </div>
	  </div>
	</div><!--/Jumbotron -->

  <div class="fullwidth-wrapper">
	  <div class="col-md-6 half-section mens-section">
	    <h2>Men's Bikes</h2>
	    <ul class="ul-left">
	      <li>New Arrivals</li>
	      <li>Road Bikes</li>
	      <li>Mountain Bikes</li>
	      <li>Cyclecross Bikes</li>
	      </ul>
	    <ul>
	      <li>Folding Bikes</li>
	      <li>Electric Assist Bikes</li>
	      <li>Hybrid Bikes</li>
	      <li>BMX Bikes</li>
	    </ul>
	    <p><a class="btn btn-ghost btn-lg" href="bikes.php" role="button">See Collection <span class="chevron-right chevron-white"></span></a></p>
	  </div>

	  <div class="col-md-6 half-section womens-section">
	    <h2>Women's Bikes</h2>
	    <ul class="ul-left">
	      <li>New Arrivals</li>
	      <li>Road Bikes</li>
	      <li>Mountain Bikes</li>
	      <li>Cyclecross Bikes</li>
	    </ul>
	    <ul>
	       <li>Folding Bikes</li>
	       <li>Electric Assist Bikes</li>
	       <li>Hybrid Bikes</li>
	       <li>BMX Bikes</li>
	     </ul>
	     <p><a class="btn btn-primary btn-lg" href="bikes.php" role="button">See Collection <span class="chevron-right chevron-white"></span></a></p>
	  </div>
  </div>

  <div class="text-center road-trip">
  	<h1>Manhattan Road Trip</h1>
  	<p><a class="btn btn-default btn-lg" href="trips.php" role="button">Join Event <span class="chevron-right chevron-lightblue"></span></a></p>
  </div>

  <div class="fullwidth-wrapper" id="promos">
    <div class="col-md-6 col-sm-12 half-section seminar-section">
      <div class="col-md-12">
        <h2>Latest Seminars:</h2>
      </div>
      <div class="col-md-4 col-sm-12 seminar-tile">
        <img class="img-circle" src="res/img/seminar-1.png">
        <h3>Staying safe on the road: Bike Safety 101</h3>
        <p>This intro seminar goes over the basics of staying safe on the road.</p>
        <a class="caps" href="#">Watch Seminar</a>
      </div>
      <div class="col-md-4 col-sm-12 seminar-tile">
        <img class="img-circle" src="res/img/seminar-2.png">
        <h3>Bicycle Types: How to Pick the Best Bike for You</h3>
        <p>This seminar goes over the functions of different types of bikes.</p>
        <a class="caps" href="#">Watch Seminar</a>
      </div>
      <div class="col-md-4 col-sm-12 seminar-tile">
        <img class="img-circle" src="res/img/seminar-3.png">
        <h3>Cycling for fitness: Bike &amp; Cycling Exercises</h3>
        <p>This seminar helps get you started with cycling for fitness.</p>
        <a class="caps" href="#">Watch Seminar</a>
      </div>
    </div>
    <div class="col-md-6 col-sm-12 half-section promo-section">
      <h3 class="caps">Become a Cycle Fitness member and</h3>
      <h1>Get $20</h1>
      <p>Off your first purchase.</p>
      <p><a class="btn btn-success btn-lg" data-toggle="modal" data-target="#signinModal" role="button">Become a member</a></p>
    </div>
	</div>
    
  <footer>
    <div class="col-md-2">
      <img class="logo" alt="Cycle Fitness" src="res/img/logos/logo-white.png" title="Cycle Fitness" style="-webkit-filter: invert(1);">
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
        <img class="credit-card" alt="PayPal" title="PayPal" src="res/img/icons/cc-paypal.png">
        <img class="credit-card" alt="Visa" title="Visa" src="res/img/icons/cc-visa.png">
        <img class="credit-card" alt="MasterCard" title="MasterCard" src="res/img/icons/cc-mastercard.png">
        <img class="credit-card" alt="American Express" title="American Express" src="res/img/icons/cc-amex.png">
        <img class="credit-card" alt="Chase Cards" title="Chase Cards" src="res/img/icons/cc-chase.png">
      </p>
    </div>
    <div class="col-md-3">
      <form action="mysql-admin/add-subscriber.php">
        <p>Get all the latest updates and discounts</p>
        <?php if($page_error==='subscribe_no_email'){ ?><p>Please provide an email below.</p><?php } ?>
        <?php if($page_error==='subscribe_email_taken'){ ?><p>A subscriber with that email already exists.</p><?php } ?>
        <div class="input-group">
          <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Your email address" width="24" required>
          <span class="input-group-btn">
            <button class="btn btn-form" id="signupButton" type="submit">
              <img alt="Sign up" title="Sign up" src="res/img/icons/arrow-right-black.png">
            </button>
          </span>
        </div>
      </form>
    </div>
    <div class="col-md-2 col-md-offset-1">
      <p>Connect with us</p>
      <p>
        <a href="http://facebook.com"><img class="social" alt="Facebook" title="Facebook" src="res/img/icons/facebook.png"></a>
        <a href="http://twitter.com"><img class="social" alt="Twitter" title="Twitter" src="res/img/icons/twitter.png"></a>
        <a href="http://instagram.com"><img class="social" alt="Instagram" title="Instagram" src="res/img/icons/instagram.png"></a>
        <a href="http://youtube.com"><img class="social" alt="YouTube" title="YouTube" src="res/img/icons/youtube.png"></a>
      </p>
    </div>
    <div class="col-md-12">
      <p class="footer-text">Copyright 2015 Cycle Fitness. Created by Andrew Shen and Samuel Winslow. No templates used. <a href="reference.php">Reference Page</a></p>
    </div>
  </footer>
    	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="res/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="res/js/vendor/bootstrap.min.js"></script>
  <script src="res/js/vendor/jquery.easing.min.js"></script>
  <script src="res/js/main.js"></script>
  <?php if (isset($page_error) && preg_match("/^register/", $page_error)){ ?>
  <script type="text/javascript">
  $(function (){
    $('#signinModal').modal('show');
    $('#registerFirstName').focus();
  });
  </script>
  <?php } else if (isset($page_error) && preg_match("/^login/", $page_error)){ ?>
  <script type="text/javascript">
  $(function (){
    $('#signinModal').modal('show');
    $('#loginEmail').focus();
  });
  </script>
  <?php } else if (isset($page_error) && preg_match("/^subscribe/", $page_error)){ ?>
  <script type="text/javascript">
  $(function (){
    $('#signupEmail').focus();
  });
  </script>
  <?php } ?>
</body>
</html>
