<?php
  include('generator.php');
  generate_header();
?>
  
  <!-- Jumbotron -->
	<div class="jumbotron nhp-header seminars-header">
	  <h1>Seminars</h1>
    <p>Whether you’re an amateur biker or an expert cyclist, we have free seminars tailored <br> to everyone. Just another perk of being a Cylce Fitness customer.</p>
	</div><!--/Jumbotron -->
  
  <div class="container seminar-container">   
    <div class="row">
      <div class="col-md-2 seminar-tile seminar-page">
        <img class="img-circle" src="res/img/seminar-pg-1.png">
        <h3>Staying safe on the road: Bike Safety 101</h3>
        <p>This intro seminar goes over the basics of staying safe on the road.</p>
        <a class="caps" href="#">Watch Seminar</a>
      </div>
      <div class="col-md-2 seminar-tile seminar-page">
        <img class="img-circle" src="res/img/seminar-pg-2.png">
        <h3>Bicycle Types: How to Pick the Best Bike for You</h3>
        <p>This seminar goes over the functions of different types of bikes.</p>
        <a class="caps" href="#">Watch Seminar</a>
      </div>
      <div class="col-md-2 seminar-tile seminar-page">
        <img class="img-circle" src="res/img/seminar-pg-3.png">
        <h3>Cycling for fitness: Bike &amp; Cycling Exercises</h3>
        <p>This seminar helps get you started with cycling for fitness.</p>
        <a class="caps" href="#">Watch Seminar</a>
      </div>
      <div class="col-md-2 seminar-tile seminar-page">
        <img class="img-circle" src="res/img/seminar-pg-4.png">
        <h3>Bike Identification: Identifying basic bike parts</h3>
        <p>This seminar goes over how to identify the basic parts of a bike.</p>
        <a class="caps" href="#">Watch Seminar</a>
      </div>
      <div class="col-md-2 seminar-tile seminar-page">
        <img class="img-circle" src="res/img/seminar-pg-5.png">
        <h3>Bike maintenance: How to tune a bike</h3>
        <p>This seminar goes over topics like clearning and adjustments for bikes.</p>
        <a class="caps" href="#">Watch Seminar</a>
      </div>
      <div class="col-md-2 seminar-tile seminar-page">
        <img class="img-circle" src="res/img/seminar-pg-6.png">
        <h3>Bike Installation: Installing a new Derailleur</h3>
        <p>This seminar is a step by step instruction on installation.</p>
        <a class="caps" href="#">Watch Seminar</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2 seminar-tile seminar-page">
        <img class="img-circle" src="res/img/seminar-pg-7.png">
        <h3>Packaging: How to safely package your bike</h3>
        <p>This intro seminar goes over the deconstruction and packaging of a bike.</p>
        <a class="caps" href="#">Watch Seminar</a>
      </div>
      <div class="col-md-2 seminar-tile seminar-page">
        <img class="img-circle" src="res/img/seminar-pg-8.png">
        <h3>Bike Riding: How to shift your gears</h3>
        <p>This seminar helps you shift gears on different types of bikes.</p>
        <a class="caps" href="#">Watch Seminar</a>
      </div>
      <div class="col-md-2 seminar-tile seminar-page">
        <img class="img-circle" src="res/img/seminar-pg-9.png">
        <h3>Cycling Trips: How to plan a good route</h3>
        <p>This seminar goes over the basics of planning a good route.</p>
        <a class="caps" href="#">Watch Seminar</a>
      </div>
      <div class="col-md-2 seminar-tile seminar-page">
        <img class="img-circle" src="res/img/seminar-pg-10.png">
        <h3>Cycling Trips: Packing essentials for trips</h3>
        <p>This seminar goes over the essentials of a cycling trip.</p>
        <a class="caps" href="#">Watch Seminar</a>
      </div>
      <div class="col-md-2 seminar-tile seminar-page">
        <img class="img-circle" src="res/img/seminar-pg-11.png">
        <h3>Riding: How to ensue a repair-free ride</h3>
        <p>This seminar shows you how to prevent bike malfunctions on the road.</p>
        <a class="caps" href="#">Watch Seminar</a>
      </div>
      <div class="col-md-2 seminar-tile seminar-page">
        <img class="img-circle" src="res/img/seminar-pg-12.png">
        <h3>Family Biking 101: Basics of group biking</h3>
        <p>This seminar goes over the basics of group biking.</p>
        <a class="caps" href="#">Watch Seminar</a>
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
