<?php

require 'inc/connect.php';

$query = intval($_GET['query']);

mysqli_select_db($conn, "staff");
$sql = "SELECT * FROM staff WHERE id = " .$query. "";
$result = mysqli_query($conn, $sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Job</th>
</tr>";

while ($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" .$row['firstname']. "</td>";
  echo "<td>" .$row['lastname']. "</td>";
  echo "<td>" .$row['age']. "</td>";
  echo "<td>" .$row['hometown']. "</td>";
  echo "<td>" .$row['job']. "</td>";
  echo "</tr>";
}

 ?>
