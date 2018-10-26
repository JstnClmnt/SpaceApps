<?php

	$sampletext = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pharetra diam vitae sem auctor, id suscipit libero posuere. Donec in malesuada tortor. Pellentesque sem dolor, consequat sit amet mollis eu, rhoncus et tortor. Fusce hendrerit, mi at imperdiet sagittis, magna nunc bibendum leo, nec ullamcorper neque velit nec nisi. Nullam quis quam quis sapien vulputate porta eu eget leo. Sed sapien lorem, cursus ut eleifend eu, cursus ac lorem. Aliquam tortor justo, auctor et libero in, pellentesque gravida mauris. Nunc consectetur est a lobortis euismod. Quisque hendrerit eros in laoreet finibus.";
	$newsletter = array("Articles", "Social", "Market");

	$orig_teams = array(
		0 => array(
			'clemente.jpg',
			'Christian Justine G. Clemente',
			'Project Manager',
			'University of Santo Tomas, BS Computer Science',
			'https://www.facebook.com/justine.clemente',
			'',
			''
		),
		1 => array(
			'luz.jpg',
			'John Albert P. Luz',
			'Developer',
			'University of Santo Tomas, BS Computer Science',
			'https://www.facebook.com/johnthisisnotmyemail',
			'',
			''
		),
		2 => array(
			'suarez.jpg',
			'Gabriel Hansley C. Suarez',
			'Developer',
			'University of Santo Tomas, BS Computer Science',
			'https://www.facebook.com/GabbieEz',
			'',
			'https://www.linkedin.com/in/gabbeehcs/'
		),
		3 => array(
			'chua.jpg',
			'Angela Clarisse C. Chua',
			'Data Analyst',
			'University of Santo Tomas, BS Applied Physics',
			'https://www.facebook.com/AngelaClarisseChua',
			'',
			''
		),
		4 => array(
			'sangalang.jpg',
			'James Karol B. Sangalang',
			'Data Analyst',
			'University of Santo Tomas, BS Electronics and Communications Engineer',
			'https://www.facebook.com/jameskarol.sangalang',
			'',
			''
		)
	);

	$company_contacts = array(
		0 => array(
			"tel. no.",
			"phone"
		),
		1 => array(
			"mail-1",
			"mail"
		),
		2 => array(
			"mail-2",
			"mail"
		),
		3 => array(
			"address",
			"location"
		)
	);
	
	$company_contacts_social = array(
		0 => array(
			"www.facebook.com/", 
			"fb"
		), 
		1 => array(
			"www.linkedin.com/",
			"li"
		),
		2 => array(
			"www.twitter.com/",
			"tw"
		),
		3 => array(
			"www.instagram.com/",
			"ig"
		)
	);
	$copyright = "&copy; All Rights Reserved 2018";

	$datacols = array('#', 'pl_hostname', 'pl_name', 'pl_pnum', 'pl_orbper', 'pl_orbsmax', 'st_teff', 'st_mass', 'st_rad', 'pl_eqt', 'pl_insol', 'pl_rade', 'pl_ratdor', 'pl_ratror', 'st_logg', 'st_dens', 'st_metfe', 'Probability of Not Habitable', 'Probability of Habitable', 'Results');

	$contributors = array();
?>