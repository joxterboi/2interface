<div class="mMenu mOnly">
	<p id="mMenuTitle">Portfolio</p>
	<div class="divider" style="height: 1px;background-color: rgba(0,0,0,0.3);width: 90%;margin-left: 5%;"></div>
	<p id="mMenuSubTitle" class="mOnly">All pages</p>
	<ul>
		<li>
			<a href="index.php" id="mMenuItems"><img src="icons/home.svg"> Home</a>
			<a href="city.php" id="mMenuItems"><img src="icons/city.svg"> City</a>
			<a href="nature.php" id="mMenuItems"><img src="icons/nature.svg"> Nature</a>
			<a href="landscape.php" id="mMenuItems"><img src="icons/landscape.svg"> Landscape</a>
		</li>
	</ul>
	<a href="kontakt.php" style="text-decoration: none;"><p style="text-align: center;font-size: 30px;color: rgba(0,0,0,0.6);margin-top: 750px;">Kontakta oss här!</p></a>
</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Menu fuckery- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<div class="openMenu mOnly">
	<img src="icons/menu.svg">
	<form method="post">
	    <input type="submit" name="open" id="test" style="margin-top: -137px;position: absolute;margin-left: -35px">
	</form>
	
	<?php
	
	function openMenu()
	{
	   			echo "<style type='text/css'>
					.mMenu {
						width: 620px;
						animation-name: openMenuAnimation;
						animation-duration:0.4s;
						animation-timing-function: ease-in-out;
					}
					.closeMenu {
						display:block;
					}
					.openMenu {
						display:none;
					}

					@keyframes openMenuAnimation {
						from {width:0;}
						to {width:620px;}
					}
				</style>";
	}
	
	if(array_key_exists('open',$_POST)){
	   openMenu();
	}
	
	?>
</div>
<div class="closeMenu mOnly">
	<form method="post">
		<input type="submit" name="close" id="test" style="position: absolute;width: 67vw;min-height: 100vh;margin-top: -110px;overflow: hidden;">
	</form>
	
	<?php
	
	function closeMenu()
	{
	   			echo "<style type='text/css'>
					.mMenu {
						width: 0;
						animation-name: closeMenuAnimation;
						animation-duration:0.4s;
						animation-timing-function: ease-in-out;
					}
					.closeMenu {
						display:none;
					}
					.openMenu {
						display:block;
					}
					@keyframes closeMenuAnimation {
						from {width:620px;}
						to {width:0;}
					}
				</style>";
	}
	
	if(array_key_exists('close',$_POST)){
	   closeMenu();
	}
	
	?>
</div>