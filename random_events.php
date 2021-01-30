<?php
function random_events() {
	$corp_day = array(
		'Lost Child',
		'Mall Rats',
		'Mall Rats',
		'Priest',
		'Priest',
		'Rabbi',
		'Rabbi',
		'VideoVangelist',
		'VideoVangelist',
		'VideoVangelist',
		'Buddhists',
		'Buddhists',
		'Mormons',
		'Mormons',
		'Children Playing',
		'Children Playing',
		'Bicycle Courier',
		'Bicycle Courier',
		'Corporates',
		'Corporates',
		'Corporates',
		'Corporates',
		'Corporate Security',
		'Corporate Security',
		'Corporate Security',
		'Corporate Security',
		'Rocker',
		'Rocker',
		'Braindance Star',
		'Braindance Star',
		'Religious Fanatic',
		'Religious Fanatic',
		'College Students',
		'College Students',
		'College Students',
		'College Students',
		'Techies',
		'Techies',
		'Techies',
		'Techies',
		'Medic',
		'Medic',
		'Pilot',
		'Pilot',
		'Military Personnel',
		'Military Personnel',
		'Military Personnel',
		'Corporate Police',
		'Corporate Police',
		'Corporate Police',
		'Corporate Police',
		'Hacker',
		'Hacker',
		'Bodyguard',
		'Bodyguard',
		'Bodyguard',
		'Exotic',
		'Exotic',
		'Neutral Crowd',
		'Neutral Crowd',
		'Riot Police',
		'Riot Police',
		'Riot Police',
		'Government Petitioner',
		'Picketers',
		'Picketers',
		'Taxi Cab Driver',
		'Taxi Cab Driver',
		'Taxi Cab Driver',
		'Private Investigator',
		'Private Investigator',
		'Construction Workers',
		'Construction Workers',
		'Media Team',
		'Media Team',
		'Media Team',
		'Media Team',
		'Car Accident',
		'Construction',
		'Construction',
		'Religious Crazy',
		'Religious Crazy',
		'TraumaTeam',
		'TraumaTeam',
		'TraumaTeam',
		'Bullies',
		'Bullies',
		'Stray Cat',
		'Drug Addict',
		'Drug Addict',
		'Riot',
		'C-SWAT',
		'CyberPsycho',
		'Solo',
		'Solo',
		'Mercenary',
		'Mercenary',
		'Firefight',
		'Assassin',
		'Two'
	);
	$corp_eve = array(
		'Lost Child',
		'Mall Rats',
		'Mall Rats',
		'Priest',
		'Priest',
		'Rabbi',
		'Rabbi',
		'VideoVangelist',
		'VideoVangelist',
		'VideoVangelist',
		'Buddhists',
		'Buddhists',
		'Mormons',
		'Mormons',
		'Children Playing',
		'Children Playing',
		'Bicycle Courier',
		'Bicycle Courier',
		'Corporates',
		'Corporates',
		'Corporates',
		'Corporate Security',
		'Corporate Security',
		'Corporate Security',
		'Corporate Security',
		'Rocker',
		'Rocker',
		'Braindance Star',
		'Braindance Star',
		'Religious Fanatic',
		'Religious Fanatic',
		'College Students',
		'College Students',
		'Mnemonic Courier',
		'Mnemonic Courier',
		'Techies',
		'Techies',
		'Techies',
		'Medic',
		'Medic',
		'Pilot',
		'Pilot',
		'Military Personnel',
		'Military Personnel',
		'Corporate Police',
		'Corporate Police',
		'Corporate Police',
		'Corporate Police',
		'Hacker',
		'Hacker',
		'Bodyguard',
		'Bodyguard',
		'Exotic',
		'Exotic',
		'Neutral Crowd',
		'Neutral Crowd',
		'Riot Police',
		'Riot Police',
		'Riot Police',
		'Government Petitioner',
		'Picketers',
		'Taxi Cab Driver',
		'Taxi Cab Driver',
		'Taxi Cab Driver',
		'Private Investigator',
		'Private Investigator',
		'Construction Workers',
		'Media Team',
		'Media Team',
		'Media Team',
		'Car Accident',
		'Construction',
		'Construction',
		'Religious Crazy',
		'Religious Crazy',
		'TraumaTeam',
		'TraumaTeam',
		'TraumaTeam',
		'Bullies',
		'Bullies',
		'Stray Cat',
		'Drug Addict',
		'Drug Addict',
		'Riot',
		'C-SWAT',
		'CyberPsycho',
		'Solo',
		'Solo',
		'Mercenary',
		'Mercenary',
		'Firefight',
		'Assassin',
		'Skateboarders',
		'Skateboarders',
		'In-Line Skaters',
		'In-Line Skaters',
		'Vodoun Priest',
		'Stray Dog',
		'PediCab Driver',
		'Two'
	);
	$corp_ngt = array(
		'Bicycle Courier',
		'Bicycle Courier',
		'Corporates',
		'Corporates',
		'Corporates',
		'Corporate Security',
		'Corporate Security',
		'Corporate Security',
		'Corporate Security',
		'Corporate Security',
		'Corporate Security',
		'Rocker',
		'Rocker',
		'Braindance Star',
		'Braindance Star',
		'Religious Fanatic',
		'Religious Fanatic',
		'College Students',
		'College Students',
		'College Students',
		'Mnemonic Courier',
		'Mnemonic Courier',
		'Techies',
		'Techies',
		'Medic',
		'Medic',
		'Pilot',
		'Pilot',
		'Military Personnel',
		'Military Personnel',
		'Corporate Police',
		'Corporate Police',
		'Corporate Police',
		'Corporate Police',
		'Corporate Police',
		'Corporate Police',
		'Hacker',
		'Hacker',
		'Bodyguard',
		'Bodyguard',
		'Exotic',
		'Exotic',
		'Neutral Crowd',
		'Riot Police',
		'Riot Police',
		'Government Petitioner',
		'Picketers',
		'Taxi Cab Driver',
		'Taxi Cab Driver',
		'Private Investigator',
		'Private Investigator',
		'Construction Workers',
		'Media Team',
		'Media Team',
		'Car Accident',
		'Construction',
		'Construction',
		'Religious Crazy',
		'Religious Crazy',
		'TraumaTeam',
		'TraumaTeam',
		'TraumaTeam',
		'Bullies',
		'Bullies',
		'Stray Cat',
		'Stray Cat',
		'Drug Addict',
		'Drug Addict',
		'Riot',
		'C-SWAT',
		'C-SWAT',
		'CyberPsycho',
		'Solo',
		'Solo',
		'Mercenary',
		'Mercenary',
		'Firefight',
		'Assassin',
		'Assassin',
		'Skateboarders',
		'Skateboarders',
		'In-Line Skaters',
		'In-Line Skaters',
		'Vodoun Priest',
		'Stray Dog',
		'Stray Dog',
		'PediCab Driver',
		'PediCab Driver',
		'Psychopath',
		'Psychopath',
		'Gamblers',
		'Gamblers',
		'Drunk',
		'Drunk',
		'Drug Dealer',
		'Drug Dealer',
		'BlackOps Team',
		'BlackOps Team',
		'Two'
	);
	$modr_day = array(
		'Lost Child',
		'Mall Rats',
		'Priest',
		'Rabbi',
		'VideoVangelist',
		'Buddhists',
		'Mormons',
		'Children Playing',
		'Bicycle Courier',
		'Corporates',
		'Corporate Security',
		'Rocker',
		'Braindance Star',
		'Religious Fanatic',
		'College Students',
		'College Students',
		'Mnemonic Courier',
		'Techies',
		'Techies',
		'Medic',
		'Pilot',
		'Military Personnel',
		'Military Personnel',
		'Corporate Police',
		'Corporate Police',
		'Hacker',
		'Bodyguard',
		'Exotic',
		'Exotic',
		'Neutral Crowd',
		'Riot Police',
		'Government Petitioner',
		'Picketers',
		'Taxi Cab Driver',
		'Taxi Cab Driver',
		'Private Investigator',
		'Construction Workers',
		'Media Team',
		'Car Accident',
		'Construction',
		'Religious Crazy',
		'TraumaTeam',
		'Bullies',
		'Stray Cat',
		'Drug Addict',
		'Drug Addict',
		'Riot',
		'C-SWAT',
		'CyberPsycho',
		'Solo',
		'Mercenary',
		'Firefight',
		'Assassin',
		'Skateboarders',
		'Skateboarders',
		'In-Line Skaters',
		'In-Line Skaters',
		'Vodoun Priest',
		'Stray Dog',
		'PediCab Driver',
		'Psychopath',
		'Psychopath',
		'Gamblers',
		'Drunk',
		'Drunk',
		'Drug Dealer',
		'Drug Dealer',
		'BlackOps Team',
		'Yello Bike',
		'Merchant',
		'Shaman',
		'Street Peddlar',
		'Police',
		'Police',
		'Drug Raid',
		'Mutant',
		'Street Doc',
		'Fixer',
		'Sex Workers',
		'Beggar',
		'Beggar',
		'Bum',
		'Bum',
		'Nomads',
		'Pickpocket',
		'Pickpocket',
		'Thief',
		'Thief',
		'Rats',
		'BloodGang',
		'BloodGang',
		'SteelGang',
		'SteelGang',
		'PoserGang',
		'PoserGang',
		'Chromers',
		'Chromers',
		'Biker Gang',
		'Body Baggers',
		'Two'
	);
	$modr_eve = array(
		'Lost Child',
		'Mall Rats',
		'Priest',
		'Rabbi',
		'VideoVangelist',
		'VideoVangelist',
		'Buddhists',
		'Mormons',
		'Children Playing',
		'Rocker',
		'Braindance Star',
		'Religious Fanatic',
		'College Students',
		'College Students',
		'Mnemonic Courier',
		'Techies',
		'Techies',
		'Medic',
		'Pilot',
		'Military Personnel',
		'Military Personnel',
		'Corporate Police',
		'Corporate Police',
		'Hacker',
		'Bodyguard',
		'Exotic',
		'Exotic',
		'Neutral Crowd',
		'Riot Police',
		'Government Petitioner',
		'Picketers',
		'Taxi Cab Driver',
		'Taxi Cab Driver',
		'Private Investigator',
		'Construction Workers',
		'Media Team',
		'Car Accident',
		'Construction',
		'Religious Crazy',
		'TraumaTeam',
		'Bullies',
		'Stray Cat',
		'Drug Addict',
		'Drug Addict',
		'Riot',
		'C-SWAT',
		'CyberPsycho',
		'Solo',
		'Mercenary',
		'Firefight',
		'Assassin',
		'Skateboarders',
		'Skateboarders',
		'In-Line Skaters',
		'In-Line Skaters',
		'Vodoun Priest',
		'Stray Dog',
		'PediCab Driver',
		'Psychopath',
		'Psychopath',
		'Gamblers',
		'Drunk',
		'Drunk',
		'Drug Dealer',
		'Drug Dealer',
		'BlackOps Team',
		'Yello Bike',
		'TechnoMage',
		'Merchant',
		'Shaman',
		'Street Peddlar',
		'Police',
		'Police',
		'Drug Raid',
		'Mutant',
		'Street Doc',
		'Fixer',
		'Sex Workers',
		'Sex Workers',
		'Beggar',
		'Beggar',
		'Bum',
		'Bum',
		'Nomads',
		'Pickpocket',
		'Pickpocket',
		'Thief',
		'Thief',
		'Rats',
		'BloodGang',
		'BloodGang',
		'SteelGang',
		'SteelGang',
		'PoserGang',
		'PoserGang',
		'Chromers',
		'Chromers',
		'Biker Gang',
		'Body Baggers',
		'Two'
	);
	$modr_ngt = array(
		'College Students',
		'Mnemonic Courier',
		'Techies',
		'Techies',
		'Medic',
		'Pilot',
		'Military Personnel',
		'Military Personnel',
		'Corporate Police',
		'Corporate Police',
		'Hacker',
		'Bodyguard',
		'Exotic',
		'Neutral Crowd',
		'Neutral Crowd',
		'Riot Police',
		'Government Petitioner',
		'Picketers',
		'Taxi Cab Driver',
		'Taxi Cab Driver',
		'Private Investigator',
		'Construction Workers',
		'Media Team',
		'Media Team',
		'Car Accident',
		'Construction',
		'Religious Crazy',
		'Religious Crazy',
		'TraumaTeam',
		'TraumaTeam',
		'Bullies',
		'Bullies',
		'Stray Cat',
		'Stray Cat',
		'Drug Addict',
		'Drug Addict',
		'Drug Addict',
		'Riot',
		'C-SWAT',
		'CyberPsycho',
		'Solo',
		'Mercenary',
		'Firefight',
		'Firefight',
		'Assassin',
		'Skateboarders',
		'In-Line Skaters',
		'Vodoun Priest',
		'Stray Dog',
		'Stray Dog',
		'PediCab Driver',
		'PediCab Driver',
		'Psychopath',
		'Psychopath',
		'Gamblers',
		'Drunk',
		'Drunk',
		'Drug Dealer',
		'Drug Dealer',
		'Drug Dealer',
		'BlackOps Team',
		'BlackOps Team',
		'Yello Bike',
		'TechnoMage',
		'Merchant',
		'Shaman',
		'Street Peddlar',
		'Police',
		'Police',
		'Police',
		'Police',
		'Drug Raid',
		'Drug Raid',
		'Mutant',
		'Street Doc',
		'Fixer',
		'Sex Workers',
		'Sex Workers',
		'Beggar',
		'Beggar',
		'Bum',
		'Bum',
		'Nomads',
		'Pickpocket',
		'Pickpocket',
		'Thief',
		'Thief',
		'Rats',
		'Rats',
		'BloodGang',
		'BloodGang',
		'SteelGang',
		'SteelGang',
		'PoserGang',
		'PoserGang',
		'Chromers',
		'Chromers',
		'Biker Gang',
		'Body Baggers',
		'Two'
	);
	$comb_day = array(
		'Riot Police',
		'Riot Police',
		'Government Petitioner',
		'Picketers',
		'Picketers',
		'Taxi Cab Driver',
		'Taxi Cab Driver',
		'Private Investigator',
		'Construction Workers',
		'Construction Workers',
		'Media Team',
		'Media Team',
		'Car Accident',
		'Construction',
		'Religious Crazy',
		'Religious Crazy',
		'TraumaTeam',
		'TraumaTeam',
		'Bullies',
		'Bullies',
		'Stray Cat',
		'Stray Cat',
		'Drug Addict',
		'Drug Addict',
		'Drug Addict',
		'Riot',
		'Riot',
		'C-SWAT',
		'CyberPsycho',
		'Solo',
		'Mercenary',
		'Firefight',
		'Firefight',
		'Assassin',
		'Skateboarders',
		'Skateboarders',
		'In-Line Skaters',
		'In-Line Skaters',
		'Vodoun Priest',
		'Stray Dog',
		'Stray Dog',
		'PediCab Driver',
		'PediCab Driver',
		'Psychopath',
		'Psychopath',
		'Gamblers',
		'Gamblers',
		'Drunk',
		'Drunk',
		'Drunk',
		'Drug Dealer',
		'Drug Dealer',
		'Drug Dealer',
		'BlackOps Team',
		'BlackOps Team',
		'Shaman',
		'Street Peddlar',
		'Police',
		'Police',
		'Police',
		'Police',
		'Drug Raid',
		'Drug Raid',
		'Mutant',
		'Mutant',
		'Street Doc',
		'Street Doc',
		'Fixer',
		'Fixer',
		'Sex Workers',
		'Sex Workers',
		'Sex Workers',
		'Beggar',
		'Beggar',
		'Beggar',
		'Bum',
		'Bum',
		'Bum',
		'Nomads',
		'Nomads',
		'Pickpocket',
		'Pickpocket',
		'Pickpocket',
		'Thief',
		'Thief',
		'Thief',
		'Rats',
		'Rats',
		'BloodGang',
		'BloodGang',
		'SteelGang',
		'SteelGang',
		'PoserGang',
		'PoserGang',
		'Chromers',
		'Chromers',
		'Biker Gang',
		'Biker Gang',
		'Body Baggers',
		'Two'
	);
	$comb_eve = array(
		'Media Team',
		'Media Team',
		'Media Team',
		'Car Accident',
		'Construction',
		'Religious Crazy',
		'Religious Crazy',
		'TraumaTeam',
		'TraumaTeam',
		'TraumaTeam',
		'Bullies',
		'Bullies',
		'Bullies',
		'Stray Cat',
		'Stray Cat',
		'Stray Cat',
		'Drug Addict',
		'Drug Addict',
		'Drug Addict',
		'Drug Addict',
		'Riot',
		'Riot',
		'C-SWAT',
		'CyberPsycho',
		'Solo',
		'Mercenary',
		'Firefight',
		'Firefight',
		'Firefight',
		'Assassin',
		'Vodoun Priest',
		'Stray Dog',
		'Stray Dog',
		'Stray Dog',
		'PediCab Driver',
		'PediCab Driver',
		'PediCab Driver',
		'Drunk',
		'Drunk',
		'Drunk',
		'Drunk',
		'Drug Dealer',
		'Drug Dealer',
		'Drug Dealer',
		'BlackOps Team',
		'BlackOps Team',
		'Mutant',
		'Mutant',
		'Street Doc',
		'Street Doc',
		'Fixer',
		'Fixer',
		'Sex Workers',
		'Sex Workers',
		'Sex Workers',
		'Sex Workers',
		'Beggar',
		'Beggar',
		'Beggar',
		'Beggar',
		'Bum',
		'Bum',
		'Bum',
		'Bum',
		'Nomads',
		'Nomads',
		'Nomads',
		'Pickpocket',
		'Pickpocket',
		'Pickpocket',
		'Pickpocket',
		'Thief',
		'Thief',
		'Thief',
		'Thief',
		'Rats',
		'Rats',
		'Rats',
		'BloodGang',
		'BloodGang',
		'BloodGang',
		'BloodGang',
		'SteelGang',
		'SteelGang',
		'SteelGang',
		'SteelGang',
		'PoserGang',
		'PoserGang',
		'PoserGang',
		'PoserGang',
		'Chromers',
		'Chromers',
		'Chromers',
		'Chromers',
		'Biker Gang',
		'Biker Gang',
		'Biker Gang',
		'Body Baggers',
		'Body Baggers',
		'Two'
	);
	$comb_ngt = array(
		'Construction',
		'Construction',
		'Religious Crazy',
		'Religious Crazy',
		'Religious Crazy',
		'Religious Crazy',
		'TraumaTeam',
		'TraumaTeam',
		'TraumaTeam',
		'TraumaTeam',
		'Bullies',
		'Bullies',
		'Bullies',
		'Bullies',
		'Stray Cat',
		'Stray Cat',
		'Stray Cat',
		'Stray Cat',
		'Drug Addict',
		'Drug Addict',
		'Drug Addict',
		'Drug Addict',
		'Drug Addict',
		'Drug Addict',
		'Riot',
		'Riot',
		'Riot',
		'C-SWAT',
		'CyberPsycho',
		'Solo',
		'Mercenary',
		'Firefight',
		'Firefight',
		'Firefight',
		'Firefight',
		'Assassin',
		'Stray Dog',
		'Stray Dog',
		'Stray Dog',
		'Stray Dog',
		'PediCab Driver',
		'PediCab Driver',
		'PediCab Driver',
		'PediCab Driver',
		'Drug Dealer',
		'Drug Dealer',
		'Drug Dealer',
		'Drug Dealer',
		'Drug Dealer',
		'Drug Dealer',
		'BlackOps Team',
		'BlackOps Team',
		'Beggar',
		'Beggar',
		'Beggar',
		'Beggar',
		'Bum',
		'Bum',
		'Bum',
		'Bum',
		'Nomads',
		'Nomads',
		'Nomads',
		'Pickpocket',
		'Pickpocket',
		'Pickpocket',
		'Pickpocket',
		'Thief',
		'Thief',
		'Thief',
		'Thief',
		'Rats',
		'Rats',
		'Rats',
		'Rats',
		'BloodGang',
		'BloodGang',
		'BloodGang',
		'BloodGang',
		'SteelGang',
		'SteelGang',
		'SteelGang',
		'SteelGang',
		'PoserGang',
		'PoserGang',
		'PoserGang',
		'PoserGang',
		'Chromers',
		'Chromers',
		'Chromers',
		'Chromers',
		'Biker Gang',
		'Biker Gang',
		'Biker Gang',
		'Biker Gang',
		'Body Baggers',
		'Body Baggers',
		'Body Baggers',
		'Body Baggers',
		'Two'
	);

	$events = array (
		'Corporate Districts - Day' => array($corp_day[array_rand($corp_day)] => ''),
		'Corporate Districts - Evening' => array($corp_eve[array_rand($corp_eve)] => ''),
		'Corporate Districts - Night' => array($corp_ngt[array_rand($corp_ngt)] => ''),
		'Median Areas - Day' => array($modr_day[array_rand($modr_day)] => ''),
		'Median Areas - Evening' => array($modr_eve[array_rand($modr_eve)] => ''),
		'Median Areas - Night' => array($modr_ngt[array_rand($modr_ngt)] => ''),
		'Combat Zones - Day' => array($comb_day[array_rand($comb_day)] => ''),
		'Combat Zones - Evening' => array($comb_eve[array_rand($comb_eve)] => ''),
		'Combat Zones - Night' => array($comb_ngt[array_rand($comb_ngt)] => '')	
	);

	foreach($events as $k => $v) {
		foreach ($v as $p => $e) {
			$x = rand(1,10);
			switch($p) {
				case('Lost Child'):
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Wandering aimlessly."; break;
						case ($x <= 6): $events[$k][$p] = "Asks for the PC&#39;s help."; break;
						case ($x <= 9):	$events[$k][$p] = "Inadvertently grabs a player&#39;s hand."; break;
						default:		$events[$k][$p] = "Gets picked up by the nice man in the big black unmarked car."; break;
					}
					break;
				case('Mall Rats'):
					$num = "(Group of ".(rand(1,4)+1).") ";
					switch($x) {
						case ($x <= 2): $events[$k][$p] = "Shopping till they drop."; break;
						case ($x <= 4): $events[$k][$p] = "Boisterously comparing the newest fashions (actually pretty ugly stuff)."; break;
						case ($x <= 6): $events[$k][$p] = "Shoplifting."; break;
						case ($x <= 8): $events[$k][$p] = "Playing mall tag."; break;
						case ($x <= 9): $events[$k][$p] = "Attempting to pickpocket passers-by."; break;
						default:		$events[$k][$p] = "Attempting to pickpocket a PC."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case('Priest'):
					switch($x) {
						case ($x <= 5): $events[$k][$p] = "On their way to the church."; break;
						case ($x <= 8): $events[$k][$p] = "Collecting donations."; break;
						case ($x <= 9): $events[$k][$p] = "Performing random blessings."; break;
						default: 		$events[$k][$p] = "Proclaims the end is near and condemns the PCs to Hell."; break;
					}
					break;
				case('Rabbi'):
					switch($x) {
						case ($x <= 6): $events[$k][$p] = "On their way to the synagogue."; break;
						case ($x <= 8): $events[$k][$p] = "Stopping for a bite to eat."; break;
						default: 		$events[$k][$p] = "Consoling a grieving woman."; break;
					}
					break;
				case ('VideoVangelist'):
					switch($x) {
						case ($x <= 5): $events[$k][$p] = "Preaching the \"Beaver\" and \"Brady\" scriptures."; break;
						case ($x <= 7): $events[$k][$p] = "Handing out pamphlets."; break;
						case ($x <= 8): $events[$k][$p] = "Handing out pocket TVs (probably stolen). One per customer, please."; break;
						default: 		$events[$k][$p] = "Calls the PCs heretics!"; break;
					}
					break;
				case ('Buddhists'):
					$num = "(Group of ".(rand(1,4)+1).") ";
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Meditating on a park bench."; break;
						case ($x <= 8): $events[$k][$p] = "On their way to the temple."; break;
						default: 		$events[$k][$p] = "Leading a public meditation."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Mormons'):
					$num = "(Group of 2) ";
					switch($x) {
						case ($x <= 7): $events[$k][$p] = "Spreading the word door-to-door."; break;
						case ($x <= 9): $events[$k][$p] = "Stopping for lunch."; break;
						default: 		$events[$k][$p] = "Being harassed by angry civilian."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Children Playing'):
					$num = "(Group of ".(rand(1,4)+1).") ";
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "In an alley."; break;
						case ($x <= 6): $events[$k][$p] = "In the street."; break;
						case ($x <= 8): $events[$k][$p] = "With dangerous objects."; break;
						default: 		$events[$k][$p] = "On the PCs&#39; vehicle."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Bicycle Courier'):
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Stopped for a snack."; break;
						case ($x <= 7): $events[$k][$p] = "On a run and just barely missed the PCs."; break;
						case ($x <= 9): $events[$k][$p] = "Just plowed into somebody. Bike parts everywhere!"; break;
						default: 		$events[$k][$p] = "Just plowed into a PC."; break;
					}
					break;
				case ('Corporates'):
					$num = "(Group of ".(rand(1,4)+1).") ";
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "On break. Probably at the ShrimpChip Noodle Bar&trade;."; break;
						case ($x <= 8): $events[$k][$p] = "Discussing some new business (technology/contracts/take overs/etc.) over drinks."; break;
						default: 		$events[$k][$p] = "Looking for some protection."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Corporate Security'):
					$num = "(Group of ".(rand(1,4)+1).") ";
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "On their break and going to the ShrimpChip Noodle Bar&trade;."; break;
						case ($x <= 5): $events[$k][$p] = "Standing post."; break;
						case ($x <= 7): $events[$k][$p] = "Providing protection for a big suit. Don't ask."; break;
						case ($x <= 9): $events[$k][$p] = "Checking everybody's papers."; break;
						default: 		$events[$k][$p] = "Bored and decide to pin something on the PCs."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Rocker'):
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Hard on their luck and trying to write songs while looking for a job."; break;
						case ($x <= 5): $events[$k][$p] = "Signing autographs."; break;
						case ($x <= 7): $events[$k][$p] = "Making a PR move by handing out tickets to the next show."; break;
						default: 		$events[$k][$p] = "Sends their bodyguards to deal with \"that tough crowd over there.\""; break;
					}
					break;
				case ('Braindance Star'):
					switch($x) {
						case ($x <= 5): $events[$k][$p] = "Making a quick escape from the crowds."; break;
						case ($x <= 8): $events[$k][$p] = "Signing autographs."; break;
						default: 		$events[$k][$p] = "Sends their bodyguards to deal with 'that tough crowd over there.'"; break;
					}
					break;
				case ('Religious Fanatic'):
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Standing on a soapbox and has a small crowd gathering."; break;
						case ($x <= 7): $events[$k][$p] = "Wildly preaching to himself."; break;
						default: 		$events[$k][$p] = "Attempts to coerce the PCs into believing."; break;
					}
					break;
				case ('College Students'):
					$num = "(Group of ".(rand(1,4)+1).") ";
					switch($x) {	
						case ($x <= 3): $events[$k][$p] = "Discussing the newest technologies."; break;
						case ($x <= 6): $events[$k][$p] = "Scoping for partners for the night."; break;
						case ($x <= 9): $events[$k][$p] = "Drunk or looking for a place to get drunk."; break;
						default: 		$events[$k][$p] = "Being harassed by a local gang."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Mnemonic Courier'):
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Looking for a contract."; break;
						case ($x <= 6): $events[$k][$p] = "Taking a break and enjoying a drink."; break;
						case ($x <= 9): $events[$k][$p] = "On the job and would rather not be bothered."; break;
						default: 		$events[$k][$p] = "Being chased by a bunch of guys who want what&#39;s in their skull."; break;
					}
					break;
				case ('Techies'):
					$num = "(Group of 2) ";
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "On break."; break;
						case ($x <= 7): $events[$k][$p] = "Discussing new technology over a meal."; break;
						default: 		$events[$k][$p] = "Carefully dissecting some bit of equipment."; break;
					}
					break;
				case ('Medic'):
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Looking for a job."; break;
						case ($x <= 7): $events[$k][$p] = "Taking a break."; break;
						default: 		$events[$k][$p] = "-Working on some unfortunate bystander."; break;
					}
					break;
				case ('Pilot'):
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Looking for a job."; break;
						case ($x <= 8): $events[$k][$p] = "Slightly drunk and spinning tall tales."; break;
						default: 		$events[$k][$p] = "Heavily sedated with alcohol."; break;
					}
					break;
				case ('Military Personnel'):
					$num = "(Group of ".(rand(1,6)).") ";
					switch($x) {	
						case ($x <= 4): $events[$k][$p] = "On leave and in civilian clothes."; break;
						case ($x <= 7): $events[$k][$p] = "On leave for a few hours."; break;
						case ($x <= 9): $events[$k][$p] = "Looking for somebody."; break;
						default: 		$events[$k][$p] = "Drunk and looking for a fight."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Corporate Police'):
					$num = "(Group of ".(rand(1,4)+1).") ";
					switch($x) {	
						case ($x <= 3): $events[$k][$p] = "Keeping the peace."; break;
						case ($x <= 6): $events[$k][$p] = "Randomly checking to see if papers are in order."; break;
						case ($x <= 7): $events[$k][$p] = "Knocking down someone&#39;s door."; break;
						case ($x <= 9): $events[$k][$p] = "Politely ask the PCs to leave the area."; break;
						default: 		$events[$k][$p] = "Decide the PCs don&#39;t belong in this zone and have itchy trigger fingers."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Hacker'):
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Just hanging out."; break;
						case ($x <= 6): $events[$k][$p] = "Looking for the next gig."; break;
						case ($x <= 9): $events[$k][$p] = "Scoping out some intel."; break;
						default: 		$events[$k][$p] = "Jacked in and probably wreaking havoc."; break;
					}
					break;
				case ('Bodyguard'):
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Off duty and looking for a job."; break;
						case ($x <= 6): $events[$k][$p] = "Accompanying a big suit. Don't ask."; break;
						case ($x <= 9): $events[$k][$p] = "Accompanying a gorgeous SimStim star or Rocker. Don't get too close!"; break;
						default: 		$events[$k][$p] = "Has just lost a client the hard way and is a little irritable."; break;
					}
					break;
				case ('Exotic'):
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Is showing off their newest surgery to their friends."; break;
						case ($x <= 6): $events[$k][$p] = "Is trying to pick up another exotic."; break;
						case ($x <= 9): $events[$k][$p] = "Is trying their hand at prostitution."; break;
						default: 		$events[$k][$p] = "Will beat the snot out of the PCs if they make any comment."; break;
					}
					break;
				case ('Neutral Crowd'):
					$num = "(Group of ".(rand(3,12)).") ";
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Just mulling about."; break;
						case ($x <= 5): $events[$k][$p] = "Waiting for a bus, train, or maglev tram."; break;
						case ($x <= 8): $events[$k][$p] = "Shopping."; break;
						default: 		$events[$k][$p] = "Gathering for a major entertainment event (movie, concert, sports, etc.)"; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Riot Police'):
					$num = "(Group of ".(rand(3,7)).") ";
					switch($x) {
						case ($x <= 5): $events[$k][$p] = "All suited up and heading towards a dispute."; break;
						case ($x <= 8): $events[$k][$p] = "In the process of controlling some unruly shoppers."; break;
						default: 		$events[$k][$p] = "Smack dab in the middle of a firefight with an ugly crowd."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Government Petitioner'):
					switch($x) {
						case ($x <= 7): $events[$k][$p] = "Is asking for signatures."; break;
						case ($x <= 9): $events[$k][$p] = "Will slander the PCs&#39; choice of political party."; break;
						default: 		$events[$k][$p] = "Doesn&#39;t like the PCs and will call the nearest authorities."; break;
					}
					break;
				case ('Picketers'):
					$num = "(Group of ".(rand(3,18)).") ";
					switch($x) {
						case ($x <= 2): $events[$k][$p] = "Unfair government."; break;
						case ($x <= 4): $events[$k][$p] = "Unfair taxes."; break;
						case ($x <= 6): $events[$k][$p] = "An unfair corporation."; break;
						case ($x <= 8): $events[$k][$p] = "Unfair wages or standard of living."; break;
						default: 		$events[$k][$p] = "Discrimination."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Taxi Cab Driver'):
					switch($x) {
						case ($x <= 5): $events[$k][$p] = "Driving a fare."; break;
						case ($x <= 9): $events[$k][$p] = "Looking for a fare."; break;
						default: 		$events[$k][$p] = "Has just been in an accident and is having a dispute with the other driver."; break;
					}
					break;
				case ('Private Investigator'):
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Taking some time off."; break;
						case ($x <= 6): $events[$k][$p] = "Looking for a job."; break;
						case ($x <= 8): $events[$k][$p] = "Following a lead."; break;
						default: 		$events[$k][$p] = "Seems to be following the PCs."; break;
					}
					break;
				case ('Construction Workers'):
					$num = "(Group of ".(rand(3,7)).") ";
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "On a coffee break."; break;
						case ($x <= 8): $events[$k][$p] = "Working."; break;
						default: 		$events[$k][$p] = "Hootin' and hollarin' at the attractive members of the PC group."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Media Team'):
					$num = "(Group of ".(rand(3,6)).") ";
					switch($x) {
						case ($x <= 2): $events[$k][$p] = "Taking a break."; break;
						case ($x <= 4): $events[$k][$p] = "Doing random interviews."; break;
						case ($x <= 6): $events[$k][$p] = "Working on a major story."; break;
						case ($x <= 8): $events[$k][$p] = "Their story subject opens fire on them."; break;
						default: 		$events[$k][$p] = "Has decided the PCs are a worthy story to follow."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Car Accident'):
					$num = "(".(rand(1,4))." cars) ";
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Minor. The drivers are exchanging info."; break;
						case ($x <= 6): $events[$k][$p] = "Moderate. They could use some help. Police are on the way."; break;
						case ($x <= 8): $events[$k][$p] = "Major. Traffic is held up. Police and Trauma Team everywhere."; break;
						default: 		$events[$k][$p] = "Extreme. Fatal. Looting has ensued from all the chaos."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Construction'):
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Typical annoyance."; break;
						case ($x <= 7): $events[$k][$p] = "Holding up traffic."; break;
						default: 		$events[$k][$p] = "Completely blocks off the street."; break;
					}
					break;
				case ('Religious Crazy'):
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "'The end is nigh!'"; break;
						case ($x <= 6): $events[$k][$p] = "'Repent sinners!'"; break;
						default: 		$events[$k][$p] = "'I condemn you to Hell!'"; break;
					}
					break;
				case ('TraumaTeam'):
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "On break and are checking their gear."; break;
						case ($x <= 7): $events[$k][$p] = "En route to a contract."; break;
						default: 		$events[$k][$p] = "Fulfilling a contract and decide the PCs are part of the problem."; break;
					}
					break;
				case ('Bullies'):
					$num = "(Group of ".(rand(2,5)).") ";
					switch($x) {
						case ($x <= 2): $events[$k][$p] = "Are harassing some schoolkids."; break;
						case ($x <= 4): $events[$k][$p] = "Are harassing some women."; break;
						case ($x <= 6): $events[$k][$p] = "Are harassing some corporates."; break;
						default: 		$events[$k][$p] = "Are harassing the PCs."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Stray Cat'):
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Slinking down an alley."; break;
						case ($x <= 5): $events[$k][$p] = "Slinks up to you looking for some affection."; break;
						case ($x <= 8): $events[$k][$p] = "Dumpster diving for food scraps."; break;
						case ($x <= 9): $events[$k][$p] = "Fighting another cat over food scraps. Fur everywhere!"; break;
						default: 		$events[$k][$p] = "Rabid and decides to attack the nearest living thing."; break;
					}
					break;
				case ('Drug Addict'):
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Tripping in the middle of the street."; break;
						case ($x <= 6): $events[$k][$p] = "Begs for some pocket change."; break;
						case ($x <= 9): $events[$k][$p] = "Passed out."; break;
						default: 		$events[$k][$p] = "Robs the PCs at gunpoint to feed their habit."; break;
					}
					break;
				case ('Riot'):
					$num = "(Group of ".(rand(3,18)).") ";
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Fighting over food stamps (or something else)."; break;
						case ($x <= 6): $events[$k][$p] = "Trying to get a glimpse of their favorite Rocker or SimStim star."; break;
						default: 		$events[$k][$p] = "Being assaulted by riot police."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('C-SWAT'):
					$num = "(Group of ".(rand(2,5)).") ";
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Preparing to go on a run."; break;
						case ($x <= 7): $events[$k][$p] = "On the way or have opened fire on a cyberpsycho - STAY CLEAR!"; break;
						default: 		$events[$k][$p] = "Have decided the PCs are a threat to society"; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('CyberPsycho'):
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Flexing their cyberware in front of some chrome beauties."; break;
						case ($x <= 4): $events[$k][$p] = "Taking the engine of a car out - with their bare hands."; break;
						case ($x <= 5): $events[$k][$p] = "Putting signposts and street lamps through mailboxes."; break;
						case ($x <= 6): $events[$k][$p] = "Trying to get to the juicy insides of a corner DataTerm."; break;
						case ($x <= 7): $events[$k][$p] = "Trying to stomp on a stray dog."; break;
						case ($x <= 8): $events[$k][$p] = "Crouched in the fetal position in the middle of what's left of a motorcycle, car, or dumpster."; break;
						case ($x <= 9): $events[$k][$p] = "Decides to squish a PC&#39;s head."; break;
						default: 		$events[$k][$p] = "Being assaulted by C-SWAT. Not fun."; break;
					}
					break;
				case ('Solo'):
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Looking for a contract."; break;
						case ($x <= 7): $events[$k][$p] = "Been hanging out at the bar a while and their judgment is impaired."; break;
						case ($x <= 9): $events[$k][$p] = "Wants to prove he's better than one of the PCs."; break;
						default: 		$events[$k][$p] = "In the middle of an op and has no qualms about terminating witnesses."; break;
					}
					break;
				case ('Mercenary'):
					switch($x) {
						case ($x <= 5): $events[$k][$p] = "Looking for a contract."; break;
						case ($x <= 7): $events[$k][$p] = "Asks the PCs if they've seen their target."; break;
						case ($x <= 9): $events[$k][$p] = "Following or is on the way to their target."; break;
						default: 		$events[$k][$p] = "Mistakes a PC for their target."; break;
					}
					break;
				case ('Firefight'):
					$num = "(Group of ".(rand(2,5)).") ";
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Cops and robbers."; break;
						case ($x <= 6): $events[$k][$p] = "Cops and gangsters."; break;
						case ($x <= 9): $events[$k][$p] = "Drive-by shooting."; break;
						default: 		$events[$k][$p] = "Gang War!"; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Assassin'):
					switch($x) {
						case ($x <= 7): $events[$k][$p] = "Looks just like anybody else."; break;
						case ($x <= 9): $events[$k][$p] = "Looking for a contract."; break;
						default: 		$events[$k][$p] = "In the middle of an op and has no qualms about terminating witnesses."; break;
					}
					break;
				case ('Skateboarders'):
					$num = "(Group of ".(rand(1,4)).") ";
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Recklessly skating through foot traffic."; break;
						case ($x <= 6): $events[$k][$p] = "Doing some cool tricks."; break;
						case ($x <= 9): $events[$k][$p] = "Doing some cool tricks off the PCs vehicle."; break;
						default: 		$events[$k][$p] = "Fighting other skaters over something."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('In-Line Skaters'):
					$num = "(Group of ".(rand(1,4)).") ";
					switch($x) {
						case ($x <= 5): $events[$k][$p] = "Recklessly skating through foot traffic."; break;
						case ($x <= 7): $events[$k][$p] = "Doing some tricks."; break;
						case ($x <= 9): $events[$k][$p] = "Doing some tricks off the PCs vehicle."; break;
						default: 		$events[$k][$p] = "Skating through foot traffic and snagging personal belongings as they go."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Vodoun Priest'):
					switch($x) {
						case ($x <= 6): $events[$k][$p] = "Minding their own business."; break;
						case ($x <= 8): $events[$k][$p] = "Gathering Voodoo paraphernalia."; break;
						case ($x <= 9): $events[$k][$p] = "Arguing with somebody."; break;
						default: 		$events[$k][$p] = "Places a curse on one of the PCs for some reason."; break;
					}
					break;
				case ('Stray Dog'):
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Running down the street."; break;
						case ($x <= 6): $events[$k][$p] = "Begging for some affection."; break;
						case ($x <= 9): $events[$k][$p] = "Begging for handouts."; break;
						default: 		$events[$k][$p] = "Rabid and decides to attack the nearest living thing."; break;
					}
					break;
				case ('PediCab Driver'):
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Just hanging around."; break;
						case ($x <= 7): $events[$k][$p] = "Driving a fare."; break;
						default: 		$events[$k][$p] = "Looking for a fare."; break;
					}
					break;
				case ('Psychopath'):
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Quietly mumbling to himself."; break;
						case ($x <= 6): $events[$k][$p] = "Screaming at the top of their lungs."; break;
						case ($x <= 9): $events[$k][$p] = "Asks the PCs about the voices in their head/aliens/small furry creatures/etc."; break;
						default: 		$events[$k][$p] = "Has decided they have to get to the other side of a PC the hard way."; break;
					}
					break;
				case ('Gamblers'):
					$num = "(Group of ".(rand(2,5)).") ";
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Playing a game of chance. Don't interrupt unless you got some creds."; break;
						case ($x <= 7): $events[$k][$p] = "Will ask the PCs to join them."; break;
						case ($x <= 9): $events[$k][$p] = "One player begs for some spare credits."; break;
						default: 		$events[$k][$p] = "One loses severely, goes in to a fit of rage, and will attack the nearest person."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Drunk'):
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Asks for some credits for a drink."; break;
						case ($x <= 7): $events[$k][$p] = "Passes out or is passed out in front of the PCs."; break;
						default: 		$events[$k][$p] = "Offers the PCs a drink - don't insult him!"; break;
					}
					break;
				case ('Drug Dealer'):
					switch($x) {
						case ($x <= 6): $events[$k][$p] = "Tries to sell the PCs some goods. 'The first time's free!'"; break;
						case ($x <= 8): $events[$k][$p] = "High himself."; break;
						default: 		$events[$k][$p] = "Running from the police. A firefight may ensue."; break;
					}
					break;
				case ('BlackOps Team'):
					$num = "(Group of ".(rand(2,5)).") ";
					switch($x) {
						case ($x <= 5): $events[$k][$p] = "On break."; break;
						default: 		$events[$k][$p] = "Busy shooting the mess out of someone or something."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Yello Bike'):
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Just been picked up by someone."; break;
						case ($x <= 8): $events[$k][$p] = "Free for the taking. Just be sure to leave it for someone else when you are through with it."; break;
						default: 		$events[$k][$p] = "Being vandalized by a couple of kids."; break;
					}
					break;
				case ('TechnoMage'):
					switch($x) {
						case ($x <= 7): $events[$k][$p] = "Minding their own business and looks just like anybody else."; break;
						case ($x <= 8): $events[$k][$p] = "Doing some tricks for some stray kids."; break;
						case ($x <= 9): $events[$k][$p] = "Teaching somebody a lesson - without anybody knowing."; break;
						default: 		$events[$k][$p] = "Decides the PCs don't respect technology and will set them straight - unbeknownst to them, of course."; break;
					}
					break;
				case ('Merchant'):
					switch($x) {
						case ($x <= 6): $events[$k][$p] = "Hawking goods."; break;
						case ($x <= 8): $events[$k][$p] = "Will try to buy a trinket off of a PC."; break;
						default: 		$events[$k][$p] = "Accuses a PC of shoplifting and will call the police."; break;
					}
					break;
				case ('Shaman'):
					switch($x) {
						case ($x <= 5): $events[$k][$p] = "Just minding their own business."; break;
						case ($x <= 9): $events[$k][$p] = "Collecting items for their medicine bag."; break;
						default: 		$events[$k][$p] = "Performing a ritual in the middle of an alley."; break;
					}
					break;
				case ('Street Peddlar'):
					switch($x) {
						case ($x <= 6): $events[$k][$p] = "Pesters the PCs to buy something."; break;
						case ($x <= 8): $events[$k][$p] = "Will try to buy a trinket off of a PC."; break;
						default: 		$events[$k][$p] = "Accuses a PC of shoplifting and will call the police."; break;
					}
					break;
				case ('Police'):
					$num = "(Group of ".(rand(1,4)).") ";
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Stopped for a snack."; break;
						case ($x <= 6): $events[$k][$p] = "Are asking questions about a suspect."; break;
						case ($x <= 9): $events[$k][$p] = "Ask to see some papers on, “all that hardware you got!”"; break;
						default: 		$events[$k][$p] = "Are apprehending a suspect."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Drug Raid'):
					$num = "(Group of ".(rand(3,7)).") ";
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Cops have the place staked out."; break;
						case ($x <= 7): $events[$k][$p] = "Cops are on their way in."; break;
						default: 		$events[$k][$p] = "Panic fire randomly sprays the street."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Mutant'):
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Minding their own business."; break;
						case ($x <= 7): $events[$k][$p] = "Asking for money to fund research into the medical technology to reverse their ailments (or bring down the company responsible)."; break;
						case ($x <= 9): $events[$k][$p] = "Trying to hide from the group of people pointing and snickering."; break;
						default: 		$events[$k][$p] = "Will beat the snot out of the PCs if they even look at him."; break;
					}
					break;
				case ('Street Doc'):
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Generally wandering around looking for a quick job."; break;
						case ($x <= 7): $events[$k][$p] = "Patching up some victim."; break;
						default: 		$events[$k][$p] = "Offers the PCs some used body parts or cyberware."; break;
					}
					break;
				case ('Fixer'):
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Offers their business card."; break;
						case ($x <= 6): $events[$k][$p] = "Tries to pawn off goods."; break;
						default: 		$events[$k][$p] = "Conducting business - don't bother him!"; break;
					}
					break;
				case ('Sex Workers'):
					$num = "(Group of ".(rand(1,4)).") ";
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Flagging down a John."; break;
						case ($x <= 6): $events[$k][$p] = "Offer their services."; break;
						case ($x <= 8): $events[$k][$p] = "Ask the PCs to hide them from the law."; break;
						default: 		$events[$k][$p] = "Running from their pimp and ask for help."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Beggar'):
					switch($x) {
						case ($x <= 5): $events[$k][$p] = "Asks for some spare credits."; break;
						case ($x <= 8): $events[$k][$p] = "Demands for some spare credits and will get violent if refused."; break;
						default: 		$events[$k][$p] = "Being beaten by some street punks."; break;
					}
					break;
				case ('Bum'):
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Sleeping on the sidewalk in front of the PCs."; break;
						case ($x <= 7): $events[$k][$p] = "Asks for some spare credits."; break;
						default: 		$events[$k][$p] = "Talks to himself - if the PCs interrupt him, he'll get louder and get crazy."; break;
					}
					break;
				case ('Nomads'):
					$num = "(Group of ".(rand(2,5)).") ";
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Just passing through town."; break;
						case ($x <= 5): $events[$k][$p] = "Stocking up on supplies."; break;
						case ($x <= 7): $events[$k][$p] = "Heading for the local tavern."; break;
						case ($x <= 9): $events[$k][$p] = "Looking for someone who done them wrong."; break;
						default: 		$events[$k][$p] = "Decide to rough the PCs up a bit - just because they're funny lookin'."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Pickpocket'):
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Tries to pawn off some 'new' goods."; break;
						case ($x <= 6): $events[$k][$p] = "Running from the law."; break;
						default: 		$events[$k][$p] = "Tries to pickpocket a PC as they passes."; break;
					}
					break;
				case ('Thief'):
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Tries to pawn off some 'new' goods."; break;
						case ($x <= 7): $events[$k][$p] = "Running from the law."; break;
						default: 		$events[$k][$p] = "Tries to rob the PCs at gunpoint."; break;
					}
					break;
				case ('Rats'):
					switch($x) {
						case ($x <= 5): $events[$k][$p] = "Scurrying down an alley."; break;
						case ($x <= 9): $events[$k][$p] = "Devouring some animal carcass or bit of trash."; break;
						default: 		$events[$k][$p] = "Rabid and decide to attack the nearest living thing."; break;
					}
					break;
				case ('BloodGang'):
					$num = "(Group of ".(rand(3,6)).") ";
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Just prowling around."; break;
						case ($x <= 7): $events[$k][$p] = "Decide to lean on a couple of civilians."; break;
						case ($x <= 9): $events[$k][$p] = "Decide to lean on a PC for owning cyberware."; break;
						default: 		$events[$k][$p] = "Gang War! Bloods -vs- Chromers. And the PCs are caught in the middle."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('SteelGang'):
					$num = "(Group of ".(rand(3,6)).") ";
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Just prowling around."; break;
						case ($x <= 7): $events[$k][$p] = "Decide to lean on a couple of civilians."; break;
						case ($x <= 9): $events[$k][$p] = "Decide to lean on the PCs."; break;
						default: 		$events[$k][$p] = "Gang War! Steels -vs- Bloods. And the PCs are caught in the middle."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('PoserGang'):
					$num = "(Group of ".(rand(3,6)).") ";
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Just showing off their trendy outfits."; break;
						case ($x <= 7): $events[$k][$p] = "Decide to tease a couple of civilians."; break;
						case ($x <= 9): $events[$k][$p] = "Will beat the snot out of the PCs if they make any comment."; break;
						default: 		$events[$k][$p] = "Fashion Feud! And the PCs are caught in the middle without their cashmere."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Chromers'):
					$num = "(Group of ".(rand(3,6)).") ";
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Just prowling around."; break;
						case ($x <= 7): $events[$k][$p] = "Decide to lean on a couple of civilians."; break;
						case ($x <= 9): $events[$k][$p] = "Decide to lean on the PCs."; break;
						default: 		$events[$k][$p] = "Gang War! Chromers -vs- Anybody. And the PCs are caught in the middle."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Biker Gang'):
					$num = "(Group of ".(rand(2,5)).") ";
					switch($x) {
						case ($x <= 3): $events[$k][$p] = "Riding around looking for some trouble."; break;
						case ($x <= 6): $events[$k][$p] = "Stopped for a quick snack. Don't touch... don't look at... don't even think about their bikes!"; break;
						case ($x <= 9): $events[$k][$p] = "Decide to play chicken with pedestrians."; break;
						default: 		$events[$k][$p] = "Dragging somebody down the street with a chain."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				case ('Body Baggers'):
					$num = "(Group of 2) ";
					switch($x) {
						case ($x <= 4): $events[$k][$p] = "Are dragging a body bag down the street."; break;
						case ($x <= 7): $events[$k][$p] = "Are scoping the area for new vict... er, bodies."; break;
						case ($x <= 9): $events[$k][$p] = "Ask to tag along with the PCs."; break;
						default: 		$events[$k][$p] = "If the PCs look weak enough, they will attack them."; break;
					}
					$events[$k][$p] = $num.$events[$k][$p];
					break;
				default: $events[$k][$p] = "Choose two others.";		
			}
		}
	}
	return $events;
}
?>