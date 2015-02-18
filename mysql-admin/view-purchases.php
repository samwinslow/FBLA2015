<?php

// Connect to server and select databse.
mysql_connect("localhost", "root", "password") or die("cannot connect"); 
mysql_select_db("cyclefitness") or die("cannot select DB");
$result = mysql_query("SELECT * FROM purchases;");
mysql_close();

$users = array();
while ($row = mysql_fetch_array($result)) {
  array_push($users, $row);
}

?>
<table>
  <thead>
    <tr>
      <th>id</th>
      <th>user_id</th>
      <th>date</th>
      <th>amount</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($users as $index){
      echo "<tr>";
      echo "<td>".$index['id']."</td>";
      echo "<td>".$index['user_id']."</td>";
      echo "<td>".$index['date']."</td>";
      echo "<td>".$index['amount']."</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>    
