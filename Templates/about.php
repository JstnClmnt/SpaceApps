<?php
	function initialize_about(){
		global $sampletext;

		echo "<section id='intro' class='section'>";
		echo "	<div class='section-title'>";
		echo "		<font>About Us</font>";
		echo "	</div>";
		echo "	<div class='row img-container'>";
		echo "		<p align=\"center\" class='article-cont'><b>\"Mankind was born on earth, it was never meant to die here.\"(Interstellar,2014)</b></p>";
		echo "		<center>";
		echo "			<div class='row' style='width:100%;'>";
		echo "				<center><img class='img-in-body' src='img/chart.png' style='width:90vw; height:auto;'></center>";
		echo "			</div>";
		echo "		</center>";
		echo "		<article class='article-cont'>$sampletext</article>";
		echo "	</div>";
		echo "</section>";
	}
?>