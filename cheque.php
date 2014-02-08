<?php

echo "";
$con=mysqli_connect("localhost","root","root","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

   $cheque_result = mysqli_query($con,"SELECT * FROM contactTableArchit where cheque = 1");
while($row = mysqli_fetch_array($cheque_result))
			  {
			  echo "<div onclick='hide(this)'>";
			  echo $row['table_no'];
			  echo "<br>";
			  echo "<br>";
			  echo "</div>";
			  }
mysqli_close($con);

?>
