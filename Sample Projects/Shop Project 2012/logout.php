

<?php

	session_start();
	
	//Unset the variables stored in session
	
	unset($_SESSION['SESS_MEMBER_ID']);
	session_destroy();
	
	
	echo "<h3 align='center'> You have logged out sucessfully! </h3>" ;
	
	include 'include/link-main.php'; 

	
?>
