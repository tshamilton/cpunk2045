<?php

function gang($who = '') {
	$gang = Array();
	/*pretty_var('Gang generator called.', '009900');*/
	$gang_name_a = array(
		'Cortical',		'Subway',		'Radical',		'Binary',		'Fragile',		'Hate',			'Electric',		'Mobile',
		'Endgame',		'Bubblegum',	'Biological',	'Shaolin',		'Chrome',		'Polymer',		'Rudeboy',		'Terminal',
		'Shadow',		'Subsonic',		'Chemical',		'Chosen',		'Toxic',		'Steel',		'Black',		'Cannibal',
		'Panzer',		'Gun',			'Disposable',	'Iron',			'Speedball',	'AK',			'Liquid',		'Junky',
		'Instant',		'Zone',			'Red',			'Devils',		'Remodelled',	'Faceless',		'Vampire',		'Crosstown',
		'Blue',			'Spirit',		'Nomad',		'Hyraulic',		'Fractal',		'Brain',		'Screaming',	'Lucid',
		'Napalm',		'Happy'
	);
	$gang_name_b = array(
		'Dogs',			'Assassins',	'Dragons',		'Prophets',		'Machine',		'Society',		'Freaks',		'Girls',
		'Militia',		'Atrocity',		'Impulse',		'Rippers',		'Savages',		'Riot',			'Apocalypse',	'Storm',
		'Soldiers',		'Cult',			'Loas',			'Kidz',			'Ghosts',		'Church',		'Technicals',	'Clowns',
		'Fists',		'Sharks',		'Boys',			'Maniacs',		'Ultimates',	'Legends',		'Killaz',		'Bullets',
		'Revolvers',	'Bosses',		'Thugs',		'Babies',		'Army',			'Fanatics',		'Daddies',		'Chaos',
		'Hammer',		'Method',		'Clan',			'Terror',		'State',		'Wasters',		'Shards',		'Moderns',
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

	$gang_type = array(
		'Booster',		'Chromer',		'Combat',		'Drug',			'Eco',			'Ethnic',
		'Ex-Jail',		'Ex-Mil',		'Exotic',		'Fascist',		'Gender',		'Go',
		'Guardian',		'Holy',			'Netrunner',	'Nihilist',		'Nostalgia',	'Party',
		'Political',	'Poser',		'Prank',		'Puppet',		'Taggers',		'Vigilante'
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

	$text = "<b>Style:</b> ".$gang_style."<br/><b>Colours:</b> ".$gc."<br/><b>Age:</b> ".$gang_age."<br/><b>Size:</b> ".$gang_size."<br/><b>Turf:</b> ".$gang_turf."<br/><b>Influence:</b> ".$gang_influence.$extra;

	if ($who == 'aux') {
		/*pretty_var($who);*/
		$E[$gang_name] = $text;
		return $gang_name;
	}
	else {
		/*pretty_var($who);*/
		$g['Title'] = $gang_name;
		$g['Text'] = $text;
		/*pretty_var($g, '00aaff');*/
		return $g;
	}
	
}

function nomadFam() {
	$fams = Array("Aldecaldos", "Wraiths", "Snake Nation", "Jode Nation", "Blood Nation", "Meta", "Thelas Nation", "Folk Nation", "Raffen Shiv");
	return $fams[array_rand($fams)];
}

function makeMission_Who($w ,&$plot) {
	switch($w) {
		case("Military Corp"):
			$which = Array('Mercs', 'Security');
			$w = "Military Corp (".pickCorp($which[array_rand($which)]).")";
			break;
		case("Biotech Corp"):
			$which = Array("Bioengineering", "Chemicals", "Agriculture");
			$w = "BioTech Corp (".pickCorp($which[array_rand($which)]).")";
			break;
		case("Booster Gang"):
			$gang = gang('aux');
			$w = "Gang (".$gang.")";
			break;
		case("Solo"):
			list($k, $v) = makeNPC('solo', 'Involved Merc'); $plot[$k] = $v;;
			preg_match("/ - (.+)/", $k, $match);
			$solo = $match[1];
			$w = "Merc (".$solo.")";
			break;
		case("Media(s)"):
			list($k, $v) = makeNPC('media', 'Involved Journo'); $plot[$k] = $v;;
			preg_match("/ - (.+)/", $k, $match);
			$media = $match[1];
			$w = "Media (".$media.")";
			break;
		case("Fixer"):
			list($k, $v) = makeNPC('fixer', 'Involved Fixer'); $plot[$k] = $v;;
			preg_match("/ - (.+)/", $k, $match);
			$fixer = $match[1];
			$w = "Fixer (".$fixer.")";
			break;
		case("Hacker"):
			list($k, $v) = makeNPC('netrunner', 'Involved Hacker'); $plot[$k] = $v;;
			preg_match("/ - (.+)/", $k, $match);
			$nr = $match[1];
			$w = "Hacker (".$nr.")";
			break;
		case("Rocker (or fans)"):
			list($k, $v) = makeNPC('rocker', 'Involved Rocker'); $plot[$k] = $v;;
			preg_match("/ - (.+)/", $k, $match);
			$rocker = $match[1];
			$w = "Rocker (".$rocker.")";
			break;
		case("Merc Outfit"):
			if (rand(1,10) > 5) {	
				$w = "Merc Outfit (".pickCorp('Mercs').")";
			}
			else {					
				$w = "Merc Outfit (Non-Corp)";
			}
			break;
		case("Nomad Family"):
			$nmf = nomadFam();
			$w = "The ".$nmf;
			break;
		case("Rogue Cops"):
			list($k, $v) = makeNPC('cop', 'Rogue Cop'); $plot[$k] = $v;;
			preg_match("/ - (.+)/", $k, $match);
			$cop = $match[1];
			$w = "Rogue Cop (".$cop.")";
			break;
	}

	return $w;
}

function makeMission($what) {
	global $E;
	$plot = Array();
	$actorA = ""; $actorB = "";
	$locA = ""; $locB = "";
	$thirdA = ""; $thirdB = "";
	$sep = "&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-weight: bold; color: #00dd00;\">&#167;</span>&nbsp;&nbsp;&nbsp;&nbsp;";

	switch($what) {
		case("A New Leaf"):
			$title = "A New Leaf?";
			$involvement = array(
				"The PCs work with a media who is covering the story.", 
				"The PCs work for Don Emiliano&#39;s rival.", 
				"The PCs are hired by Don Emiliano and the familia are NOT happy.",
				"The PCs are hired by Don Emiliano, the familia seem to be washing their hands of him.",
				"The PCs are hired by an old friend of the Don's. They're convinced he's up to something."
			);
			$inv = $involvement[array_rand($involvement)];
			$body = "Big media story! Don Emiliano has declared he's going straight. Why? And if it's true, how come no-one appears to have taken his place at the head of the family?<br/>\n".t(8).$inv;
			if ($inv == "The PCs work with a media who is covering the story.") { 
				list($k, $v) = makeNPC('media', 'Journo is Suspicious');
				$plot[$k] = $v;
			}
			$E["Ticker"]["Headlines"] = "Crime: Head of Emiliano family breaks ties, claims will 'go straight'".$sep.$E["Ticker"]["Headlines"];
			break;
		case("Ballroom Blitz"):
			$title = "It's...It's A Ballroom Blitz";

			$plot['GangA'] = gang(); /*pretty_var($plot['GangA'], 'ff3333');*/
			$plot['GangB'] = gang(); /*pretty_var($plot['GangB'], 'ff3333');*/
			$plot['Red Corner - '.$plot['GangA']['Title']] = $plot['GangA']['Text'];
			$plot['Blue Corner - '.$plot['GangB']['Title']] = $plot['GangB']['Text']; 

			$involvement = array(
				"The PCs have a vested interest in one of the gangs.",
				"The PCs have a vested interest in both of the gangs!",
				"Someone important to the PCs lives in the zone where the fight will go down.",
				"The PCs live in the zone where the battle takes place."
			);
			$body = "Two gangs (".$plot['GangA']['Title']." &amp; ".$plot['GangB']['Title'].") have decided enough is enough and are going to battle it out.<br/>\n".t(8).$involvement[array_rand($involvement)];
			unset($plot['GangA']);unset($plot['GangB']);
			break;
		case("Blast From Your Past"):
			$title = "A Blast From The Past";

			$involvement = array(
				'The Someone needs the PCs help.',
				'The Someone wants vengeance on the PC for something (perceived or real).',
				'The PC has a past with this person they&#39;d rather forget.',
				'The Someone is dead, killed by a common enemy. Is the PC next?',
				'The PC owes it to the Someone to find out who killed them.'
			);
			$body = "Someone from the lifepath of one of the PCs turns up out of the blue and starts causing problems.<br/>\n".t(8).$involvement[array_rand($involvement)];
			break;
		case("Celebrity Under Threat"):
			$title = "The Price Of Fame";

			$choice1 = Array('rocker', 'media'); /* Who is in trouble? */
			list($k, $v) = makeNPC($choice1[array_rand($choice1)], 'The Famous'); $plot[$k] = $v;
			preg_match("/ - (.+)/", $k, $match);
			$name = $match[1];

			$choice2 = Array('The PCs are hired as bodyguards.', 'One of the PCs knows who is behind the threat.', 'The PCs are covering the story with a media.');
			$inv = $choice2[array_rand($choice2)];

			$choice3 = Array('being stalked', 'receiving death threats', 'in a contract dispute with their label/employer', 'an assassination target');
			$what = $choice3[array_rand($choice3)];

			if (preg_match("/dispute/", $what)) {
				$E["Ticker"]["Headlines"] = "Media: Rumours persist that ".$name." will leave label at end of contract. ".$sep.$E["Ticker"]["Headlines"];
			}
			else {
				$E["Ticker"]["Headlines"] = "Media: Agent denies any 'credible' threat to ".$name.". ".$sep.$E["Ticker"]["Headlines"];
			}

			if ($inv == 'The PCs are covering the story.') {
				list($k, $v) = makeNPC('media', 'If Journo Required'); $plot[$k] = $v;
			}
			$body = "A major celebrity, ".$name.", is ".$what.".<br/>\n".t(8).$inv;
			break;
		case("Cleaning House"):
			$title = "Clearing The Caseload";

			$involvement = array(
				"The PCs are the cops, or at least hired by them.", 
				"The PCs are responsible for a list of unsolved crimes as long as your arm, funny how the cops would have such an accurate list.", 
				"The PCs look like candidates to clear the backlog, whether they did it or not.",
				"The new Chief of Police is from out of town, someone who doesn't understand how this city works.",
				"The new Chief of Police is from out of town, they have an agenda that could mean a lot of trouble for everyone."
			);
			$inv = $involvement[array_rand($involvement)];
			if (preg_match("/Chief/", $inv)) {
				$E["Ticker"]["Headlines"] = "Crime: New Police Chief promises crackdown on 'urban violence'.".$sep.$E["Ticker"]["Headlines"];
			}
			$body = "Bowing to public/political pressure after a public gaffe, the Police undertake a massive effort to clean up their backlog of cases for the sake of PR. Long-forgotten misdemeanors are re-investigated. \"Arrangements\" suddenly cease to be effective. Favors are forgotten.<br/>\n".t(8).$inv;
			list($k, $v) = makeNPC('cop', 'Why Hello Officer'); $plot[$k] = $v;
			break;
		case("Comedown"):
			$title  = "Comedown";
			$incident = Array(
				'An AV was downed on the city outskirts, killing several people.',
				'A helicopter was brought down in the middle of the city.',
				'An AV was brought down in an industrial zone, slamming into a factory'
			);
			$involvement = Array(
				'The PCs knew someone who died in the crash, and an acquaintance wants their death investigated.',
				'Someone on board is not among the bodies. What happened to them, and why?',
				'The vehicle was transporting important materials/prototype which has failed to appear in the wreckage.'
			);
			$body = $incident[array_rand($incident)]." The crash may be accidental, or the result of attack or sabotage.<br/>\n".t(8).$involvement[array_rand($involvement)];
			break;
		case("Darkness Falls"):
			$title = "Darkness Falls";

			$involvement = Array(
				"The PCs need to get out of the neighborhood before they're caught in a full blown riot.",
				"The local power substation has been damaged, mostly thanks to another crew trying to hit a bank. It might be easy for cops to just start hunting freelancers in the neighborhood unless something is done.",
				"An old enemy has been planning this assassination attempt for a little while now, right up to coaxing the crew into this neighborhood. It's a trap!"
			);
			$inv = $involvement[array_rand($involvement)];
			$body = "The team are passing through a neighborhood they don't usually visit when the lights go out. All of them. For several city blocks. Some areas are plunged into darkness, others are lit purely by car headlights and agents.<br/>\n".t(8).$inv;
			break;
		case("Election Day"):
			$title = "Election Day";

			$involvement = Array(
				"The contact is a rep for a decent politician (insofaras ...yada), the target shouldn't be difficult to get the info on, it's just a matter of doing it discreetly.",
				"The contact claims to be a rep for the decent politician (insofaras... yada), the target dirt won't be hard to find, it'll be the media ambush that follows that will be tough.",
				"The contact claims to be a rep for the decent politician (insofaras... yada), the target dirt won't be hard to find, the following media ambush is poorly planned but this fixer knows the best hidden mistakes are buried.",
				"The contact is clearly is corrupt as the poli they represent. Getting the dirt isn't hard, until the party are caught by the target poli's fixer. A counter offer is made."
			);
			$inv = $involvement[array_rand($involvement)];
			$body = "The mayoral election campaigns are underway. The vitriol between the three main contenders is enough that most fixers have backed off from anything obviously political since no amount of money covers having an enemy in city hall. As it is, one of the PCs is contacted directly by someone claiming to represent one of the main runners. They want someone to dig up dirt on their rival.\n".t(8).$inv;
			break;
		case("Extraction"):
			$title = "Headhunter";

			$roles = Array('tech', 'corp');
			list($k, $v) = makeNPC($roles[array_rand($roles)], 'The Target'); $plot[$k] = $v;
			preg_match("/ - (.+)/", $k, $match);
			$name = $match[1];
			
			$CorpA = pickCorp();
			list($sector, $CorpA) = explode("~", $CorpA);
			$CorpB = $CorpA;
			while($CorpB == $CorpA) { $CorpB = pickCorp($sector); }

			$involvement = array(
				'The PCs are hired by '.$CorpA.' as the black ops team.',
				$name.' is a friend of one of the PCs',
				'The PCs work for '.$CorpB,
				$name.' is a digruntled employee and has incriminating documentation on '.$CorpB.', who is happy to see everyone involved dead before the docs go public.',
				'Imagine the PCs surprise when they discover that '.$name.' has no idea about this agreement. The rep from '.$CorpB.' might have overstated their willingness to jump ship.'
			);
			$body = "The team are approached by a rep from ".$CorpA.". They have decided that they want ".$name." (currently working for ".$CorpB.") to work for them instead. ".$CorpB." refuses to let them go, so ".$CorpA." is using a black ops team to kidnap, er, extract them.<br/>\n".t(8).$involvement[array_rand($involvement)];
			break;
		case("Give Me Everything"):
			$title = "Show Them, Show Them All";

			$involvement = array(
				'Madman threatens nuclear devastation.',
				'Eco-guerrilla plans to unleash a bioplague.',
				'Someone wants to kick off a war between two major gangs, nomad families, crime gangs or corps.'
			);
			$body = "Someone with too little sanity has found too much power...and only the PCs can stop him. Think James Bond.<br/>\n".t(8).$involvement[array_rand($involvement)];
			break;
		case("Going Bust"):
			$title = "Vultures Circling Overhead";

			$involvement = array(
				"It's the PCs main employer. They may need a little protection as they might be considered expendible or worse, new assets.",
				"It's the PCs main employer. The soon-to-be-Ex-CEO wants a little cover while they make a run for it with all the remaining assets.",
				"It was the PCs actions that brought it down. A little revenge may be on their cards.",
				"A fixer is arranging the removal of data/prototypes/assets while security is down.",
				"A fixer is arranging an extraction before things get rough in the office.",
				"Someone wants the company's demise investigated, a corporation-level whodunnit, if you will."
			);
			$inv = $involvement[array_rand($involvement)];
			if ($inv == 'A fixer is arranging ') {
				list($k, $v) = makeNPC('fixer', 'The Fixer'); $plot[$k] = $v;
			}
			$E["Ticker"]["Headlines"] = "Business: Asset-strippers circle around collapse of major company.".$sep.$E["Ticker"]["Headlines"];

			$body = "A major Corp has gone into liquidation. Maybe this has been on the cards for a while, or perhaps it's entirely unexpected. Either way it's trouble.<br/>\n".t(8).$inv;
			break;
		case("Hacker Havoc"):
			$title = "Hacker Havoc";
			list($k, $v) = makeNPC('netrunner', 'The Gremlin'); $plot[$k] = $v;
			$angle = Array(
				"causing network strife, stealing their data, crashing their systems, etc.",
				"messing with their automation, screwing with deliveries, disabling alarms, messing with credit accounts, etc.",
				"being a distraction, shutting down machinery, turning off alarms, changing channels on TV/Radios",
				"going all out, screwing with their network, messing with machinery, emptying credit accounts, cancelling deliveries, etc."
			);
			$involvement = Array(
				"The PCs are hired by the main sufferer to find and eliminate the decker.",
				"The PCs are hired by a netrunner to find out who is behind it and why.",
				"The PCs are the netrunner's target.",
				"The PCs know the hacker.",
				"The PCs are hired to eliminate the netrunner and find out what's behind it all."
			);
			$body = "A netrunner is causing disruption for someone. Specifically, they're ".$angle[array_rand($angle)]."<br/>\n".t(8).$involvement[array_rand($involvement)];
			break;
		case("Media Circus"):
			$title = "Media Circus";

			list($k, $v) = makeNPC('media', 'Live &amp; Direct'); $plot[$k] = $v;
			$involvement = array(
				'The PCs are caught up in the event, but the media is the problem.',
				'The PCs are involved in something completely irrelevant but highly sensitive, and there are too many medias snooping around.',
				'The PCs are hired to protect the media while they investigate.',
				'The PCs are hired by a rival company to make life hard for the media.'
			);
			$angle = array(
				'A hip music scene emerges locally (cf. Manchester 1988 or Seattle 1991).',
				'A personal appearance by a major celebrity.',
				'Minor skirmishing in the city between two corps. No new Corp War, but enough to raise interest.',
				'A new invention or major product (think new car or iPhone) has been launched.',
				'A local civic disaster.'
			);
			$body = "Something is happening in the city that brings all the media buzzards in. ".$angle[array_rand($angle)]."<br/>\n".t(8).$involvement[array_rand($involvement)];
			break;
		case("Mob Handed"):
			$title = "Mob Handed";

			$mob = array('Mafia', 'Yakuza', 'Tong', 'crime');
			$involvement = array(
				"The PCs are cutting in on the Mob's business.", 
				"They insulted/killed someone the Mob holds in high regard.", 
				"They PCs could, of course, drop everything and assist them with a little business of theirs. That might help.");
			$body = "A local ".$mob[array_rand($mob)]." syndicate have been slighted by the PCs, so they've decided to make an example of them.<br/>\n".t(8).$involvement[array_rand($involvement)];
			break;
		case("Old Flame"):
			$title = "Old Flame Reignited";
			$involvement = array(
				"They're on the run from the law.",
				"They're on the run from crime group/gang.",
				"They're on the run from their former employer",
				"Their new partner is a psycho. Thanks to them, they may have done something foolish.",
				"The person they left you for, as forewarned, was a psycho. Was. Unfortunately, they had influential friends.",
				"They want to use the PC for something (but of course won't tell them that)."
			);
			$inv = $involvement[array_rand($involvement)];
			if ($inv == "They're on the run from their former employer") {
				$co = pickCorp(); $c = explode("~", $co); $co = $c[1];
				$inv .= ', '.$co.'.';
			}
			$body = "They just re-emerge, possibly while one of the PCs is in-flagrante with their new flame (never should have let them keep that keycard). That, or they come running when they're in big trouble. But hey, it's not like things can get worse, right?<br/>\n".t(8).$inv;
			break;
		case("The Outsider"):
			$title = "The Outsider";
			$who = array(
				"A foreign diplomat is stirring trouble, working that diplomatic immunity...",
				"Someone from the PCs past with something to hold over their heads.",
				"A goldenkid wants to tear the famous Night City up, partying shopping, being obnoxious, they hire the PCs as bodyguards.",
				"A goldenkid who wants to get in the PCs faces for LOLs and fame. Sure, you could blast them, but Daddy's got mercenaries on retainer.",
				"A hotshot solo is stealing jobs from the PCs",
				"New Chief of Police has made it clear that 'agreements' with beat cops no longer exist.",
				"The new gang boss doesn't recall agreeing anything with your PCs."
			);
			$body = "Someone has arrived in town who upsets the status quo.<br/>\n".t(8).$who[array_rand($who)];
			break;
		case("Perfect Drug"):
			$title = "The Perfect Drug";

			$sector = array('Medicine', 'Bioengineering', 'Chemicals');
			$impact = Array(
				"Once thought of as 'safe' it has long term effects that are only just starting to be seen (think 'Black Shakes' from the Johnny Mnemonic movie).",
				"It's part of a black ops public experiment by ".pickCorp($sector[array_rand($sector)])."'s pharmaceuticals division.",
				"The comedown is causing short-term cyberpsychosis",
				"One of the PCs is unaware they're addicted to it, having had a contact high with a user. Untreated addiction impacts are <i>BAD</i>."
			);
			$involvement = Array(
				"The PCs are trying to curb its spread in their neighbourhood.",
				"One of the PCs knows a fixer trying to sell (or get rid of) their stash before the heat gets turned up on its supply.",
				"The cops need help to find the main supplier and cut them off."
			);
			$inv = $involvement[array_rand($involvement)];
			if ($inv == "One of the PCs knows a fixer trying to sell it before the heat gets turned up on its supply.") {
				list($k, $v) = makeNPC("fixer", "The Pusher"); $plot[$k] = $v;
			}
			if ($inv == "The cops need help to find the main supplier and cut them off.") {
				list($k, $v) = makeNPC("cop", "Your Blue Contact"); $plot[$k] = $v;
			}
			$body = "A new drug has hit your neighbourhood. It has become so popular, it's supply has now become a MAJOR problem.<br/>\n".t(8).$impact[array_rand($impact)]."<br/>\n".t(8).$inv;
			$E["Ticker"]["Headlines"] = "Crime: NCPD look to fast track banning of new street drug.".$sep.$E["Ticker"]["Headlines"];

			break;
		case("Psycho Killer"):
			$title = "Psycho Killer";

			$involvement = array(
				'The PCs are on the list.',
				'The PCs are cops (or assisting cops) trying to catch him.',
				'The PCs are medias (or assisting a media) covering the story.',
				'Someone close to the PCs is/was on the list.'
			);
			$inv = $involvement[array_rand($involvement)];
			if ($inv == 'The PCs are cops (or assisting cops) trying to catch him.') {
				list($k, $v) = makeNPC('cop', 'Your Blue Contact'); $plot[$k] = $v;
			}
			if ($inv == 'The PCs are medias (or assisting a media) covering the story.') {
				list($k, $v) = makeNPC('media', 'Journo'); $plot[$k] = $v;
			}

			$body = "Someone in the city is working their way through a list. The bodies are starting to pile up and it seems even the people of Night City can have fear put into them...<br/>\n".t(8).$inv;
			$E["Ticker"]["Headlines"] = "Crime: New Night City Stalker? Bodies pile up with similar MO, NCPD silent.".$sep.$E["Ticker"]["Headlines"];
			break;
		case("Shut Up And Drive"):
			$title = "Family Trouble";

			$involvement = array('One of the PCs spurned (or accepted!) the amorous advances of the leader&#39;s son/daughter.', 'The PCs embarrassed a high-ranking member.', 'The PCs have initiated a project that the nomads oppose.');
			$body = "Somehow the PCs have earned the wrath of a nomad family, the ".nomadFam().". They&#39;re coming to town to deal with you specifically.<br/>\n".t(8).$involvement[array_rand($involvement)];

			break;
		case("Underbelly"):
			$title = "Underbelly";

			list($k, $v) = makeNPC('cop', 'Bad Cop'); $plot[$k] = $v;
			$involvement = array(
				'The PCs are one of the cops&#39; targets. They need to keep those KPIs up ya know.',
				'The cops &#39;have an arrangement&#39; with one of the PCs and need a little something done off the books.',
				'The cops are going to blackmail the PCs into doing something that they don&#39;t want to be involved in.',
				'The cops need someone to play crook for them while a ranking officer is in town to make them look good.'
			);
			$body = "Somewhere in the city are one or more rogue cops. They may have gone vigilante or (more likely) they're corrupt.<br/>\n".t(8).$involvement[array_rand($involvement)];
			break;
		case("WhosSorryNow"):
			$title = "Who's Sorry Now?";
			$crim = Array(
				'major gang leader',
				'ranking leader in the Emiliano family',
				'key Night City oyabun',
				'leader of a major Tong crime gang'
			);
			$problem = Array(
				'They are about to face trial. They have something on the PCs that they can trade in court.',
				'Only, yeah, they escaped. Pulled strings, greased palms, gone. They have turned up wanting a meeting with the PCs.',
				'Unfortunately, they were busted out while being transported from court to jail. They believe the PCs responsible for their arrest.',
				'Somewhere between arraignment and remand, they were bumped off. Cops are investigating how, someone wants to know who ordered it.'
			);
			$body = "A ".$crim[array_rand($crim)]." is captured by the NCPD. ".$problem[array_rand($problem)]." Maybe he has some dirt on the PCs, and is eager to sell them out to bargain in court.\n";
			break;
		case("Wishlist"):
			$title = "Wishlist";

			$involvement = Array('a brand new prototype ICEbreaker.','military-grade firearms','classified documents','details to a lost cache.');
			$whoWants = Array('one or more of the PCs', 'a Fixer');
			$who = $whoWants[array_rand($whoWants)];
			$body = "Something valuable to ".$who." (specifically, ".$involvement[array_rand($involvement)].") becomes available, just not by legal means.";
			if ($who == 'a Fixer') {
				list($k, $v) = makeNPC('fixer', 'Mr Who'); $plot[$k] = $v;
			}

			break;
	}

	$who = array(
		"The Mob", "Military Corp", "Biotech Corp", "The Government", "Booster Gang",
		"Solo", "Merc Outfit", "Media(s)", "Fixer", "Hacker", "Foreign Government",
		"Eco-guerrillas", "Nomad Family", "Police Force", "Rogue Cops", "Cyberpyscho",
		"Rocker (or fans)", "Conspiracy Theorists", "Rogue Government Agents", "Double!"
	);
	$who = array(
		"Solo", "Media(s)", "Fixer", "Hacker", "Rogue Cops", "Rocker (or fans)"
	);
	$actor = $who[array_rand($who)];

	if ($actor == "Double!") {
		while ($actorA == "Double!" || $actorA == "") {	$actorA = $who[array_rand($who)]; }
		while ($actorB == "Double!" || $actorB == "") {	$actorB = $who[array_rand($who)]; }
		$actorA = makeMission_Who($actorA, $plot);
		$actorB = makeMission_Who($actorB, $plot);
		$actor = $actorA." and ".$actorB;
	}
	else {
		$actor = makeMission_Who($actor, $plot);
	}

	$where = array(
		"Warehouse", "Corp Office", "Government Office", "Nightclub",
		"Docks", "Mob Office", "Combat Zone", "Dustzone",
		"Airport", "Online", "Media Office", "Rooftops",
		"Subways", "Police Station", "Diner/Restaurant", "Concert Hall",
		"Hotel", "Lab", "Mall", "Double!"
	);
	$location = $where[array_rand($where)];
	if ($location == "Double!") {
		while ($locA == "Double!" || $locA == "") {	$locA = $where[array_rand($where)]; }
		while ($locB == "Double!" || $locB == "") {	$locB = $where[array_rand($where)]; }
		$location = $locA." and ".$locB;
	}

	$real = array(
		"Government cover-up", "Corp. extraction", "Corp takeover", "Bent cops",
		"Smuggling", "Gang infiltration", "Blackmail", "Decker causing havoc",
		"Old enemy", "Old friend", "New drug", "New hardware",
		"Solo on the warpath", "Medias 'creating' news (i.e. hoax)", "The Mob",
		"Biotech corp 'experimenting'", "Cultists", "All for love", "Nothing. It really is what it appears", "Double!"
	);
	$third = $real[array_rand($real)];
	if ($third == "Double!") {
		while ($thirdA == "Double!" || $thirdA == "") {	$thirdA = $real[array_rand($real)];	}
		while ($thirdB == "Double!" || $thirdB == "") {	$thirdB = $real[array_rand($real)];	}
		$third = $thirdA." and ".$thirdB;
	}

	$body .= "\n".t(8)."<dl>\n";
	$body .= t(8)."<dt class=\"fst-italic\">Involved (Friends? Foes? A little of both?):</dt>\n";
	$body .= t(8)."<dd class=\"text-end\">".$actor."</dd>\n";
	$body .= t(8)."<dt class=\"fst-italic\">Where it all comes down:</dt>\n";
	$body .= t(8)."<dd class=\"text-end\">".$location."</dd>\n";
	$body .= t(8)."<dt class=\"fst-italic\">We discover it's really:</dt>\n";
	$body .= t(8)."<dd class=\"text-end\">".$third."</dd>\n";
	$body .= t(8)."</dl>\n";

	$plot['Text'] = $body;
	$plot['Title'] = $title;

	return $plot;
}

function makeNPC($type = 'any', $title) {
	global $C;
	$roles = array('fixer', 'tech', 'netrunner', 'solo', 'media', 'bystander', 'corp', 'cop', 'ripperdoc');
	if ($type == 'any') {
		$type = $roles[array_rand($roles)];
	}

	switch($type) {
		case('bystander'):
			$npc = explode(" - ", $C["npc-bystander"][array_rand($C["npc-bystander"])]);
			break;
		case('corp'):
			$npc = explode(" - ", $C["npc-corp"][array_rand($C["npc-corp"])]);
			break;
		case('fixer'):
			$npc = explode(" - ", $C["npc-fixer"][array_rand($C["npc-fixer"])]);
			break;
		case('netrunner'):
			$npc = explode(" - ", $C["npc-netrunner"][array_rand($C["npc-netrunner"])]);
			break;
		case('media'):
			$npc = explode(" - ", $C["npc-media"][array_rand($C["npc-media"])]);
			break;
		case('nomad'):
			$npc = explode(" - ", $C["npc-nomad"][array_rand($C["npc-nomad"])]);
			break;
		case('rocker'):
			$npc = explode(" - ", $C["npc-rocker"][array_rand($C["npc-rocker"])]);
			break;
		case('solo'):
			$npc = explode(" - ", $C["npc-solo"][array_rand($C["npc-solo"])]);
			break;
		case('tech'):
			$npc = explode(" - ", $C["npc-tech"][array_rand($C["npc-tech"])]);
			break;
		case('cop'):
			$npc = explode(" - ", $C["npc-cop"][array_rand($C["npc-cop"])]);
			break;
		case('ripperdoc'):
			$npc = explode(" - ", $C["npc-medic"][array_rand($C["npc-medic"])]);
			break;
	}

	return Array($title.' - '.$npc[0], $npc[1]);
}

function missionSelect() {
	$debug = "missionSelect~";
	$plot = array();
	$msn_a = "";	$msn_b = "";

	/*pretty_var("mSelect Entry (".$msn_a."|".$msn_b.")");*/

	$what = Array(
		"A New Leaf", "Ballroom Blitz", "Blast From Your Past", "Celebrity Under Threat", "Cleaning House",
		"Comedown", "Darkness Falls", "Election Day", "Extraction", "Give Me Everything",
		"Going Bust", "Hacker Havoc", "Media Circus", "Mob Handed", "Old Flame", 
		"The Outsider", "Perfect Drug", "Psycho Killer", "Shut Up And Drive", "Underbelly",
		"WhosSorryNow", "Wishlist", "Double Trouble!"
	);

	$msn_a = $what[array_rand($what)];
	if ($msn_a == "Double Trouble!") { $debug .= "~2x"; }
	else { $debug .= "mA:".$msn_a; }
	/*$msn_a = "Double Trouble!"; /* For testing DT mechanics, uncomment above line when done. */
	/*$msn_a = "Ballroom Blitz"; /* For testing BB mechanics, uncomment above line when done. */
	/*$msn_a = "A New Leaf"; /* For testing late headline adding via missions, uncomment above line when done. */
	/*pretty_var("mSelect Set A-Plot (".$msn_a."|".$msn_b.")");*/

	if ($msn_a == "Double Trouble!") {
		/*pretty_var("mSelect It's 2x (".$msn_a."|".$msn_b.")");*/
		while ($msn_a == "Double Trouble!") {
			$msn_a = $what[array_rand($what)];
			/*pretty_var("mSelect Re-roll Pl-A (".$msn_a."|".$msn_b.")");*/
			$msn_b = $msn_a;
			/*pretty_var("mSelect Preset Pl-B (".$msn_a."|".$msn_b.")");*/
			while ($msn_b == $msn_a || ($msn_b == "Double Trouble!")) {
				$msn_b = $what[array_rand($what)];
				/*pretty_var("mSelect Roll Pl-B (".$msn_a."|".$msn_b.")");*/
			}
		}
		/*pretty_var("mSelect Plots Set (".$msn_a."|".$msn_b.")");*/
		$plot['B-Plot'] = Array();
		$plot['B-Plot']['Title'] = $msn_b;
		$debug .= "mA:".$msn_a."~mB:".$msn_b."~";
	}

	$plot['A-Plot'] = makeMission($msn_a);
	/*pretty_var("mSelect Set Details Pl-A (".$msn_a."|".$msn_b.")");*/
	if (key_exists('B-Plot', $plot)) {
		/*pretty_var("mSelect Plots Set (".$msn_a."|".$msn_b.")");*/
		$plot['B-Plot'] = makeMission($msn_b);
		$plot['B-Plot']['Title'] = "Meanwhile, ".$plot['B-Plot']['Title'];
		/*pretty_var("mSelect Set Details Pl-B (".$msn_a."|".$msn_b.")");*/
	}
	print "<!-- ".$debug." -->\n";
	return $plot;
}

function law_and_order() {
	$law_level = rand(1,10);
	$supp_mod  = 0;

	switch($law_level) {
		case($law_level <= 6):	$law_type = "Uniformed"; break;
		case($law_level <= 8):	$law_type = "Plainclothes"; $supp_mod + 1; break;
		case($law_level == 9):	$law_type = "Tactical"; $supp_mod + 1; break;
		default: 				$law_type = "Max-Tac"; $supp_mod + 2; break;
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
		case($law_backup <= 6):	$law_backup = rand(1,3)."x Uniformed Officers - ".rand(1,3)." Patrol Cars, Flak Jackets, SMGs/Shotguns"; break;
		case($law_backup <= 8):	$law_backup = "SWAT Team - Heavy/Hard Armour, Combat Rifles, Augmented"; break;
		case($law_backup == 9): $law_backup = "Heavy Support Remote - Teleoperated Walker, HMG and/or Missiles"; break;
		default:				$law_backup = "Powered Armour Suit - Heavy Weapon, ECM, Grenade Launchers"; break;
	}
	$law_backup .= ". Available in ".rand(1,6)." minutes.";

	return "<b>Police Presence</b>:<br/><p style='margin-left: 15px;'><b>Unit</b> - ".$law_type."<br/><b>Dept.</b> - ".$law_department."<br/><b>Control</b> - ".$law_response."<br/><b>Activity</b> - ".$law_job."<br/><b>Backup</b> - ".$law_backup."</p>";
}

function pickCorp($sector = 'any', $any_flag = 0) {
	global $C;
	
	if ($sector == 'any') { 
		$sector = $C['corp-industry'][array_rand($C['corp-industry'])];
		$any_flag = 1;
	}

	if ($any_flag) {
		$any_flag = 0;
		return $sector."~".$C['corp-'.$sector][array_rand($C['corp-'.$sector])];
	}
	else {
		return $C['corp-'.$sector][array_rand($C['corp-'.$sector])];
	}
}

?>
