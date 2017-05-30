<?php
	$pageTitle = "Landscape";
	$pageColor = "#c62828";
	include 'includes/header.php';
?>
<?php include 'includes/menu.php'; ?>

<?php
$tileImage = "panoBruket";
$tileName = "";
include 'includes/tile.php';
?>
<?php
$tileImage = "final";
$tileName = "Kungsängen";
include 'includes/tile.php';
?>
<?php
$tileImage = "beachSunset";
$tileName = "Sal, Cabo Verde";
include 'includes/tile.php';
?>
<?php
$tileImage = "waterpipe";
$tileName = "Järfälla";
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
				$tileImage = "beachSunset";
				$tileName = "Sal, Cabo Verde";
				include 'includes/dTile.php';
			?>
			<?php
				$class = "no";
				$tileImage = "final";
				$tileName = "Kungsängen";
				include 'includes/dTile.php';
			?>
		</div>
		<div class="tileHolder">
			<?php
				$class = "up2";
				$tileImage = "waterpipe";
				$tileName = "Görveln, Järfälla";
				include 'includes/dTile.php';
			?>

			<?php
				$class = "no";
				$tileImage = "panoBruket";
				$tileName = "Gåseborg, Järfälla";
				include 'includes/dTile.php';
			?>
		</div>
	</div>		
		<div class="getDown"></div>
	<?php include 'includes/dFooter.php';?>
</div>