<?php

// Connect to server and select databse.
mysql_connect("localhost", "root", "password") or die("cannot connect"); 
mysql_select_db("andrewsh_cyclefitness") or die("cannot select DB");
$result = mysql_query("SELECT * FROM users;");
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
      <th>email_address</th>
      <th>password</th>
      <th>first_name</th>
      <th>last_name</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($users as $index){
      echo "<tr>";
      echo "<td>".$index['id']."</td>";
      echo "<td>".$index['email_address']."</td>";
      echo "<td>".$index['password']."</td>";
      echo "<td>".$index['first_name']."</td>";
      echo "<td>".$index['last_name']."</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>    
