<?php

// Connect to server and select databse.
mysql_connect("localhost", "root", "password") or die("cannot connect"); 
mysql_select_db("cyclefitness") or die("cannot select DB");
$result = mysql_query("SELECT * FROM contact_submissions;");
mysql_close();

$submissions = array();
while ($row = mysql_fetch_array($result)) {
  array_push($submissions, $row);
}

?>
<table>
  <thead>
    <tr>
      <th>id</th>
      <th>user_id</th>
      <th>date</th>
      <th>name</th>
      <th>inquiry</th>
      <th>text</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($submissions as $index){
      echo "<tr>";
      echo "<td>".$index['id']."</td>";
      echo "<td>".$index['user_id']."</td>";
      echo "<td>".$index['date']."</td>";
      echo "<td>".$index['name']."</td>";
      echo "<td>".$index['inquiry']."</td>";
      echo "<td>".$index['text']."</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>    
