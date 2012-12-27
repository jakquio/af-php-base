
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title> Login to T-Mart! </title>
	<link rel="stylesheet" type="text/css" href="style1-index.css" />
</head>

<body>

<form method='post' action='username-exec.php'> 
 
<div class='leftmenu center'>

	<br /><br />
		<h1>Buy Consoles Here! </h1> 
	<br /><br />
		<h3>Registered Users:</h3> 
	<br />

<br />

 <table border ='3' cellspacing='0' cellpadding='1' class='center'> 

      <tr><td>Email:</td> 
          <td><input type='text' name='username' maxlength='25' size='10' 
                     style='width:12em' id='username' /></td></tr> 

      <tr><td>Password:</td> 
          <td><input type='password' name='password' maxlength='25' 
                     size='10' style='width:12em' id='password' /></td></tr> 
</table>

<div>
	<br /><br />
	<input type='submit' name='Submit' value='Login' />
	<br /><br />
	<a href='register-form.php'>Register a New Account</a>
	<br /><br />
	<p>Please refer to the <a href='readme.php'>Readme</a> Page
		for details on this website.</p>
</div>

  
</div>



  </form> 
 </body>
</html>
