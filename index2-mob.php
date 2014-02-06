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
$query_getBlog = "SELECT * FROM EMContent WHERE contentTypeID = 6 AND contentActive = 1 ORDER BY ContentID DESC";
$getBlog = mysql_query($query_getBlog, $php) or die(mysql_error());
$row_getBlog = mysql_fetch_assoc($getBlog);
$totalRows_getBlog = mysql_num_rows($getBlog);

mysql_select_db($database_php, $php);
$query_getIndexContentMobile = "SELECT * FROM EMContent WHERE contentID = 46 AND contentActive = 1";
$getIndexContentMobile = mysql_query($query_getIndexContentMobile, $php) or die(mysql_error());
$row_getIndexContentMobile = mysql_fetch_assoc($getIndexContentMobile);
$totalRows_getIndexContentMobile = mysql_num_rows($getIndexContentMobile);

/* Get data for individual services */
mysql_select_db($database_php, $php);
$query_getGTContentMobile = "SELECT * FROM EMContent WHERE contentID = 54 AND contentActive = 1";
$getGTContentMobile = mysql_query($query_getGTContentMobile, $php) or die(mysql_error());
$row_getGTContentMobile = mysql_fetch_assoc($getGTContentMobile);
$totalRows_getGTContentMobile = mysql_num_rows($getGTContentMobile);

mysql_select_db($database_php, $php);
$query_getGSContentMobile = "SELECT * FROM EMContent WHERE contentID = 56 AND contentActive = 1";
$getGSContentMobile = mysql_query($query_getGSContentMobile, $php) or die(mysql_error());
$row_getGSContentMobile = mysql_fetch_assoc($getGSContentMobile);
$totalRows_getGSContentMobile = mysql_num_rows($getGSContentMobile);

mysql_select_db($database_php, $php);
$query_getGRContentMobile = "SELECT * FROM EMContent WHERE contentID = 58 AND contentActive = 1";
$getGRContentMobile = mysql_query($query_getGRContentMobile, $php) or die(mysql_error());
$row_getGRContentMobile = mysql_fetch_assoc($getGRContentMobile);
$totalRows_getGRContentMobile = mysql_num_rows($getGRContentMobile);

mysql_select_db($database_php, $php);
$query_getGMContentMobile = "SELECT * FROM EMContent WHERE contentID = 60 AND contentActive = 1";
$getGMContentMobile = mysql_query($query_getGMContentMobile, $php) or die(mysql_error());
$row_getGMContentMobile = mysql_fetch_assoc($getGMContentMobile);
$totalRows_getGMContentMobile = mysql_num_rows($getGMContentMobile);

mysql_select_db($database_php, $php);
$query_getMGSContentMobile = "SELECT * FROM EMContent WHERE contentID = 52 AND contentActive = 1";
$getMGSContentMobile = mysql_query($query_getMGSContentMobile, $php) or die(mysql_error());
$row_getMGSContentMobile = mysql_fetch_assoc($getMGSContentMobile);
$totalRows_getMGSContentMobile = mysql_num_rows($getMGSContentMobile);

mysql_select_db($database_php, $php);
$query_getATSContentMobile = "SELECT * FROM EMContent WHERE contentID = 50 AND contentActive = 1";
$getgetATSContentMobile = mysql_query($query_getATSContentMobile, $php) or die(mysql_error());
$row_getATSContentMobile = mysql_fetch_assoc($getgetATSContentMobile);
$totalRows_getATSContentMobile = mysql_num_rows($getgetATSContentMobile);

mysql_select_db($database_php, $php);
$query_getFQContentMobile = "SELECT * FROM EMContent WHERE contentID = 48 AND contentActive = 1";
$getFQContentMobile = mysql_query($query_getFQContentMobile, $php) or die(mysql_error());
$row_getFQContentMobile = mysql_fetch_assoc($getFQContentMobile);
$totalRows_getFQContentMobile = mysql_num_rows($getFQContentMobile);

?>
<!DOCTYPE html>
<html>
<head>
<script>
/*! A fix for the iOS orientationchange zoom bug. Script by @scottjehl, rebound by @wilto.MIT / GPLv2 License.*/(function(a){function m(){d.setAttribute("content",g),h=!0}function n(){d.setAttribute("content",f),h=!1}function o(b){l=b.accelerationIncludingGravity,i=Math.abs(l.x),j=Math.abs(l.y),k=Math.abs(l.z),(!a.orientation||a.orientation===180)&&(i>7||(k>6&&j<8||k<8&&j>6)&&i>5)?h&&n():h||m()}var b=navigator.userAgent;if(!(/iPhone|iPad|iPod/.test(navigator.platform)&&/OS [1-5]_[0-9_]* like Mac OS X/i.test(b)&&b.indexOf("AppleWebKit")>-1))return;var c=a.document;if(!c.querySelector)return;var d=c.querySelector("meta[name=viewport]"),e=d&&d.getAttribute("content"),f=e+",maximum-scale=1",g=e+",maximum-scale=10",h=!0,i,j,k,l;if(!d)return;a.addEventListener("orientationchange",m,!1),a.addEventListener("devicemotion",o,!1)})(this);
</script>
<meta charset="utf-8">
<meta content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale = 1.0, user-scalable =yes" name="viewport">

<!--<meta name = "viewport" content = "width = device-width"> -->
<!-- Sets the page to be as wide as the device -->
<!--<meta name = "viewport" content = >-->
<!-- Sets the scale to be 100% and no user scalability -->
<!--<meta name = "format-detection" content = "telephone=Yes"> -->
<!-- turns off telephone formating -->

<title>Electro-Motion Inc. | Generator Service and Generator Repair.</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
<link rel="stylesheet" href="emstyles-mob.css" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>

<style>
.formformat label {float:left; width:11.0em; display:block; margin-right:0.8em; text-align:left;}
.formformat p {margin:0.5em 0; clear:left}
html, body{background-color:#FFFFFF;}
</style>

</head>
<body style="width:100%;">

<section id="page1" data-role="page">
	<nav data-role="navbar">
		<ul>
			<li><a href="#" class="ui-btn-active">Home</a></li>
			<li><a href="#services">Services</a></li>
			<li><a href="#blog">Blog</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</nav>
	<div class="content" data-role="content">
		<div class="mainContent">
			 <?php echo $row_getIndexContentMobile['contentContent']; ?>
		</div>
	</div>
</section>
<section id="blog" data-role="page">
	<nav data-role="navbar">
		<ul>
			<li><a href="#page1" >Home</a></li>
			<li><a href="#services">Services</a></li>
			<li><a href="#" class="ui-btn-active">Blog</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</nav>
	<div class="content" data-role="content">
		<div class="mainContent">
			<h2><?php echo $row_getBlog['contentTitle']; ?></h2>
			<?php echo $row_getBlog['contentContent']; ?>
			<?php mysql_free_result($getTestimonialsBlog); ?>
		</div>
	</div>
</section>
<section id="services" data-role="page">
	<nav data-role="navbar">
		<ul>
			<li><a href="#page1" >Home</a></li>
			<li><a href="#services" class="ui-btn-active">Services</a></li>
			<li><a href="#blog">Blog</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</nav>
	<div class="content" data-role="content">
		<ul data-role="listview">
			<li><a href="#Generator-Troubleshooting">Generator Troubleshooting</a></li>
			<li><a href="#Generator-Service">Generator Service</a></li>
			<li><a href="#Generator-Repair">Generator Repair</a></li>
			<li><a href="#Generator-Maintenance">Generator Maintenance</a></li>
			<li><a href="#Motor-Generator-Set">Motor Generator Set</a></li>
			<li><a href="#Automatic-Transfer-Switch">Automatic Transfer Switch</a></li>
			<li><a href="#Frequency-Converter">Frequency Converter</a></li>
		</ul>
		<!--<div class="mainContent"> <?php echo $row_getFQContentMobile['contentContent']; ?>
		</div> -->
	</div>
</section>
<section id="contact" data-role="page">
	<nav data-role="navbar">
		<ul>
			<li><a href="#page1" >Home</a></li>
			<li><a href="#services">Services</a></li>
			<li><a href="#blog">Blog</a></li>
			<li><a href="#" class="ui-btn-active">Contact</a></li>
		</ul>
	</nav>
	<div class="content" data-role="content">
		<div class="mainContent">
			<div>
				<p>We welcome your inquiries, comments, questions, and requests. 
					Contact us today to find out how Electro-Motion can serve you! 
					For immediate assistance, please call us at (650) 321-5227.</p>
				<p><strong>ElectroMotion, Inc.</strong><br />
					1001 O'Brien Dr.<br />
					Menlo Park, CA 94025<br /><br />
					<strong><a href="https://maps.google.com/maps?oe=utf-8&aq=t&client=firefox-a&channel=fflb&q=1001+O%27Brien+Dr.+Menlo+Park,+CA+9402&ie=UTF-8&hq=&hnear=0x808fbc9f68af9e97:0x6df4e273b77d3adb,1001+Obrien+Dr,+Menlo+Park,+CA+94025&gl=us&ei=o1voT7nxOOfU2QWKp8SYDQ&ved=0CAsQ8gEwAA">Map</a></strong></p>
				<p>Phone: (650) 321-5227<br />
					FAX: (650) 321-5043<br />
					Email: <a href="mailto:contactus@electromotion.com">contactus@electromotion.com</a></p>
			</div>
			<div>
			<p>Thank you for contacting us. One of our representatives will contact you as soon as possible.</p>
			</div>
			
		</div>
	</div>
</section>


<!-- Section pages for Services -->
<section id="Generator-Troubleshooting" data-role="page">
	<nav data-role="navbar">
		<ul>
			<li><a href="#page1" >Home</a></li>
			<li><a href="#services" class="ui-btn-active">Services</a></li>
			<li><a href="#blog" >Blog</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</nav>
	<div class="content" data-role="content">
		<div class="mainContent">
			 <?php echo $row_getGTContentMobile['contentContent']; ?>
		</div>
	</div>
</section>

<section id="Generator-Service" data-role="page">
	<nav data-role="navbar">
		<ul>
			<li><a href="#page1" >Home</a></li>
			<li><a href="#services" class="ui-btn-active">Services</a></li>
			<li><a href="#blog" >Blog</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</nav>
	<div class="content" data-role="content">
		<div class="mainContent">
			 <?php echo $row_getGSContentMobile['contentContent']; ?>
		</div>
	</div>
</section>

<section id="Generator-Repair" data-role="page">
	<nav data-role="navbar">
		<ul>
			<li><a href="#page1" >Home</a></li>
			<li><a href="#services" class="ui-btn-active">Services</a></li>
			<li><a href="#blog" >Blog</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</nav>
	<div class="content" data-role="content">
		<div class="mainContent">
			 <?php echo $row_getGRContentMobile['contentContent']; ?>
		</div>
	</div>
</section>

<section id="Generator-Maintenance" data-role="page">
	<nav data-role="navbar">
		<ul>
			<li><a href="#page1" >Home</a></li>
			<li><a href="#services" class="ui-btn-active">Services</a></li>
			<li><a href="#blog" >Blog</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</nav>
	<div class="content" data-role="content">
		<div class="mainContent">
			 <?php echo $row_getGMContentMobile['contentContent']; ?>
		</div>
	</div>
</section>

<section id="Motor-Generator-Set" data-role="page">
	<nav data-role="navbar">
		<ul>
			<li><a href="#page1" >Home</a></li>
			<li><a href="#services" class="ui-btn-active">Services</a></li>
			<li><a href="#blog" >Blog</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</nav>
	<div class="content" data-role="content">
		<div class="mainContent">
			 <?php echo $row_getMGSContentMobile['contentContent']; ?>
		</div>
	</div>
</section>

<section id="Automatic-Transfer-Switch" data-role="page">
	<nav data-role="navbar">
		<ul>
			<li><a href="#page1" >Home</a></li>
			<li><a href="#services" class="ui-btn-active">Services</a></li>
			<li><a href="#blog" >Blog</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</nav>
	<div class="content" data-role="content">
		<div class="mainContent">
			 <?php echo $row_getATSContentMobile['contentContent']; ?>
		</div>
	</div>
</section>

<section id="Frequency-Converter" data-role="page">
	<nav data-role="navbar">
		<ul>
			<li><a href="#page1" >Home</a></li>
			<li><a href="#services" class="ui-btn-active">Services</a></li>
			<li><a href="#blog" >Blog</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</nav>
	<div class="content" data-role="content">
		<div class="mainContent">
			 <?php echo $row_getFQContentMobile['contentContent']; ?>
		</div>
	</div>
</section>

</body>



</html>
<?php
mysql_free_result($getFQContentMobile);
?>
