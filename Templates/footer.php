<?php

function initialize_footer(){

	global $company_contacts, $company_contacts_social, $copyright;
	$arraylength1 = count($company_contacts);
	$arraylength2 = count($company_contacts_social);

	echo "	<div class='footer bg-default'>";
	echo "	<div class='row'>";
	echo "		<div class='col-sm-3 footer-contents-box footer-contents'>";
	echo "			<img src='img/logo.png' class='center'>";
	echo "		</div>";
	echo "		<div class='col-sm-4 footer-contents-box footer-contents'>";
	echo "			<font><b>CONTACTS: </b></font>";
	echo "			<ul class='footer-link-list'>";
	for ($bm = 0; $bm < $arraylength1; $bm++){
		foreach ($company_contacts[$bm] as $vala){}
		echo "				<li class='footer-link'><img class='footer-link-icon' src='img/" . $vala . ".png'>&nbsp;" . $company_contacts[$bm][0] . "</li>";
	}
	echo "			</ul>";
	echo "		</div>";
	echo "		<div class='col-sm-4 footer-contents-box footer-contents'>";
	echo "			<font><b>VISIT US AT: </b></font>";
	echo "			<ul class='footer-link-list'>";
	for ($sm = 0; $sm < $arraylength2; $sm++){
		foreach ($company_contacts_social[$sm] as $valb){}
		echo "				<li class='footer-link'><a href=''><img class='footer-link-icon' src='img/" . $valb . ".png'>&nbsp;" . $company_contacts_social[$sm][0] . "</a></li>";
	}
	echo "			</ul>";
	echo "		</div>";
	echo "	</div>";
	echo "</div>";
	echo "</body>";
	echo "<script>$(window).scroll(function() {
  			if ($(document).scrollTop() > 50) {
    			$('nav').addClass('shrink-nav');
  			}
  			else {
    			$('nav').removeClass('shrink-nav');
    		}
    	});</script>";
	echo "<script src='https://unpkg.com/popper.js/dist/umd/popper.min.js'></script>";
	echo "<script src='js/bootstrap.js'></script>";
	echo "<script src='js/bootstrap.min.js'></script>";
	echo "<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>";
	echo "</html>";
}
?>