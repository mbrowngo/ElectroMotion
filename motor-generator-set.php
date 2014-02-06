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
$query_getContentMobile = "SELECT * FROM EMContent WHERE contentID = 52 AND contentActive = 1";
$getContentMobile = mysql_query($query_getContentMobile, $php) or die(mysql_error());
$row_getContentMobile = mysql_fetch_assoc($getContentMobile);
$totalRows_getContentMobile = mysql_num_rows($getContentMobile);

mysql_select_db($database_php, $php);
$query_getContentMain = "SELECT * FROM EMContent WHERE contentID = 53 AND contentActive = 1";
$getContentMain = mysql_query($query_getContentMain, $php) or die(mysql_error());
$row_getContentMain = mysql_fetch_assoc($getContentMain);
$totalRows_getContentMain = mysql_num_rows($getContentMain);

mysql_select_db($database_php, $php);
$query_getLogos = "SELECT * FROM EMContent WHERE contentID = 64 AND contentActive = 1";
$getLogos = mysql_query($query_getLogos, $php) or die(mysql_error());
$row_getLogos = mysql_fetch_assoc($getLogos);
$totalRows_getLogos = mysql_num_rows($getLogos);

?>
<?php
if (!session_id()) session_start();
if (!isset($_SESSION["landingPage"]))     {
  $_SESSION["landingPage"] = "maingenset";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Motor Generator Sets | Electro-Motion Inc.</title>
<meta name="description" content="Motor generator set supplier and maintenance for Horlick, Kato, IPS, CPP, Georator and others in the San Francisco Bay Area, including San Francisco County, San Mateo County, Santa Clara County, Santa Cruz County, Contra Costa County, Alameda County, Marin County, Bay Area, Silicon Valley, Peninsula, Alviso, Aptos, Atherton, Belmont, Brisbane, Broadmoor, Burlingame, Campbell, Capitola, Castro Valley, Colma, Cupertino, Daly City, Dublin, East Palo Alto, El Granada, Oakland, Berkeley, Foster City, Fremont, Gilroy, Half Moon Bay, Hayward, Hillsborough, La Honda, Livermore, Los Altos, Los Altos Hills, Los Gatos, Menlo Park, Millbrae, Milpitas, Montara, Monte Sereno, Morgan Hill, Moss Beach, Mountain View, Newark, Pacifica, Palo Alto, Pleasanton, Portola Valley, Redwood City, Redwood Estates, San Bruno, San Carlos, San Francisco, San Gregorio, San Jose, San Lorenzo, San Mateo, Santa Clara, Santa Cruz, Saratoga, Scotts Valley, Soquel, South San Francisco, Stanford, Sunnyvale, Sunol, Union City, Woodside.">
<meta name="keywords" content="motor generator set, electric motor generator, motor generators">
<link href="emstyles.css" rel="stylesheet" type="text/css" />
<script>
	//alert(navigator.userAgent);
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/Android/i)))
	//if(navigator.platform == "iPhone" || navigator.platform == "iPod" || navigator.platform == "iPad") 
	{document.location.href='index-mob.php'}
</script>
<?php include 'iespecial.php'; ?>
</head>
<body class="thrColHybHdr">
<div id="container">
  <?php include 'header.php'; ?>
  <div id="innercontainer">
    <?php include 'navcomponent.php'; ?>
	<div id="sidebar2" style="text-align:center;">
		<?php echo $row_getLogos['contentContent']; ?> 
	</div>
    <div id="mainContent">
		<?php echo $row_getContentMobile['contentContent']; ?> 
		<?php echo $row_getContentMain['contentContent']; ?>
        <?php include 'citylistcomponent.php'; ?>
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
mysql_free_result($getLogos);
?>
