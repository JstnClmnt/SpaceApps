<?php

function initialize_nav(){

		$navtabs = array("Home", "About", "Contributions", "Data");
		$navtabs_direct = array("#banner", "#intro", "#contrib", "input.php");
		
		echo "<nav class='navbar navbar-expand-lg bg-default' id='navmain'>";
		echo "	<a class='navbar-brand title' href='#banner'>Our New Home</a>";
		echo "	<button id='btn-toggle' class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>";
		echo "		<span class='navbar-toggler-icon'></span>";
		echo "	</button>";
		echo "	<div class='collapse navbar-collapse' id='navbarSupportedContent'>";
		echo "		<ul class='navbar-nav mr-auto' id='ul_nav_large'>";

		for ($n = 0; $n < count($navtabs); $n++) {
			echo "<li class='nav-item'><a class='nav-link' href='$navtabs_direct[$n]'>$navtabs[$n]</a></li>";
		}

		echo "		</ul>";
		echo "		<ul class='navbar-nav mr-auto' id='ul_nav_small'>";

		for ($m = 0; $m < count($navtabs); $m++) {
			echo "<li class='nav-item'><a class='nav-link' href='$navtabs_direct[$m]' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false'>$navtabs[$m]</a></li>";
		}

		echo "		</ul>";
		echo "</div>";
		echo "</nav>";

	}
?>