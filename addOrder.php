<?php



echo "here";
$q=$_REQUEST['q'];


$con=mysqli_connect("localhost","root","root","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $file = 'ID.txt';
$current = file_get_contents($file);


    $order_result = mysqli_query($con,"SELECT * FROM contacttableArchit WHERE unique_id='". $current."'");
	$row = mysqli_fetch_array($order_result);
			 
			  
mysqli_query($con,"UPDATE contacttableArchit SET order_menu = '".$row['order_menu']."<br>".$q."' WHERE unique_id='".$current."'");

file_put_contents($file, $current);
 

mysqli_close($con);


echo "abc";

?>
