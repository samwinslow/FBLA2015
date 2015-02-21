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
          <a href="admin-panel/contact_submissions.php" class="list-group-item active">
            Contact Submissions
          </a>
          <a href="admin-panel/purchases.php" class="list-group-item">Purchases</a>
        </div>
      </div>
      <div class="col-md-9 admin-panel-container">
        <h2>Contact Submissions</h2>
        <?php
        // Generate list of all users
        database_connect();
        $result = mysql_query("SELECT * FROM contact_submissions ORDER BY date DESC;");
        mysql_close();

        $submissions = array();
        while ($row = mysql_fetch_array($result)) {
          array_push($submissions, $row);
        }
        foreach ($submissions as $index){
          $timestamp = strtotime($index['date']);
          $date = date('M j, Y g:i A', $timestamp);
          
          echo '<p class="submission">';
          echo '<h3>'.$index['name'].'</h3>';
          echo '<blockquote class="submission-text">'.$index['text'].'</blockquote>';
          echo '<p>';
          echo '<span class="label label-default">'.$index['inquiry'].'</span> &mdash;';
          echo '<i>'.$date.'</i> &mdash;';
          echo '<a href="mysql-admin/delete-submission.php?id='.$index['id'].'">Delete</a>';
          echo '</p></p>';
        }
        ?>
      </div>
  </div>
  
<?php generate_footer(); ?>
