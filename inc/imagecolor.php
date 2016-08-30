<?php



function getMainColor($imageURL)
{
	try {
		$image = imagecreatefrompng($imageURL);
		$thumb = imagecreatetruecolor(1, 1);
		imagecopyresampled($thumb, $image, 0, 0, 0, 0, 1, 1, imagesx($image), imagesy($image));
		return strtoupper(dechex(imagecolorat($thumb, 0, 0)));
	} catch (Exception $e) {
		echo $e->getMessage() . "\n";
	}
}
