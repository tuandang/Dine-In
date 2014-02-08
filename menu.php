
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title> Dine-In </title>
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
    <!-- google web fonts -->




</head>

<body>
	
 

	<div align="center" class="restaurant-menu">
      <div id="head"><h1 id="head"> <i>Dine-In </i></h1><br></div>
      <h2 id="head" align="center"><u> MENU </u></h2>

   <br><br>


     <table class="prices-three">
     	<tbody>

    		<tr><th><cite >Baguette</cite>&nbsp;&#40;v&#41;</th><td>&nbsp;</td><td>&nbsp;</td><td>		  &nbsp;3.45</td><td>
          <a href="#"><img src="img/add10.jpg" border-radius: 10px height="20" width="20"onclick="addInfo('Baguette')"></a>
     		</td></tr>

     		<tr><th><cite >Croissant</cite>&nbsp;&#40;v&#41;</th><td>&nbsp;</td><td>&nbsp;</td><td>		  &nbsp;3.45</td><td>
          <a href="#"><img src="img/add10.jpg" height="20" width="20"onclick="addInfo('Croissant')"></a>
        </td></tr>

     		<tr><th><cite >Pain Au Chocolat</cite>&nbsp;&#40;v&#41;</th><td>&nbsp;</td><td>&nbsp;</td><td>		  &nbsp;3.95</td><td>
          <a href="#"><img src="img/add10.jpg" height="20" width="20"onclick="addInfo('Pain Au Chocolat')"></a>
        </td></tr>

     		<tr><th><cite >Organic Brioche</cite>&nbsp;&#40;v&#41;</th><td>&nbsp;</td><td>&nbsp;</td><td>		  &nbsp;3.60</td><td>
          <a href="#"><img src="img/add10.jpg" height="20" width="20"onclick="addInfo('Organic Brioche')"></a>
        </td></tr>


     		<tr><th><cite >Pain Aux Raisins</cite>&nbsp;&#40;v&#41;</th><td>&nbsp;</td><td>&nbsp;</td><td>		  &nbsp;3.70</td><td>
          <a href="#"><img src="img/add10.jpg" height="20" width="20"onclick="addInfo('Pain Aux Raisins')"></a>
        </td></tr>


     		<tr><th><cite >Apple Cannel&eacute;</cite>&nbsp;&#40;v&#41;</th><td>&nbsp;</td><td>&nbsp;</td><td>		  &nbsp;3.50</td><td>
          <a href="#"><img src="img/add10.jpg" height="20" width="20"onclick="addInfo('Apple Cannel&eacute;')"></a>
        </td></tr>

     		<tr><th><cite >Organic Buttermilk Scone</cite>&nbsp;&#40;v&#41;</th><td>&nbsp;</td><td>&nbsp;</td><td>		  &nbsp;4.25</td><td>
          <a href="#"><img src="img/add10.jpg" height="20" width="20"onclick="addInfo('Organic Buttermilk Scone')"></a>
        </td></tr>



     		<tr><th><cite >Apple Turnover</cite>&nbsp;&#40;v&#41;</th><td>&nbsp;</td><td>&nbsp;</td><td>		  &nbsp;3.50</td><td>
          <a href="#"><img src="img/add10.jpg" height="20" width="20"onclick="addInfo('Apple Turnover')"></a>
        </td></tr>

     		<tr><th><cite >Seasonal Muffins</cite>&nbsp;&#40;v&#41;</th><td>&nbsp;</td><td>&nbsp;</td><td>		  &nbsp;3.60</td><td>
          <a href="#"><img src="img/add10.jpg" height="20" width="20"onclick="addInfo('Seasonal Muffins')"></a>
        </td></tr>


     		<tr><th><cite >Cheese Almond Danish</cite>&nbsp;&#40;v&#41;</th><td>&nbsp;</td><td>&nbsp;</td><td>		  &nbsp;3.85</td><td>
          <a href="#"><img src="img/add10.jpg" height="20" width="20"onclick="addInfo('Cheese Almond Danish')"></a>
        </td></tr>

     		<tr><th><cite >Organic Hazelnut Flute</cite>&nbsp;&#40;v&#41;</th><td>&nbsp;</td><td>&nbsp;</td><td>		  &nbsp;3.85</td><td>
          <img src="img/add10.jpg" height="20" width="20"onclick="addInfo('Organic Hazelnut Flute')"></td></tr>

     	</tbody>
     </table>




  </div>

<script>

    function addInfo(id)
    {
      console.log (id);
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange=function()
{
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    //document.getElementById("test").innerHTML=xmlhttp.responseText;
    }
  }
      xmlhttp.open ("GET", "addOrder.php?q="+ id+ "", true);
      xmlhttp.send();
    }

</script>

      <br><br>
      <table>
          <tr>
            <td>
            <div id="intro" class="grid_9">

            <a href="index2.php" class="btn"> Go back </a>
            </div></td>

            <td>
            <div  id="intro" class="grid_9">

            <a href="reviewOrder.php" class="btn"> Review your order </a>
            </div></td>


          </tr>
      </table>


</body>
</html>

<!-- Places to host websites: mediatemple.net, bluehost.com, dreamhost.com -->
<!-- domain places: godaddy, name.com, namecheap.com -->
<!-- upload to server: download FTP client (cyberduck) -->
<!-- <hr>: horizontal line, blockquote cite, code, pre, abrrv, address, wbr
    list: dl, dd -->
    <!-- fieldset and legends, iframe, button -->
