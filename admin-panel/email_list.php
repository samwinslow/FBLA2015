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
          <a href="admin-panel/email_list.php" class="list-group-item active">
            Email List
          </a>
          <a href="admin-panel/contact_submissions.php" class="list-group-item">Contact Submissions</a>
          <a href="admin-panel/purchases.php" class="list-group-item">Purchases</a>
        </div>
      </div>
      <div class="col-md-9 admin-panel-container">
        <h2>Email List</h2>
        <table class="table">
          <thead>
            <tr>
              <th>ID#</th>
              <th>Email Address</th>
              <th class="text-right"><img class="delete-header" src="res/img/icons/trash.png" alt="Delete" title="Delete"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            database_connect();
            $result = mysql_query("SELECT * FROM email_list;");
            mysql_close();
            $subscribers = array();
            while ($row = mysql_fetch_array($result)) {
              array_push($subscribers, $row);
            }
            foreach ($subscribers as $index){
              echo "<tr>";
              echo "<td>".$index['id']."</td>";
              echo "<td>".$index['email_address']."</td>";
              echo '<td class="text-right"><a href="mysql-admin/delete-subscriber.php?id='.$index['id'].'"><img height="10" src="res/img/icons/close.png" alt="Delete" title="Delete"></a></td>';
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
  </div>
  
<?php generate_footer(); ?>
