<?php

// Connect to server and select databse.
mysql_connect("localhost", "root", "password") or die("cannot connect"); 
mysql_select_db("cyclefitness") or die("cannot select DB");
$result = mysql_query("SELECT * FROM email_list;");
mysql_close();

$subscribers = array();
while ($row = mysql_fetch_array($result)) {
  array_push($subscribers, $row);
}

?>
<table>
  <thead>
    <tr>
      <th>id</th>
      <th>email_address</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($subscribers as $index){
      echo "<tr>";
      echo "<td>".$index['id']."</td>";
      echo "<td>".$index['email_address']."</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>    
