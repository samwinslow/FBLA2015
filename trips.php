<?php
  include('generator.php');
  generate_header();
?>
  
  <!-- Jumbotron -->
	<div class="jumbotron nhp-header trips-header">
    <p class="caps">Come join us on our</p>
	  <h1>Cycling Trips</h1>
	  <a class="btn btn-primary btn-lg" href="#" role="button">Browse Trips <span class="chevron-right chevron-orange"></span></a>
	</div><!--/Jumbotron -->
  
  <div class="container trips-container">   
    <div class="row">
      <div class="col-md-12 lightblue" id="manhattanRT">
        <h2>Manhattan Road Trip</h2>
        <h4>$549.99</h4>
        <p>We’re offering a day trip around Manhattan, plus a <br> tour of Cycle Fitness and a free live seminar after <br> the trip. This trip is guided by Ben Johnson, one of <br> our road bike experts.</p>
        <form action="">
          <select class="form-control" required>
            <option value="">SELECT DATE</option>
            <option value="feb13">Feb. 13</option>
            <option value="feb20">Feb. 20</option>
            <option value="feb27">Feb. 27</option>
            <option value="mar6">Mar. 6</option>
          </select>
          <button type="submit" class="btn btn-ghost btn-lg" role="button">Book This Trip</button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 gray-light" id="brooklynRT">
        <h2>Brooklyn Road Trip</h2>
        <h4>$549.99</h4>
        <p>We’re offering a day trip around Brooklyn, plus a <br> tour of Cycle Fitness and a free live seminar after <br> the trip. This trip is guided by Ashley Schwarz, one of <br> our road bike experts.</p>
        <form action="">
          <select class="form-control" required>
            <option value="">SELECT DATE</option>
            <option value="feb13">Feb. 13</option>
            <option value="feb20">Feb. 20</option>
            <option value="feb27">Feb. 27</option>
            <option value="mar6">Mar. 6</option>
          </select>
          <button type="submit" class="btn btn-ghost btn-lg" role="button">Book This Trip</button>
        </form>
      </div>
      <div class="col-md-6 darkblue" id="bronxRT">
        <h2>Bronx Road Trip</h2>
        <h4>$549.99</h4>
        <p>We’re offering a day trip around the Bronx, plus a <br> tour of Cycle Fitness and a free live seminar after <br> the trip. This trip is guided by David Andersen, one of <br> our road bike experts.</p>
        <form action="">
          <select class="form-control" required>
            <option value="">SELECT DATE</option>
            <option value="feb13">Feb. 13</option>
            <option value="feb20">Feb. 20</option>
            <option value="feb27">Feb. 27</option>
            <option value="mar6">Mar. 6</option>
          </select>
          <button type="submit" class="btn btn-ghost btn-lg" role="button">Book This Trip</button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 white" id="harlemRT">
        <h2>Harlem Road Trip</h2>
        <h4>$549.99</h4>
        <p>We’re offering a day trip around Harlem, plus a <br> tour of Cycle Fitness and a free live seminar after <br> the trip. This trip is guided by Joan Brown, one of <br> our road bike experts.</p>
        <form action="">
          <select class="form-control" required>
            <option value="">SELECT DATE</option>
            <option value="feb13">Feb. 13</option>
            <option value="feb20">Feb. 20</option>
            <option value="feb27">Feb. 27</option>
            <option value="mar6">Mar. 6</option>
          </select>
          <button type="submit" class="btn btn-ghost btn-lg" role="button">Book This Trip</button>
        </form>
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
</body>
</html>
