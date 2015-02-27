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
          <a class="btn btn-primary btn-bike-header btn-lg" href="bikes.php?page=1&gender=&type=road" role="button">See Collection <span class="chevron-right chevron-orange"></span></a>
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
  
  <?php
    if (isset($_GET['page']) && $_GET['page'] != '') {
      $page_number = $_GET['page'];
    } else {
      $page_number = 1;
    }
    if (isset($_GET['type']) && $_GET['type'] != '') {
      $bike_type = $_GET['type'];
      $bike_type_mixin = "type='".$bike_type."'";
    } else {
      $bike_type = '';
      $bike_type_mixin = "1=1";
    }
    if (isset($_GET['gender']) && $_GET['gender'] != '') {
      $bike_gender = $_GET['gender'];
      $bike_gender_mixin = "gender='".$bike_gender."'";
    } else {
      $bike_gender = '';
      $bike_gender_mixin = "1=1";
    }
  
    $lim_length = 20;
    $lim_start = $lim_length * ($page_number - 1);
    $lim_start_next = $lim_length * ($page_number);
  
    // Generate list of all bikes
    database_connect();
         $result = mysql_query("SELECT * FROM bikes WHERE $bike_type_mixin AND $bike_gender_mixin LIMIT $lim_start, $lim_length;");
    $result_next = mysql_query("SELECT * FROM bikes WHERE $bike_type_mixin AND $bike_gender_mixin LIMIT $lim_start_next, $lim_length;");
    mysql_close();
  ?>
  
	<nav class="navbar bike-navbar" role="navigation">
    <div id="bikeNavbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li <?=($bike_gender=='')?'class="active"':'' ?>><a href="bikes.php?page=1&gender=&type=<?php echo $bike_type; ?>">All</a></li>
        <li <?=($bike_gender=='mens')?'class="active"':'' ?>><a href="bikes.php?page=1&gender=mens&type=<?php echo $bike_type; ?>">Mens</a></li>
        <li <?=($bike_gender=='womens')?'class="active"':'' ?>><a href="bikes.php?page=1&gender=womens&type=<?php echo $bike_type; ?>">Womens</a></li>
        <li <?=($bike_gender=='childrens')?'class="active"':'' ?>><a href="bikes.php?page=1&gender=childrens&type=<?php echo $bike_type; ?>">Childrens</a></li>
        <li class="spacer"></li>
        <li <?=($bike_type=='')?'class="active"':'' ?>><a href="bikes.php?page=1&gender=<?php echo $bike_gender; ?>&type=">All</a></li>
        <li <?=($bike_type=='cyclecross')?'class="active"':'' ?>><a href="bikes.php?page=1&gender=<?php echo $bike_gender; ?>&type=cyclecross">Cyclecross</a></li>
        <li <?=($bike_type=='mountain')?'class="active"':'' ?>><a href="bikes.php?page=1&gender=<?php echo $bike_gender; ?>&type=mountain">Mountain</a></li>
        <li <?=($bike_type=='road')?'class="active"':'' ?>><a href="bikes.php?page=1&gender=<?php echo $bike_gender; ?>&type=road">Road</a></li>
        <li <?=($bike_type=='folding')?'class="active"':'' ?>><a href="bikes.php?page=1&gender=<?php echo $bike_gender; ?>&type=folding">Folding</a></li>
        <li <?=($bike_type=='electric_assist')?'class="active"':'' ?>><a href="bikes.php?page=1&gender=<?php echo $bike_gender; ?>&type=electric_assist">Electric Assist</a></li>
        <li <?=($bike_type=='hybrid')?'class="active"':'' ?>><a href="bikes.php?page=1&gender=<?php echo $bike_gender; ?>&type=hybrid">Hybrid</a></li>
        <li <?=($bike_type=='bmx')?'class="active"':'' ?>><a href="bikes.php?page=1&gender=<?php echo $bike_gender; ?>&type=bmx">BMX</a></li>
      </ul>
    </div><!--/.navbar-collapse -->
  </nav>
  
  <div class="fullwidth-wrapper bikes">
    <?php if ($page_number > 1) { ?>
      <div class="pager">
        <a class="btn btn-lg btn-primary" href="bikes.php?page=<?php echo $page_number - 1; ?>&gender=<?php echo $bike_gender; ?>&type=<?php echo $bike_type; ?>">Previous Page</a>
      </div>
    <?php } ?>
    <div class="row bike-row">
      <?php
      if (mysql_num_rows($result) > 0) {
        $bikes = array();
        while ($row = mysql_fetch_array($result)) {
          array_push($bikes, $row);
        }
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
    <?php if (mysql_num_rows($result_next) > 0) { ?>
      <div class="pager">
        <a class="btn btn-lg btn-primary" href="bikes.php?page=<?php echo $page_number + 1; ?>&gender=<?php echo $bike_gender; ?>&type=<?php echo $bike_type; ?>">Next Page</a>
      </div>
    <?php } ?>
  </div>
    
<?php generate_footer(); ?>
