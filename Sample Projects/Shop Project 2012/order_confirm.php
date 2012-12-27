
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title> Shopping Mall </title>
	<link href='style3-main.css' rel='stylesheet' type='text/css' />
	<script src='js/jquery-1.8.3.js' type='text/javascript'>
		
	$(document).ready( function()
	{
		<!-- Enter JQuery code here -->
	
	
	});
	
 </script>
</head>

<body class='bgcolor'>

<?php 

error_reporting(E_ERROR);

require_once 'auth.php';
include 'connect.php';

$submit = $_POST['submit'];


if(isset($submit))
{
	$ps3_qty = $_POST['ps3'];
	$xbox_qty = $_POST['xbox'];
	$wii_qty = $_POST['wii'];
	$vita_qty = $_POST['vita'];
	
	$arr = array($ps3_qty, $xbox_qty, $wii_qty, $vita_qty);	
	


	$itm_qry = 'select id, item_desc, price from products,inventory 
			where products.id = inventory.productID';	
	$result = mysql_query($itm_qry);
	
	$cost_qry = "select id, price, sum(price*{$value})
		from products,inventory 
		where products.id = inventory.productID";
	$result2 = mysql_query($cost_qry);


//-------------------------------- Table Structure 1

echo " 		

	<form action ='order-success.php' method ='post'>
	
	<div align='center' class ='titlehdr'> 
		<h1> --- Item Description --- </h1>
	</div>

	<div align='center'>
	<table border='3' cellspacing='2' cellpadding='5' class='center'>
		<tr>
			<td>System</td>
			<td>Description</td>

		</tr>

";

	
while($list = mysql_fetch_assoc($result))
{
	echo "
		<tr>
			<td>{$list['id']}</td>
			<td>{$list['item_desc']}</td>
		</tr>
		";

}

//-------------------------------- Table Structure 2

	foreach($arr as $key => $value)
		{
			$value;
		}

while($order = mysql_fetch_assoc($result2))
{	

		
	echo "
		<table border='2' cellspacing='8' cellpadding='4'>
			<tr>
				<td>{$order['id']}</td>
				<td>{$order['price']}</td>
				<td>{$value}</td>
			</tr>
		</table>
	";
}


echo "
	</table>
	<table class='center'>
		<br /><td><input type='submit' name='submit' value='Confirm Order' /></td>
		
	</table>
	</form>

	<form action='buy-stuff.php' method='post'>
		<br /><td><input type='submit' name='return' id='return' value='Go Back!'/></td>
	 </form>
	 </div>

	";
}
else { header('location:buy-stuff.php'); }

mysql_free_result($result);


?>

</body>
</html>