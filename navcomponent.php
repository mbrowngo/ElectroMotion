<?php require_once('Connections/php.php'); ?>
<?php


$pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
if ($_SERVER["SERVER_PORT"] != "80")
{
    $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
} 
else 
{
    $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
}


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
$query_getTestimonial = "SELECT * FROM EMContent WHERE contentTypeID = 5 AND contentActive = 1 ORDER BY Rand() LIMIT 1";
$getTestimonial = mysql_query($query_getTestimonial, $php) or die(mysql_error());
$row_getTestimonial = mysql_fetch_assoc($getTestimonial);
$totalRows_getTestimonial = mysql_num_rows($getTestimonial);

mysql_select_db($database_php, $php);
$query_getTestimonialShort = "SELECT * FROM EMContent WHERE contentID = 6 OR contentID = 7 OR contentID = 9 OR contentID = 10 AND contentActive = 1 ORDER BY Rand() LIMIT 1";
$getTestimonialShort = mysql_query($query_getTestimonialShort, $php) or die(mysql_error());
$row_getTestimonialShort = mysql_fetch_assoc($getTestimonialShort);
$totalRows_getTestimonialShort = mysql_num_rows($getTestimonialShort);
?>
<?
if (!session_id()) session_start();
?>
<style type="text/css">
<!--
.style1 {
	color: #D4D0C8
}
#navheader a {
	color:white;
}
#navheader a:hover {
	color:red;
}
-->
</style>
<div id="navheader">
	<div style="width:800px; margin-left:250px;font-weight:bold; padding-top:5px;color:white;line-height:.95em;text-align:center;">
		<div style="float:left;margin-left:5%;"><a href="generator-service.php" >Generator<br />
			Service</a></div>
		<div style="float:left;margin-left:5%;"><a href="ats-automatic-transfer-switch.php" >Automatic<br />
			Transfer Switches</a></div>
		<div style="float:left;margin-left:5%;"><a href="frequency-converter.php" >Frequency Converter<br />
			Motor Generator Set</a></div>
		<div style="float:left;margin-left:5%;"><a href="gen-tracker.php" >System<br />
			Monitoring</a></div>
	</div>
</div>
<div id="sidebar1" >
	<dl style="padding-left:0em;">
		<li><a href="index.php">Home</a></li>
		<?php if (isset($_SESSION["landingPage"])) { ?>
			<?php
	if (isset($_SESSION["landingPage"]) && $_SESSION["landingPage"] == 'mainats') { ?>
			<li><a href="ats-automatic-transfer-switch.php">ATS</a></li>
			<?php	} 	?>
			<?php
	if (isset($_SESSION["landingPage"]) && $_SESSION["landingPage"] == 'maingenrepair') { ?>
			<li><a href="generator-repair.php">Repair</a></li>
			<?php	}	?>
			<?php
	if (isset($_SESSION["landingPage"]) && $_SESSION["landingPage"] == 'maingenservice') { ?>
			<li><a href="generator-service.php">Service</a></li>
			<?php	}	?>
			<?php
	if (isset($_SESSION["landingPage"]) && $_SESSION["landingPage"] == 'maingents'){ ?>
			<li><a href="generator-troubleshooting.php">Trouble-shooting</a></li>
			<?php	}	?>
			<?php
	if (isset($_SESSION["landingPage"]) && $_SESSION["landingPage"] == 'mainmotorgen') { ?>
			<li><a href="frequency-converter.php">Freq Converter</a></li>
			<?php	}	?>
			<?php
	if (isset($_SESSION["landingPage"]) && $_SESSION["landingPage"] == 'maingenset') { ?>
			<li><a href="motor-generator-set.php">Generator Sets</a></li>
			<?php	}	?>
			<?php
	if (isset($_SESSION["landingPage"]) && $_SESSION["landingPage"] == 'mainmaintain') { ?>
			<li><a href="generator-maintenance.php">Maintenance</a></li>
			<?php	}	?>
			<?php } ?>
		<!--
    <li><a href="index.php">Success Stories</a></li> -->
		<!--    <li><a href="mainfreeresources.php">Free Resources</a></li> -->
		<script>
			console.log('<?php $_SESSION["landingPage"] ?>' + 'matt');
		</script>
		<li><a href="about-us.php">About Us</a></li>
		<?php
	if (isset($_SESSION["landingPage"]) && $_SESSION["landingPage"] == 'mainats') { ?>
		<li><a href="faq.php#mainats">FAQ</a></li>
		<?php
	}
	?>
		<?php
	if (isset($_SESSION["landingPage"]) && ($_SESSION["landingPage"] == 'maingenrepair' || $_SESSION["landingPage"] == 'maingenservice' || $_SESSION["landingPage"] == 'maingents')) { ?>
		<li><a href="faq.php#maingenrepair">FAQ</a></li>
		<?php
	}
	?>
		<?php
	if (isset($_SESSION["landingPage"]) && $_SESSION["landingPage"] == 'mainmotorgen') { ?>
		<li><a href="faq.php#mainmotorgen">FAQ</a></li>
		<?php
	}
	?>
		<?php
	if (!isset($_SESSION["landingPage"])) { ?>
		<li><a href="faq.php">FAQ</a></li>
		<?php
	}
	?>
		<!--    <li><a href="index.php">Careers</a></li> -->
		<li><a href="blog.php">Blog</a></li>
		<!--<li><a href="resources.php">Resources</a></li>-->
		<li><a href="contact-us.php">Contact Us</a></li>
		<li><a href="gen-tracker.php">System Monitoring</a></li>
		<!--<li><a href="blog.php">Blog</a></li>-->
	</dl>
	<?php if($pageURL != 'http://www.electromotion.com/index.php' && $pageURL != 'http://www.electromotion.com/' 
	&& $pageURL != 'http://www.electromotion.com/blog.php' && $pageURL != 'http://www.electromotion.com/contact-us.php')
  	{?>
	<div style="margin-left:-20px;margin-bottom:-20px;"> <a href="http://www.egsa.org" target="_blank" ><img src="graphics/EGSA-We-Proudly-Employ.jpg" style="width:70%" /></a></div>
	<div class="testimonial"><?php echo $row_getTestimonial['contentContent']; ?> </div>
	<?php } else { ?>
	<div style="margin-left:-20px;margin-bottom:-20px;"> <a href="http://www.egsa.org" target="_blank" ><img src="graphics/EGSA-We-Proudly-Employ.jpg" style="width:70%" /></a></div>
	<div class="testimonial"> <?php echo $row_getTestimonialShort['contentContent']; ?> </div>
	<?php }; ?>
	<div style="margin-left:18px;"><img src="graphics/bottomsidefade.png" /></div>
</div>
<?php
mysql_free_result($getTestimonial);
mysql_free_result($getTestimonialShort);
?>
