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
          <a href="user-profile/basic_info.php" class="list-group-item">Basic Info</a>
          <a href="user-profile/purchases.php" class="list-group-item active">
            Purchase History
          </a>
        </div>
      </div>
      <div class="col-md-9 admin-panel-container">
        <h2>Purchase History</h2>
        <table class="table">
          <thead>
            <tr>
              <th>ID#</th>
              <th>Date</th>
              <th>Amount</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Generate list of all users
            database_connect();
            $result = mysql_query("SELECT * FROM purchases WHERE user_id=".$user['id']." ORDER BY date DESC;");
            mysql_close();

            $purchases = array();
            while ($row = mysql_fetch_array($result)) {
              array_push($purchases, $row);
            }
            
            foreach ($purchases as $index){
              $timestamp = strtotime($index['date']);
              $date = date('M j, Y g:i A', $timestamp);
              
              echo "<tr>";
              echo "<td>".$index['id']."</td>";
              echo "<td>".$date."</td>";
              echo "<td>$".$index['amount']."</td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
  </div>
<?php generate_footer(); ?>
