<?php

echo "";
$con=mysqli_connect("localhost","root","root","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

   $attention_result = mysqli_query($con,"SELECT * FROM contactTableArchit where attention = 1");
while($row = mysqli_fetch_array($attention_result))
			  {
			  echo "<div onclick='hide(this)'>";
			  echo "&nbsp"."&nbsp".$row['table_no'];
			  echo "<br>";
			  	echo "<br>";
			  echo "</div>";
			  }
mysqli_close($con);

?>
