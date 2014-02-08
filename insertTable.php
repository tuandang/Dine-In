<?php
$con=mysqli_connect("localhost","root","root","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$bytes=openssl_random_pseudo_bytes ( 6 , $cstrong  );
$hex   = bin2hex($bytes);
echo "<script type='text/javascript'>alert('$hex');
window.history.back();
</script>";

$str = "INSERT INTO contacttableArchit(unique_id, table_no, order_menu, instruction, attention, cheque) 
VALUES ('".$hex."',".$_GET['table_no'].",null,null,0,0)";
//echo $str;
 mysqli_query($con,$str);
mysqli_close($con);
	header("Location: server.php");
?>
