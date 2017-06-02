<?php
	$pageTitle = "Info";
	$pageColor = "#009688";
	include 'includes/header.php';
?>
<!-- Secondary #ff7a1f -->

<?php include "includes/menu.php";?>

<?php
	$cardImage = "publicering_av_bilder.jpg";
	$cardTitle = "Publisering av bilder";
	$cardSubTitle = 'Regler kring publicering av dina och andras bilder på nätet.';
	$cardLink1 = "publishYourPictures.php";
	$cardLink2 = "link2";
	include 'includes/card.php';
?>
<?php
	$cardImage = "stealPics.jpg";
	$cardTitle = "Skydda dina bilder!";
	$cardSubTitle = 'Lär dig de mest effektiva sätten att skydda dina bilder mot stöld!';
	$cardLink1 = "protectYourImages.php";
	$cardLink2 = "link2";
	include 'includes/card.php';
?>
<?php
	$cardImage = "publicering_av_bilder.jpg";
	$cardTitle = "Vilket format?";
	$cardSubTitle = 'Lär dig de mest effektiva formatet för just din bild!';
	$cardLink1 = "format.php";
	$cardLink2 = "link2";
	include 'includes/card.php';
?>



<?php include "includes/footer.php";?>
<!-- Dextop -->
<?php include 'includes/dHeader.php';?>
<div class="content">

	<div class="cardHolder">
		<?php
			$cardImage = "publicering_av_bilder.jpg";
			$cardTitle = "Publisering av bilder";
			$cardSubTitle = 'Regler kring publicering av dina och andras bilder på nätet.';
			$cardLink1 = "publishYourPictures.php";
			$cardLink2 = "link2";
			include 'includes/dCard.php';
		?>
		<?php
			$cardImage = "stealPics.jpg";
			$cardTitle = "Skydda dina bilder!";
			$cardSubTitle = 'Lär dig de mest effektiva sätten att skydda dina bilder mot stöld!';
			$cardLink1 = "protectYourImages.php";
			$cardLink2 = "link2";
			include 'includes/dCard.php';
		?>
	</div>
		<div class="cardHolder">
		<?php
			$cardImage = "publicering_av_bilder.jpg";
			$cardTitle = "Vilket format?";
			$cardSubTitle = 'Lär dig de mest effektiva formatet för just din bild!';
			$cardLink1 = "format.php";
			$cardLink2 = "link2";
			include 'includes/dCard.php';
		?>
	</div>



</div>

<?php
	$footerclass = "work";
	include 'includes/dFooter.php';
?>