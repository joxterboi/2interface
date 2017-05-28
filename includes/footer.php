<div class="mFooter mOnly">
	<p>&copy; Joakim Kjellander 2017</p>
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
	<img src="icons/menu.svg">
	<form method="post">
		<input type="submit" name="close" id="test" style="margin-top: -77px;position: absolute;margin-left: 350px">
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
</body>
</html>