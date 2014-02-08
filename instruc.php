<?php
echo "";
$con=mysqli_connect("localhost","root","root","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

   $instruction_result = mysqli_query($con,"SELECT * FROM contactTableArchit WHERE instruction IS NOT NULL ");
while($row = mysqli_fetch_array($instruction_result))
			  {
			  echo "<div onclick='hide(this)'>";
			  echo "<u>Instruction for Table: ". $row['table_no'] . "</u><br>";
			  echo $row['instruction'];

			  echo "<br>";
			  echo "<br>";
			  echo "</div>";
			  }

mysqli_close($con);
?>
