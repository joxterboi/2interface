<div class="mFooter">
	<p>&copy; Joakim Kjellander 2017</p>
</div>


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
	<img src="icons/menu.svg">
	<form method="post">
		<input type="submit" name="close" id="test" style="margin-top: -77px;position: absolute;">
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