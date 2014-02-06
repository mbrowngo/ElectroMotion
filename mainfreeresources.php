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

if (isset($_GET['totalRows_getTestimonials'])) {
  $totalRows_getTestimonials = $_GET['totalRows_getTestimonials'];
} else {
  $all_getTestimonials = mysql_query($query_getTestimonials);
  $totalRows_getTestimonials = mysql_num_rows($all_getTestimonials);
}
$totalPages_getTestimonials = ceil($totalRows_getTestimonials/$maxRows_getTestimonials)-1;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Company History - ElectroMotion</title>
<link href="emstyles.css" rel="stylesheet" type="text/css" />
<?php include 'iespecial.php'; ?>
</head>
<body class="thrColHybHdr">
<div id="container">

   <?php include 'header.php'; ?>
  <div id="innercontainer">
  <?php include 'navcomponent.php'; ?>
 <!-- <div id="sidebar2">
  	<div id="side2sub1">
        <p>Brief lead generation copy and link here to lead gen site.</p>
    </div> -->
<!--    <div id="side2sub2"  style="background-image:url(graphics/sidebartopnarrow.png);">
    <div style="margin-left:1em;">
        <h2>Testimonials</h2>
        <?php do { ?>
          <p class="heading smalltext"><?php echo $row_getTestimonials['contentTitle']; ?></p>
          <p class="smalltext"><?php echo $row_getTestimonials['contentContent']; ?></p>
        <?php } while ($row_getTestimonials = mysql_fetch_assoc($getTestimonials)); ?></div>
          <img src="graphics/sidebarbottomnarrow.png" />
          </div>  
  </div>-->
  <div id="mainContent">

    <h1>Free Resources<strong></strong></h1>
    <p align="left">How to Avoid the top 10 mistakes in generator repair <a href="top10-electromotion.pdf">pdf</a></p>
    <h2 align="left">      generator service<br />
      How to Avoid The 10 Most Common Mistakes<br />
    </h2>
    <h3>No. 1: Failure to Maintain Your Automatic Transfer Switch</h3>
    <p> Don&rsquo;t kid yourself. You must maintain your Automatic Transfer Switch (ATS)...each year...or risk failure of your emergency power system just when you need it...and that&rsquo;s when the power goes out.</p>
    <h4>Please consider the following:</h4>
    <ul>
      <li> All the ATS makers recommend an annual maintenance. This includes Zenith, ASCO, Westinghouse, Onan, Kohler, etc. They all call for this annual maintenance. The makers know their equipment best. If they call for this work...every year...it&rsquo;s important to listen.<br />
        <br />
      </li>
      <li>FPA110 calls for a yearly maintenance on all ATS units. NFPA stands for the National Fire Protection Association. They are the most commonly used standard in our industry. Your local Fire Marshall probably uses this standard. Call us for a copy if you don&rsquo;t have one.<br />
        <br />
      </li>
      <li> Your ATS is 50% of your system. Obviously, if your generator set doesn&rsquo;t perform you won&rsquo;t have emergency power. Likewise, if your Automatic Transfer Switch doesn&rsquo;t perform, you won&rsquo;t have emergency power. Both are important...both should be maintained as intensively as possible.</li>
    </ul>
    <h4>Important next steps:</h4>
    <ul>
      <li> Check Your Records. If you haven&rsquo;t had this ATS maintenance work done in the last year, you are due.<br />
        <br />
      </li>
      <li> Get Information: Begin to gather the information you will need to understand how this work must be performed and how to manage the potential internal disruption. Call us and ask for &quot;AUTOMATIC TRANSFER SWITCH MAINTENANCE...what do I need to know?&quot;<br />
        Call us to Schedule the Work.</li>
    </ul>
    <p><strong>Remember This: Your maintenance program must include an Automatic Transfer Switch Maintenance. Or, by definition, it is not comprehensive!</strong><br />
    </p>
    <h3>No. 2: Not Running Your Generator Set Every Week</h3>
    <p> In the &quot;Quick Tips&quot; column of the previous Newsletter, we discussed this topic. I&rsquo;m reproducing that article here for your review because this is the 2nd most common maintenance mistake made by some companies!</p>
    <p>QUOTE...The single most important step you can take to preserve your equipment&rsquo;s value and dependability is…</p>
    <p>Run It Every Week!</p>
    <p>Why is this so important? It is simply that engines are made to run...not to sit, unrun, in readiness for an emergency. When they sit, all sorts of bad things can happen. Air can get into the fuel lines, lubricating oil can drain from the rubbing parts, water can condensate on electrical parts, and many more. In contrast...</p>
    <p>By running your unit (called &quot;exercising the unit&quot;) each week you (a) make the unit happy by preventing bad things from happening and, equally important, (b) you get positive verification your unit is ready for a power outage.</p>
    <p>Note: If you can&rsquo;t exercise to full temperature every week, do it every other week...UNQUOTE<br />
    </p>
    <h3>No. 3: Not Inspecting Your Generator Set Every Week</h3>
    <p> Why is this important? &quot;I don&rsquo;t know how to do this...what to look for. Isn&rsquo;t this inspection work something you are supposed to do?&quot;</p>
    <p>Here&rsquo;s the problem. Your generator or transfer switch can become a problem at any time. Yet your maintenance company only comes every 1-3 months. You must be the &quot;eyes and ears&quot; between visits. Otherwise, any problem may be caught too late to help you during the next power outage. Think of it this way. Generator system maintenance requires a team approach...we will do our part and you must do yours. Alternately, you can employ us on a weekly basis to do this important work for you.</p>
    <h4>Here are the things you should be checking:</h4>
    <ul>
      <li> Check all fluid levels. This includes the radiator coolant level. A low level will cause the engine to overheat. Check the Lube oil level. A low level can cause the engine to shut down on low oil pressure (LOP). Check the battery fluid level to ensure the battery will perform when called upon. Most importantly, check the fuel level. No fuel...no go!<br />
        <br />
      </li>
      <li> Check the jacket water heater for proper operation. Diesels do not like to start cold. They will shake, rattle &amp; vibrate something fierce! This can harm the engine and delicate electrical controls...and even put your equipment out of commission. You can make this check easily by &quot;feeling&quot; the hoses. Ask our technician how to do this<br />
        <br />
      </li>
      <li> Check for unusual noises, excessive vibration or signs of deterioration.<br />
        <br />
      </li>
      <li> Clean the room/enclosure/area of debris and clutter. This is important. Debris can be sucked into the radiator, cutting off air flow. Clutter can cause an accident.<br />
        <br />
      </li>
      <li> Check for a fault light that may be lit. These may indicate a problem that should be addressed quickly.<br />
        <br />
      </li>
      <li> Record the hour meter reading. It is important to note this information in case there is a problem. If there is, a log could be invaluable.<br />
        <br />
      </li>
      <li> Check that the unit ran during its last weekly automatic test run (exercise period). You do this by checking the hour meter reading and comparing it with the previous reading. This run test is very important. Please review the &quot;Quick Tip&quot; from our first newsletter.<br />
      </li>
    </ul>
    <h3>No. 4: Not Performing a Load Bank Test Every Year</h3>
    <p> Why is this important? &quot;I don&rsquo;t know how to do this...what to look for. Isn&rsquo;t this inspection work something you are supposed to do?&quot;</p>
    <p>Here&rsquo;s the problem. Your generator or transfer switch can become a problem at any time. Yet your maintenance company only comes every 1-3 months. You must be the &quot;eyes and ears&quot; between visits. Otherwise, any problem may be caught too late to help you during the next power outage. Think of it this way. Generator system maintenance requires a team approach...we will do our part and you must do yours. Alternately, you can employ us on a weekly basis to do this important work for you.</p>
    <h4>Here are the things you should be checking:</h4>
    <ul>
      <li>  Check all fluid levels. This includes the radiator coolant level. A low level will cause the engine to overheat. Check the Lube oil level. A low level can cause the engine to shut down on low oil pressure (LOP). Check the battery fluid level to ensure the battery will perform when called upon. Most importantly, check the fuel level. No fuel...no go!<br />
        <br />
      </li>
      <li>  Check the jacket water heater for proper operation. Diesels do not like to start cold. They will shake, rattle &amp; vibrate something fierce! This can harm the engine and delicate electrical controls...and even put your equipment out of commission. You can make this check easily by &quot;feeling&quot; the hoses. Ask our technician how to do this <br />
        <br />
      </li>
      <li> Check for unusual noises, excessive vibration or signs of deterioration.<br />
        <br />
      </li>
      <li> Clean the room/enclosure/area of debris and clutter. This is important. Debris can be sucked into the radiator, cutting off air flow. Clutter can cause an accident.<br />
        <br />
      </li>
      <li> Check for a fault light that may be lit. These may indicate a problem that should be addressed quickly.<br />
        <br />
      </li>
      <li> Record the hour meter reading. It is important to note this information in case there is a problem. If there is, a log could be invaluable.<br />
        <br />
      </li>
      <li> Check that the unit ran during its last weekly automatic test run (exercise period). You do this by checking the hour meter reading and comparing it with the previous reading. This run test is very important. Please review the &quot;Quick Tip&quot; from our first newsletter.<br />
      </li>
    </ul>
    <h3>No. 5: Hiring a Maintenance Company Near Your Site</h3>
    <p> Why is this important? &quot;I don&rsquo;t know how to do this...what to look for. Isn&rsquo;t this inspection work something you are supposed to do?&quot;</p>
    <p>Here&rsquo;s the problem. Your generator or transfer switch can become a problem at any time. Yet your maintenance company only comes every 1-3 months. You must be the &quot;eyes and ears&quot; between visits. Otherwise, any problem may be caught too late to help you during the next power outage. Think of it this way. Generator system maintenance requires a team approach...we will do our part and you must do yours. Alternately, you can employ us on a weekly basis to do this important work for you.</p>
    <p>Here are the things you should be checking:<br />
      1. Check all fluid levels. This includes the radiator coolant level. A low level will cause the engine to overheat. Check the Lube oil level. A low level can cause the engine to shut down on low oil pressure (LOP). Check the battery fluid level to ensure the battery will perform when called upon. Most importantly, check the fuel level. No fuel...no go!<br />
      2. Check the jacket water heater for proper operation. Diesels do not like to start cold. They will shake, rattle &amp; vibrate something fierce! This can harm the engine and delicate electrical controls...and even put your equipment out of commission. You can make this check easily by &quot;feeling&quot; the hoses. Ask our technician how to do this<br />
      3. Check for unusual noises, excessive vibration or signs of deterioration.<br />
      4. Clean the room/enclosure/area of debris and clutter. This is important. Debris can be sucked into the radiator, cutting off air flow. Clutter can cause an accident.<br />
      5. Check for a fault light that may be lit. These may indicate a problem that should be addressed quickly.<br />
      6. Record the hour meter reading. It is important to note this information in case there is a problem. If there is, a log could be invaluable.<br />
      7. Check that the unit ran during its last weekly automatic test run (exercise period). You do this by checking the hour meter reading and comparing it with the previous reading. This run test is very important. Please review the &quot;Quick Tip&quot; from our first newsletter.<br />
    </p>
    <h3>No. 6: Not Performing A Transfer Test at Least Every 6 Months</h3>
    <p> Why is this important? &quot;I don&rsquo;t know how to do this...what to look for. Isn&rsquo;t this inspection work something you are supposed to do?&quot;</p>
    <p>Here&rsquo;s the problem. Your generator or transfer switch can become a problem at any time. Yet your maintenance company only comes every 1-3 months. You must be the &quot;eyes and ears&quot; between visits. Otherwise, any problem may be caught too late to help you during the next power outage. Think of it this way. Generator system maintenance requires a team approach...we will do our part and you must do yours. Alternately, you can employ us on a weekly basis to do this important work for you.</p>
    <h4>Here are the things you should be checking:</h4>
    <ul>
      <li>Check all fluid levels. This includes the radiator coolant level. A low level will cause the engine to overheat. Check the Lube oil level. A low level can cause the engine to shut down on low oil pressure (LOP). Check the battery fluid level to ensure the battery will perform when called upon. Most importantly, check the fuel level. No fuel...no go!<br />
        <br />
      </li>
      <li> Check the jacket water heater for proper operation. Diesels do not like to start cold. They will shake, rattle &amp; vibrate something fierce! This can harm the engine and delicate electrical controls...and even put your equipment out of commission. You can make this check easily by &quot;feeling&quot; the hoses. Ask our technician how to do this<br />
        <br />
      </li>
      <li>Check for unusual noises, excessive vibration or signs of deterioration.<br />
        <br />
      </li>
      <li> Clean the room/enclosure/area of debris and clutter. This is important. Debris can be sucked into the radiator, cutting off air flow. Clutter can cause an accident.<br />
        <br />
      </li>
      <li> Check for a fault light that may be lit. These may indicate a problem that should be addressed quickly.<br />
        <br />
      </li>
      <li> Record the hour meter reading. It is important to note this information in case there is a problem. If there is, a log could be invaluable.<br />
        <br />
      </li>
      <li> Check that the unit ran during its last weekly automatic test run (exercise period). You do this by checking the hour meter reading and comparing it with the previous reading. This run test is very important. Please review the &quot;Quick Tip&quot; from our first newsletter.<br />
      </li>
    </ul>
    <h3>No. 7: Not Changing Your Batteries Every 2/3 Years</h3>
    <p> Why is this important? &quot;I don&rsquo;t know how to do this...what to look for. Isn&rsquo;t this inspection work something you are supposed to do?&quot;</p>
    <p>Here&rsquo;s the problem. Your generator or transfer switch can become a problem at any time. Yet your maintenance company only comes every 1-3 months. You must be the &quot;eyes and ears&quot; between visits. Otherwise, any problem may be caught too late to help you during the next power outage. Think of it this way. Generator system maintenance requires a team approach...we will do our part and you must do yours. Alternately, you can employ us on a weekly basis to do this important work for you.</p>
    <h4>Here are the things you should be checking:</h4>
    <ul>
      <li> Check all fluid levels. This includes the radiator coolant level. A low level will cause the engine to overheat. Check the Lube oil level. A low level can cause the engine to shut down on low oil pressure (LOP). Check the battery fluid level to ensure the battery will perform when called upon. Most importantly, check the fuel level. No fuel...no go!<br />
        <br />
      </li>
      <li> Check the jacket water heater for proper operation. Diesels do not like to start cold. They will shake, rattle &amp; vibrate something fierce! This can harm the engine and delicate electrical controls...and even put your equipment out of commission. You can make this check easily by &quot;feeling&quot; the hoses. Ask our technician how to do this<br />
        <br />
       </li>
      <li>Check for unusual noises, excessive vibration or signs of deterioration.<br />  
        <br />
      </li>
      <li>  Clean the room/enclosure/area of debris and clutter. This is important. Debris can be sucked into the radiator, cutting off air flow. Clutter can cause an accident.<br />
        <br />
       </li>
      <li>Check for a fault light that may be lit. These may indicate a problem that should be addressed quickly.<br />  
        <br />
      </li>
      <li> Record the hour meter reading. It is important to note this information in case there is a problem. If there is, a log could be invaluable.<br />
        <br />
      </li>
      <li> Check that the unit ran during its last weekly automatic test run (exercise period). You do this by checking the hour meter reading and comparing it with the previous reading. This run test is very important. Please review the &quot;Quick Tip&quot; from our first newsletter.<br />
      </li>
    </ul>
    <h3>No. 8: Failing to Replace Your Diesel Fuel Every 2 Years</h3>
    <p> Why is this important? &quot;I don&rsquo;t know how to do this...what to look for. Isn&rsquo;t this inspection work something you are supposed to do?&quot;</p>
    <p>Here&rsquo;s the problem. Your generator or transfer switch can become a problem at any time. Yet your maintenance company only comes every 1-3 months. You must be the &quot;eyes and ears&quot; between visits. Otherwise, any problem may be caught too late to help you during the next power outage. Think of it this way. Generator system maintenance requires a team approach...we will do our part and you must do yours. Alternately, you can employ us on a weekly basis to do this important work for you.</p>
    <h4>Here are the things you should be checking:</h4>
    <ul>
      <li> Check all fluid levels. This includes the radiator coolant level. A low level will cause the engine to overheat. Check the Lube oil level. A low level can cause the engine to shut down on low oil pressure (LOP). Check the battery fluid level to ensure the battery will perform when called upon. Most importantly, check the fuel level. No fuel...no go!<br />
        <br />
      </li>
      <li>Check the jacket water heater for proper operation. Diesels do not like to start cold. They will shake, rattle &amp; vibrate something fierce! This can harm the engine and delicate electrical controls...and even put your equipment out of commission. You can make this check easily by &quot;feeling&quot; the hoses. Ask our technician how to do this<br />
        <br />
        </li>
      <li>Check for unusual noises, excessive vibration or signs of deterioration.<br />
        </li>
      <li>Clean the room/enclosure/area of debris and clutter. This is important. Debris can be sucked into the radiator, cutting off air flow. Clutter can cause an accident.<br />
        <br />
        </li>
      <li>Check for a fault light that may be lit. These may indicate a problem that should be addressed quickly.<br />
        <br />
        </li>
      <li>Record the hour meter reading. It is important to note this information in case there is a problem. If there is, a log could be invaluable.<br />
        <br />
        </li>
      <li>Check that the unit ran during its last weekly automatic test run (exercise period). You do this by checking the hour meter reading and comparing it with the previous reading. This run test is very important. Please review the &quot;Quick Tip&quot; from our first newsletter.<br />
      </li>
    </ul>
    <h3>No. 9: Not Performing Your Cooling System Service Every 3 Years</h3>
    <p> Why is this important? &quot;I don&rsquo;t know how to do this...what to look for. Isn&rsquo;t this inspection work something you are supposed to do?&quot;</p>
    <p>Here&rsquo;s the problem. Your generator or transfer switch can become a problem at any time. Yet your maintenance company only comes every 1-3 months. You must be the &quot;eyes and ears&quot; between visits. Otherwise, any problem may be caught too late to help you during the next power outage. Think of it this way. Generator system maintenance requires a team approach...we will do our part and you must do yours. Alternately, you can employ us on a weekly basis to do this important work for you.</p>
    <h4>Here are the things you should be checking:</h4>
    <ul>
      <li>  Check all fluid levels. This includes the radiator coolant level. A low level will cause the engine to overheat. Check the Lube oil level. A low level can cause the engine to shut down on low oil pressure (LOP). Check the battery fluid level to ensure the battery will perform when called upon. Most importantly, check the fuel level. No fuel...no go!<br />
        <br />
      </li>
      <li> Check the jacket water heater for proper operation. Diesels do not like to start cold. They will shake, rattle &amp; vibrate something fierce! This can harm the engine and delicate electrical controls...and even put your equipment out of commission. You can make this check easily by &quot;feeling&quot; the hoses. Ask our technician how to do this<br />
        <br />
      </li>
      <li> Check for unusual noises, excessive vibration or signs of deterioration.<br />
        <br />
      </li>
      <li> Clean the room/enclosure/area of debris and clutter. This is important. Debris can be sucked into the radiator, cutting off air flow. Clutter can cause an accident.<br />
        <br />
      </li>
      <li> Check for a fault light that may be lit. These may indicate a problem that should be addressed quickly.<br />
        <br />
      </li>
      <li> Record the hour meter reading. It is important to note this information in case there is a problem. If there is, a log could be invaluable.<br />
        <br />
      </li>
      <li> Check that the unit ran during its last weekly automatic test run (exercise period). You do this by checking the hour meter reading and comparing it with the previous reading. This run test is very important. Please review the &quot;Quick Tip&quot; from our first newsletter.<br />
      </li>
    </ul>
    <h3>No. 10: Selecting a Maintenance Company on Price Alone</h3>
    <p> Why is this important? &quot;I don&rsquo;t know how to do this...what to look for. Isn&rsquo;t this inspection work something you are supposed to do?&quot;</p>
    <p>Here&rsquo;s the problem. Your generator or transfer switch can become a problem at any time. Yet your maintenance company only comes every 1-3 months. You must be the &quot;eyes and ears&quot; between visits. Otherwise, any problem may be caught too late to help you during the next power outage. Think of it this way. Generator system maintenance requires a team approach...we will do our part and you must do yours. Alternately, you can employ us on a weekly basis to do this important work for you.</p>
    <p>Here are the things you should be checking:</p>
    <ul>
      <li> Check all fluid levels. This includes the radiator coolant level. A low level will cause the engine to overheat. Check the Lube oil level. A low level can cause the engine to shut down on low oil pressure (LOP). Check the battery fluid level to ensure the battery will perform when called upon. Most importantly, check the fuel level. No fuel...no go!<br />
        <br />
      </li>
      <li> Check the jacket water heater for proper operation. Diesels do not like to start cold. They will shake, rattle &amp; vibrate something fierce! This can harm the engine and delicate electrical controls...and even put your equipment out of commission. You can make this check easily by &quot;feeling&quot; the hoses. Ask our technician how to do this<br />
        <br />
      </li>
      <li>Check for unusual noises, excessive vibration or signs of deterioration.<br />
        <br />
      </li>
      <li>Clean the room/enclosure/area of debris and clutter. This is important. Debris can be sucked into the radiator, cutting off air flow. Clutter can cause an accident.<br />
        <br />
      </li>
      <li> Check for a fault light that may be lit. These may indicate a problem that should be addressed quickly.<br />
          <br />
      </li>
      <li> Record the hour meter reading. It is important to note this information in case there is a problem. If there is, a log could be invaluable.<br />
        <br />
      </li>
      <li>Check that the unit ran during its last weekly automatic test run (exercise period). You do this by checking the hour meter reading and comparing it with the previous reading. This run test is very important. Please review the &quot;Quick Tip&quot; from our first newsletter.<br />
      </li>
    </ul>
    <h3>A Few More Maintenance Questions Answered</h3>
    <h4>What Does a Comprehensive Program Consist Of?</h4>
    <h4>How Many Visits Per Year Should I Have?</h4>
    <h4>What Permits Do I Need?</h4>
    <h4>Where Do I Get Fuel?<br />
    </h4>
    <h2>Who Is Electro-Motion?</h2>
    <p>Commercial: Electro-Motion stopped manufacturing in 1985. At that time we expanded our Service Department and are now one of the largest generator service/service companies in the Bay Area. We are also the oldest generator service/maintenance company in the Bay Area…we are enjoying our 40th anniversary this year!</p>
    <p>We do substantial work for the cities of San Bruno, Burlingame, Millbrae, San Mateo, Belmont, San Carlos, Foster City, Redwood City, Palo Alto, Sunnyvale, etc…as well as work for many other industrial/commercial customers such as eBay, HP, HP Pavilion, Santa Clara Marriott, KLA-Tencor, West Valley Mission Community College District, Equity Office Properties, Emcor Facilities Services, etc.</p>
    <p>We are particularly known for 3 things. First, we are committed to being close to our customers. This means we can, and will, respond quickly when an emergency happens…our major competitors are in San Leandro, Stockton, etc. Second, we are the only generator company that also provides maintenance on the Automatic Transfer Switch, which is crucial for a comprehensive program. This means all the equipment in your emergency systems will taken care of…reducing the anxiety of having only a partial job done. Third, we tailor our maintenance programs to the specific needs of our clients. We do not try to &quot;sell&quot; them some sort of &quot;cookie-cutter&quot; program that may, or may not, be suitable for their unique needs. This means you get exactly what you want and need…no more and no less.<br />
    </p>
    <p align="left"><br />
      <strong> </strong></p>
  </div>
    <p>&nbsp;</p>
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
