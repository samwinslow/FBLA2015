<?php
  include('generator.php');
  generate_header();
?>
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
            <form class="form-inline" action="mysql-admin/add-one-to-cart.php?amount=229.99" method="post">
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
