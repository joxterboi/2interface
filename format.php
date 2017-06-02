<?php
	$pageTitle = "Format";
	$pageColor = "#8BC34A";
	include 'includes/header.php';
?>
<?php include "includes/menu.php";?>

<?php include "includes/footer.php";?>
<!-- Dextop -->
<?php include 'includes/dHeader.php';?>

<?php
	$Ltitle = "Vilket format är det bästa för just din bild?";
	$Ltext = 'Det finns ett par "regler" för vilket format man borde använda på en viss bild. Alla de vanliga formaten för bilder har sina för och nackdeler. <br><br>Det vanligaste formatet är .jpg. JPG är ett format som är mycket litet och är det  bästa för ett färgfotografi. Nackdelar med detta format är att skarpa linjer kompremeras  mycket dåligt och det finns ingen så kallad "alfakanal" det vill säga information om transparans.<br><br>För att få med transparans information så måste du använda .png. PNG är ett format som är större än jpg men är bäst kvalite. För publicering på webben börjar detta bli en standard. Nu förtiden behöver man inte bry sig om hur stor plats ens webbplats tar lika mycket som man behövde för 10år sedan när maskinerna man andvända för att se webbplatsen var långsammare och hade långsammare internethastighet.<br><br>Om du vill spara ett piktogram som inte innehåller så många färger så är det .gif eller .svg som gäller. En SVG eller Scalible Vector Graphics är inte ett bildformat i säg. Filen innehåller bara information om hur linjer är positionerade mot varandra. Detta gör så att de är av en oändlig upplösning och tar väldigt lite plats. Problemet är att så fort det är mer än ett par färger börjar formatet bli ineffektivt. Gif däremot har inte oändlig upplösning men den kan du ha upp till 256 färger och du kan även göra animeringar med detta format. Det behåller även skarpa linje skarpa pga. sitt sett som det komprimerar bilden.';
	include 'includes/lCard.php';
?>

<?php
	$footerclass = "down";
	include 'includes/dFooter.php';
?>