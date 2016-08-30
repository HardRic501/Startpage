<?php
/**
 * Created by PhpStorm.
 * User: hardr
 * Date: 2016. 08. 23.
 * Time: 13:20
 */
function getFavicon($url){
	# make the URL simpler
	$elems = parse_url($url);
	$url = $elems['scheme'].'://'.$elems['host'];

	# load site
	$output = file_get_contents($url);

	# look for the shortcut icon inside the loaded page
	$regex_pattern = "/rel=\"shortcut icon\" (?:href=[\'\"]([^\'\"]+)[\'\"])?/";
	preg_match_all($regex_pattern, $output, $matches);

	if(isset($matches[1][0])){
		$favicon = $matches[1][0];

		# check if absolute url or relative path
		$favicon_elems = parse_url($favicon);

		# if relative
		if(!isset($favicon_elems['host'])){
			$favicon = $url . '/' . $favicon;
		}

		return $favicon;
	}

	return false;
}