<?php
	//Start session
	session_start();
	
	include 'connect.php';
	include 'include/inc_module.php';
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	

	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);  
	}
	
	//Sanitize the POST values
	$fname = clean($_POST['fname']);
	$lname = clean($_POST['lname']);
	$address = clean($_POST['address']);
	$city = clean($_POST['city']);
	$zip = $_POST['zip'];
	$state = clean($_POST['state']);
	$email = clean($_POST['email']);
	$phone = $_POST['phone'];
	$password = clean($_POST['password']);
	$cpassword = clean($_POST['cpassword']);

	
	include 'input_val.php'; // contains functions for checking string and numeric patterns
	
	$pwd_val = chk_passwd($password, $cpassword);	// checks password values
	$field_val = chk_strFields($fname, $lname, $address, $city, $state); // checks string fields
	$num_val = chk_numFields($zip, $phone, $email); // calls function
	
if( ($pwd_val) && ($field_val) && ($num_val) == true)
{
	//Create INSERT query
	$qry = "INSERT INTO customers (first_name, last_name, address, city, state, 
			zip, phone_number, email, password, UserType) 
			VALUES('$fname','$lname', '$address', '$city', '$state', 
			'$zip', '$phone', '$email','".md5($_POST['password'])."', 'Customer')";
	$result = mysql_query($qry);
	
	//Check whether the query was successful or not
	if(isset($result)) { header("location: register-success.php"); }
		else 
			{
				include 'link-register.php';
				include 'link-main.php';
				die("<br/>Failed to connect to Database...Try again!");
					
			}
}

?>