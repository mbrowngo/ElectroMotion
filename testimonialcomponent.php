mysql_select_db($database_php, $php);
$query_getTestimonialsBottom = "SELECT * FROM EMContent WHERE contentTypeID = 5 ORDER BY Rand() LIMIT 1";
$getTestimonialsBottom = mysql_query($query_getTestimonialsBottom, $php) or die(mysql_error());
$row_getTestimonialsBottom = mysql_fetch_assoc($getTestimonialsBottom);
$totalRows_getTestimonialsBottom = mysql_num_rows($getTestimonialsBottom);
$firstTestamonial = $row_getTestimonialsBottom['contentID'];

mysql_select_db($database_php, $php);
$query_getTestimonialsMiddle = "SELECT * FROM EMContent WHERE contentTypeID = 5 AND contentID != ".$firstTestamonial." ORDER BY Rand() LIMIT 1";
$getTestimonialsMiddle = mysql_query($query_getTestimonialsMiddle, $php) or die(mysql_error());
$row_getTestimonialsMiddle = mysql_fetch_assoc($getTestimonialsMiddle);
$totalRows_getTestimonialsMiddle = mysql_num_rows($getTestimonialsMiddle);