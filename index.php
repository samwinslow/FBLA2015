<?php
  include('generator.php');
  generate_header();
?>

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
