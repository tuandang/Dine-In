<?php
$con=mysqli_connect("localhost","root","root","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$file = 'ID.txt';
$current = file_get_contents($file);

//assumed id already in it
$str = "UPDATE contacttableArchit SET instruction = '".$_GET['instruct']."' WHERE unique_id='". $current."'";

 mysqli_query($con,$str);
file_put_contents($file, $current);

mysqli_close($con);

	header("Location: index2.php");
?>
