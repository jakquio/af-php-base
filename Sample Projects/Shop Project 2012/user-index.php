<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"html:http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd. ">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 

error_reporting(E_ERROR);

require_once 'auth.php';
include 'connect.php';
$session = $_SESSION['SESS_MEMB_ID'];
$admin_chk = $_SESSION['SESS_ADMIN_ID'];

 ?>

<head>
<title>User Main Page</title>
<link href='style1-index.css' rel='stylesheet' type='text/css' />
<script src="jquery-1.7.1.js" type="text/javascript"></script>

<script type ='text/javascript'>

// main jquery body
// <![CDATA[     // escape validation errors

$(document).ready(function() 

	$("#database").load( "jquery_db.php" );

});



// ]]>
</script>
</head>

<body>

<?php

echo <<<HTML

<div id='header' class='center'>
	<h2><a href='#'> Choose from the left menu! </a></h2>
</div>

<div id='leftmenu' align='center'>
	<h3> User Options: </h3>
	<ul>
		<li><a href='buy-stuff.php'> Shop Here! </a></li><br />
		<li><a href='#'> Link 2 </a></li><br />
		<li><a href='#'> Link 3 </a></li>
		<br /> <br />	
		<li><a href='logout.php'>Log out</a></li>
	</ul>	
</div>

<div id='content'>
	<h3>
		Try out some areas of this site, I hope they are fun to try!
	</h3>
</div>



HTML;

?>

 </body>
</html>



