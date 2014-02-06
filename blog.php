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

$maxRows_getBlog = 5;
$pageNum_getBlog = 0;
if (isset($_GET['pageNum_getBlog'])) {
  $pageNum_getBlog = $_GET['pageNum_getBlog'];
}
$startRow_getBlog = $pageNum_getBlog * $maxRows_getBlog;

mysql_select_db($database_php, $php);
$query_getBlog = "SELECT * FROM EMContent WHERE contentTypeID = 6 AND contentActive = 1 ORDER BY ContentID DESC ";
$query_limit_getBlog = sprintf("%s LIMIT %d, %d", $query_getBlog, $startRow_getBlog, $maxRows_getBlog);
$getBlog = mysql_query($query_limit_getBlog, $php) or die(mysql_error());
$row_getBlog = mysql_fetch_assoc($getBlog);

if (isset($_GET['totalRows_getBlog'])) {
  $totalRows_getBlog = $_GET['totalRows_getBlog'];
} else {
  $all_getBlog = mysql_query($query_getBlog);
  $totalRows_getBlog = mysql_num_rows($all_getBlog);
}
$totalPages_getBlog = ceil($totalRows_getBlog/$maxRows_getBlog)-1;
?>
<?php
if (!session_id()) session_start();
if (!isset($_SESSION["landingPage"]))     {
  $_SESSION["landingPage"] = "blog";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Power Generator Repair since 1967 | Electro-Motion Inc.</title> 

<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script>
	//alert(navigator.userAgent);
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/Android/i)))
	//if(navigator.platform == "iPhone" || navigator.platform == "iPod" || navigator.platform == "iPad") 
	{document.location.href='index-mob.php'}
</script>



<meta name="description" content="Generator repair service for Onan, Caterpillar, Kohler, Generac, 
Cummins, Detroit Diesel, and other commercial generators in the San Francisco Bay Area, including 
San Francisco County, San Mateo County, Santa Clara County, Santa Cruz County, Contra Costa County, 
Alameda County, Marin County, Bay Area, Silicon Valley, Peninsula, Alviso, Aptos, Atherton, Belmont, 
Brisbane, Broadmoor, Burlingame, Campbell, Capitola, Castro Valley, Colma, Cupertino, Daly City, 
Dublin, East Palo Alto, El Granada, Oakland, Berkeley, Foster City, Fremont, Gilroy, Half Moon Bay, Hayward, 
Hillsborough, La Honda, Livermore, Los Altos, Los Altos Hills, Los Gatos, Menlo Park, Millbrae, 
Milpitas, Montara, Monte Sereno, Morgan Hill, Moss Beach, Mountain View, Newark, Pacifica, Palo Alto, 
Pleasanton, Portola Valley, Redwood City, Redwood Estates, San Bruno, San Carlos, San Francisco, 
San Gregorio, San Jose, San Lorenzo, San Mateo, Santa Clara, Santa Cruz, Saratoga, Scotts Valley, 
Soquel, South San Francisco, Stanford, Sunnyvale, Sunol, Union City, Woodside."> 

<meta name="keywords" content="generator repair, generator repair service, generator repair company"> 

<link href="emstyles.css" rel="stylesheet" type="text/css" />
<?php include 'iespecial.php'; ?>
</head>
<body class="thrColHybHdr" id="PageBackground">
<div id="container">
  <?php include 'header.php'; ?>
  <div id="innercontainer">
    <?php include 'navcomponent.php'; ?>

    <div id="mainContent">
		<?php do { ?>
			<h2><?php echo $row_getBlog['contentTitle']; ?></h2>
			<?php echo $row_getBlog['contentContent']; ?>
			<?php } while ($row_getBlog = mysql_fetch_assoc($getBlog)); ?>
    </div>
  </div>
  <div id="footer">
    <?php include 'footer.php'; ?>
  </div>
</div>
</body>


</html>
<?php
mysql_free_result($getBlog);
?>

