

<html>
<head>
	<title> Dine-In
	</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">

	<script>
		function hide(obj) {
		        obj.style.display = 'none';

		}

		function showOrder()
		{
			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function()
			{
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			    {
			    document.getElementById("order_menu").innerHTML=xmlhttp.responseText;
			    }
			  }
			xmlhttp.open("GET","test.php?q="+"",true);
			xmlhttp.send();


		}


		function showInstructions()
		{
			var xmlhttp1=new XMLHttpRequest();
			xmlhttp1.onreadystatechange=function()
			{
			  if (xmlhttp1.readyState==4 && xmlhttp1.status==200)
			    {
			    document.getElementById("instructions").innerHTML=xmlhttp1.responseText;
			    }
			  }
			xmlhttp1.open("GET","instruc.php?q="+"",true);
			xmlhttp1.send();
			showCheque();
		}


		function showCheque()
		{
			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function()
			{
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			    {
			    document.getElementById("cheque").innerHTML=xmlhttp.responseText;
			    }
			  }
			xmlhttp.open("GET","cheque.php?q="+"",true);
			xmlhttp.send();
			showAttention();
			}
			function showAttention()
			{
			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function()
			{
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			    {
			    document.getElementById("attention").innerHTML=xmlhttp.responseText;
			    }
			  }
			xmlhttp.open("GET","attention.php?q="+"",true);
			xmlhttp.send();
			//show();
		}

		showOrder();
		showInstructions();
	</script>
</head>

<body>
	<div id="head"><h1 id="head"> <i>Restaurant Table </i></h1><br></div>




	</table>

			<table > <col width="300"> <col width="300"> <col width="200"> <col width="100">

				<tr>

					<td>
						<div id="intro" class="grid_9">
						<p><a href="#" class="btn" onclick="callA()"> Order </a></p>
						
					</td>

					<td style="width:100p">	
						<div id="intro" class="grid_9">
						<p><a href="#" class="btn"> Instruction</a></p>
						
					</td>

					<td>
						<div id="intro" class="grid_9">
						<p><a  href="#" class="btn" > Cheque </a></p>
					
					</td>

					<td>
						<div id="intro" class="grid_9">
						<p><a href="#" class="btn" onclick="callA()"> Attention</a></p>
					
					</td>



				</tr>
				<tr>
					<td >
						</div><div id="order_menu"></div>
					</td>
					<td>
						</div><span id="instructions"></span>
					</td>
					<td>
						</div><div id="cheque"></div>
					</td>
					<td>
						</div><div id="attention"></div>
					</td>
				</tr>
			</table>

		<br><br>	
		<form method="get" action="insertTable.php">
    		<input type ="text" name="table_no"/>
    
    		<input type="submit" value="Assign Number" />
		</form>
		

</body>
</html>
