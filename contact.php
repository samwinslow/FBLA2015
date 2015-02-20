<?php
  include('generator.php');
  generate_header();
?>
  
  <!-- Jumbotron -->
	<div class="jumbotron nhp-header contact-header">
	  <h1>Contact Us</h1>
    <p>We love our customers. Whether you have a question, general inquiry, or partnership <br> proposal, we’re always more than happy to help you out.</p>
	  <div class="container">
	    <form action="mysql-admin/add-submission.php" method="post">
	      <div class="row">
	        <div class="col-md-3">
	          <input type="text" class="form-control" name="name" id="messageName" placeholder="Name">
	        </div>
	        <div class="col-md-3">
	          <select class="form-control" name="inquiry">
	            <option value="General Inquiry">General Inquiry</option>
	            <option value="Partnership">Partnership</option>
	            <option value="Support">Support</option>
	            <option value="Other">Other</option>
	          </select>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-md-6">
	          <?php if($page_error==='contact_no_info'){ ?><p>Please include a message to send.</p><?php } ?>
	          <textarea class="form-control" name="text" rows="12" placeholder="Enter your message here - we’d love to help!" required></textarea>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-md-2 col-md-offset-4">
	          <button type="submit" class="btn btn-success btn-lg form-control" role="button">Send Message</button>
	        </div>
	      </div>
	    </form>
		    
		</div>
	</div><!--/Jumbotron -->
    
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
