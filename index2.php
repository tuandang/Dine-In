
<?php

	
	$file = 'ID.txt';
	$fileInfo = file_get_contents($file);
	if ( $fileInfo == "")
	{
		file_put_contents($file, $_GET['tableId']);
		
//if not equal to input
	}
	else if($_GET['tableId']!="" && $_GET['tableId']!=$fileInfo)
	{
		file_put_contents($file, $_GET['tableId']);
			
	}
	else
	{
		
	}
	
?>
<html>
<head>
	<title> Dine-In
	</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
	<script type="text/javascript">
		function chequeUpdate()
		{
			alert ("We will bring you a check now.");
			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function()
			{
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			    {
			   // document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			    }
			  }
			xmlhttp.open("GET","updatecheque.php?q="+"",true);
			xmlhttp.send();
					}

			
			function callA()
			{
				alert ("We will be right with you!");
			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function()
			{
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			    {
			   // document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			    }
			  }
			xmlhttp.open("GET","callAssistance.php?q="+"",true);
			xmlhttp.send();
			}
	</script>

</head>
<body >

	<br><br><br><br><br>

	<div id="content">

		<div id="head"><h1 id="head"> <i>Dine-In </i></h1><br></div>


		<div class="section banner">



			<table>
				<tr>
					<td>	
						<div id="intro" class="grid_9">

						<p><a href="menu.php" class="btn" onclick="orderThis()"> Make an order</a></p>
						</div>
					</td>

					<td>

						<div id="intro" class="grid_9">

						<p><a  href="#" class="btn" >  </a></p>
					</div>

					<td>

						<div id="intro" class="grid_9">

						<p><a  href="#" class="btn" >  </a></p>
					</div>

					<td>

						<div id="intro" class="grid_9">

						<p><a  href="#" class="btn" >  </a></p>
					</div>

					<td>

						<div id="intro" class="grid_9">

						<p><a  href="#" class="btn" >  </a></p>
					</div>

					<td>

						<div id="intro" class="grid_9">

						<p><a  href="instruction.html" class="btn" > Give instructions </a></p>
					</div>
					</td>
				</tr>

				<tr>
					<td>

						<div id="intro" class="grid_9">

						<p><a href="#" class="btn" onclick="callA()"> Call Assistance</a></p>
						</div>
					</td>

					<td>

					<div id="intro" class="grid_9">

						<p><a  href="#" class="btn" >  </a></p>
					</div>

					<td>

						<div id="intro" class="grid_9">

						<p><a  href="#" class="btn" >  </a></p>
					</div>

					<td>

						<div id="intro" class="grid_9">

						<p><a  href="#" class="btn" >  </a></p>
					</div>

					<td>

						<div id="intro" class="grid_9">

						<p><a  href="#" class="btn" >  </a></p>
					</div>

					<td>
						<div id="intro" class="grid_9">

						<p><a href="#" onclick="chequeUpdate()"  class="btn"> Ask for check </a></p>
						</div>
					</td>
				</tr>
		</table>
		</div>



	</div>



</body>
</html> 

