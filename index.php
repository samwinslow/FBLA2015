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
    
<?php generate_footer(); ?>
