<?php

include('../generator.php');
generate_header();

?>
  <!-- Jumbotron -->
	<div class="jumbotron nhp-header reference-header">
	  <h1><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></h1>
	</div><!--/Jumbotron -->
  <div class="fullwidth-wrapper admin-panel-wrapper">
      <div class="col-md-3 admin-panel-sidebar">
        <div class="list-group">
          <a href="user-profile/basic_info.php" class="list-group-item active">
            Basic Info
          </a>
          <a href="user-profile/purchases.php" class="list-group-item">Purchase History</a>
        </div>
      </div>
      <div class="col-md-9 admin-panel-container">
        <h2>Basic Info</h2>
        <dl class="dl-horizontal">
          <dt>Name</dt>
          <dd><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></dd>
          <dt>Email</dt>
          <dd><?php echo $user['email_address']; ?></dd>
          <dt>User ID#</dt>
          <dd><?php echo $user['id']; ?></dd>
        </dl>
        <p>Please <a href="contact.php"><u>contact us</u></a> to update your information.</p>
      </div>
  </div>
<?php generate_footer(); ?>
