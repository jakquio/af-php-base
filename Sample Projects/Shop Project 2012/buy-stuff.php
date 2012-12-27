
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<?php 

require_once 'auth.php';
include 'connect.php';

?>

<head>
	<title> Shopping Mall </title>
	<link href='style1-index.css' rel='stylesheet' type='text/css' />
	<script src='js/jquery-1.8.3.js' type='text/javascript'></script>
	<script>
		
		$(document).ready( function()
		{
			<!-- Enter JQuery code here -->
			
			$('#.content').hide();
		
		
		});
	
	</script>
	
</head>

<body class='bgcolor'>

<?php

echo <<<HTML

<div id='header' class='center'>
		<h1><a href='#'> Take a look at our products! </a></h1>
</div>


<div id='leftmenu' align='center'>
 <ul>
	<h3> User Menu: </h3><br />
	<li><a href='user-index.php'> Return to Main </a></li>
	<br /> <br />
	<a href='logout.php'> Log Out! </a></li>
 </ul>
</div>

<div id='content'>
<form action='order_confirm.php' form method='post'>


<table border='0' cellspacing='15' cellpadding='8' >

		<th><h3> << Game Consoles >> </h3></th>
		<tr></tr>
	<tr>
		
		<td>Sony Playstation 3 : </td>
		<td>
			<select name = 'ps3'>
				<option value = '0' selected = 'selected'> Select Quantity </option>
				<option value = '1'> 1 </option>
				<option value = '2'> 2 </option>
				<option value = '3'> 3 </option>
		</td>
	</tr>
	
	<tr>
		<td>Microsoft Xbox 360 : </td>
		<td>
			<select name = 'xbox'>
				<option value = '0' selected = 'selected'> Select Quantity </option>
				<option value = '1'> 1 </option>
				<option value = '2'> 2 </option>
				<option value = '3'> 3 </option>
		</td>
		</tr>	
		
	<tr>

		<td>Nintendo Wii : </td>
		<td>			
			<select name = 'wii'>
				<option value = '0' selected = 'selected'> Select Quantity </option>
				<option value = '1'> 1 </option>
				<option value = '2'> 2 </option>
				<option value = '3'> 3 </option>
		</td>
		</tr>	
		
	<tr>
		<td>Playstation Vita : </td>
		<td>			
			<select name = 'vita'>
				<option value = '0' selected = 'selected'> Select Quantity </option>
				<option value = '1'> 1 </option>
				<option value = '2'> 2 </option>
				<option value = '3'> 3 </option></td>
		</tr>
		
	<tr>
		<td><input type ='submit' name='submit' id='submit' value='Place Order' /></td>
		</tr>
</table>

</div>

</form>



HTML;

?>

</body>
</html>