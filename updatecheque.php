<?php
echo "abc";
$con=mysqli_connect("localhost","root","root","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$file = 'ID.txt';
$current = file_get_contents($file);
//assumed id already in it
 mysqli_query($con,"UPDATE contacttableArchit SET cheque = 1 WHERE unique_id='". $current."'");
file_put_contents($file, $current);

mysqli_close($con);
?>
