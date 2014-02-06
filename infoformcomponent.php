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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
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

  $insertGoTo = "contact-us.php?DO=1";
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
	$subject = 'website information request';
	$message = 'Name: '.$_POST['leadFirstName'].' '.$_POST['leadLastName'].' Phone: '.$_POST['leadContactPhone'].' Email: '.$_POST['leadContactMail'].' Company: '.$_POST['leadContactCompany'].' Comments: '.$_POST['leadContactComments'];
	$from = "website@electromotion.com";
	$headers = 'From: website@electromotion.com';
	
	// Mail function that sends the email.
	mail($to,$subject,$message,$headers);
  
}

?>

<?php if (isset($_POST["leadFirstName"]))  { ?>
<p>Thank you for contacting us. One of our representatives will contact you as soon as possible.</p>
<?php } else { ?>
    <form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>" class="formformat">
    <p><label for="leadFirstName">* First Name:</label><input type="text" name="leadFirstName" id="leadFirstName" maxlength="45" /></p>
    <p><label for="leadLastName">Last Name:</label><input type="text" name="leadLastName" id="leadLastName" maxlength="45" /></p>
    <p><label for="leadContactPhone">Phone:</label><input type="text" name="leadContactPhone" id="leadContactPhone" maxlength="45" /></p>
    <p><label for="leadContactMail">* Email Address:</label><input type="text" name="leadContactMail" id="leadContactMail" maxlength="45" /></p>
    <p><label for="leadContactCompany">Company:</label><input type="text" name="leadContactCompany" id="leadContactCompany" maxlength="45" /></p>
    <p><label for="leadContactComments">Comments:</label><textarea  id="leadContactComments" name="leadContactComments" rows="4" cols="25"></textarea></p>
    <p class="info"><input type="submit" name="Submit" id="submiit" value="submit" /><br />
    <br />
    <br />
    </p>
    <input type="hidden" name="MM_insert" value="form1" />
    </form>
<?php } ?>