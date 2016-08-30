<?php
/**
 * Created by PhpStorm.
 * User: hardr
 * Date: 2016. 08. 23.
 * Time: 10:43
 */

include "imagecolor.php";
include "functions.php";

function loadBookmarksHtml($category)
{
	include "connection.php";

	$results = $db->prepare("SELECT * FROM db_01 WHERE category = ? ORDER BY title;");
	$results->bindParam(1, $category, PDO::PARAM_STR);
	$results->execute();


	$everything = $results->fetchAll(PDO::FETCH_ASSOC);


	foreach ($everything as $array) {
		$url = $array['url'];
		$faviconurl = "http://www.google.com/s2/favicons?domain=" . $url;
		$color = getMainColor($faviconurl);
		if (strlen($color) != 6) $color = "217de0";
		$title = mb_strtoupper($array['title'], 'UTF-8');
		if (strlen($title) > 11) {
			$title = mb_substr($title, 0, 8, 'UTF-8');
			$title .= "...";
		}
		if ($title == "DRIVE") {
			$color = "4285F4";
		} elseif ($title == "MESSENGER") {
			$color = "0084FF";
		} elseif ($title == "GMAIL") {
			$color = "AC3D31";
		} elseif ($title=="STIHL B2B") {
			$color = "F37A1F";
		} elseif ($title=="YOUTUBE") {
			$color ="CC181E";
		}

		echo "<a style='border-bottom: .5rem solid #$color' href='$url' target='_blank'>$title</a>";
	}


}