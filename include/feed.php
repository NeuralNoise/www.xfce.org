<?php

function ParseRssFeed ($lang)
{
    # Load new file
    if (is_file ("i18n/news/".$lang.".news.php"))
        include ("i18n/news/".$lang.".news.php");
    else
        include ("i18n/news/en.news.php");
	
    # Feed translations
    if (is_file ("i18n/arrays/".$lang.".feed.php"))
        include ("i18n/arrays/".$lang.".feed.php");
    else
        include ("i18n/arrays/en.feed.php");
    
    # Set header type
    header ('Content-type: application/xml; charset="utf-8"', true);
    
    # Rss/Xml basic stuff
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n".
         "<rss xmlns:content=\"http://purl.org/rss/1.0/modules/content/\" ".
	      "xmlns:wfw=\"http://wellformedweb.org/CommentAPI/\" ".
	      "xmlns:dc=\"http://purl.org/dc/elements/1.1/\" ".
	      "version=\"2.0\">\n".
         "    <channel>\n".
         "        <title>$title</title>\n".
         "        <description>$discription</description>\n".
         "        <link>http://www.xfce.org/about/news</link>\n".
         "        <copyright>Olivier Fourdan 1996 - ". date ("Y") ."</copyright>\n".
         "        <generator></generator>\n";

    # Date format: Thu, 06 Jul 2006 20:41:00 GMT
    $format = "D, d M Y H:i:s \G\M\T";

    # Parse the first 15 news items
    $i = 0;
    foreach ($news as $item)
    {
        echo "        <item>\n".
             "            <title>". $item["title"] ."</title>\n".
             "            <description>". $item["content"] ."</description>\n".
             "            <link>http://www.xfce.org/about/news?id=". strtotime ($item["date"]) ."</link>\n".
             "            <dc:creator>". $item["author"] ."</dc:creator>\n".
             "            <pubDate>". CreateDate ($item["date"], $format) ."</pubDate>\n".
             "            <category>Xfce News</category>\n".
             "            <guid isPermaLink=\"false\">http://www.xfce.org/about/news?id=". strtotime ($item["date"]) ."</guid>\n".
             "        </item>\n";
	     
	$i++;
	if ($i >= 15)
	    break;
    }
    
    # Close
    echo "    </channel>\n".
         "</rss>";
}
?>
