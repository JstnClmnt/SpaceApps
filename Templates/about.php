<?php

	include('instructions.php');

	function initialize_about(){

		echo "<section id='intro' class='section'>";
		echo "	<div class='section-title'>";
		echo "		<font>About Project</font><hr class='small'>";
		echo "	</div>";
		echo "	<div class='row'>";
		echo "		<p align=\"center\" class='article-cont'><b>\"Mankind was born on earth, it was never meant to die here.\"(Interstellar,2014)</b><br>

						<article class='article-cont'>The project is an open-source web-based application that aids the discovery of habitable planets. Using AI, the application can help scientists confirm if an exoplanet has the ability to sustain human life by predicting the probability whether or not a planet is habitable.</article>

						<article class='article-cont'>The algorithm is based on 14 properties of the planet and its host star that can determine a planet's habitability:
						<ul>
							<li> Orbital Period (days)</li>
							<li> Planet-Star Radius Ratio </li>
							<li> Fitted Stellar Density (g/cm^3) </li>
							<li> Planetary Radius (relative to Earth's radii) </li>
							<li> Orbital Semi-Major Axis (AU) </li>
							<li> Planet's Equilibrium Temperature (K) </li>
							<li> Insolation Flux (relative to Earth's Flux) </li>
							<li> Planet-Star Distance over Star Radius </li>
							<li> Number of Planets orbiting the Host Star </li>
							<li> Stellar Effective Temperature (K) </li>
							<li> Stellar Surface Gravity </li>
							<li> Stellar Metallicity (dex) </li>
							<li> Stellar Radius (relative to the Solar radii) </li>
							<li> Stellar Mass (relative to the Solar mass) </li>
						</ul>

							Source: <i>Occurrence and core-envelope structure of 1–4× Earth-size planets around Sun-like stars (2013).</i><br>

							Logistic Regression is used for the machine learning algorithm to meet the needs of the density estimation-based machine learning algorithm.</p>";

		echo "			<div class='row' style='width:90vw; text-align:center; margin-top:-20px;'>";
		echo "				<div class='col-lg-6' style='float:left;'><img class='img-in-body' src='img/chart.png' style='width:40vw; height:auto;'></div>
							<div class='col-lg-6' style='float:right;'><img class='img-in-body' src='img/0.png' style='width:40vw; height:auto;'></div>";
		echo "			</div>";
		echo "		";
		echo "	</div>";
		echo "</section>";
	}

	function initialize_about2(){

		global $orig_teams;

		echo "<section id='intro2' class='section'>";
		echo "	<div class='section-title'>";
		echo "		<font>About Founders</font><hr class='small'>";
		echo "	</div>";
		echo "	<div class='row'>";
		echo "	<article class='article-cont'>The project was originally developed as an entry to NASA's Space Apps Challenge under Team TAG-Galileo. It may not have been a winning output among all proposals that were submitted, but it was still satisfactory for the team because of the objectives of presenting something that could help scientist and more than that - the world. <br><br> TAG-Galileo is diverse when it comes to talking about who are in it. The team was composed of students from the University of Santo Tomas but from different colleges taking up different programs and courses.<br><br></article>";

		echo "	<article class='article-cont'>";

		for ($ot = 0; $ot < count($orig_teams); $ot++){

			echo "<div class='row origT'>";

			foreach ($orig_teams[$ot] as $otVal){}

			echo "<div class='col-lg-3 dpImg dpImgld' style='background-image:url(img/" . $orig_teams[$ot][0] . ");'>
				<div class='msgcapt'>
					<ul>
						<li><a href='" . $orig_teams[$ot][4] . "'><img src='img/fb.png' alt='fb'></a></li>
						<li><a href='" . $orig_teams[$ot][5] . "'><img src='img/tw.png' alt='tw'></a></li>
						<li><a href='" . $orig_teams[$ot][6] . "'><img src='img/li.png' alt='li'></a></li>
					</ul>
				</div>
			</div>";
			echo "<div class='col-lg-8 dpDesc'>";
			echo "<font class='name'>" . $orig_teams[$ot][1] . "</font><br>";
			echo "<font class='subtitle'>" . $orig_teams[$ot][3] . "</font><br>";
			echo "<font class='subtitle'>" . $orig_teams[$ot][2] . "</font><br><br>";
			echo "</div>";
			echo "</div>";

		}

		echo "</article>";
		echo "	</div>";

	}

	function otherproj(){

		global $contributors;

		echo "<section id='contrib' class='section'>";
		echo "	<div class='section-title'>";
		echo "		<font>Other Contributors</font><hr class='small'>";
		echo "	</div>";
		echo "	<div class='row'>";
		echo "		<article class='article-cont'>";

		if (count($contributors) > 0) {
			
		}
		else {
			echo "<h3>We are currently looking for contributors who can help us develop our open source web application to further enhance its usefulness towards the fields of science and mathematics.</h3><br>";
		}

		instruct();

		echo "	</article></div>";
		echo "</section>";
	}
?>