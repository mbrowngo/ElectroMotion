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

$maxRows_getTestimonials = 3;
$pageNum_getTestimonials = 0;
if (isset($_GET['pageNum_getTestimonials'])) {
  $pageNum_getTestimonials = $_GET['pageNum_getTestimonials'];
}
$startRow_getTestimonials = $pageNum_getTestimonials * $maxRows_getTestimonials;

mysql_select_db($database_ElectroMotion, $ElectroMotion);
$query_getTestimonials = "SELECT * FROM EMContent WHERE ContentTypeID = 1";
$query_limit_getTestimonials = sprintf("%s LIMIT %d, %d", $query_getTestimonials, $startRow_getTestimonials, $maxRows_getTestimonials);
$getTestimonials = mysql_query($query_limit_getTestimonials, $ElectroMotion) or die(mysql_error());
$row_getTestimonials = mysql_fetch_assoc($getTestimonials);

mysql_select_db($database_php, $php);
$query_getContentMain = "SELECT * FROM EMContent WHERE contentID = 74 AND contentActive = 1";
$getContentMain = mysql_query($query_getContentMain, $php) or die(mysql_error());
$row_getContentMain = mysql_fetch_assoc($getContentMain);
$totalRows_getContentMain = mysql_num_rows($getContentMain);


if (isset($_GET['totalRows_getTestimonials'])) {
  $totalRows_getTestimonials = $_GET['totalRows_getTestimonials'];
} else {
  $all_getTestimonials = mysql_query($query_getTestimonials);
  $totalRows_getTestimonials = mysql_num_rows($all_getTestimonials);
}
$totalPages_getTestimonials = ceil($totalRows_getTestimonials/$maxRows_getTestimonials)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FAQ | Electro-Motion Inc.</title>
<meta name="description" content=&quot;Here are answers to frequently asked questions about Electro-Motion&rsquo;s power Generator Service.">
<meta name=&quot;keywords" content="Electro-Motion">
<script>
	//alert(navigator.userAgent);
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/Android/i)))
	//if(navigator.platform == "iPhone" || navigator.platform == "iPod" || navigator.platform == "iPad") 
	{document.location.href='index-mob.php'}
</script>
<link href="emstyles.css" rel="stylesheet" type="text/css" />
<?php include 'iespecial.php'; ?>
</head>
<body class="thrColHybHdr">
<div id="container">
  <?php include 'header.php'; ?>
  <div id="innercontainer">
    <?php include 'navcomponent.php'; ?>
    <div id="mainContent">
		<?php echo $row_getContentMain['contentContent']; ?> 
	</div>
    
  </div>
  <div id="footer">
    <?php include 'footer.php'; ?>
  </div>
</div>
</body>
</html>
<?php
mysql_free_result($getTestimonials);
?>
