<?php require_once('Connections/ElectroMotion.php'); ?>
<?php require_once('Connections/php.php'); ?>
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


mysql_select_db($database_php, $php);
$query_getContentMobile = "SELECT * FROM EMContent WHERE contentID = 46 AND contentActive = 1";
$getContentMobile = mysql_query($query_getContentMobile, $php) or die(mysql_error());
$row_getContentMobile = mysql_fetch_assoc($getContentMobile);
$totalRows_getContentMobile = mysql_num_rows($getContentMobile);

mysql_select_db($database_php, $php);
$query_getContentMain = "SELECT * FROM EMContent WHERE contentID = 47 AND contentActive = 1";
$getContentMain = mysql_query($query_getContentMain, $php) or die(mysql_error());
$row_getContentMain = mysql_fetch_assoc($getContentMain);
$totalRows_getContentMain = mysql_num_rows($getContentMain);

mysql_select_db($database_php, $php);
$query_getLogos = "SELECT * FROM EMContent WHERE contentID = 65 AND contentActive = 1";
$getLogos = mysql_query($query_getLogos, $php) or die(mysql_error());
$row_getLogos = mysql_fetch_assoc($getLogos);
$totalRows_getLogos = mysql_num_rows($getLogos);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Phone Script here-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Electro-Motion Inc. | Generator Service and Generator Repair. </title>

<meta name="description" content="Generator service and generator repair 24 hours/day 
for commercial power generators in the San Francisco Bay Area, including San Francisco 
County, San Mateo County, Santa Clara County, Santa Cruz County, Contra Costa County, 
Alameda County, Marin County, Bay Area, Silicon Valley, Peninsula, Alviso, Aptos, 
Atherton, Belmont, Brisbane, Broadmoor, Burlingame, Campbell, Capitola, Castro Valley, 
Colma, Cupertino, Daly City, Dublin, East Palo Alto, El Granada, Oakland, Berkeley, Foster City, 
Fremont, Gilroy, Half Moon Bay, Hayward, Hillsborough, La Honda, Livermore, Los Altos, 
Los Altos Hills, Los Gatos, Menlo Park, Millbrae, Milpitas, Montara, Monte Sereno, Morgan Hill, 
Moss Beach, Mountain View, Newark, Pacifica, Palo Alto, Pleasanton, Portola Valley, Redwood City, 
Redwood Estates, San Bruno, San Carlos, San Francisco, San Gregorio, San Jose, San Lorenzo, 
San Mateo, Santa Clara, Santa Cruz, Saratoga, Scotts Valley, Soquel, South San Francisco, 
Stanford, Sunnyvale, Sunol, Union City, Woodside."> 

<meta name="keyword" content="generator service, generator repair"> 

<link href="emstyles.css" rel="stylesheet" type="text/css" />

<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>


<script language="javascript" type="text/javascript">
	<!--
	//alert(navigator.userAgent);
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/Android/i)))
	//if(navigator.platform == "iPhone" || navigator.platform == "iPod" || navigator.platform == "iPad") 
	{document.location.href='index-mob.php'}
	-->
</script>

<?php include 'iespecial.php'; ?>

<style>
#myGallery{
  position:relative;
  width:400px; /* Set your image width */
  height:300px; /* Set your image height */
}
/*#PageBackground{
background-color:#fff;
}*/
#myGallery span{
  display:none;
  position:absolute;
  top:0;
  left:0;
}
#myGallery span.active{
  display:block;
}

image{
	border:none;
}

#maincontent{
	width:1000px;
}
</style>

</head>
<body class="thrColHybHdr">
<div id="container">

   <?php include 'header.php'; ?>

  <div id="innercontainer">
  <?php include 'navcomponent.php'; ?>
  <div id="mainContentINDEX" >
   <?php echo $row_getContentMain['contentContent']; ?>
  
<br />
	    <div style="margin-left:-60px;">


	</div>
  </div>
  </div>
  <div id="footer">
   <?php include 'footer.php'; ?>
  </div>

</div>
</body>

</html>
<?php
mysql_free_result($getContentMobile);
mysql_free_result($getContentMain);
?>
