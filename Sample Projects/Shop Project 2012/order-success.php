

<?php

require_once 'auth.php';
include 'connect.php';


if(isset($_POST['submit']))
{

echo "
	
	<h1 align='center'> Hello, Enter Invoice Info here! </h1>
	
";

}
else  { header('location:buy-stuff.php'); }

?>