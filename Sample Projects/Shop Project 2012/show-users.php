
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title> Displaying Users</title>
	<link href='style1-index.css' rel='stylesheet' type='text/css' />
</head>

<body>

<?php

require_once 'auth.php';
include 'connect.php';

$query = "SELECT first_name, last_name, address, city, state, zip,
			email FROM customers";
$result = mysql_query($query);
$num_rows = mysql_num_rows($result);



if($result)
{

echo " <br />" ;
include 'include/link-return.php';

echo <<<HTML

<br />
<div class='center'>
<table border = '2' cellspacing='5' cellpadding = '5' >
<h2>Directory of Users! </h2>
<tr>
	<td>First Name</td>
	<td>Last Name</td>
	<td>Address</td>
	<td>City</td>
	<td>Zipcode</td>
	<td>State</td>
	<td>Email</td>
</tr>


<br />
HTML;

while($user_arr = mysql_fetch_array($result))
	{
		echo "<tr><td>";
		echo $user_arr['first_name'];
		echo "</td><td>";
		echo $user_arr['last_name'];
		echo "</td><td>";
		echo $user_arr['address'];
		echo "</td><td>";
		echo $user_arr['city'];
		echo "</td><td>";
		echo $user_arr['zip'];
		echo "</td><td>";
		echo $user_arr['state'];
		echo "</td><td>";
		echo $user_arr['email'];
		echo "</td></div>";

	}
	
	

}

else
{
	echo "<h2>Failed to view users." . mysql_error() . "</h2>";
}
?>

</body>
</html>
