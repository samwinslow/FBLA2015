<?php

include('../generator.php');
verify_admin();
generate_header();

?>
  <!-- Jumbotron -->
	<div class="jumbotron nhp-header reference-header">
	  <h1>Admin Panel</h1>
	</div><!--/Jumbotron -->
  <div class="fullwidth-wrapper admin-panel-wrapper">
      <div class="col-md-3 admin-panel-sidebar">
        <div class="list-group">
          <a href="admin-panel/users.php" class="list-group-item">Users</a>
          <a href="admin-panel/email_list.php" class="list-group-item">Email List</a>
          <a href="admin-panel/contact_submissions.php" class="list-group-item">Contact Submissions</a>
          <a href="admin-panel/purchases.php" class="list-group-item active">
            Purchases
          </a>
        </div>
      </div>
      <div class="col-md-9 admin-panel-container">
        <h2>Purchases</h2>
        <table class="table">
          <thead>
            <tr>
              <th>ID#</th>
              <th>User ID#</th>
              <th>Date</th>
              <th>Amount</th>
              <th class="text-right"><img class="delete-header" src="res/img/icons/trash.png" alt="Delete" title="Delete"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            database_connect();
            $result = mysql_query("SELECT * FROM purchases ORDER BY date DESC;");
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
              echo "<td>".$index['user_id']."</td>";
              echo "<td>".$date."</td>";
              echo "<td>$".$index['amount']."</td>";
              echo '<td class="text-right"><a href="mysql-admin/delete-purchase.php?id='.$index['id'].'"><img height="10" src="res/img/icons/close.png" alt="Delete" title="Delete"></a></td>';
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
  </div>
  
<?php generate_footer(); ?>
