
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title> Displaying DVDs</title>
	<link href='style3-main.css' rel='stylesheet' type='text/css' />
	<script src='js/jquery-1.8.3.js' type='text/javascript'></script>
	<script>
	
	$(document).ready( function()
	{
		// JQUERY code here!
		$('table').css('text-align', 'center');
	});
	
	
	</script>
</head>

<body>

<?php

require_once 'auth.php';
include 'connect.php';

$query = "";
$result = mysql_query($query);
$num_rows = mysql_num_rows($result);
if($result)
{

include 'link-return.php';

echo <<<HTML

<table border = '4' cellpadding = '4'>
<tr><h2 class = 'center'> Show All Orders </h2></tr>
<tr>
	<td>	</td>
	<td>	</td>
	<td>	</td>
	<td>	</td>
	<td>	</td>
</tr>

HTML;

// Display DVD list

while($arr = mysql_fetch_array($result))
	{
		echo "<tr><td>";
		echo $arr['title'];
		echo "</td><td>";
		echo $arr['studio'];
		echo "<td>";
		echo $arr['rating'];
		echo "</td><td>";
		echo $arr['year'];
		echo "</td><td>";
		echo $arr['genre'];
		echo "</tr>";

	}

}
else
{
	echo "<h3>Failed to get results. " . mysql_error() . "</h3>";
	include 'include/link-return.php';
}

?>

</body>
</html>