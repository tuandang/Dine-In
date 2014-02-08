<?php 
$pageTitle = "Contact Mike";
$section = "contact";


include ('inc/header.php'); ?>

<div class="section page">

	<div class="wrapper"
		<h1>Contact</h1>

		<p> I would love to hear from you. Complete the form to send me an email. </p>

		<!-- action: where to send it to -->
		<form method="post" action="code.php">

		<table>	
			<tr>
				<th><label for="name">Name</label></th>
				<td><input type="text" name="name" id="name"></td>
			</tr>

			<tr>
				<th><label for="email">Email </label></th>
				<td><input type="text" name="email" id="email"></td>
			</tr>



		</table>

		<input type="submit" value="Send">

		</form>
	

	</div>


<div>


<?php include('inc/footer.php'); ?>
