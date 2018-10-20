<?php

	function contacts_basic() {

		global $company_contacts_social, $company_contacts;
		$arraylength1 = count($company_contacts);

		for ($bm = 0; $bm < $arraylength1; $bm++){
			foreach ($company_contacts[$bm] as $vala){}
			echo "<li>" . $company_contacts[$bm][0] . "</li>";
		}
	}

	function contacts_social() {
	
		global $company_contacts_social;
		$arraylength2 = count($company_contacts_social);

		for ($bm = 0; $bm < $arraylength2; $bm++){
			foreach ($company_contacts_social[$bm] as $vala){}
			echo "<li>" . $company_contacts_social[$bm][0] . "</li>";
		}
	}
?>