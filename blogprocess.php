<?php
    
	header("Content-Type: application/rss+xml; charset=ISO-8859-1");
	
	DEFINE ('DB_USER', 'emotion');
	DEFINE ('DB_PASSWORD', 'ar4913yk');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_NAME', 'emotion');
	 
	$rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
	$rssfeed .= '<rss version="2.0">';
	$rssfeed .= '<channel>';
	$rssfeed .= '<title>My RSS feed</title>';
	$rssfeed .= '<link>http://www.electromotion.com/blog.php</link>';
	$rssfeed .= '<description>This is an example RSS feed</description>';
	$rssfeed .= '<language>en-us</language>';
	$rssfeed .= '<copyright>Copyright (C) 2009 mywebsite.com</copyright>';
	
    $connection = @mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)
        or die('Could not connect to database');
    mysql_select_db(DB_NAME)
        or die ('Could not select database');
 
    $query = "SELECT * FROM EMContent WHERE contentTypeID = 6 AND contentActive = 1 ORDER BY ContentID DESC";
    $result = mysql_query($query) or die ("Could not execute query");
 
    while($row = mysql_fetch_array($result)) {
        extract($row);
 
    /*    $rssfeed .= '<item>';
        $rssfeed .= '<title>' . $title . '</title>';
        $rssfeed .= '<description>' . $description . '</description>';
        $rssfeed .= '<link>' . $link . '</link>';
        $rssfeed .= '<pubDate>' . date("D, d M Y H:i:s O", strtotime($date)) . '</pubDate>';
        $rssfeed .= '</item>'; */
		
		$rssfeed .= '<item>';
        $rssfeed .= '<title> Matt title </title>'; 
        $rssfeed .= '<description>'  . $contentTitle .  '</description>';
        $rssfeed .= '<link> Matt link </link>';
        $rssfeed .= '<pubDate> Matt date </pubDate>';
        $rssfeed .= '</item>';
		
    }
 
    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';
 
    echo $rssfeed;
?>
