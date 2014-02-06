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
<title>Find Us | Electro-Motion Inc.</title>
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
    <?php include 'navcomponent.php'; ?>

    <div id="mainContent" style="height:500px;">
      <h1>Find Us</h1>
      <div style="float:left;width:22em;height:390px;">
        
          
<iframe width="700" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1001+O'Brien+Dr.+Menlo+Park,+CA+94025&amp;sll=37.47622,-122.151082&amp;sspn=0.009741,0.017252&amp;gl=us&amp;ie=UTF8&amp;hq=&amp;hnear=1001+Obrien+Dr,+Menlo+Park,+San+Mateo,+California+94025&amp;ll=37.49066,-122.178268&amp;spn=0.163446,0.205994&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=1001+O'Brien+Dr.+Menlo+Park,+CA+94025&amp;sll=37.47622,-122.151082&amp;sspn=0.009741,0.017252&amp;gl=us&amp;ie=UTF8&amp;hq=&amp;hnear=1001+Obrien+Dr,+Menlo+Park,+San+Mateo,+California+94025&amp;ll=37.49066,-122.178268&amp;spn=0.163446,0.205994&amp;z=11&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
<br /><br /><br /><br /><br /><br /><br /><br />
      </div>
    </div>
  </div>
  
  <div id="footer" ><br style="clear:both" />
    <?php include 'footer.php'; ?>
  </div>
</div>
</body>
</html>

