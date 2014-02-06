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


if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO EMLeads (leadFirstName, leadLastName, leadContactPhone, leadContactMail, leadContactCompany, leadContactComments) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['leadFirstName'], "text"),
                       GetSQLValueString($_POST['leadLastName'], "text"),
                       GetSQLValueString($_POST['leadContactPhone'], "text"),
                       GetSQLValueString($_POST['leadContactMail'], "text"),
                       GetSQLValueString($_POST['leadContactCompany'], "text"),
                       GetSQLValueString($_POST['leadContactComments'], "text"));

  mysql_select_db($database_ElectroMotion, $ElectroMotion);
  $Result1 = mysql_query($insertSQL, $ElectroMotion) or die(mysql_error());

    $insertGoTo = "index2-mob.php";
  	if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
 	// Please specify your Mail Server - Example: mail.yourdomain.com.
	ini_set("SMTP","localhost");
	
	// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
	ini_set("smtp_port","25");
	
	// Please specify the return address to use
	ini_set('sendmail_from', 'website@electromotion.com');
	
	// Set parameters of the email
	$to = "contactus@electromotion.com";
	//$to = "mbrown@mossbeachceramics.com";
	$subject = 'website information request';
	$message = 'Name: '.$_POST['leadFirstName'].' '.$_POST['leadLastName'].' Phone: '.$_POST['leadContactPhone'].' Email: '.$_POST['leadContactMail'].' Company: '.$_POST['leadContactCompany'].' Comments: '.$_POST['leadContactComments'];
	$from = "website@electromotion.com";
	$headers = 'From: website@electromotion.com';
	
	// Mail function that sends the email.
	mail($to,$subject,$message,$headers);
}

?>
