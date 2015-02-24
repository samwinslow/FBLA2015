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
  
<?php generate_footer(); ?>
