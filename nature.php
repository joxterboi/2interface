<?php
	$pageTitle = "Nature";
	$pageColor = "#1565c0";
	include 'includes/header.php';
?>
<?php include 'includes/menu.php'; ?>

<?php
$tileImage = "vinceSilhouette";
$tileName = "Bruket";
include 'includes/tile.php';
?>
<?php
$tileImage = "nature";
$tileName = "Järfälla";
include 'includes/tile.php';
?>
<?php
$tileImage = "clouds";
$tileName = "Viksjö";
include 'includes/tile.php';
?>
<?php
$tileImage = "4persSilhouette";
$tileName = "Kungsängen";
include 'includes/tile.php';
?>


<?php include "includes/footer.php";?>



<!-- DEXTOP -->
<div id="container">
	<?php include 'includes/dHeader.php';?>
	<div class="tileContent">
		<div class="tileHolder">
			<?php
				$class = "no";
				$tileImage = "vinceSilhouette";
				$tileName = "Görveln, Järfälla";
				include 'includes/dTile.php';
			?>
			<?php
				$class = "no";
				$tileImage = "nature";
				$tileName = "Görveln, Järfälla";
				include 'includes/dTile.php';
			?>
		</div>
		<div class="tileHolder">
			<?php
				$class = "up3";
				$tileImage = "clouds";
				$tileName = "Rävkullen, Järfälla";
				include 'includes/dTile.php';
			?>
			<?php
				$class = "up4";
				$tileImage = "4persSilhouette";
				$tileName = "New York City, United States";
				include 'includes/dTile.php';
			?>
		</div>
	</div>
		<div class="getDown"></div>
	<?php include 'includes/dFooter.php';?>
</div>