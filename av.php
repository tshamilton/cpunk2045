<?php
function aug_reality() {
	$ar_type = array(
		'Direction',
		'Logo Storm',
		'Assistant',
		'Blipvert',
		'Political',
		'Promotion',
		'Advice',
		'Menu',
		'Filter',
		'Prohibition'
	);

	$ar_aesthetic = array(
		'Typographic Overlays',
		'Bright And Garish Glyphs',
		'Animated Persona',
		'Emotive Imagery',
		'Rapid Motion',
		'Distracting',
		'Reassuring Infomemes',
		'Unobtrusive And Integrated',
		'Fantastical And Otherworldly',
		'Bold/Dramatic/Authorative'
	);

	$ar_image_style = array (
		'Crisp/Bright',
		'Animated 3-D',
		'High resolution',
		'Sophisticated',
		'Cheap/Low Resolution',
		'Clear, Yet Subtle',
		'Technical/Sci-fi',
		'Surreal/Immersive/Arty',
		'Flat Vector Graphics'
	);

	$out = array(
		'ARType' => $ar_type[array_rand($ar_type)],
		'ARAesthetic' => $ar_aesthetic[array_rand($ar_aesthetic)],
		'ARImageStyle' => $ar_image_style[array_rand($ar_image_style)]
	);
	if ($out['ARType'] == 'Blipvert') { $out['ARBlipvert'] = blipverts(); }
	return $out;
}
function blipverts($sponsor = 0) { /* If sponsor == 1, then it only returns a randomly selected company name */
	$blip_company = array(
		'No-Lo-Go',
		'Matsushira',
		'Al-Anwar',
		'Horizon',
		'De Santo',
		'Ellis-Itami',
		'Osprey',
		'Numan-Lloyd',
		'Modus',
		'Cortex',
		'Arasaka',
		'Militech',
		'Biotechnica',
		'Orbital Air',
		'Sampao',
		'Blume',
		'Tidis',
		'Braun',
		'Aztechnology',
		'Diktat',
		'Memorize',
		'Maas Biolabs',
		'Dynalar',
		'Kiroshii',
		'Kang Tao',
		'Tessier-Ashpool'
	);
	$blip_range = array(
		'Phoenix',
		'Omni',
		'AEX',
		'Luxuria',
		'Solaris',
		'Rapide',
		'Hydra',
		'Eco+',
		'Nexus',
		'Platina',
		'Naturale'
	);
	$blip_product = array(
		'Cyber/Bio/Nanoware',
		'Car/Motorcycle/AV',
		'Foodstuff/Drink',
		'Clothing/lifestyle',
		'Personal Service',
		'Computing/Comms',
		'Personal Defense',
		'Pharmaceuticals',
		'Cosmetics/Scent',
		'Travel/Vacation'
	);
	$blip_style = array(
		'Loud Hard Sell',
		'Cartoony/Manga',
		'Sexualised',
		'Sophisticated',
		'Abstract',
		'Humorous',
		'Genderised',
		'Cheap',
		'Exotic/Arty',
		'Aspirational',
		'Minimalist',
		'Retro'
	);

	if ($sponsor) {
		return $blip_company[array_rand($blip_company)];
	}
	else {
		return array('BlipCorp' => $blip_company[array_rand($blip_company)], 'BlipName' => $blip_range[array_rand($blip_range)], 'BlipProduct' => $blip_product[array_rand($blip_product)], 'BlipStyle' => $blip_style[array_rand($blip_style)]);
	}
}
function big_screens($no_loop = 0) {
	$contents = array(
		'Time/Date/Weather/Lotto',
		'Time/Date/Weather/Lotto brought to you by '.blipverts(1),
		'Latest news headlines &amp; lottery results',
		'Latest news headlines &amp; lottery results brought to you by '.blipverts(1),
		'Video gaming event',
		'Highlights from major sporting event',
		'System error message/connection failure',
		'Infomercial/Advertainment',
		'Weather forecast/air quality stats',
		'Weather forecast/air quality stats brought to you by '.blipverts(1),
		'Pornography',
		'Music videos or movie trailers',
		'Traffic information',
		'Traffic information brought to you by '.blipverts(1),
		'Live feed of sporting event',
		'Live feed of sporting event brought to you by '.blipverts(1),
		'Broken',
		'Split screens'
	);

	if ($no_loop) {
		$out = $contents[abs(array_rand($contents)-1)];
	}
	else {
		$out = $contents[array_rand($contents)];
	}
	switch($out) {
		case('Broken'): $out = array('WouldShow' => $contents[array_rand($contents)], 'Error' => broken_tech()); break;
		case('Split screens'):
			$out = array();
			$scr = rand(1,3);
			while ($scr) {
				$out['Screen '.$scr] = big_screens(1);
				$scr -= 1;
			}
			break;
		case('Infomercial/Advertainment'):	$out = blipverts();
	}

	return $out;
}

?>
