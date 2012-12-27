<?php
/*
 * layout_main.php
 *
 * Main layout for all pages
 * 
 * Author: Dan Zollars
 *
 * Date: August 25, 2012
 *
 * Copyright (c) 2012, by Dan Zollars
 *
 */

date_default_timezone_set( 'America/Chicago' );

if (!isset($page_title    )) $page_title   = '';
if (!isset($content_col2  )) $content_col2 = '';

echo<<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>$page_title</title>
  <meta name="Author" content="Dan Zollars" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <script type="text/javascript" src="js/jquery-1.7.1.js"></script>
  <script src="js/demo.js" type="text/javascript"></script>

</head>

<body>

<div id='page'>
  <!-- begin header -->
  <div id="header"> 
    <table>
    <tr>
        <td><img src="css_demo.gif" alt="CSS Logo" /></td>
        <td><h1>PHP Lab Demo</h1></td>
    </tr>
    </table>
  </div><!-- header -->

  <div id='content'>
    <table cellspacing='0' cellpadding='0'>
    <tr><td class='column1'>$content_col1</td>
        <td class='column2'>$content_col2</td>
    </tr>
    </table>
  </div><!-- content -->

  <div style="clear: both;"></div>

  <div id="footer">
    <a href="#">About Us</a> | 
    <a href="#">Site Map</a> | 
    <a href="#">Privacy Policy</a> | 
    <a href="#">Contact Us</a>

    <p style="font-size:75%;color:black;padding:1em;">&copy;2012 Dan Zollars;
    All Rights Reserved.</p>
  </div><!-- footer -->

HTML;
?>

</div><!-- page -->

</body>
</html>