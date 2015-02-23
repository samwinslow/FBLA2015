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
            <img id="bike-img" class="bike-modal-img" src="res/img/bikes/bike-1.png">
          </div>
          <div class="col-md-5">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h3 id="bike-title"></h3>
            <h4 id="bike-price"></h4>
            <p id="bike-text"></p>
            <form id="bike-form" class="form-inline" action="mysql-admin/add-to-cart.php" method="post">
              <input type="hidden" name="id">
              <div class="form-group">
                <select class="form-control" id="bike-sizes" required>
                  <option value="">SIZE</option>
                  <option value="52">52 cm</option>
                  <option value="54">54 cm</option>
                  <option value="56">56 cm</option>
                </select>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" id="purchaseQty" name="qty" placeholder="QTY" min="1" max="10" step="1" required>
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
      <?php
      // Generate list of all users
      database_connect();
      $result = mysql_query("SELECT * FROM bikes;");
      mysql_close();

      $bikes = array();
      
      while ($row = mysql_fetch_array($result)) {
        array_push($bikes, $row);
      }
      if (mysql_num_rows($result) > 0){
        foreach ($bikes as $index) { ?>
          <div class="col-md-3 text-center bike" data-bike-id="<?php echo $index['id']; ?>">
            <img src="<?php echo $index['image_url']; ?>">
            <h4><?php echo $index['name']; ?></h4>
            <?php if ($index['old_price'] != $index['sale_price'] && $index['old_price'] != null){ ?>
              <h5><s>$<?php echo $index['old_price']; ?></s> <span class="text-orange">$<?php echo $index['sale_price']; ?></span></h5>
            <?php } else { ?>
              <h5>$<?php echo $index['sale_price']; ?></h5>
            <?php } ?>
          </div>
        <?php }
      } else { ?>
      <h3 class="text-center">No bikes found in this section</h3>
      <?php } ?>
    </div>
  </div>
    
<?php generate_footer(); ?>
