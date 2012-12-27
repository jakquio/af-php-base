<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"html://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>Web Template</title>
 <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" /> 
</head>
<body>
<?php include("inc_header.html"); ?>
<div style="width:20%; text-align=center; float:left">
 <?php include("inc_buttonnav.html"); ?>
</div>
<?php
 $whichlink = $_GET['content'];
 if (isset($whichlink)) {
    switch($whichlink) {
	case 'About Us':
	    include("inc_about.html");
	    break;
	case 'Contact Us':
	    include("inc_contact.html");
	    break;
	case 'Home':
	default:	
	    include("inc_home.html");
	    break;
    }
 } else {
    include("inc_home.html");
 }
?>
<?php include("inc_footer.html"); ?>
</body>
</html>
