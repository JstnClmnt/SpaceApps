<?php
	function initialize_frm_contact() {

		global $sampletext;

		echo "<script>";
		echo "function myMap() {";
		echo "	var mapProp= {";
    	echo "	center:new google.maps.LatLng(51.508742,-0.120850),";
    	echo "	zoom:10,";
		echo "};";
		echo "var map=new google.maps.Map(document.getElementById('map'),mapProp);";
		echo "}";
		echo "</script>";
		echo "<script src='https://maps.googleapis.com/maps/api/js?key=<!--Insert API Key-->&callback=myMap'></script>";

		echo "<section id='last' class='section'>";
		echo "	<div class='section-title'>";
		echo "		<font>Contact Us</font>";
		echo "	</div>";
		echo "	<div class='row'>";
		echo "		<div class='col-lg-4'>";
		echo "			<div class='side-text'>";
		echo "				<center><h3>Company Contact Details</h3></center>";
		echo "				<br>";
		echo "<center><h4>Contacts</h4></center>";
		echo "				<ul class='p-list'>";

		contacts_basic();

		echo "				</ul>";
		echo "<hr>";
		echo "<center><h4>Vicinity Map</h4></center>";
		echo "<div id='map' style='width:auto; height:40vh;'>";
		echo "</div>";
		echo "			</div>";
		echo "		</div>";
		echo "		<div class='col-lg-8 form-container'>";

		initialize_field_contact();		

		echo "		</div>";
		echo "	</div>";
		echo "</section>";
	}
?>