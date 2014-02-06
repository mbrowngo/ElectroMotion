<?php require_once('Connections/ElectroMotion.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us | Electro-Motion Inc.</title>
<link href="emstyles.css" rel="stylesheet" type="text/css" />
<?php include 'iespecial.php'; ?>
<style type="text/css">
<!--
.style2 {color: #333333}
-->
</style>
</head>
<body class="thrColHybHdr">
<div id="container">
  <div id="header">
    <div style="float:left;padding-top:5px;margin-left:-5px;"><img src="graphics/emlogoplaceholder.png" /></div>
    <div style="float:right;margin-top:-123px;width:400px;/*background-image:url(graphics/10percent.png);*/background-repeat:repeat;"> </div>
  </div>
  <div id="innercontainer">
    <?php include 'navcomponentTEST.php'; ?>

    <div id="mainContent">
      <h1>Contact Us</h1>
      <div style="float:left;width:22em;">
        <p>We welcome your inquiries, comments, questions, and requests. 
        Contact us today to find out how Electro-Motion can serve you! 
        For immediate assistance, please call us at (650) 321-5227.</p>
        <p><strong>ElectroMotion, Inc.</strong><br />
          1001 O'Brien Dr.<br />
          Menlo Park, CA 94025<br />
          <a href="find-us.php" style="font-weight:bold">Find Us</a></p> 
        <p>Phone: (650) 321-5227<br />
          FAX: (650) 321-5043<br />
          Email: <a href="mailto:contactus@electromotion.com">contactus@electromotion.com</a></p>
        

      </div>
      <div style="float:right;width:30em;">
        <p>To request more information, please fill out our form below. <br />
			<span class="style2">(* Required Information)</span></p>
        <?php include 'infoformcomponent.php'; ?>
      </div><br style="clear:both" />

    </div><br style="clear:both" />
  </div>
  
  <div id="footer" >
    <?php include 'footer.php'; ?>
  </div>
</div>
</body>
</html>

