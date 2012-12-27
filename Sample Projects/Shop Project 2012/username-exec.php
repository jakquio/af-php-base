<?php
	//Start session
	session_start();
	
	include 'connect.php';
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$login = clean($_POST['username']);
	$password = clean($_POST['password']);
	$session = $_SESSION['SESS_MEMBER_ID'] = $login ;
	
	
	//Input Validations
	
	if(!$password && !$login) // checks for null entries
	{
		header('location:username-failed.php');
	}
	
	if(!$password)
	{
		header('location:username-failed.php');
	}
	
	if(!$login)
	{
		header('location:username-failed.php');
	}
	

	
      //========================= logged in check ================
	  
	$user_log = "SELECT * FROM customers where email='$login' 
		AND email is NOT NULL";
	$user_pass = "Select * from customers where password='".md5($password)."' 
		AND password is NOT NULL";
	
	$userType = "select * from customers where UserType='customer'
		AND UserType is NOT NULL";
		
	$adminType = "select * from customers where UserType='admin'
		AND UserType is NOT NULL";

		
	$result2 = mysql_query($user_log, $conn) or die("Query failed: " . mysql_error());
	$pwd_result2 = mysql_query( $user_pass, $conn ) or die("Query failed for user password." .
		mysql_error() ) ;
		
	$type_result = mysql_query ($adminType, $conn) or die("Failed to check type." .
		mysql_error() ) ;
		
	$type_result2 = mysql_query($userType, $conn) or die("Failed to check type." .
		mysql_error() ) ;
		
		

	if( mysql_num_rows($result2) == 1 && mysql_num_rows($pwd_result2) >= 1 &&
		$login == 'cem@hotmail.com') // checks admin here
	{
		$session;
		$admin = $_SESSION['SESS_ADMIN_ID'];
		header('location:admin-login.php');
		
	}
	
	else if( mysql_num_rows($result2) == 1 && mysql_num_rows($pwd_result2) >= 1 &&
		$type_result2 >= 1) // checks user here
	{
		$session;
		header('location:user-index.php');
		
	}
	
	else
	{
		header('location:username-failed.php');
	}
	
	


?>
