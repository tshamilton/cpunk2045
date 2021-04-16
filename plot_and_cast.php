<?php

function gang() {
	$gang = Array();

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

	$E[$gang_name] = $text;
	
	return $gang;
}

function nomadFam() {
	$fams = Array("Aldecaldos", "Wraiths", "Snake Nation", "Jode Nation", "Blood Nation", "Meta", "Thelas Nation", "Folk Nation", "Raffen Shiv");
	return $fams[array_rand($fams)];
}

function makeMission($what) {
	$plot = Array();

	switch($what) {
		case("A New Leaf"):
			$involvement = array('The PCs are medias covering the story.'/*, 'The PCs work for Don Acapulco&#39;s rival.'*/);
			$inv = $involvement[array_rand($involvement)];
			$text = "Big media story! Don Acapulco has declared he&#39;s going straight. Why? And if it&#39;s true, how come no-one appears to have taken his place at the head?<br/>".$inv;

			$plot['Title'] = 'A New Leaf?';
			$plot['Text'] = $text;

			if ($inv == 'The PCs are medias covering the story.') { 
				list($k, $v) = makeNPC('media', 'Journo is Suspicious');
				$plot[$k] = $v;
			}
			break;
		case("Ballroom Blitz"):
			$plot['GangA'] = gang();
			$plot['GangB'] = gang(); 

			$involvement = array(
				'The PCs have a vested interest in one of the gangs.',
				'The PCs have a vested interest in both of the gangs!',
				'The PCs live in the zone where the battle takes place.'
			);
			$text = "Two gangs (".$plot['GangA']['Title']." &amp; ".$plot['GangB']['Title'].") have decided enough is enough and are going to battle it out.<br/>".$involvement[array_rand($involvement)];

			$plot['Red Corner - '.$plot['GangA']['Title']] = $plot['GangA']['Text']; unset($plot['GangA']);
			$plot['Blue Corner - '.$plot['GangB']['Title']] = $plot['GangB']['Text']; unset($plot['GangB']);

			$plot['Title'] = "Gang Fight";
			$plot['Text'] = $text;
			break;
		case("Blast From Your Past"):
			$involvement = array(
				'The Someone needs the PCs help.',
				'The Someone wants vengeance on the PC for something (perceived or real).',
				'The PC has a past with this person they&#39;d rather forget.',
				'The Someone is dead, killed by a common enemy. Is the PC next?',
				'The PC owes it to the Someone to find out who killed them.'
			);
			$text = "Someone from the lifepath of one of the PCs turns up out of the blue and starts causing problems.<br/>".$involvement[array_rand($involvement)];
			$plot['Title'] = "A Blast From The Past";
			$plot['Text'] = $text;
			break;
		case("Celebrity Under Threat"):
			$choice1 = Array('rocker', 'media');
			list($k, $v) = makeNPC($choice1[array_rand($choice1)], 'The Famous'); $plot[$k] = $v;
			preg_match("/ - (.+)/", $k, $match);
			$name = $match[1];

			$choice2 = Array('The PCs are hired as bodyguards.', 'One of the PCs knows who is behind the situation.', 'The PCs are covering the story.');
			$inv = $choice2[array_rand($choice2)];

			$choice3 = Array('being stalked', 'receiving death threats', 'in a contract dispute with their label/employer', 'an assassination target');
			$what = $choice3[array_rand($choice3)];

			if ($inv == 'The PCs are covering the story.') {
				list($k, $v) = makeNPC('media', 'If Journo Required'); $plot[$k] = $v;
			}
			$text = "A major celebrity, ".$name.", is ".$what.".<br/>".$inv;
			$plot['Title'] = 'Celebrity Under Threat';
			$plot['Text'] = $text;
			break;
		case("Cleaning House"):
			$involvement = array(
				'The PCs are the cops, or at least hired by them.', 
				'The PCs are responsible for a list of unsolved crimes as long as your arm, funny how the cops would have such an accurate list.', 
				'The PCs look like candidates to clear the backlog, whether they did it or not.',
				'The new Chief of Police is from out of town, someone who doesn&#39;t understand how this city works.',
				'The new Chief of Police is from out of town, they have an agenda that could mean a lot of trouble for everyone.'
			);
			$inv = $involvement[array_rand($involvement)];
			$text = "Bowing to public/political pressure, the Police undertake a massive effort to clean up. Long-forgotten misdemeanors are re-investigated. \"Arrangements\" suddenly cease to be effective. Favors are forgotten.<br/>".$inv;
			$plot['Title'] = "Clearing The Caseload";
			$plot['Text'] = $text;
			list($k, $v) = makeNPC('cop', 'Why Hello Officer'); $plot[$k] = $v;
			break;
		case("Extraction"):
			$roles = Array('tech', 'corp');
			list($k, $v) = makeNPC($roles[array_rand($roles)], 'The Target'); $plot[$k] = $v;
			preg_match("/ - (.+)/", $k, $match);
			$name = $match[1];
			
			$CorpA = pickCorp();
			list($sector, $CorpA) = explode("~", $CorpA);
			$CorpB = $CorpA;
			while($CorpB == $CorpA) { $CorpB = pickCorp($sector); }

			$involvement = array(
				'The PCs are the black ops team.',
				$name.' is a friend of one of the PCs',
				'The PCs work for '.$CorpB,
				$name.' is a digruntled employee and has incriminating documentation on '.$CorpB.', who is just as happy to see everyone involved dead.',
				'Imagine the PCs surprise when they discover that '.$name.' has no idea about this agreement. The rep from '.$CorpB.' might have overstated their willingness to jump ship.'
			);
			$text = "The team are approached by a rep from ".$CorpA.". They have decided that they want ".$name." (currently working for ".$CorpB.") to work for them instead. ".$CorpB." refuses to let them go, so ".$CorpA." is using a black ops team to kidnap, er, extract them.<br/>".$involvement[array_rand($involvement)];
			$plot['Title'] = "Headhunter";
			$plot['Text'] = $text;
			break;
		case("Give Me Everything"):
			$involvement = array(
				'Madman threatens nuclear devastation.',
				'Eco-guerrilla plans to unleash a bioplague.',
				'Someone wants to kick off a war between two major gangs, nomad families, crime gangs or corps.'
			);
			$text = "Someone with too little sanity has found too much power...and only the PCs can stop him. Think James Bond.<br/>".$involvement[array_rand($involvement)];
			$plot['Title'] = "Show Them, Show Them All";
			$plot['Text'] = $text;
			break;
		case("Going Bust"):
			$involvement = array(
				'It&#39;s the PCs main employer. They may need a little protection.',
				'It&#39;s the PCs main employer. The soon-to-be-Ex CEO wants a little cover while they make a run for it with all the remaining assets.',
				'It was the PCs actions that brought it down. A little revenge may be on their cards.',
				'A fixer is arranging the removal of data/prototypes/assets while security is down.',
				'A fixer is arranging an extraction before things get rough in the office.',
				'Someone wants the company&#39;s demise investigated, a corporation-level whodunnit, if you will.'
			);
			$inv = $involvement[array_rand($involvement)];
			if ($inv == 'A fixer is arranging ') {
				list($k, $v) = makeNPC('fixer', 'The Fixer'); $plot[$k] = $v;
			}

			$text = "A major Corp has gone into liquidation. Maybe this has been on the cards for a while, or perhaps it&#39;s entirely unexpected. Either way it&#39;s trouble.<br/>".$inv;
			$plot['Title'] = "Vultures Overhead";
			$plot['Text'] = $text;
			break;
		case("Hacker Havoc"):
			list($k, $v) = makeNPC('netrunner', 'Gremlin'); $plot[$k] = $v;
			$angle = Array(
				"causing network strife, stealing their data, crashing their systems, etc.",
				"messing with their automation, screwing with deliveries, disabling alarms, messing with credit accounts, etc.",
				"being a distraction, shutting down machinery, turning off alarms, changing channels on TV/Radios",
				"going all out, screwing with their network, messing with machinery, emptying credit accounts, cancelling deliveries, etc."
			);
			$involvement = Array(
				"The PCs are hired by the main sufferer to find and eliminate the decker.",
				"The PCs are hired by the main sufferer to find and eliminate the decker, however, the Netrunner is the aggreived party.",
				"The PCs are the netrunner&#39;s target.",
				"The PCs know the decker.",
				"The PCs are hired to eliminate the netrunner and find out what&#39;s behind it all."
			);
			$text = "A netrunner is causing disruption for someone. Specifically, they&#39;re ".$angle[array_rand($angle)]."<br/>".$involvement[array_rand($involvement)];
			$plot['Title'] = "Hacker Havoc";
			$plot['Text'] = $text;
			break;
		case("Media Circus"):
			list($k, $v) = makeNPC('media', 'Live &amp; Direct'); $plot[$k] = $v;
			$involvement = array(
				'The PCs are caught up in the event, but the media is the problem.',
				'The PCs are involved in something completely irrelevant but highly sensitive, and there are too many media snooping around.',
				'The PCs are hired to protect the media while they investigate.',
				'The PCs are hired by a rival company to make life hard for the media.',
			);
			$angle = array(
				'A hip music scene emerges locally (cf. Manchester 1988 or Seattle 1991).',
				'A personal appearance by a major celebrity.',
				'A new invention or major product (think new car or iPhone) has been launched.',
				'A local civic disaster.'
			);
			$text = "Something is happening in the city that brings all the media buzzards in. ".$angle[array_rand($angle)]."<br/>".$involvement[array_rand($involvement)];
			$plot['Title'] = "Media Circus";
			$plot['Text'] = $text;
			break;
		case("Mob Handed"):
			$mob = array('Mafia', 'Yakuza', 'Tong', 'crime');
			$involvement = array('The PCs are cutting in on the Mob&#39;s business.', 'They insulted/killed someone the Mob holds in high regard.', 'They PCs could, of course, drop everything and assist them with a little business of theirs. That might help.');
			$text = "A local ".$mob[array_rand($mob)]." syndicate have been slighted by the PCs, so they&#39;ve decided to make an example of them.<br/>".$involvement[array_rand($involvement)];
			$plot['Title'] = "Mob Handed";
			$plot['Text'] = $text;
			break;
		case("Old Flame"):
			$involvement = array(
				'They&#39;re on the run from the law.',
				'They&#39;re on the run from crime group/gang.',
				'They&#39;re on the run from their former employer',
				'Their new partner is a psycho. Thanks to them, they may have done something foolish.',
				'The person they left you for, as forewarned, was a psycho. Was. Unfortunately, they had influential friends.',
				'They want to use the PC for something (but of course won&#39;t tell them that).'
			);
			$inv = $involvement[array_rand($involvement)];
			if ($inv == 'They&#39;re on the run from their former employer') {
				$co = pickCorp(); $c = explode("~", $co); $co = $c[1];
				$inv .= ', '.$co.'.';
			}
			$text = "They just re-emerge, possibly while one of the PCs is in-flagrante with their new flame (never should have let them keep that keycard). That, or they come running when they&#39;re in big trouble. But hey, it&#39;s not like things can get worse, right?<br/>".$inv;
			$plot['Title'] = "Old Flame";
			$plot['Text'] = $text;
			break;
		case("The Outsider"):
			$who = array(
				'A foreign diplomat stirring trouble, working that diplomatic immunity...',
				'Someone from the PCs past with something to hold over their heads.',
				'A goldenkid who wants to get in the PCs faces for LOLs and fame. Sure, you could blast them, but Daddy&#39;s got mercenaries on retainer.',
				'A hotshot solo is stealing jobs from the PCs',
				'New Chief of Police has made it clear that "agreements" with beat cops no longer exist.',
				'The new gang boss doesn&#39;t recall agreeing anything with your PCs.'
			);
			$text = "Someone has arrived in town who upsets the status quo.<br/>".$who[array_rand($who)];
			$plot['Title'] = "The Outsider";
			$plot['Text'] = $text;
			break;
		case("Perfect Drug"):
			$sector = array('Medicine', 'Bioengineering', 'Chemicals');
			$impact = Array(
				'Once thought of as "safe" it has long term effects that are only just starting to be seen (think "Black Shakes" from the Johnny Mnemonic movie).',
				'It&#39s part of a black ops public experiment by '.pickCorp($sector[array_rand($sector)]).'&#39;s pharmaceuticals division.',
				'The comedown is causing short-term cyberpsychosis',
				'One of the PCs is unaware they&#39;re addicted to it, having had a contact high with a user. Untreated addiction impacts are <i>BAD</i>.'
			);
			$involvement = Array(
				'The PCs are trying to curb its spread in their neighbourhood.',
				'One of the PCs knows a fixer trying to sell (or get rid of) their stash before the heat gets turned up on its supply.',
				'The cops need help to find the main supplier and cut them off.'
			);
			$inv = $involvement[array_rand($involvement)];
			if ($inv == 'One of the PCs knows a fixer trying to sell it before the heat gets turned up on its supply.') {
				list($k, $v) = makeNPC('fixer', 'The Pusher'); $plot[$k] = $v;
			}
			if ($inv == 'The cops need help to find the main supplier and cut them off.') {
				list($k, $v) = makeNPC('cop', 'Your Blue Contact'); $plot[$k] = $v;
			}
			$text = "A new drug has hit your neighbourhood. It has become so popular, it&#39;s supply has now become a MAJOR problem.<br/>".$impact[array_rand($impact)]."<br/>".$inv;
			$plot['Title'] = "Perfect Drug";
			$plot['Text'] = $text;
			break;
		case("Psycho Killer"):
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
			$text = "Someone in the city is working their way through a list. The bodies are starting to pile up and it seems even the people of Night City can have fear put into them...<br/>".$inv;
			$plot['Title'] = "Psycho Killer";
			$plot['Text'] = $text;
			break;
		case("Shut Up And Drive"):
			$involvement = array('One of the PCs spurned (or accepted!) the amorous advances of the leader&#39;s son/daughter.', 'The PCs embarrassed a high-ranking member.', 'The PCs have initiated a project that the nomads oppose.');
			$text = "Somehow the PCs have earned the wrath of a nomad family, the ".nomadFam().". They&#39;re coming to town to deal with you specifically.<br/>".$involvement[array_rand($involvement)];
			$plot['Title'] = "Family Trouble";
			$plot['Text'] = $text;
			break;
		case("Underbelly"):
			list($k, $v) = makeNPC('cop', 'Bad Cop'); $plot[$k] = $v;
			$involvement = array(
				'The PCs are one of the cops&#39; targets. They need to keep those KPIs up ya know.',
				'The cops &#39;have an arrangement&#39; of the PCs and need a little something done off the books.',
				'The cops are going to blackmail the PCs into doing something that they don&#39;t want to be involved in.',
				'The cops need someone to play crook for them while a ranking officer is in town to make them look good.'
			);
			$text = "Somewhere in the city are one or more rogue cops. They may have gone vigilante or (more likely) they&#39;re corrupt.<br/>".$involvement[array_rand($involvement)];
			$plot['Title'] = "Underbelly";
			$plot['Text'] = $text;
			break;
		case("Wishlist"):
			$involvement = Array('a brand new prototype ICEbreaker.','military-grade firearms','classified documents','details to a lost cache.');
			$whoWants = Array('one or more of the PCs', 'a Fixer');
			$who = $whoWants[array_rand($whoWants)];
			$text = "Something valuable to ".$who." (specifically, ".$involvement[array_rand($involvement)].") becomes available, just not by legal means.";
			if ($who == 'a Fixer') {
				list($k, $v) = makeNPC('fixer', 'Mr Who'); $plot[$k] = $v;
			}
			$plot['Title'] = "Wishlist";
			$plot['Text'] = $text;
			break;
	}

	$who = array(
		"The Mob", "Military Corp", "Biotech Corp", "The Government", "Booster Gang",
		"Solo", "Merc Outfit", "Media(s)", "Fixer", "Hacker", "Foreign Government",
		"Eco-guerrillas", "Nomad Family", "Police Force", "Rogue Cops", "Cyberpyscho",
		"Rocker (or fans)", "Conspiracy Theorists", "Rogue Government Agents", "Double!"
	);
	$actor = $who[array_rand($who)];
	$actor = "Fixer";
	while ($actor == "Double!") {
		$actorA = $who[array_rand($who)];
		$actorB = $who[array_rand($who)];
		while ($actorA == "Double!") {	$actorA = $who[array_rand($who)]; }
		while ($actorB == "Double!") {	$actorB = $who[array_rand($who)]; }
		$actor = $actorA." and ".$actorB;
	}
	if (preg_match("/Military Corp/", $actor)) {
		$which = Array('Mercs', 'Security');
		preg_replace("/Military Corp/", "Military Corp (".pickCorp($which[array_rand($which)]).")", $actor);
	}
	if (preg_match("/Biotech Corp/", $actor)) {
		$which = Array("Bioengineering", "Chemicals", "Agriculture");
		preg_replace("/Biotech Corp/", "BioTech Corp (".pickCorp($which[array_rand($which)]).")", $actor);
	}
	if (preg_match("/Booster Gang/", $actor)) {
		$gang = gang();
		preg_replace("/Booster Gang/", "Gang (".$gang.")", $actor);
	}
	if (preg_match("/Solo/", $actor)) {
		list($k, $v) = makeNPC('solo', 'Involved Merc'); $plot[$k] = $v;;
		preg_match("/ - (.+)/", $k, $match);
		$solo = $match[1];
		preg_replace("/Solo/", "Merc (".$solo.")", $actor);
	}
	if (preg_match("/Media(s)/", $actor)) {
		list($k, $v) = makeNPC('media', 'Involved Journo'); $plot[$k] = $v;;
		preg_match("/ - (.+)/", $k, $match);
		$media = $match[1];
		preg_replace("/Media(s)/", "Media(s) (".$media.")", $actor);
	}
	if (preg_match("/Fixer/", $actor)) {
		list($k, $v) = makeNPC('fixer', 'Involved Fixer'); $plot[$k] = $v;;
		preg_match("/ - (.+)/", $k, $match);
		$fixer = $match[1];
		preg_replace("/Fixer/", "Fixer (".$fixer.")", $actor);
	}
	if (preg_match("/Hacker/", $actor)) {
		list($k, $v) = makeNPC('netrunner', 'Involved Hacker'); $plot[$k] = $v;;
		preg_match("/ - (.+)/", $k, $match);
		$nr = $match[1];
		preg_replace("/Hacker/", "Hacker (".$nr.")", $actor);
	}
	if (preg_match("/Rocker (or fans)/", $actor)) {
		list($k, $v) = makeNPC('rocker', 'Involved Rocker'); $plot[$k] = $v;;
		preg_match("/ - (.+)/", $k, $match);
		$rocker = $match[1];
		preg_replace("/Rocker/", "Rocker (".$rocker.")", $actor);
	}
	if (preg_match("/Merc Outfit/", $actor)) {
		if (rand(1,10) > 5) {	preg_replace("/Merc Outfit/", "Merc Outfit (".pickCorp('Mercs').")", $actor); }
		else {					preg_replace("/Merc Outfit/", "Merc Outfit (Non-Corp)", $actor); }
	}
	if (preg_match("/Nomad Family/", $actor)) {
		$nmf = nomadFam();
		preg_replace("/Nomad Family/", "The ".$nmf, $actor);
	}
	if (preg_match("/Rogue Cops/", $actor)) {
		list($k, $v) = makeNPC('cop', 'Rogue Cop'); $plot[$k] = $v;;
		preg_match("/ - (.+)/", $k, $match);
		$cop = $match[1];
		preg_replace("/Rogue Cops/", "Rogue Cop (".$cop.")", $actor);
	}
	$actor = "<b><i>Involved (Friends? Foes? A little of both?):</b></i> ".$actor;
	$plot['Text'] .= "<br/>".$actor;

	$where = array(
		"Warehouse", "Corp Office", "Government Office", "Nightclub",
		"Docks", "Mob Office", "Combat Zone", "Dustzone",
		"Airport", "Online", "Media Office", "Rooftops",
		"Subways", "Police Station", "Diner/Restaurant", "Concert Hall",
		"Hotel", "Lab", "Mall", "Double!"
	);
	$location = $where[array_rand($where)];
	if ($location == "Double!") {
		$locA = $where[array_rand($where)];
		$locB = $where[array_rand($where)];
		while ($locA == "Double!") {	$locA = $where[array_rand($where)]; }
		while ($locB == "Double!") {	$locB = $where[array_rand($where)]; }
		$location = $locA." and ".$locB;
	}
	$location = "<b><i>Where it all comes down:</b></i> ".$location;
	$plot['Text'] .= "<br/>".$location;

	$real = array(
		"Government cover-up", "Corp. extraction", "Corp takeover", "Bent cops",
		"Smuggling", "Gang infiltration", "Blackmail", "Decker causing havoc",
		"Old enemy", "Old friend", "New drug", "New hardware",
		"Solo on the warpath", "Medias 'creating' news (i.e. hoax)", "The Mob",
		"Biotech corp 'experimenting'", "Cultists", "All for love", "Nothing. It really is what it appears", "Double!"
	);
	$third = $real[array_rand($real)];
	if ($third == "Double!") {
		$thirdA = $real[array_rand($real)];
		$thirdB = $real[array_rand($real)];
		while ($thirdA == "Double!") {	$thirdA = $real[array_rand($real)];	}
		while ($thirdB == "Double!") {	$thirdB = $real[array_rand($real)];	}
		$third = $thirdA." and ".$thirdB;
	}
	$third = "<b><i>We discover it's really:</i></b> ".$third;
	$plot['Text'] .= "<br/>".$third;

	return $plot;
}

function makeNPC($type = 'any', $title) {
	$roles = array('fixer', 'tech', 'netrunner', 'solo', 'media', 'bystander', 'corp', 'cop', 'ripperdoc');
	if ($type == 'any') {
		$type = $roles[array_rand($roles)];
	}

	switch($type) {
		case('nomad'):
			$whoList = array(
				'Xiaolajiao - Xiaolajiao, or "Little Chili Pepper", is one of Night City&#39;s best couriers. You want to get it somewhere, she&#39;ll get it there. She&#39;s fast, reliable, and uses a combination of an ultralight folding bicycle and parkour to cut through the city&#39;s architecture. Xiaolajiao has ties to the sea Nomads out in Flotsam, having been dropped off by a people-smuggler ten years ago, as a starving child whose dead parents got dumped overboard. The staff at The Randy Dandy took pity on her and let her wipe glasses and tables for her keep, before the Skipper semi-adopted her as a surrogate sibling. She&#39;s also really good with a baseball bat.',
				'Murphy - Murphy hangs out at Fiddler&#39;s Green when he&#39;s in Night City, which he often isn&#39;t, but the owner Kate Mulvaney will pass messages on to him for clients. He&#39;s a former US Aerospace Force pilot who now does smuggling runs in and out of Night City in his beloved AV-4, and he&#39;s good enough to evade USA and Pacifica Coast Guard watches. He&#39;s been adopted into the Aldecado Nomad family due to his impending marriage to his fianc&eacute; Diego.'
			);
			break;
		case('fixer'):
			$whoList = array (
				"Anna Nelson - Anna grew up with the Jode Nation, but a dispute between her parents and a more senior nomad lead to an incident where her parent's witness protection identites were exposed. Anna was the only survivor of the incident that followed, lucky to escape with only a few small scars.<br/>Finding herself between groups but never truly part of one, she found herself a position as mediator between families with a quickly growing set of contacts. Leaving the Jodes behind, Anna found her mediation skills translated well from families to Night City gangs. These days she's got a local rep as a judge, middle-agent and archtypical someone-who-knows-someone.",
				"Dino Martell - Dino was once an itinerant muso, a guitarist for bands that opened for ShatteredGirlz, Karl Remiel, even Kerry Eurodyne, but never really successful, no-one noteworthy ever opened for a band he was in.<br/>Real success never came for him though, not before he realised that a) the drug-fuelled existence was getting to him and b) he was getting a lot more eddies from procuring goods and people for fellow band-members. So it was that Dino turned from axe-grinding to a career as a fixer. Trust that you'll find him propping up a bar wherever up-and-coming bands are found and that you will never know as much about the music scene as he does.",
				"Aunt Kevin - Aunt Kevin is a middle-aged drag queen who tends bar at Chatelaine's, and therefore Aunt Kevin knows everything there is to know about Night City's gay scene. And most food and service outsiders don't know this, but bartenders do a lot more than pour drinks. They wheedle the liquor suppliers into letting them have more of the good stuff and less of the cheap stuff. They know the preferences of rich and powerful and favorite customers. They soothe feelings, break up fights, and sometimes, start them. Aunt Kevin is not as notorious a Fixer as 80/20, but her influence goes somewhat further and is much subtler. She has been in poorer health in recent years, and her death would leave a void in Night City's gay community.",
				"80/20 - 80/20 is one mean fucker. He's a Fixer that specializes in loansharking and fencing. He runs his business out of the back of his uncle Norman's bar, in a now-defunct walk-in freezer that he's had fitted with ventilation. He's rumored to have at least shoved one or two loan defaulters through the old meat grinder in the back of the bar, too. But if you want to know what's going on on the less-legal end of street acquisitions, 80/20's your man. Just don't eat any meat products he tries to serve you, if you're squeamish about who it might have been.",
				"'Nova' Akhmatova - A goldenkid with a taste for slumming it in the worst edgerunner bars, Nova dresses and acts OTT even for the most glamourous goldenkid nightspots. You see only what she wants you to see though. When the fa&ccedil;ade drops in private, the real biz starts. The contents of her little black book would terrify all but the hardest of NC fixers, particularly for someone (allegedly) so young."
			);
			break;
		case('tech'):
			$whoList = array(
				"Ptolemy Biraz - Slow moving, heavy set, biotech genius. Ptolemy suffers from a rare immune disorder that means his body rejects even the simplest, least invasive cyberwear. As a result, he tends to avoid the city when he can, unable to handle toxicity levels that most folk with nasal filters aren't aware of. An almost psychic level of problem solving, he has been known to solve problems for people before they have been able to finish asking for help.",
				"Alita Alvarez - College graduate existing on a thin mixture of charity scholarships and family expectations. Eager to the point of intimidation and the attention-span/focussed ability that comes with top talent, Alita has an almost instinctual understanding of A.I. She was enticed to Night City University because of its research facilites, but is finding it frustrating that she seems to be two steps ahead of even the faculty.",
				"Finn O'Callaghan - Grumpy, paranoid, old agoraphobic who has jerry rigged more stable tech than some companies can produce on a factory line.",
				"Dr. Michael Peterhoff - Annoyingly nostaligic hippy with well-known biotech skills. Finds his corporate contracts grate against his desire for open information exchange. Though at the same time, people tend to be open-mouth horrified at what research topics he would happily share with anyone with anyone regardless of their moral posture since he reasons it is not his issue once the information is free.",
				"Dr. Carol Owens - Brilliant, if somewhat myopic, biotech expert. Liable to engineer a brilliant doomsday device without actually realising the consequences.",
				"John Doe - John is a slender man of indeterminate age, with long mouse-blond hair and light brown eyes. He's also a Tech who specializes in surveillance and drone applications. He almost always wears a nice, boring suit except on ops, where he switches to a tacvest and surplus fatigues. John Doe is notable for two things: He has never ever lost his temper or his cool in public, and nobody knows where the hell he came from. His past is a black box. He's professional, though, and that's what counts, right?",
				"Jack Sawyer - Jacqueline 'Jack' Sawyer is a Tech, one of Night City's best independent gunsmiths. Her dad used to work at Salander's but got fired for inflating costs and then pocketing the difference. He wasn't very good at being a dad or a businessman, even if he did know what he was doing with the mill and the CNC machine. Jack's not as stupid as him, though, since he turned up floating face-down in the Night City harbor about seven years ago. No, Jack's vice is that she can't ever resist a pretty face. Also, she's proud and prickly to a fault, and has gotten in fights that way. She hangs out at Greta's, poolsharking to impress the femmes.",
				"Barry Carmichael - Laid back and laconic, 'Baz' is almost utterly immune to surprise. He was a mechanic in the Australian Army and worked on practically everything that had an engine. Made his rep in NC by restoring bullet-riddled cars to near pristine condition for people who didn't want their involvement in gun battles easily identified. Has a tendancy to scare the rushed and impatient by his easy-going, 'she'll be right' attitiude."
			);
			break;
		case('netrunner'):
			$whoList = array(
				"Sean 'Hooligan' Graine - Sport enthusiast with a talent for cryptography and hacking company systems.",
				"Michiko 'Ember' Tanaka - Demure fan of romance novels by day, data thief by night.",
				"Bobby Tables - Bobby Tables (not his real name) really wanted to go to CalTech, but his parents didn't have the money to send him there. So he went to a corporate technical school instead, and learned to program there. That state of events came to a screeching halt when he won a corporate scholarship and got sent to a private hot-house program for the bright future programmers of the world. Unfortunately, that was where nice little Bobby Tables learned to be an asshole, from all the richer, meaner kids who poked fun at his cheap MegaMart shirts and secondhand textbooks. Now he's gone freelance, setting his smarts against the system because he's bored working for it. Bobby likes to hang out at Redline watching fights when he's not working. If he can swing it, he'll even pay for a private room. And he's always up for anti-corporate jobs, because he's sick of how all those silver-spoon Execs treat people.",
				"Sunshine - Sunshine is a cute little thing working as an empty-headed little hostess at Anjelika's, and she's had the biosculpting required to keep the job, with gold-plated skin and eyes like blue topazes. Those eyes contain a Virtuality rig and she's got a cyberdeck built into her right arm. She is also far from empty-headed. Approaching her with a job requires a client to book an hour with her at Anjelika's, where the comfortable booths and loud music help with privacy. She normally takes jobs from Media types trying to ferret out dirt, and is therefore verycomfortable with corpo databases."
			);
			break;
		case('solo'):
			$whoList = array(
				'Claude Pierce - Cheap, overmuscled thug with just enough brains to shout orders at other people.',
				'Daniel Sinclair - Cheap, overmuscled thug with enough brains to follow orders but not quite enough to give them. A rank and file grunt.',
				"Eduardo Eman - Newly made corporate man, leaning towards being a corporate 'troubleshooter'. Raised on the streets and lucky to land such a career-starter, subtlety isn't his a strong suit, yet.",
				'Jacob Barre - Sharklike, specialist in locating and returning "absent employees", an extraction ops&#39; worst nightmare.',
				'Johnny Clean - Well respected merc in his home town. Clean shaved, upright and at attention until told otherwise, you would believe he never really left the military. The epitome of "Speak softly and carry a big fragging gun."',
				'Peaches - Peaches is a Solo who hails from Georgia, hence her nickname, and her speech bears the distinctive accent of the urban South. She wears her pink and purple Techhair in elaborate box braids, and the chrome of her cyberarm contrasts with the caramel brown of her skintone. She dresses in athleisure outfits — mesh tops and sweat pants, and can be found hanging out at Bear&#39;s microbrewery when she&#39;s not on the job. Peaches is a good hand on the job, but she won&#39;t back down, ever, and has to be ordered to abandon an objective.',
				'Merlin - Merlin is your stereotypical glasses-wearing nerd-looking guy, except if you look closely, those glasses have no prescription. Other tells include the fact that his Madras check shirt is kevlar, and that he never sits with his back to a door. Merlin is a Solo for hire, specializing inquiet assassination jobs where he enters the building as a completely unremarkable janitor, and then gets close to the target and plugs them with a suppressed pistol, before he makes a quick escape. Merlin doesn&#39;t seem to hang out anywhere, but you&#39;ll come into possession of his calling card if you have any business calling him in the first place.'
			);
			break;
		case('media'):
			$whoList = array(
				'Edison Carter - Straight-shooting, truth hound. Seems to take a little too much pleasure in watching the powerful squirm.',
				'Gomez DeVries - Brilliantly presented anchorman, prone to slightly too much hubris.',
				'Edelweiss Lee - Edelweiss Lee is a small-time actor, once with a major supporting role in a popular prime-time drama, but her career evaporated because she refused to sleep with a director. Now she&#39;s back in her hometown, Night City, using a braindance rig to document the horrifying corruption and squalor she grew up with and had thought fled. Edelweiss would have gotten killed several times over on her investigations, except that a mysterious Solo has been murdering whoever&#39;s been sent after her and then escaping right after. She has no idea who her guardian angel is, and she would very much like to find out.',
				'Darla &#39;Red Ribbon&#39; Wu - By daytime Red Ribbon is Darla Wu, food critic for Night City Today, writing puff pieces about the latest flavor of kibble Continental Brands has put out. By night she publishes an anonymous blog about NCPD corruption and the widespread abuse of refugees. Nobody really expects the food critic to hold any kind of opinion or moral stance, which makes Red Ribbon&#39;s job a little easier. She gets access to places using her food critic articles as cover, and saves the dirt for her blog. You can find Darla in places like Sakura&#39;s and Red Oktober, reviewing food.'
			);
			break;
		case('bystander'):
			$whoList = array(
				'Samuel Silver - Frustrated biologist pushing a terminal at the local bank.',
				'Martin Honnicker - Local politician, so far right he&#39;s a danger to pedestrians when he&#39;s driving.',
				'Wendell Holmes - Just another salaryman, convinced the corporation is everything to him and vice versa.'
			);
			break;
		case('rocker'):
			$whoList = array(
				'Forty - Dreamy voice, synth-guitar, hypnotic on stage. Very driven and self reliant behind the scenes.',
				'Khoo - Rail-thin man of indeterminate age with a penchant for well-fitted suits of varying quality. He swings between vagued out and hyper intense on and off stage. Rap artist extraordinare. Can freestyle in multiple languages. An ex-homeless junky who&#39;s very driven to speak out against enforced poverty and by drug issues in his old neighbourhoods, which doesn&#39;t please the local dealers.',
				'Velvet Lux - How to describe her? She&#39;s one of Night City&#39;s most imitated Rockergirls, assome of her fans have had themselves bodysculpted to look exactly like her. None of them have that certain <i>je ne sais quoi</i> that the real Velvet Lux has, though, that comes from a lifetrained in dance and comportment. In truth, Velvet was raised to be a trophy bride. It was her foster mother&#39;s idea. And get married she did, to an Exec 40 years older than her (with a hefty bride price that went to her foster mom.) Her new husband was a sadist in several ways, andin desperation she fled their conapt and was rescued by the Princess of Justice posergang, who took her to their safehouse in Princessland. Now she hides in plain sight, among fan dopplegangers, and donates 10% of all her profits back to Princessland.',
				'Kirin - Kirin is a Rockergirl of Korean-American descent. She hangs out at Chatelaine&#39;s because she loves the 1930s theme, and also because her brand of heart-rending torch song is exactly the kind of thing they like there. She sings smoky cabaret ballads while clad in an antique tux, and has finished sets to a rain of thrown panties. She&#39;s especially popular among rebellious young Beaverville ladies who love to demonstrate that they are now adults and their parents can&#39;t do anything about it by bringing a hotass lesbian back home for dinner. As a result, Kirin has gotten very good at defending herself when fired upon by upset parents.'
			);
			break;
		case('corp'):
			$whoList = array(
				'Elaine Murray - Spoilt, pushy type-A sort who looks at any sort of street-level danger as <i>"slummy thrills"</i>.',
				'John Cattrall - A decent sort, assuredly a lion in the meeting room but quite timid when it comes to anything physical.',
				'Jorge Sanchez - A world class efficiency expert. He pays you a call in your office, you get efficient.',
				'Evelyn Franklin - Conventionally pretty, non obtrusive, the kind of secretary who&#39;s secretly running the place.',
				'Meredith Sloan - Total hard case, management love her because she gets things done. As long as they don&#39;t look too close at the how...',
				'Freya - Freya is a former Exec who hasn&#39;t spoken in six years. She used to work at Sleepwalker&#39;s as a custom editor of braindance experiences, something that she was phenomenally good at, up until a very important client landed in her lap. What he wanted horrified her, and at first she tried to delay his requests by citing a lack of data to work with. Her bosses, unfazed, started supplying her the relevant braindance files and told her to get on with it. When she hesitated further, her employers realized that she was likely to break her non-disclosure agreement, and arranged an accident. Unfortunately for them, the Solo they hired was a Smash-head and didn&#39;t quite finish the job. Freya now works at Smash/Cut as one of their silent staff, and is looking for someone she can trust with the deadliest secret of her life: her client&#39;s identity.',
				'Finster - Finster&#39;s been fired by his corp. It&#39;s NOT his fault. He wants to make things right, and he&#39;s willing to pay out of his savings to see things through. Finster is a nice, nervous looking young Exec with a cardboard box in front of him. The box contains the contents of his desk. He&#39;s hanging out at whatever the PCs&#39; usual bar is, and took the train to get there. Oh. So that&#39;s where you saw him before. On the train there.'
			);
			break;
		case('cop'):
			$whoList = array(
				'H.C. Strum - Sees the city as a warzone, and hes a general here to clean it up. Amoral, no problem with bribery if it moves his agenda along.',
				'Carl Hollis - Explosion loving, bribe taking, downward-punching asshat with a face like a fist sized target.',
				'Majak Caddow - Weary, good hearted beatcop constantly two steps away from going private if it wasnt for his need to eat.',
				'Maxime Raunch&eacute; - Maxime Raunche is a 6ft tall drag queen with 8 inch heels built into her cyberlegs. A veteran, she lost her organic legs to a landmine, and then had her VA-issue prosthetics replaced with her current fabulous sparkly pair when she came out of the closet. She&#39;s also the current head of the Street Queens, a gang protecting queer homeless youth. While their organization is generally loose and anarchic, they look to her for leadership whenever something important comes up, and in such situations, her word is law. As a result, she can call upon the StreetQueens for backup when protecting their collective flock of runaways and rejected children, and counts as a Lawman. Raunche&#39;s reign will be up this summer, as the vote for a new Monarch will take place at Night City Pride, and it remains to see if the incumbent will keep her Throne.',
				'Candlemaker - Candlemaker is a former corporate insurance fraud investigator, before they shitcanned him for his drinking problem. One new liver later, Candlemaker is a reformed Lawman who likes to hang out at Kasim&#39;s and play backgammon with Kasymbek, because there is no alcohol there to tempt him with. He&#39;s also taken to taking private investigation jobs. Most of them tend to be minor things, like catching Execs cheating on each other, but there was once a kidnapping case that made him almost start drinking again. He wears a trench coat and monologues on occasion, hence his nickname. (Candlemaker = Chandler)'
			);
			break;
		case('ripperdoc'):
			$whoList = array(
				'Burke &amp; Hare - Burke is a brilliant cybernetic installation expert. Hare looks like he was born saying "I didn&#39;t do it.". Why do these two work together? Same moral level.',
				'Octavio - Laid back, as you can see by his office. Good doc though, as you might see by the military commmendations on his wall. Former combat medic.',
				'Victor Vektor - Good reputation in the neighbourhood. Might give you a cut rate if he thinks you&#39;re worth the investment. Runs a boxing gym.',
				'Nina Kraviz - Fresh out of college and backed by Daddy&#39;s money to set up a private clinic. Don&#39;t underestimate her abilities though. She toured Europe&#39;s best clinics as an intern. She plans on starting professional and working upwards from there.',
				'Lupita "Little Wolf" Garza - Little Wolf is a Medtech, and her biggest public claim to fame is that she&#39;s the niece of the lady who ran Maria&#39;s. She used to work for Trauma Team, but quit recently to go freelance — something about ungrateful clients not being worth her time. She has extensive Nomad ties via her large family, and tends to run Nomad ops, but you can still hire her for the occasional independent job. While she wears the usual jeans and punk shirt in public, on jobs you&#39;ll find her wearing armored scrubs and nitrile gloves. She can patch up anyone who isn&#39;t dead yet.',
				'Keloid - Keloid is a street Medtech who runs a tattoo shop near the harbor, and as a result his joint is frequented frequently by sea Nomads and salvagers. He&#39;s also a former Army medic who performs meatball surgery in the back of his shop. Keloid&#39;s not as current on cyberware installation as he&#39;d like to be, but he&#39;s really good at getting people back on their feet with insufficient supplies. He&#39;s also privately a fucked-up wreck of a human being, possibly due to what he saw while enlisted. He can sometimes be found drinking his woes away at Rusty&#39;s Dive Shack.'
			);
	}
	$npc = explode(" - ", $whoList[array_rand($whoList)]);

	return Array($title.' - '.$npc[0], $npc[1]);
}

function missionSelect() {
	$plot = array();
	$msn_a = "";
	$msn_b = "";

	$what = Array(
		"A New Leaf", "Ballroom Blitz", "Blast From Your Past", "Celebrity Under Threat",
		"Cleaning House", "Extraction", "Give Me Everything", "Going Bust", 
		"Hacker Havoc", "Media Circus", "Mob Handed", "Old Flame", "The Outsider",
		"Perfect Drug", "Psycho Killer", "Shut Up And Drive", "Underbelly",
		"Wishlist", "Double Trouble!"
	);
	
	$msn_a = $what[array_rand($what)];
	if ($msn_a == "Double Trouble!") {
		while ($msn_a == "Double Trouble!") {
			$msn_a = $what[array_rand($what)];
			$msn_b = $msn_a;
		}
		while ($msn_b == $msn_a || ($msn_b == "Double Trouble!")) {
			$msn_b = $what[array_rand($what)];
		}
		$plot['B-Plot'][$msn_b] = array();
	}

	$plot['A-Plot'] = makeMission($msn_a);
	if (key_exists('B-Plot', $plot)) {
		$plot['B-Plot'] = makeMission($msn_b);
		$plot['B-Plot']['Title'] = "Meanwhile, ".$plot['B-Plot']['Title'];
	}
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
