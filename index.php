<?php

include "inc/imagecolor.php";

$headerColor = getMainColor("http://www.google.com/s2/favicons?domain_url=teamtreehouse.com");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="main.css">
	<title>Startpage - Richard H.</title>
</head>
<body>


<div class="container">
	<div class="header" style="background: <?php echo '#' . $headerColor; ?>">
		<h1>Bookmarks</h1>
	</div>
	<div class="category">
		<h2>Category Name 1</h2>
		<div class="toggle-button"></div>
		<ul class="link-list">
			<li><img src="100.jpg"><a href="">This is a link 1</a></li>
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 2</a></li>
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 3</a></li>
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 4</a></li>
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 5</a></li>
		</ul>
	</div>
	<div class="category">
		<h2>Category Name 2</h2>
		<div class="toggle-button"></div>
		<ul class="link-list">
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 1</a></li>
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 2</a></li>
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 3</a></li>
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 4</a></li>
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 5</a></li>
		</ul>
	</div>
	<div class="category">
		<h2>Category Name 3</h2>
		<div class="toggle-button"></div>
		<ul class="link-list">
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 1</a></li>
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 2</a></li>
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 3</a></li>
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 4</a></li>
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 5</a></li>
		</ul>
	</div>
	<div class="category">
		<h2>Category Name 4</h2>
		<div class="toggle-button"></div>
		<ul class="link-list">
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 1</a></li>
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 2</a></li>
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 3</a></li>
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 4</a></li>
			<li><img src="https://placekitten.com/200/100"><a href="">This is a link 5</a></li>
		</ul>
	</div>

</div>

<script src="js/jquery-3.0.0.min.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>