<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $pageTitle?></title>
	<link rel="stylesheet" href="mdsl.css">
</head>
<body>
<div class="dHeader">
	<header style="background-color:<?php echo $pageColor?> ">
		<div class="navigation">
			<nav style="background-color: <?php echo $pageColor?>">
					<a href="index.php" class="Home">Home</a>
					<a href="city.php" class="City">City</a>
					<a href="nature.php" class="Nature">Nature</a>
					<a href="landscape.php" class="Landscape">Landscape</a>
			</nav>
		</div>
	</header>
	<style>
		.<?php echo $pageTitle?> {
			border-bottom: 3px solid #fff;
			opacity: 1;

		}
	</style>
</div>



