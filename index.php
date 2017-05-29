<?php
	$pageTitle = "Home";
	$pageColor = "#4caf50";
	include 'includes/header.php';
?>
<?php include 'includes/menu.php'; ?>
<?php
	$cardImage = "nycSkyline.jpg";
	$cardTitle = "NYC Skyline";
	$cardSubTitle = 'En bild tagen från en båt på Manhattan som är en del av New York City.<br><br> Klicka på "SE MER" för att se fler stadsbilder!';
	$cardLink1 = "city.php";
	$cardLink2 = "";
	include 'includes/card.php';
?>
<?php
	$cardImage = "final.jpg";
	$cardTitle = "Panorama över norra Stockholm";
	$cardSubTitle = 'Ett panorama över norra Stockholm taget med en drone ca. 200m upp i luften.<br><br> Klicka på "SE MER" för att se fler landskapsbilder! ';
	$cardLink1 = "landscape.php";
	$cardLink2 = "";
	include 'includes/card.php';
?>
<?php
	$cardImage = "piza.jpg";
	$cardTitle = "Pisa";
	$cardSubTitle = 'Bild på Lutande tornet, katedralen i Pisa och dopkapellet i Pisa';
	$cardLink1 = "city.php";
	$cardLink2 = "link2";
	include 'includes/card.php';
?>
<?php
	$cardImage = "kalleBruket.jpg";
	$cardTitle = "Bruket";
	$cardSubTitle = 'Ett surrealistisk foto av Järfällas höjdpunkt, bruket.';
	$cardLink1 = "nature.php";
	$cardLink2 = "link2";
	include 'includes/card.php';
?>
<?php
	$cardImage = "panoBruket.jpg";
	$cardTitle = "Gåseborg";
	$cardSubTitle = 'Ett panoramafoto av Gåseborg som är ett bärg i Järfälla med vacker utsikt över mälaren.';
	$cardLink1 = "landscape.php";
	$cardLink2 = "link2";
	include 'includes/card.php';
?>
<?php include "includes/footer.php";?>