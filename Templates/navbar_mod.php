<?php
	function initialize_navm(){

		$navtabs = array("Home", "Data");
		$navtabs_direct = array("index.php", "input.php");

		echo "<nav class='navbar navbar-expand-lg bg-default'>";
		echo "	<a class='navbar-brand title' href='#banner'>Template 1</a>";
		echo "	<button id='btn-toggle' class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>";
		echo "		<span class='navbar-toggler-icon'></span>";
		echo "	</button>";
		echo "	<div class='collapse navbar-collapse' id='navbarSupportedContent'>";
		echo "		<ul class='navbar-nav mr-auto' id='ul_nav_large'>";
		for ($n = 0; $n < 2; $n++) {
			echo "<li class='nav-item'><a class='nav-link' href='$navtabs_direct[$n]'>$navtabs[$n]</a></li>";
		}
		echo "		</ul>";
		echo "		<ul class='navbar-nav mr-auto' id='ul_nav_small'>";
		for ($m = 0; $m < 2; $m++) {
			echo "<li class='nav-item'><a class='nav-link' href='$navtabs_direct[$m]' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false'>$navtabs[$m]</a></li>";
		}
		echo "		</ul>";
		echo "</div>";
		echo "</nav>";
	}
?>