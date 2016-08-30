<?php

include "inc/load_bookmarks_html.php";

//$headerColor = getMainColor("http://www.google.com/s2/favicons?domain_url=mobilarena.hu");
//echo $headerColor;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="main.css">
	<title>Startpage - Richard Hriech</title>
</head>
<body>
<div class="container">
	<div class="header">
		<h1>BOOKMARKS</h1>
		<h3>© 2016 Richárd Hriech</h3>
	</div>
	<div class="category">
		<h2>Favorites</h2>
		<div class="toggle-button"></div>
		<div class="link-list">
			<?php
			loadBookmarksHtml("Favorites");
			?>
		</div>
	</div>
	<div class="category">
		<h2>Other Bookmarks</h2>
		<div class="toggle-button"></div>
		<ul class="link-list">
			<?php
			loadBookmarksHtml("Other Bookmarks");
			?>
		</ul>
	</div>
	<div class="category">
		<h2>Pirate Life</h2>
		<div class="toggle-button"></div>
		<ul class="link-list">
			<?php
			loadBookmarksHtml("Pirate Life");
			?>
		</ul>
	</div>
</div>


<script src="js/jquery-3.0.0.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/slidedown.js" type="text/javascript" charset="utf-8"></script>
<script src="js/beforeunload.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>