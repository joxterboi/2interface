<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portfolio</title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
	<link rel="stylesheet" href="openMenu.php">
	<style>
		.mHeader, header, .mFooter, footer {
			background-color: #4caf50;
		}
	</style>
</head>
<body>
	<?php include 'includes/header.php'; ?>
	<?php include 'includes/menu.php'; ?>
	<div class="clear"></div>
	<div class="hej"><p>24</p></div>




	<?php include "includes/footer.php";?>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Menu fuckery- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<div class="openMenu">
	<form method="post">
	    <input type="submit" name="open" id="test">
	</form>
	
	<?php
	
	function openMenu()
	{
	   			echo "<style type='text/css'>
					.mMenu {
						width: 300px;
						transition: 0.4s;
					}
					.closeMenu {
						display:block;
					}
				</style>";
	}
	
	if(array_key_exists('open',$_POST)){
	   openMenu();
	}
	
	?>
</div>
<div class="closeMenu">
	<form method="post">
	    <input type="submit" name="close" id="test">
	</form>
	
	<?php
	
	function closeMenu()
	{
	   			echo "<style type='text/css'>
					.mMenu {
						width: 0;
						transition: 0.4s;
					}
					.closeMenu {
						display:none;
					}
				</style>";
	}
	
	if(array_key_exists('close',$_POST)){
	   closeMenu();
	}
	
	?>
</div>

</body>
</html>