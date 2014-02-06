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
<script>
	//alert(navigator.userAgent);
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/Android/i)))
	//if(navigator.platform == "iPhone" || navigator.platform == "iPod" || navigator.platform == "iPad") 
	{document.location.href='index-mob.php'}
</script>
<?php include 'iespecial.php'; ?>
<style type="text/css">
<!--
.style2 {color: #333333}

.thrColHybHdr #mainContent
{
	width: 50em;
}
-->
</style>
</head>
<body class="thrColHybHdr">
<div id="container">
  <div id="header">
    <div style="float:left;padding-top:5px;margin-left:-5px;"><img src="graphics/emlogoplaceholderALT.png" /></div>
    <div style="float:right;margin-top:-123px;width:400px;/*background-image:url(graphics/10percent.png);*/background-repeat:repeat;"> </div>
  </div>
  <div id="innercontainer">
    <?php include 'navcomponent.php'; ?>

    <div id="mainContent">
      <h1>Contact Us</h1>
	  <div>
			<a href="http://www.linkedin.com/company/electro-motion-inc-"><img src="graphics/linkedinbutton.png" height="32" width="32" /></a>
			<a href="http://twitter.com/Electro_Motion"><img src="graphics/twitterbutton.png" height="32" width="32" /></a>
			<a href="https://plus.google.com/103719805255688183729
" target="_blank" ><img src="graphics/googleplus.png" height="32" width="32"/></a>
	  </div>
      <div style="float:left;width:14em;">
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
        <p>To request more information, please fill out our form below.
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

