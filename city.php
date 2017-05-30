<?php
	$pageTitle = "City";
	$pageColor = "#ef6c00";
	include 'includes/header.php';
?>
<?php include 'includes/menu.php'; ?>

<?php
$tileImage = "oneWtc";
$tileName = "New York City, United States";
include 'includes/tile.php';
?>
<?php
$tileImage = "florence";
$tileName = "Florence, Italy";
include 'includes/tile.php';
?>
<?php
$tileImage = "venice";
$tileName = "Venice, Italy";
include 'includes/tile.php';
?>
<?php
$tileImage = "panoramaJarfalla";
$tileName = "Järfälla";
include 'includes/tile.php';
?>


<?php include "includes/footer.php";?>


<!-- DEXTOP -->

<div id="container" >
	<?php include 'includes/dHeader.php';?>
	<div class="tileContent">
		<div class="tileHolder">
			<?php
				$class = "no";
				$tileImage = "oneWtc";
				$tileName = "New York City, United States";
				include 'includes/dTile.php';
			?>
			<?php
				$class = "no";
				$tileImage = "florence";
				$tileName = "Florence, Italy";
				include 'includes/dTile.php';
			?>

			<?php
				$class = "venice";
				$tileImage = "venice";
				$tileName = "Venice, Italy";
				include 'includes/dTile.php';
			?>
			<?php
				$class = "up1";
				$tileImage = "panoramaJarfalla";
				$tileName = "Järfälla";
				include 'includes/dTile.php';
			?>
		</div>
	</div>
	<div class="getDown"></div>
	<?php include 'includes/dFooter.php';?>
</div>