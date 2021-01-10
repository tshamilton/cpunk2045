<?php
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

function gang($dest = '') {
	global $aux;
	global $mission;

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

	$name = rand(1,100);
	switch($name){
		case ($name <= 15): $gang_name = "The ".$gang_name_a[array_rand($gang_name_a)]; break;
		case ($name <= 85): $gang_name = $gang_name_a[array_rand($gang_name_a)]." ".$gang_name_b[array_rand($gang_name_b)]; break;
		default:			$gang_name = "The ".$gang_name_b[array_rand($gang_name_b)]; break;
	}

	
	$gang_colour = array(
		'Black' => '000000',
		'Gold' => 'ffcc00',
		'Chrome' => 'aaaaaa',
		'Blood' => 'cc0000',
		'Red' => 'ff0000',
		'Blue' => '0000ff',
		'Green' => '00cc00',
		'Magenta' => 'ff00ff',
		'Orange' => 'ff9900',
		'Purple' => '660099',
		'White' => 'ffffff',
		'Yellow' => 'ffff00'
	);
	
	$gcolrs = rand(1,10);
	if ($gcolrs) {
		$pik = array_rand($gang_colour);
		$col = $gang_colour[$pik];
		$gc = $pik." <span class=\"badge badge-pill\" style=\"background-color: #".$col."; border: 1px solid black;\">&nbsp;</span>";
	}
	if ($gcolrs >= 6) {
		$pik = array_rand($gang_colour);
		$col = $gang_colour[$pik];
		$gc .= "/".$pik." <span class=\"badge badge-pill\" style=\"background-color: #".$col."; border: 1px solid black;\">&nbsp;</span>";
	}
	if ($gcolrs == 10) {
		$pik = array_rand($gang_colour);
		$col = $gang_colour[$pik];
		$gc .= "/".$pik." <span class=\"badge badge-pill\" style=\"background-color: #".$col."; border: 1px solid black;\">&nbsp;</span>";
	}

	#
	# Part 2: What type of gang is this?
	#

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
		'Fascist',
		'Vigilante',
		'Taggers',
		'Ex-Mil',
		'Ex-Jail',
		'Ethnic',
		'Holy',
		'Gender'
	);

	$g_s1 = $gang_type[array_rand($gang_type)];
	$g_s2 = $gang_type[array_rand($gang_type)];
	$g_s3 = $gang_type[array_rand($gang_type)];

	$g_age = rand(1,10);
	switch($g_age) {
		case ($g_age <= 4): $gang_age = "New, ".rand(1,12)." months."; $g_age = -2; break;
		case ($g_age <= 7): $gang_age = "Young, ".rand(1,4)." years."; $g_age = -1; break;
		case ($g_age <= 9): $gang_age = "Established, ".rand(5,10)." years."; $g_age = 0; break;
		default:			$gang_age = "Old, ".rand(10,20)." years."; $g_age = 1; break;
	}

	$g_size = rand(1,10) + $g_age;
	switch($g_size) {
		case ($g_size <= 0):	$gang_size = 'Tiny, '.rand(1,5).' members.'; $g_size = -3; $gang_aff = 50; break;
		case ($g_size == 1):	$gang_size = 'Small, '.rand(5,10).' members.'; $g_size = -2; $gang_aff = 40; break;
		case ($g_size <= 5):	$gang_size = 'Medium, '.rand(11,25).' members.'; $g_size = -1; $gang_aff = 30; break;
		case ($g_size <= 8):	$gang_size = 'Large, '.rand(26,50).' members.'; $g_size = 0; $gang_aff = 20; break;
		case ($g_size <= 9):	$gang_size = 'Huge, '.rand(51,100).' members.'; $g_size = 1; $gang_aff = 0; break;
		default:				$gang_size = 'Gigantic, '.rand(101,500).' members.'; $g_size = 2; $gang_aff = 0; break;
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

	$g_aff = rand(1,100);
	$major_gang = Array('Maelstrom', 'Voodoo Boys', '6th Street', 'Valentinos', 'Tyger Claws', 'Iron Sights', 'Red Chrome Legion', 'Black Queens', 'Wild Things', 'Animals', 'Moxes');
	$extra = "";

	if ($g_aff <= $gang_aff) {
		$big_gang = $major_gang[array_rand($major_gang)];

		switch($big_gang) {
			case('Maelstrom'):
				$x = rand(1,10);
				if ($x < 6) { $g_s1 = "Booster"; }
				else { $g_s1 = "Nihilist"; }
				break;
			case('Voodoo Boys'):	
				$x = rand(1,10);
				if ($x < 6) { $g_s1 = "Drug"; }
				else { $g_s1 = "Netrunner"; }
				break;
			case('6th Street'):
				$x = rand(1,10);
				if ($x < 6) { $g_s1 = "Poser"; }
				else { $g_s1 = "Guardian"; }
				break;
			case('Valentinos'):
				$x = rand(1,10);
				if ($x < 6) { $g_s1 = "Poser"; }
				else { $g_s1 = "Party"; }
				break;
			case('Iron Sights'):
				$x = rand(1,10);
				if ($x < 6) { $g_s1 = "Nihilist"; }
				else { $g_s1 = "Race"; }
				break;
			case('Tyger Claws'):
				$x = rand(1,10);
				if ($x < 6) { $g_s1 = "Booster"; }
				else { $g_s1 = "Party"; }
				break;
			case('Red Chrome Legion'):
				$x = rand(1,10);
				if ($x < 6) { $g_s1 = "Booster"; }
				else { $g_s1 = "Race"; }
				break;
			case('Black Queens'):
				$x = rand(1,10);
				if ($x < 6) { $g_s1 = "Poser"; }
				else { $g_s1 = "Nihilist"; }
				break;
			case('Wild Things'):
				$x = rand(1,10);
				if ($x < 6) { $g_s1 = "Drug"; }
				else { $g_s1 = "Nihilist"; }
				break;
			case('Animals'):
				$x = rand(1,10);
				if ($x < 6) { $g_s1 = "Drug"; }
				else { $g_s1 = "Guardian"; }
				break;
			case('Moxes'):
				$x = rand(1,10);
				if ($x < 6) { $g_s1 = "Gender"; }
				else { $g_s1 = "Party"; }
				break;
		}
		$gang_style = $g_s1."/".$g_s2." (".$g_s3.")";
		$extra = "<br/><b>Affil'n:</b> Affiliated with ".$big_gang;
	}
	else {
		$gang_style = $g_s1."/".$g_s2." (".$g_s3.")";
	}

	$title = "Gang - ".$gang_name;
	$text = "<b>Style:</b> ".$gang_style."<br/><b>Colours:</b> ".$gc."<br/><b>Age:</b> ".$gang_age."<br/><b>Size:</b> ".$gang_size."<br/><b>Turf:</b> ".$gang_turf."<br/><b>Influence:</b> ".$gang_influence.$extra;

	if ($dest == "mission") {
		$mission['Gang - '.$gang_name]['Title'] = $title;
		$mission['Gang - '.$gang_name]['Text']  = $text;
	}
	elseif ($dest == "aux") {
		$aux['Gang - '.$gang_name]['Title'] = $title;
		$aux['Gang - '.$gang_name]['Text']  = $text;
	}


	return array('GangName' => $gang_name, 'GangType' => $gang_style);
}

function makeNPC($type = 'random') {
	$roles = array('fixer', 'tech', 'netrunner', 'solo', 'media', 'bystander', 'corp', 'cop', 'ripperdoc');
	if ($type == "random") {
		$type = $roles[array_rand($roles)];
	}
	switch($type) {
		case('fixer'):
			$whoList = array (
				'Anna Nelson - Practical small timer, usually better known for negotiating between nomad families.',
				'Dino Dinovic - Former punk muso turned pro-dabbler in dealing for bands either as agent or procurer.',
			);
			break;
		case('tech'):
			$whoList = array(
				'Ptolemy Biraz - Slow moving, heavy set biotech genius.',
				'Alita Alvarez - Fresh-faced college graduate with instinctual understanding of AI.',
				"Finn O'Calaghan - Grumpy, paranoid, old agoraphobic who has jerry rigged more stable tech than some companies can produce on a facotry line.",
				'Dr. Michael Peterhoff - Annoyingly nostaligic hippy with well-known biotech skills.',
				'Dr. Carol Owens - Brilliant if somewhat myopic biotech expert. Liable to engineer a brilliant doomsday device without actually realising the consequences.'
			);
			break;
		case('netrunner'):
			$whoList = array(
				'Sean "Hooligan" Graine - Sport enthusiast with a talent for cryptography and hacking company systems.',
				'Michiko "Ember" Tanaka - Demure fan of romance novels by day, data thief by night.'
			);
			break;
		case('solo'):
			$whoList = array(
				'Claude Pierce - Cheap, overmuscled thug with just enough brains to shout orders at other people.',
				'Daniel Sinclair - Cheap, overmuscled thug without the brains to shout orders. A rank and file grunt.',
				'Eduardo Eman - Newly made corporate man. From the streets, so subtlety isn\'t a strong suit yet.',
				'Jacob Barre - Sharklike, specialist in locating and returning "absent employees", an extraction ops\' worst nightmare.',
				'Johnny Clean - Well respected merc in his home town. The epitome of "Speak softly and carry a big fragging gun."'
			);
			break;
		case('media'):
			$whoList = array(
				'Edison Carter - Straight-shooting, truth hound. Seems to take a little too much pleasure in watching the powerful squirm.',
				'Gomez DeVries - Brilliantly presented anchorman, prone to slightly too much hubris.'
			);
			break;
		case('bystander'):
			$whoList = array(
				'Samuel Silver - Frustrated biologist pushing a terminal at the local bank.',
				'Martin Honnicker - Local politician, so far right he\'s a danger to traffic.',
				'Wendell Holmes - Just another salaryman, convinced the corporation is everything to him and vice versa.'
			);
			break;
		case('rocker'):
			$whoList = array(
				'Forty - Dreamy voice, synth-guitar, hypnotic on stage. Very driven and self-reliant behind the scenes.',
				'Khoo - Swings between vagued out and hyper intense. Rap artist extraordinare. Can freestyle in multiple languages. Very driven by drug issues in his area which doesn&#39; please the local dealers.'
			);
			break;
		case('corp'):
			$whoList = array(
				'Elaine Murray - Spoilt, pushy type-A sort who looks at any sort of street-level danger as <i>"slummy thrills"</i>.',
				'John Cattrall - A decent sort, assuredly a lion in the meeting room but quite timid when it comes to anything physical.',
				'Jorge Sanchez - A world class efficiency expert. He pays you a call in your office, you get efficient.',
				'Evelyn Franklin - Conventionally pretty, non obtrusive, the kind of secretary who\'s secretly running the place.',
				'Meredith Sloan - Total hard case, management love her because she gets things done. As long as they don\'t look too close at the how...'
			);
			break;
		case('cop'):
			$whoList = array(
				'H.C. Strum - Sees the city as a warzone, and hes a general here to clean it up. Amoral, no problem with bribery if it moves his agenda along.',
				'Carl Hollis - Explosion loving, bribe taking, downward-punching asshat with a face like a fist sized target.',
				'Majak Caddow - Weary, good hearted beatcop constantly two steps away from going private if it wasnt for his need to eat.'
			);
			break;
		case('ripperdoc'):
			$whoList = array(
				'Burke &amp; Hare - Burke is a brilliant cybernetic installation expert. Hare looks like he was born saying "I didn&#39;t do it.". Why do these two work together? Same moral level.',
				'Octavio - Laid back, as you can see by his office. Good doc though, as you might see by the military commmendations on his wall. Former combat medic.',
				'Victor Vektor - Good reputation in the neighbourhood. Might give you a cut rate if he thinks you&#39;re worth the investment. Runs a boxing gym.',
				'Nina Kraviz - Fresh out of college and backed by Daddy&#39;s money to set up a private clinic. Don&#39;t underestimate her abilities though.'
			);
	}
	$npc = $whoList[array_rand($whoList)];

	return ($npc);

}
/*$test_gang = gang();
pretty_var('TEST GANG', 'aaaaaa');
pretty_var($test_gang, 'aaaaaa');*/
?>
