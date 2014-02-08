<?php



$con=mysqli_connect("localhost","root","root","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"INSERT INTO contactTable (name, email, up_boolean)
VALUES ('$_POST[name]', '$_POST[email]', true)");





mysqli_close($con);


?>
