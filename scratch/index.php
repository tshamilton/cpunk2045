<?php
function rubble() {
	$activity = array(
		'Homeless camp',
		'Nomad parking',
		'Street walkers looking for customers',
		'Gangers keeping a low profile',
		'Rockerboy shooting a video',
		'Media-type filming area',
		rand(1,3).' dead bodies',
		'Neighbourhood kids playing gangs',
		'Neighbourhood kids destroying something',
		rand(1,5).' corp-types absolutely not completing a shady deal here.',
		'Corp work crew demolishing wreckage',
		'Prison work crew demolishing wreckage',
		'Community group reclaiming land',
		'Disused',
		'Unoccupied',
		'Empty',
		'Forgotten'
	);
	$space = array(
		'Abandoned '.rand(2,7).'-story office building.',
		'Blown out apartment block',
		'Waste land, just rough terrain',
		'Waste land, lingering smell',
		'Former building, low walls still remain',
		'Half-collapsed building',
		'Freshly fenced-off',
		'Fenced-off long ago, many holes in fence and sheeting'
	);

	$out = array();

	$out['Space'] = $space[array_rand($space)];
	if (rand(1,10) > 7) {
		$out['Activity'] = $activity[array_rand($activity)];
	}
	if ($out['Space'] == 'Waste land, lingering smell') {
		$out['Smell'] = smells();
	}

	return $out;
}
function smells($count = 0) {
	$environmental_smells = array(
		'Cigarette Smoke',		'Cheap Perfume',		'Expensive Cologne',		'Exhaust Fumes',
		'Stale Refuse',			'Urine',				'Vomit',					'Burning Plastic',
		'Ash',					'Acrid Chemicals',		'Cordite',					'Blood',
		'Wet Hair',				'Motor Oil',			'Faeces',					'Soda Pop Sweetness',
		'Noodles',				'Rubber',				'Burnt Meat',				'Dirty Sneakers',
		'Fried Food',			'Beer',					'Perfumed Bleach',			'Body Odour',
		'Varnish',				'Insecticide',			'Soap',						'Sulphur',
		'Hairspray',			'Printed Polyamides',	'Hydraulic Fluid',			'Coffee',
		'Resin',				'Antiseptic',			'Candy',					'Mint',
		'Salt',					'Tea',					'Fresh Sweat',				'Infected Tissue',
		'Paint',				'Mold & Mildew',		'Baby Powder',				'Acid',
		'Feet',					'Cinnamon',				'Leather',					'Lemon Zest',
		'Damp',					'Rot',					'Overheated Circuit Board',	'Cigars',
		'Floral Scent',			'Pizza',				'Spices',					'Lavender',
		'Sewage',				'Pine',					'Crack Cocaine',			'Cat Piss',
		'Gas',					'Latex',				'French Fries',				'New Cyberlimb Smell',
		'Sex',					'Menthol',				'Cheese',					'Wet Concrete',
		'Disinfectant',			'Polythene',			'Nail Varnish',				'Whiskey',
		'Coconut Oil',			'Vinyl',				'Wine',						'Acetone',
		'Cookies',				'Ammonia',				'Biodiesel',				'Polish',
		'Printer Toner',		'Dust',					'Glass Cleaner',			'Musty',
		'Opiates',				'Raw Meat',				'Laminate',					'Weed/Skunk',
		'Drains',				'Thinners',				'Old Food',					'Incense',
		'Fused Wiring',			'Lube',					'Sour Milk',				'Garlic',
		'Alcohol Sanitiser',	'Cheap Aftershave',		'Gun Oil'
	);

	$out = array();

	if ($count == 0) {
		$x = rand(1,100);
		($x >= 85) ? $count = 2 : $count = 1;
	}

	while ($count) {
		$out['smell'.$count] = $environmental_smells[array_rand($environmental_smells)];
		$count -= 1;
	}
	return $out;	
}
function health_hazard() {
	$symptom_list = array(
		'Difficulty Breathing',
		'Lesions/Redness/Lumps',
		'Immunodeficiency',
		'Lethargy/Weight Loss',
		'Flaky/Spots/Blistersn',
		'Hair Loss/Discolouration',
		'Unpleasant Odour',
		'Vomiting/Diarrhea',
		'Silvery Grey Emissions',
		'Red Watery Eyes/Painful'
	);

	$source_list = array(
		'Bad Air/Pollutants/Smoke',
		'Elevated UV levels/Toxic Rain',
		'Pollutants/Waste',
		'Vitamin Deficiency/Junkfood',
		'Pollutants/Chemical Soup',
		'Pollutants/Waste',
		'Pollutants/Industrial Run-off',
		'Junkfood/Pollutants/Toxins',
		'Radiation',
		'Bad Air/Pollutants/Toxins'
	);

	$potential_list = array(
		'Emphysema',
		'Skin Cancer',
		'Toxic Shock',
		'Malnutrition',
		'Messed Up Skin',
		'Alopecia',
		'BO/Body Funk',
		'Gastric Catastrophe',
		'Rad/Chem Burns',
		'Burning Eyes/Nasal/Mouth'
	);

	return array('Symptom' => $symptom_list[array_rand($symptom_list)], 'Source' => $source_list[array_rand($source_list)], 'Potential' => $potential_list[array_rand($potential_list)]);
}
function legacy_infrastructure() {
	$leg_infra = array(
		'Decommissioned subway tunnel, accessible from building, and vice versa',
		'Off site telecoms junction box, once served the local neighborhood',
		'Condemned slum quarantined with concrete seal, or biohazard containment zone',
		'Interconnected basements and foundation voids, poorly secured',
		'Sealed sub-basement parking for previous building, with still functioning elevator',
		'Forgotten floor following remodelling work, accessible through crawl space',
		'Disused loading or maintenance bay, with hidden goods elevator',
		'Undocumented Cold War bomb shelter or bunker network',
		'Exposed air venting system, leading to moth-balled sub-basement laboratory',
		'Unused utilities still feed into buildings, accessible from empty sewerage system'
	);

	return $leg_infra[array_rand($leg_infra)];
}
function broken_tech() {
	$actual_break = array(
		'Actual physical damage',
		'Screen broken',
		'Screen broken by gunfire',
		'Overzealous defensive software',
		'Harbours malicious virus',
		'Being assessed by sysadmin',
		'Layers of legacy programming',
		'Randomly goes into standby mode',
		'Badly formatted AR plug-in',
		'Installing software upgrade',
		'Hacker currently querying system',
		'ROM overloaded by surplus apps',
		'Recently reset to factory defaults',
		'Inquisitive low-grade AI assistant',
		'Requires biometric verification',
		'Auto-downloads to linked device',
		'Net connection keeps dropping out',
		'Incompatible operating system',
		'Pop-up pandemic',
		'Software conflicts, glitchy',
		'Processor overclocked',
		'Active ‘vigilance suite&quot; warns user',
		'Tendency to stall or hang',
		'Malware sifting for linked devices',
		'Missing system tools/utilities',
		'Errors with user interface display',
		'Physically damaged, or faulty',
		'Non-standard reprogramming',
		'D6 software subroutines triggered',
		'Logs recently tampered with',
		'Overheating (heat sink failing)',
		'Heavily encrypted for device type',
		'Constant security warnings',
		'Non-intuitive user interface',
		'Hogging the local bandwidth',
		'Prone to system crashes',
		'Uses badly patched legacy code',
		'File sharing denied',
		'Configured for periodic back-up',
		'Insufficient internal battery life',
		'Reveals a scheduled exploit (short)',
		'&quot;Access Denied&quot; system file errors',
		'Reboots the system at random',
		'Requires admin password',
		'Can only handle minimal processes',
		'User interface in foreign language',
		'Discomforting feedback',
		'3rd party updaters need unchecking',
		'Menu options it shouldn&quot;t have',
		'In the process of being stolen',
		'Running slow, searching for updates',
		'Feeds log and data to manufacturer',
		'Tagged and monitored by rogue AI',
		'Nothing, just dead',
		'Nothing, just dead',
		'Nothing, just dead'
	);

	return $actual_break[array_rand($actual_break)];
}
function gang() {
	global $aux;

	$gang_name_a = array(
		'Cortical',		'Subway',		'Radical',		'Binary',
		'Fragile',		'Hate',			'Electric',		'Mobile',
		'Endgame',		'Bubblegum',	'Biological',	'Shaolin',
		'Chrome',		'Polymer',		'Rudeboy',		'Terminal',
		'Shadow',		'Subsonic',		'Chemical',		'Chosen',
		'Toxic',		'Steel',		'Black',		'Cannibal',
		'Panzer',		'Gun',			'Disposable',	'Iron',
		'Speedball',	'AK',			'Liquid',		'Junky',
		'Instant',		'Zone',			'Red',			'Devils',
		'Remodelled',	'Faceless',		'Vampire',		'Crosstown',
		'Blue',			'Spirit',		'Nomad',		'Hyraulic',
		'Fractal',		'Brain',		'Screaming',	'Lucid',
		'Napalm',		'Happy'
	);

	$gang_name_b = array(
		'Dogs',			'Assassins',		'Dragons',			'Prophets',
		'Machine',		'Society',			'Freaks',			'Girls',
		'Militia',		'Atrocity',			'Impulse',			'Rippers',
		'Savages',		'Riot',				'Apocalypse',		'Storm',
		'Soldiers',		'Cult',				'Loas',				'Kidz',
		'Ghosts',		'Church',			'Technicals',		'Clowns',
		'Fists',		'Sharks',			'Boys',				'Maniacs',
		'Ultimates',	'Legends',			'Killaz',			'Bullets',
		'Revolvers',	'Bosses',			'Thugs',			'Babies',
		'Army',			'Fanatics',			'Daddies',			'Chaos',
		'Hammer',		'Method',			'Clan',				'Terror',
		'State',		'Wasters',			'Shards',			'Moderns',
		'Harvest',		'Losers'
	);

	$gang_type = array(
		'Booster',
		'Chromer',
		'Combat',
		'Drug',
		'Eco',
		'Exotic',
		'Go',
		'Guardian',
		'Netrunner',
		'Nihilist',
		'Nostalgia',
		'Party',
		'Political',
		'Poser',
		'Prank',
		'Puppet',
		'Racist',
		'Taggers',
		'Holy',
		'Gender'
	);

	$gang_style = $gang_type[array_rand($gang_type)]."/".$gang_type[array_rand($gang_type)]." (".$gang_type[array_rand($gang_type)].")";

	$name = rand(1,100);
	switch($name){
		case ($name <= 15): $gang_name = "The ".$gang_name_a[array_rand($gang_name_a)]; break;
		case ($name <= 85): $gang_name = $gang_name_a[array_rand($gang_name_a)]." ".$gang_name_b[array_rand($gang_name_b)]; break;
		default:			$gang_name = "The ".$gang_name_b[array_rand($gang_name_b)]; break;
	}

	$g_age = rand(1,10);
	switch($g_age) {
		case ($g_age <= 4): $gang_age = "New, ".rand(1,12)." months."; $g_age = -2; break;
		case ($g_age <= 7): $gang_age = "Young, ".rand(1,4)." years."; $g_age = -1; break;
		case ($g_age <= 9): $gang_age = "Established, ".rand(5,10)." years."; $g_age = 0; break;
		default:			$gang_age = "Old, ".rand(10,20)." years."; $g_age = 1; break;
	}

	$g_size = rand(1,10) + $g_age;
	switch($g_size) {
		case ($g_size <= 0):	$gang_size = 'Tiny, '.rand(1,5).' members.'; $g_size = -3; break;
		case ($g_size == 1):	$gang_size = 'Small, '.rand(5,10).' members.'; $g_size = -2; break;
		case ($g_size <= 5):	$gang_size = 'Medium, '.rand(11,25).' members.'; $g_size = -1; break;
		case ($g_size <= 8):	$gang_size = 'Large, '.rand(26,50).' members.'; $g_size = 0; break;
		case ($g_size <= 9):	$gang_size = 'Huge, '.rand(51,100).' members.'; $g_size = 1; break;
		default:				$gang_size = 'Gigantic, '.rand(101,500).' members.'; $g_size = 2; break;
	}

	$g_turf = rand(1,10) + $g_size;
	switch($g_turf) {
		case ($g_turf <= 0):	$gang_turf = 'No turf'; $g_turf = -4; break;
		case ($g_turf <= 2):	$gang_turf = 'A couple of buildings'; $g_turf = -3; break;
		case ($g_turf <= 5):	$gang_turf = 'One city block'; $g_turf = -2; break;
		case ($g_turf <= 8):	$gang_turf = '2-3 city blocks'; $g_turf = -1; break;
		case ($g_turf <= 9):	$gang_turf = '4-6 city blocks'; $g_turf = 0; break;
		default:				$gang_turf = '7-10 city blocks'; $g_turf = 1; break;
	}

	$g_inf = rand(1,10) + $g_turf;
	switch($g_inf) {
		case ($g_inf <= 3):		$gang_influence = 'No external growth, unknown outside locale'; break;
		case ($g_inf <= 4):		$gang_influence = 'Influence in nearby city/town'; break;
		case ($g_inf <= 5):		$gang_influence = 'Influence in 2-3 cities in region'; break;
		default:				$gang_influence = 'Influence in 4-6 cities nationwide'; break;
	}

	$aux['Local Gang - '.$gang_name] = array('GangName' => $gang_name, 'GangType' => $gang_style, 'GangAge' => $gang_age, 'GangSize' => $gang_size, 'GangTurf' => $gang_turf, 'GangInfluence' => $gang_influence );

	return array('GangName' => $gang_name, 'GangType' => $gang_style);
}
function law_and_order() {
	$law_level = rand(1,10);
	$supp_mod  = 0;

	switch($law_level) {
		case($law_level <= 7):	$law_type = "Uniformed Officers"; break;
		case($law_level <= 9):	$law_type = "Plainclothes Officers"; $supp_mod + 1; break;
		default: 				$law_type = "Tactical Unit"; $supp_mod + 2; break;
	}
	$law_dept = rand(1,10);
	switch($law_dept) {
		case($law_dept <= 4):	$law_department = "City or Corp Police"; break;
		case($law_dept <= 6):	$law_department = "Corporate Security"; break;
		case($law_dept <= 8):	$law_department = "Private Security Company"; break;
		case($law_dept == 9):	$law_department = "Specialised Security Service (Bomb, Customs, Etc.)"; $supp_mod + 1; break;
		default:				$law_department = "Major Law Enforcement (FBI/Interpol)"; $supp_mod + 1; break;
	}
	$law_response = rand(1,10);
	switch($law_response) {
		case($law_response <= 6):	$law_response = "Enough members present"; break;
		case($law_response <= 9):	$law_response = "Getting out of hand, requesting backup"; break;
		default:					$law_response = "Overwhelmed"; break;
	}
	$law_job = rand(1,10);
	switch($law_job) {
		case($law_job == 1):	$law_job = "Approaching, or have just arrested, suspect(s)"; break;
		case($law_job <= 3):	$law_job = "Performing a street patrol, area or building search or conducting vehicle search"; break;
		case($law_job == 4):	$law_job = "Conducting an operation - raid, stake out, goods seizure"; break;
		case($law_job == 5):	$law_job = "Dealing with an apparent hostage situation or a suspect device"; break;
		case($law_job <= 7):	$law_job = "Stopping citizens for questioning or performing stop-and-search operation"; break;
		case($law_job <= 9):	$law_job = "In pursuit of suspect, either on foot or in vehicles"; break;
		default:				$law_job = "Cordoning off the area (searching for suspect/securing a crime scene)"; break;
	}
	$law_backup = rand(1,10) +  $supp_mod;
	switch($law_backup) {
		case($law_backup <= 4):	$law_backup = rand(1,6)."x Support Drones - Cameras, Tasers, Flechette Weapons"; break;
		case($law_backup <= 6):	$law_backup = rand(1,3)." Uniformed Officers - ".rand(1,3)." Patrol Cars, Flak Jackets, SMGs/Shotguns"; break;
		case($law_backup <= 8):	$law_backup = "SWAT Team - Heavy/Hard Armour, Combat Rifles, Augmented"; break;
		case($law_backup == 9): $law_backup = "Heavy Support Remote - Teleoperated Walker, HMG and/or Missiles"; break;
		default:				$law_backup = "Powered Armour Suit - Heavy Weapon, ECM, Grenade Launchers"; break;
	}
	$law_backup .= ". Available in ".rand(1,6)." minutes.";

	return array('LawType' => $law_type, 'LawDepartment' => $law_department, 'LawControl' => $law_response, 'LawJob' => $law_job, 'LawBackup' => $law_backup);
}
function sights() {
	$sights = array(
		'Armoured cops bundle violently reluctant vagrant into ERA-plated squad car,',
		'A bus shelter made entirely of screens showing flashy commercials (see below)',
		'Searchlights playing across the cloud cover and projecting branding (see below)',
		'A brightly lit aerocab taking off in a cloud of exhaust fumes, rainwater and trash',
		'AC vents in the sidewalk emitting a thick cloud of vapour',
		'A heavy rainwater cascade falls from damaged guttering',
		'every underlit face on the street is concentrating solely on their phone',
		'An ancient looking geriatric lopes past strapped into a linear assistance frame',
		'A vid-blogger in full, wearable array, blatantly recording the scene',
		'The nearest building has an intermittently flickering security light',
		'Your view is blocked by a lumbering hi-vis recycling collection truck',
		'A cluster of kids vaping, LED-lit clouds from under designer pollution hoods',
		'A pair of bicycle couriers race one another through crawling traffic',
		'Gritty, chemical infused sediment sloughing off a nearby rooftop',
		'A large building-mounted flatscreen showing... (see table top right)',
		'Unattended roadworks, the area coned off and lit for safety for no good reason',
		'An automated noodle vending truck, jingle playing, folds open and deploys nearby',
		'A flock of scabrous-looking pigeons suddenly taking flight',
		'A busy metro platform, full to capacity with disgruntled, rain-soaked commuters',
		'An abandoned cybernetic limb lies forlornly by the kerb',
		'Animated street art that twists and turns across two adjoining walls',
		'Jittery homeless people, washing vehicle windscreens before the lights change',
		'The flashing orange lights of a fat, dirty-yellow street sweeping remote',
		'A nearby dataterm is missing it&quot;s screen and is stuffed with trash',
		'Your way is barred by a precarious heap of obsolete electronics',
		'The rainbow incandescence of oil on a large puddle of dirty water',
		'The substandard cheapcrete is pockmarked by years of corrosive rains',
		'A loaded pizza delivery drone hovering about three meters above the ground',
		'A wage-slave arguing with her phone&quot;s onboard AI, before breaking down crying',
		'An orange, multi-limbed, window cleaning remote clambers up the building facade',
		'A long, silent queue for a blocky, exhaust stained, kerb-side euthanasia Booth™',
		'All the nearby street signs are gang-tagged over to the point of being useless',
		'Filthy red and white plastic Jersey barriers block most of the sidewalk',
		'An overpass or skywalk covered in colourful advertising animatics (see below)',
		'There are crowds of fast moving people swarming absolutely everywhere',
		'The scorched shell of a gutted vid-phone kiosk',
		'Pedestrians flooding across the nearest intersection, en masse, both ways',
		'A group of screeching street kids running along the overhead rail lines',
		'A thick pea soup fog rolling down the streets and alleyways',
		'All the street lights for this entire block just went out',
		'Rivers of rain-borne trash race along in the choked gutters',
		'A small crowd of people gawping upwards at a potential jumper',
		'A tight formation of drones races down the street, just above head height',
		'A group of sex workers on a nearby street corner, approaching cars (see P21)',
		'An out-of-order ATM threatens violent action to passers by who stray too close',
		'Unnervingly, there is absolutely no-one about',
		'A pedicab operator struggling with heat exhaustion or dehydration (see P20)',
		'A row of vendomats coated in layers of gang tags, going back many years',
		'A GeV taxi takes a corner hard, throwing up polluted water, trash and crud (see P20)',
		'An energetic street preacher giving a digital presentation on Cybernetic Jesus&trade;',
		'The sidewalk consists of slabs of flickering screens, showing adverts (see below)'
	);

	return array('Sight' => $sights[array_rand($sights)]);
}
function sounds() {
	$sounds = array(
		'Building Alarm',				'Barking Dogs',				'Incoherent Shouting',			'A Single Gunshot',
		'Ventilation System',			'Car Doors Slamming',		'Loud Television',				'Children',
		'Aerocar Overhead',				'Catchy Corporate Jingle',	'The Screech Of Tires',			'Pedestrian Crosswalk',
		'Rattling Cans',				'Heavy Gunfire',			'Sobbing',						'Channeled Winds',
		'Hum Of A Cleaning-Bot',		'Buzzing Of Flies',			'Rattle Of Chains',				'Arcade Machines',
		'Breaking Glass',				'Text Alert',				'An RPG Launching',				'Sirens Inbound',
		'Running',						'Subway Rumble',			'A Loud Argument',				'Drill Or Power Saw',
		'Road Traffic Accident',		'Hellfire Street Preacher',	'Loud Energetic Music',			'Laughter',
		'Hydraulics',					'A Reversing Vehicle',		'An Annoying Ringtone',			'Sexual Activity',
		'Police Radio Chatter',			'Loose Door/Gate',			'Group Chanting',				'Popular Theme Tune',
		'Chesty Coughing',				'Vehicle Alarm',			'Steady Footsteps',				'Automated Warning',
		'Beating Of Heavy Rain',		'Garbled Loudspeaker',		'Exchange Of Gunfire',			'Background Muzak',
		'Gutteral Screaming',			'A Call To Prayer',			'Loose Piping',					'Helicopter Overhead',
		'The Buzz Of Neon',				'A Revving Engine',			'An Impromptu Rave',			'Water Pump',
		'Road Works',					'RWNJ Talk Radio',			'Foreign Busker',				'Ice Cream Truck',
		'Distant Explosion',			'Car Horn',					'UAV/Drone Motor',				'Tumbling Trash Cans',
		'Evangelical Broadcast',		'Very Heavy Transport',		'Running Water',				'Drunk Singing',
		'Skateboards',					'Tattoo Gun',				'Rolling Cans',					'Obvious Porno',
		'Riot Or Demonstration',		'Overhead Train',			'Cats Fighting',				'Shrill Whistling',
		'Bug Zapper',					'Street Hawker',			'Car Chase',					'Chilling War Cry',
		'Motorcycles',					'Crackle Of Flames',		'Door Buzzer',					'An Anguished Cry',
		'Sneaker Squeak',				'Scraping Metal',			'Splashing',					'Noisy Printer',
		'Laser Fire',					'Jingle Of Keys',			'Quiet Conversation',			'Sirens Outbound',
		'Aerocar Landing',				'Frying Food',				'A Brawl',						'Doors Slamming',
		'Advertisments',				'Thunder',					'Hissing White Noise'
	);

	return array('Sound' => $sounds[array_rand($sounds)]);
}
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

	$out = array('ARType' => $ar_type[array_rand($ar_type)], 'ARAesthetic' => $ar_aesthetic[array_rand($ar_aesthetic)], 'ARImageStyle' => $ar_image_style[array_rand($ar_image_style)]);
	if ($out['ARType'] == 'Blipvert') { $out['ARBlipvert'] = blipverts(); }
}
function blipverts() {
	$blip_company = array(
		'No-Lo-Go',
		'Matsushira',
		'Al-Anwar',
		'Horizon',
		'De Santo',
		'Ellis-Itami',
		'Osprey',
		'Numan-lloyd',
		'Modus',
		'Cortex',
		'Arasaka',
		'Militech',
		'Biotechnica',
		'Consolidated',
		'Orbital Air',
		'Sampao',
		'Blume',
		'Tidis',
		'Braun'
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

	return array('BlipCorp' => $blip_company[array_rand($blip_company)], 'BlipName' => $blip_range[array_rand($blip_range)], 'BlipProduct' => $blip_product[array_rand($blip_product)], 'BlipStyle' => $blip_style[array_rand($blip_style)]);
}
function big_screens($no_loop = 0) {
	$contents = array(
		'Time/Date/Weather/Lotto',
		'Latest news headlines &amp; lottery results',
		'Video gaming event',
		'Highlights from major sporting event',
		'System error message/connection failure',
		'Infomercial/Advertainment',
		'Weather forecast/air quality stats',
		'Pornography',
		'Music videos or movie trailers',
		'Traffic information',
		'Live feed of sporting event',
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
function building() {
	$out = array();
	$block = array(
		'Pharmacy',								'Consumer Electronics',						'Art Dealer/Gallery',
		'Auto/Robotics Repair',					'Storage Units',							'Warehouse',
		'Legal Firm',							'Religious Building',						'Capsule Hotel',
		'Data Storage Facility',				'Cheap Housing Project',					'Grocery Store',
		'Elevated Rail',						'Road Overpass',							'Fast Food Franchise',
		'Police Precinct',						'School/College',							'Government Building',
		'Garage',								'Parking Block',							'Office Block',
		'Public Transport Hub',					'Hospital',									'Clinic',
		'Department Store',						'Body Augmentation Clinic',					'Luxury Apartments',
		'New Media Company',					'Industrial/Factory',						'Security Tech',
		'Vehicle Showroom',						'Fashion Boutique',							'Commercial Cybernetics',
		'Mall',									'VR-cade / Braindance Shop',				'Gym',
		'Leisureplex',							'Apartment Block/Hab Stack',				'Nightclub',
		'Underpass',							'Hotel',									'Ripperdoc',
		'3D Print Fabrication',					'Courier/Bulk Transport Company',			'Bar',
		'Restaurant',							'Pop-up Market',							'Coffee Shop',
		'Taxi Firm',							'Pocket Park',								'Suburban Housing',
		'Movie Theatre',						'Weapons or Tech Sales',					'Multi-level Car Park',
		'Bank',									'Antiques'
	);
	$out['Building'] = $block[array_rand($block)];
	$f = rand(1,10);
	if ($f > 1) {
		$out['Feature'] = building_feature();
		switch($out['Feature']) {
			case('Legacy Infrastructure'):
				unset($out['Feature']);
				$out['Legacy Infrasructure'] = legacy_infrastructure(); break;
			case('Repurposed As...'):
				$out['Is Now'] = $block[array_rand($block)]; break;
			case('Causes Sickness'):
				$out['Health Hazard'] = health_hazard(); break;
			case('Police Presence'):
				$out['Police Presence'] = law_and_order(); break;
			case('Unusual Smell'):
				$out['Unusual Smell'] = smells(); break;
			case('Buggy Local Tech'):
				$out['Buggy Local Tech'] = broken_tech(); break;
			case('AR Heavy'):
				$out['Local AR Flood'] = aug_reality(); break;
			case('Obscured By Ad Screens'):
				$out['Ad Screens'] = big_screens(); break;
			case('Obvious Gang Turf');
				$out['Gang Turf'] = gang(); break;
		}
	}

	return $out;
}
function building_feature() {
	$feature = array(
		'Extreme Security Protocols',				'Decrepit And Rundown',			'Graffitipocalypse/Street Art Heavy',		'Obvious Gang Turf',
		'Back Room Brothel',						'Newly Renovated',				'Unusually Busy',							'Empty/Quiet',
		'Inadequate Security',						'High Tech Equipment',			'Abandoned Edifice',						'Repurposed As...',
		'Front For Corporate Activity',				'Front For Criminal Activity',	'Hidden Squatters',							'Obscured By Ad Screens',
		'&quot;Grown&quot; By Nanites',				'Incomplete',					'Self Sufficient',							'Crumbling Cheapcrete',
		'War Zone',									'Fire Damage',					'Not A Building, But Mobile',				'Elaborate Balconies',
		'Years Of Clumsy Modification',				'For Sale/To-let',				'Bright Emoji Glyphs And Graphics',			'Reinforced For Repair Work',
		'Extremely Leaky',							'Gothic Style',					'Chic And Minimalist',						'Brutalist',
		'Encased In Plastic Siding',				'Labyrinthine',					'Skywalks To Other Buildings',				'Industrial Style',
		'Anti-Drone System',						'Nano Immune System',			'People Queuing To Enter',					'Well Guarded',
		'AI Guardian',								'AR Heavy',						'Selective Access',							'Buggy Local Tech',
		'Taken Over By Junkies',					'Foreign Ghetto',				'Sweatshop Conditions',						'Utilised Solely For Storage',
		'Veiled Behind Polymer Sheeting',			'All Windows Damaged',			'External Utilities',						'Extensive Solar Grid And Fog Catchers',
		'Bad Epoxy Repairs',						'Unpleasant Micro-Climate',		'Infested With Rogue Remotes',				'Self Aware',
		'Cellular Black hole',						'Mainly Populated By Hoarders',	'Accumulated Trash heaps',					'Unusual Smell',
		'Very Few Working lights',					'A Riot Of Satellite Dishes',	'Very Noisy Utilities',						'Catastrophically Polluted',
		'Unfinished Extension Or Empty Levels',		'Permadamp',					'Legacy Infrastructure',					'Bad Wiring; High EMF; Black Outs',
		'Police Presence',							'Enforced No-Parking Zone',		'Windows Boarded With Opaque Acrylic',		'Main Entrance Out Of Order',
		'Several Trashed Cars Out Front',			'Being Audited By City',		'Wind Tunnel',								'Tinted Glass And Carbon Nano-Tubes',
		'Homeless Magnet',							'Shakes When Trucks Pass',		'Completely Automated',						'Exotic/Foreign Architecture',
		'Obvious Corporate Sponsor',				'Endorsed By Celebrity',		'Promotes Religion',						'Independent Nation State',
		'Family Owned',								'Scheduled For Demolition',		'Rat Or Roach Problem',						'Security Camera Overkill',
		'A Crime Scene',							'Target Of Net Terrorism',		'Malfunctioning Incessant Alarm',			'Slowly Collapsing Or Subsiding',
		'Under Surveillance',						'Enforced No Fly Zone',			'Prone To Flooding',						'Ecologically Sound; No Carbon Footprint',
		'Popular With Particular Subculture',		'Totally Sterile',				'Extensive Drone Docks',					'Causes Sickness'
	);

	/* Testing array for single feature
	$feature = array('Obvious Gang Turf');*/

	$f = $feature[array_rand($feature)];
	return $f;
}
?>
<!doctype html>
<html lang="en">
	<head>
		<title>CyberPunk 2045: Augmented City Generator</title>
		<!-- Required meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- My CSS links -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Play">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Raleway">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
<?php
include('utility.php');

$surrounds = array(
	'northwest' =>	array('Align' => 'left',	'Abbr' => 'NW'),
	'north' =>		array('Align' => 'center',	'Abbr' => 'N'),
	'northeast' =>	array('Align' => 'right',	'Abbr' => 'NE'),
	'east' =>		array('Align' => 'right',	'Abbr' => 'E'),
	'southeast' =>	array('Align' => 'right',	'Abbr' => 'SE'),
	'south' =>		array('Align' => 'center',	'Abbr' => 'N'),
	'southwest' =>	array('Align' => 'left',	'Abbr' => 'SW'),
	'west' =>		array('Align' => 'left',	'Abbr' => 'W')
);
$aux = array();
$aux['Smell'] = smells();
$aux['Sight'] = sights();
$aux['Sound'] = sounds();

$b = rand(3,5);
$d = array_rand($surrounds, $b);

foreach ($surrounds as $k => $v) {
	if (in_array($k, $d)) {
		$surrounds[$k]['Building'] = building();
	}
	else {
		$surrounds[$k]['Open'] = rubble();
	}
}

pretty_var($surrounds, 'ccffcc');
pretty_var($aux, 'ffffcc');
?>
	</body>
</html>