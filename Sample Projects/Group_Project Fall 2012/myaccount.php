<?php 
include 'dbc.php';
page_protect();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>My Account</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.8.3.js" type="text/javascript"></script>

</head>

<body class ='bggray'>

<table width="100%" border="0" cellspacing="0" cellpadding="5" class="main">
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="10em" valign="top">
<?php 
/*********************** MYACCOUNT MENU ****************************
This code shows my account menu only to logged in users. 
Copy this code till END and place it in a new html or php where
you want to show myaccount options. This is only visible to logged in users
*******************************************************************/
if (isset($_SESSION['user_id'])) {?>
<div class="myaccount">
  <h4>User Options</h4>
<ul>
  <li><p><a href="myaccount.php">My Account</a></p></li>
  <li><p><a href="mysettings.php">Settings</a></p></li>
  <li><p><a href="<?php echo $_SESSION['user_id']; ?>.html">View VM Desktop</a></p></li>
  <li><p><a href="logout.php">Logout </a></p></li>
</ul>
</div>
<?php }
if (checkAdmin()) {
/*******************************END**************************/
?>
<div class='myaccount'>
	<h4> Administrator Options </h4>
<ul>
	<li><p><a href="admin.php">Admin CP </a></p></li>
    <li><p><a href="https://172.22.104.18:8080/apex">APEX</a></p></li>
</ul>	
</div>
	  <?php } ?>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
	  
<td width="732" valign="top"><p>&nbsp;</p>
<div class='center'>
      <h3 class="titlehdr">Welcome, <?php echo $_SESSION['user_name'];?>!</h3>  
	  <br />
	  <?php	
      if (isset($_GET['msg'])) {
	  echo "<div class=\"error\">$_GET[msg]</div>";
	  }
	  	  
	  ?>
	  
     <h2> 
		We can add content to this body for clarity. We need to know what information should be placed here
		for our Group Website!
		
		<h2> -- Inform Chantra </h2>
	 </h2>

<div id='footer'> 
	<h5 class ='center'> Fall 2012 </h3>
</div>

</div>
</td>

    <td width="196" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>



</body>
</html>
