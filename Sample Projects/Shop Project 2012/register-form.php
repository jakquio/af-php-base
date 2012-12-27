
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">



<head>
	<title>Register Here!</title>
	<link rel='stylesheet' type='text/css' href='style3-main.css' />
</head>

<body class ='bggray'>

<?php

session_start();

	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}

echo <<<HTML



<form method='post' action='register-exec.php'>

<div class ='forms' align='center'>
<table border='0' cellpadding='2' cellspacing='2'>
  
  <h2 class='center'> Create your new user here! </h2>
  
    <tr>
      <th><td>First Name </td></th>
      <td><input name="fname" type="text" class="textfield" id="fname"
			maxlength='15'/></td>
    </tr>
	
    <tr>
      <th><td>Last Name </td></th>
      <td><input name="lname" type="text" class="textfield" id="lname" 
			maxlength='15'/></td>
    </tr>
	
	<tr>
      <th><td>Address </td></th>
      <td><input name="address" type="text" class="textfield" id="address" 
			maxlength='50'/></td>
    </tr>
	
	<tr>
      <th><td>Zipcode </td></th>
      <td><input name="zip" type="text" class="textfield" id="zip"
			maxlength = '5'/></td>
	  <td>Only 5 numbers accepted!</td>
    </tr>

	<tr>
      <th><td>City </td></th>
      <td><input name="city" type="text" class="textfield" id="city" /></td>
    </tr>
	
	<tr>
      <th><td>State: </td></th>
	<td>
	
	<select name = 'state'>
		<option value = '' selected = 'selected'> Select your state </option>
		<option value = 'AL'> Alabama </option>
		<option value = 'AZ'> Arizona </option>
		<option value = 'CA'> California </option>
		<option value = 'MN'> Minnesota </option>
		<option value = 'NV'> Nevada </option>
		<option value = 'OR'> Oregon </option>
		<option value = 'TX'> Texas </option>
		<option value = 'UT'> Utah </option>
		<option value = 'WY'> Wyoming </option>
	</select>
	
	</td></tr>
	
	<tr>
	<th><td>Phone Number: </td></th>
	<td><input name="phone" type="text" class="textfield" id="phone" 
		maxlength = '12'/></td>
    </tr>
	
    <tr>
      <th><td>Email </td></th>
      <td><input name="email" type="text" class="textfield" id="email" /></td>
    </tr>
	
    <tr>
      <th><td>Password </td></th>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
	
    <tr>
      <th><td>Confirm Password </td></th>
      <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
    </tr>
	
    <table border ='0' cellspacing='0' cellpadding='0' align='center'>
      <td><input type="submit" name="Submit" value="Register" /></td>
    </table>
	
	
	<br />
	<p class='center'><a href='index.php'>Return to Main</a></p>
	
   </table>
 </form>


</div>
  
HTML;



?>

 </body>
</html>