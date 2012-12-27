
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<?php

// Checks user session
require_once 'auth.php';
include 'connect.php';

$session = $_SESSION['SESS_MEMBER_ID'];
?>
	
<head>
	<title> Main Control Panel </title>
	<link href='style3-main.css' rel='stylesheet' type='text/css' />
</head>

<body class='bpink'>

<div id='header' class='center'>
	<a href='#'><h1> Welcome Administrator, <?php echo "$session!"; ?> </h1></a>
</div>

<div class='myaccount center'>
<ul>
	<h3> Admin Options: </h3>
	<a href='show-orders.php'> Show Orders </a>&nbsp;&nbsp;
	<a href='show-users.php'> Show Users </a>&nbsp;&nbsp;
	<a href='user-index.php'> See User Page </a>&nbsp;&nbsp;
	<a href='logout.php'> Log Out! </a>
 </ul>
<div class='forms'>
	<h2> You may edit and place content in this body </h2>
</div>

</div>





 </body>
</html>