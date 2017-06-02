<?php
	$pageTitle = "Kontakt";
	$pageColor = "#FFC107";
	include 'includes/header.php';
?>
<?php include 'includes/menu.php';?>

<div class="card WOI">
	<h1>Varför vi finns</h1>
	<h2>Denna webplats finns föra att informera allmänhten och visa Joakims bilder.</h2>
	<button>LÄS MER</button>
</div>
<div class="card WOI">
	<h1>Kontakt</h1>
	<h2>Du kan nå oss genom både telefon och e-mail dygnet runt om du har några frågor ellet av någon annan andledning vill kontakta oss.</h2>
	<button>RING</button>
	<button>MAILA</button>
</div>
<?php include 'includes/footer.php';?>

<!-- Dextop -->
<?php include 'includes/dHeader.php';?>
<div class="content">

	<div class="cardHolder">
		<?php
			$cardImage = "contact.jpg";
			$cardTitle = "Kontakt";
			$cardSubTitle = 'Du kan nå oss genom både telefon och e-mail dygnet runt om du har några frågor ellet av någon annan andledning vill kontakta oss.';
			$cardLink1 = "call.php";
			$cardLink2 = "link2";
			include 'includes/dCard.php';
		?>
		<?php
			$cardImage = "info.jpg";
			$cardTitle = "Varför vi finns";
			$cardSubTitle = 'Denna webplats finns föra att informera allmänhten och visa Joakims bilder.';
			$cardLink1 = "protectYourImages.php";
			$cardLink2 = "link2";
			include 'includes/dCard.php';
		?>
	</div>
</div>

<?php
	$footerclass = "down";
	include 'includes/dFooter.php';
?>