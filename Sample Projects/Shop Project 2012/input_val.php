

<?php
				
function chk_passwd($arg1, $arg2)
{
	$regExPw = '^[a-zA-Z0-9]+$^';

	if(empty($arg1) || empty($arg2)) 
	{
		echo '<p>Passwords did not have any input!</p>';
		return false;
	} 
	
	if(strcmp($arg1,$arg2) == 0)
	{
		echo '<p>Passwords match</p>';
		return true;
	}
	else 
	{
		echo '<p><strong>Password</strong> failed to verify.</p>';
		return false; 
	}
}

function chk_strFields($name, $lname, $address, $city, $state)
{
$regStr = '^[a-zA-Z]+$^' ; // string test expression
$regNum = '^[0-9]+$^' ; // numeric test expression
	
	
	if(empty($name) || empty($lname) || empty($address) || empty($city) || empty($state))
		{
			echo '<p>First Name, Last Name, Address, City, or State had null values!</p>';
			return false;
		}
	
	if (preg_match($regStr, $name)) // checks first name
		{ echo ''; }
	else 
	{ 
		echo '<p><strong>First Name</strong> did not pass requirements.' ; 
		return false;
	}
			
	if (preg_match($regStr, $lname)) // checks last name
		{ echo '<p><strong>Last name</strong> valid.</p>' ; }
	else
	{ 
		echo '<p>Your <strong>Last Name</strong> did not pass.</p>'; 
		return false;
	} 
		
	if (preg_match($regStr, $city)) // checks city input
	{  
		echo '<p><strong>City</strong> valid.</p>' ; 
	} 
	else 
	{ 
		echo '<p><strong>City</strong> location has numeric characters or empty. Retry. ' ;
		return false;
	}

if ($address !== null) // checks address
	{
		echo '<p><strong>Address</strong> meets requirements.</p>' ; 
		return true;
	} 
else 
	{ 
		echo 'First Name, Last Name, City, or Address failed requirements.';
		return false;
	}
	
}

function chk_numFields($zip, $phone, $email) 
{		 


$regExZip = '^[0-9]{5}+$^';
$regExPhone = '^[0-9]{3}?[0-9]{3}?[0-9]{4}$^';
$regEmail = '^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$^';		 

if(empty($zip) || empty($phone) || empty($email))
	{
		echo '<p>Zip, Phone, Or Email had null values!</p>';
		return false;
	}

if(preg_match($regExZip, $zip))
{
	echo '<p><strong>Zipcode</strong> valid.';
}
else 
	{
		echo '<p><strong>Zipcode</strong> Failed.';
		return false;
	}

if (preg_match($regExPhone, $phone)) 
	{ 
		echo '<p><strong>Phone number</strong> valid. </p>' ; 
	}

else 
	{ 
		echo '<p><strong>Phone number</strong> did not pass requirements. </p>' ; 
		return false;
	}

if ( preg_match( $regEmail, $email))
	{
		echo '<p><strong>Email</strong> is valid.</p>' ;
	}
else
	{
		'<p>Email \'$email\' is not acceptable.</p>';
		return false;
	}
	
return;

}

include 'include/link-register.php';
include 'include/link-main.php';


?>