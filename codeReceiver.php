


<?php

	echo "here";

$con=mysqli_connect("localhost","root","root","my_db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
while(true)
{
	echo "here";
	$result = mysqli_query($con,"SELECT * FROM contactTable where up_boolean = 1");

	while ($row = mysqli_fetch_array($result))
	{
		echo "here"
		//update current query to false
		mysqli_query ($con, "UPDATE contactTable SET up_boolean = 0 where 
						name =". $row['name']);

		//run script
		<script>
		$(this).append("<div class='project-description'><p>Description of the project.</p></div>");
		</script>
	}

}
mysqli_close($con);


?>

