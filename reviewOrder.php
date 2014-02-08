
<html>
<head>
	<title>  Dine-In 
	</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
	

</head>
<body >

	<br><br><br><br><br>

	<div id="content">
	<div id="head"><h1 id="head"> <i>Review Order </i></h1><br></div>
	
<?php

$con=mysqli_connect("localhost","root","root","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $file = 'ID.txt';
$current = file_get_contents($file);
file_put_contents($file, $current);

    $order_result = mysqli_query($con,"SELECT * FROM contacttableArchit WHERE unique_id='". $current."'");
	$row = mysqli_fetch_array($order_result);
			 
			  
	echo $row['order_menu'];


 

mysqli_close($con);

?>

		


		<div class="section banner">



			<table>
			<tr>
			<td>	
				
			<div id="intro" class="grid_9">

				<p><a href="menu.php" class="btn"> Back</a></p>
			</div>
			</td>
			<td>

			<div id="intro" class="grid_9">

				<p><a  href="index2.php" class="btn" > Submit </a></p>
			</div>
		</td>
	</tr>

</table>
		</div>



	</div>

</body>
</html> 

