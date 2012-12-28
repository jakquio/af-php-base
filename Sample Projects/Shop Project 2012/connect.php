
<?php

$HOST = 'localhost';					// change your hostname here
$DB_ADMIN = 'admin';				// your MYSQL user account
$DB_PASS = 'gaikoku44';				// your MYSQL DB password
$DB = 'tmart';						// THE Name of the included SQL DB

$admin = 'cem@hotmail.com';

$conn = mysql_connect( $HOST, $DB_ADMIN, $DB_PASS)
  or die(mysql_error());

$db = mysql_select_db( $DB )
  or die("Selecting db1 failed: " . mysql_error());

  
function checkAdmin() {

if($_SESSION['SESS_ADMIN_ID'] === $admin) {
return 1;
	} 
	else { return 0 ;}
}

?>