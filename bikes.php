<?php

if (isset($_COOKIE['cyclefitness_email'])){
  $signedin = true;
  $signin_email = $_COOKIE['cyclefitness_email'];
  $signin_password = $_COOKIE['cyclefitness_password'];

  // Connect to server and select databse.
  mysql_connect("localhost", "root", "password") or die("cannot connect"); 
  mysql_select_db("cyclefitness") or die("cannot select DB");
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
          <a class="navbar-brand" href="index.html">
            <img class="logo" alt="Cycle Fitness" src="res/img/logos/logo-white.png" title="Cycle Fitness">
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="bikes.html">Bikes</a></li>
            <li><a href="trips.html">Trips</a></li>
            <li><a href="seminars.html">Seminars</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li class="cart-li dropdown">
              <a href="#" data-toggle="dropdown" aria-expanded="false">
                <span class="badge">3</span> <span class="cart-money">$200</span></a>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li class="cart-number">
                  <span class="text-orange">3</span> items in your cart
                </li>
                <li class="dropdown">
                  <a href="#">Item 1</a>
                </li>
                <li class="dropdown">
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
                    <a href="mysql-admin/signout-user.php">Sign Out</a>
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
	<div class="jumbotron nhp-header bike-header">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-5 col-md-offset-7">
		      <h1>Road Bikes <br> On Sale</h1>
          <a class="btn btn-primary btn-bike-header btn-lg" href="#" role="button">See Collection <span class="chevron-right chevron-orange"></span></a>
        </div>
      </div>
		</div>
	</div><!--/Jumbotron -->
	
	<!-- Modal -->
  <div class="modal fade" id="bikeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="col-md-7 gray-section">
            <img class="bike-modal-img" src="res/img/bikes/bike-1.png">
          </div>
          <div class="col-md-5">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h3>Trek Aeolus 5 Road Bike</h3>
            <h4><s>$289.99</s> <span class="text-orange">$229.99</span></h4>
            <p>The "Classics killer" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and
            aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.</p>
            <form class="form-inline">
              <div class="form-group">
                <select class="form-control" id="purchaseSize" required>
                  <option value="">SIZE</option>
                  <option value="52">52 cm</option>
                  <option value="54">54 cm</option>
                  <option value="56">56 cm</option>
                </select>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" id="purchaseQty" placeholder="QTY" min="1" max="10" step="1" required>
              </div>
              <br>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" role="button">
                  Add Item to Cart
                </button>
              </div>
            </form>
            <ul class="icon-truck">
              <li><small>FREE shipping on all orders</small></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
	<nav class="navbar bike-navbar" role="navigation">
    <div id="bikeNavbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Mens</a></li>
        <li><a href="#">Womens</a></li>
        <li><a href="#">Childrens</a></li>
        <li class="spacer"></li>
        <li><a href="#">Cyclecross</a></li>
        <li><a href="#">Mountain</a></li>
        <li><a href="#">Road</a></li>
        <li><a href="#">Folding</a></li>
        <li><a href="#">Electric Assist</a></li>
        <li><a href="#">Hybrid</a></li>
        <li><a href="#">BMX</a></li>
      </ul>
    </div><!--/.navbar-collapse -->
  </nav>
  
  <div class="fullwidth-wrapper bikes">
    <div class="row bike-row">
      <div class="col-md-3 text-center bike">
        <img src="res/img/bikes/bike-1.png">
        <h4>Trek Bontrager Road Bike</h4>
        <h5><s>$289.99</s> <span class="text-orange">$229.99</span></h5>
      </div>
      <div class="col-md-3 text-center bike">
        <img src="res/img/bikes/bike-1.png">
        <h4>Trek Bontrager Road Bike</h4>
        <h5>$289.99</h5>
      </div>
      <div class="col-md-3 text-center bike">
        <img src="res/img/bikes/bike-1.png">
        <h4>Trek Bontrager Road Bike</h4>
        <h5>$289.99</h5>
      </div>
      <div class="col-md-3 text-center bike">
        <img src="res/img/bikes/bike-1.png">
        <h4>Trek Bontrager Road Bike</h4>
        <h5>$289.99</h5>
      </div>
    </div>
    <div class="row bike-row">
      <div class="col-md-3 text-center bike">
        <img src="res/img/bikes/bike-1.png">
        <h4>Trek Bontrager Road Bike</h4>
        <h5><s>$289.99</s> <span class="text-orange">$229.99</span></h5>
      </div>
      <div class="col-md-3 text-center bike">
        <img src="res/img/bikes/bike-1.png">
        <h4>Trek Bontrager Road Bike</h4>
        <h5>$289.99</h5>
      </div>
      <div class="col-md-3 text-center bike">
        <img src="res/img/bikes/bike-1.png">
        <h4>Trek Bontrager Road Bike</h4>
        <h5>$289.99</h5>
      </div>
      <div class="col-md-3 text-center bike">
        <img src="res/img/bikes/bike-1.png">
        <h4>Trek Bontrager Road Bike</h4>
        <h5>$289.99</h5>
      </div>
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
      <p>Get all the latest updates and discounts</p>
      <div class="input-group">
        <input type="email" class="form-control" id="signupEmail" placeholder="Your email address" width="24">
        <span class="input-group-btn">
          <button class="btn btn-form" id="signupButton" type="button">
            <img alt="Sign up" title="Sign up" src="res/img/icons/arrow-right-black.png">
          </button>
        </span>
      </div>
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
      <p class="footer-text">Copyright 2015 Cycle Fitness. Created by Andrew Shen and Samuel Winslow. No templates used. <a href="reference.html">Reference Page</a></p>
    </div>
  </footer>
    	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="res/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="res/js/vendor/bootstrap.min.js"></script>
  <script src="res/js/vendor/jquery.easing.min.js"></script>
  <script src="res/js/main.js"></script>
</body>
</html>
