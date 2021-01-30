<?php 

function sights() {
	$sights = array(
		'Armoured cops bundle violently reluctant vagrant into ERA-plated squad car,',
		'A bus shelter made entirely of screens',
		'Searchlights playing across the cloud cover and projecting branding',
		'A brightly lit aerocab taking off in a cloud of exhaust fumes, rainwater and trash',
		'AC vents in the sidewalk emitting a thick cloud of vapour',
		'A heavy rainwater cascade falls from damaged guttering',
		'Every underlit face on the street is concentrating solely on their phone',
		'An ancient looking geriatric lopes past strapped into a linear assistance frame',
		'A vid-blogger in full, wearable array, blatantly recording the scene',
		'The nearest building has an intermittently flickering security light',
		'Your view is blocked by a lumbering hi-vis recycling collection truck',
		'A cluster of kids vaping, LED-lit clouds from under designer pollution hoods',
		'A pair of bicycle couriers race one another through crawling traffic',
		'Gritty, chemical infused sediment sloughing off a nearby rooftop',
		'A large building-mounted flatscreen showing...',
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
		'A long, silent queue for a blocky, exhaust stained, kerb-side Euthanasia Booth&trade;',
		'All the nearby street signs are gang-tagged over to the point of being useless',
		'Filthy red and white plastic Jersey barriers block most of the sidewalk',
		'An overpass or skywalk covered in colourful advertising animatics',
		'There are crowds of fast moving people swarming absolutely everywhere',
		'The scorched shell of a gutted vid-phone kiosk',
		'Pedestrians flooding across the nearest intersection, en masse, both ways',
		'A group of screeching street kids running along the overhead rail lines',
		'A thick pea soup fog rolling down the streets and alleyways',
		'All the street lights for this entire block just went out',
		'Rivers of rain-borne trash race along in the choked gutters',
		'A small crowd of people gawping upwards at a potential jumper',
		'A tight formation of drones races down the street, just above head height',
		'A group of sex workers on a nearby street corner, approaching cars',
		'An out-of-order ATM threatens violent action to passers by who stray too close',
		'Unnervingly, there is absolutely no-one about',
		'A pedicab operator struggling with heat exhaustion or dehydration',
		'A row of vendomats coated in layers of gang tags, going back many years',
		'A GeV taxi takes a corner hard, throwing up polluted water, trash and crud',
		'An energetic street preacher giving a digital presentation on Cybernetic Jesus&trade;',
		'The sidewalk consists of slabs of flickering screens, showing adverts'
	);

	$out = $sights[array_rand($sights)];

	switch($out) {
		case ('A bus shelter made entirely of vid-screens'):
		case ('An overpass or skywalk covered in colourful advertising animatics'):
		case ('The sidewalk consists of slabs of flickering screens, showing adverts'):
		case ('A large building-mounted flatscreen showing...'):
			$out .= big_screens(); break;
		case ('Searchlights playing across the cloud cover and projecting branding'):
			$out .= blipverts(); break;
	}

	return $out;
}

function smells($count = 0) {
	$environmental_smells = array(
		'Cigarette Smoke',	'Cheap Perfume',		'Expensive Cologne',		'Exhaust Fumes',
		'Stale Refuse',		'Urine',				'Vomit',					'Burning Plastic',
		'Ash',				'Acrid Chemicals',		'Cordite',					'Blood',
		'Wet Hair',			'Motor Oil',			'Faeces',					'Soda Pop Sweetness',
		'Noodles',			'Rubber',				'Burnt Meat',				'Dirty Sneakers',
		'Fried Food',		'Beer',					'Perfumed Bleach',			'Body Odour',
		'Varnish',			'Insecticide',			'Soap',						'Sulphur',
		'Hairspray',		'Printed Polyamides',	'Hydraulic Fluid',			'Coffee',
		'Resin',			'Antiseptic',			'Candy',					'Mint',
		'Salt',				'Tea',					'Fresh Sweat',				'Infected Tissue',
		'Paint',			'Mold & Mildew',		'Baby Powder',				'Acid',
		'Feet',				'Cinnamon',				'Leather',					'Lemon Zest',
		'Damp',				'Rot',					'Overheated Circuit Board',	'Cigars',
		'Floral Scent',		'Pizza',				'Spices',					'Lavender',
		'Sewage',			'Pine',					'Crack Cocaine',			'Cat Piss',
		'Gas',				'Latex',				'French Fries',				'New Cyberlimb Smell',
		'Sex',				'Menthol',				'Cheese',					'Wet Concrete',
		'Disinfectant',		'Polythene',			'Nail Varnish',				'Whiskey',
		'Coconut Oil',		'Vinyl',				'Wine',						'Acetone',
		'Cookies',			'Ammonia',				'Biodiesel',				'Polish',
		'Printer Toner',	'Dust',					'Glass Cleaner',			'Musty',
		'Opiates',			'Raw Meat',				'Laminate',					'Weed/Skunk',
		'Drains',			'Thinners',				'Old Food',					'Incense',
		'Fused Wiring',		'Lube',					'Sour Milk',				'Garlic',
		'Gun Oil',			'Cheap Aftershave',		'Alcohol-based Sanitiser'	
	);

	(rand(1,100) >= 85) ? $count = 2 : $count = 1;

	if ($count == 1) {
		return $environmental_smells[array_rand($environmental_smells)];
	}
	else {
		return $environmental_smells[array_rand($environmental_smells)]." and ".$environmental_smells[array_rand($environmental_smells)];
	}
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

	return $sounds[array_rand($sounds)];
}

?>