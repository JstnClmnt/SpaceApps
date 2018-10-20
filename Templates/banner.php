<?php
	function initialize_banner() {
		
		global $sampletext;

		echo "<div class='wrapper'>";
		echo "<section id='banner'>";
		echo "	<div class='container'>";
		echo "		<div class='row'>";
		echo "			<div class='col-md-12'>";
		echo "				<div class='block'>";
		echo "					<h1>INTRODUCTION</h1>";
		echo "					<h2>$sampletext;</h2>";
		echo "					<div class='buttons'>";
		echo "						<a href='#intro' class='btn-learn bn-second-btn'>Learn More... </a>";
		echo "					</div>";
		echo "				</div>";
		echo "			</div>";
		echo "		</div>";
		echo "	</div>";
		echo "</section>";
		echo "</div>";
	}
?>