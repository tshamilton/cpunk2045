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

	$artype = $ar_type[array_rand($ar_type)];
	$araest = $ar_aesthetic[array_rand($ar_aesthetic)];
	$arimag = $ar_image_style[array_rand($ar_image_style)];

	$out = "<p style='margin-left: 15px;'><b>AR Display</b><br/><b>Type:</b> ".$artype."<br/><b>Style:</b> ".$araest."<br/><b>Imagery:</b> ".$arimag;
	if ($artype == 'Blipvert') { $out .= blipverts(); }
	$out .= "</p>";
	return $out;
}

function big_screens($no_loop = 0) {
	global $C;
	$contents = $C["vidscreen-WhatsOn"][array_rand($C["vidscreen-WhatsOn"])];
	if (preg_match("/ by/", $contents)) {
		$contents .= blipverts();
	}

	$out = "<br/><b>On Screen</b><br/><p style='margin-left: 15px'>";

	if ($no_loop) {
		$cnt = $contents[abs(array_rand($contents)-1)];
	}
	else {
		$cnt = $contents[array_rand($contents)];
	}
	switch($cnt) {
		case('Broken'): $out .= "<b>WouldShow:</b> ".$contents[array_rand($contents)]."<br/><b>Error:</b> ".broken_tech(); break;
		case('Split screens'):
			$splt = array();
			$scr = rand(1,3);
			while ($scr) {
				$splt['Screen '.$scr] = "<p><b>On Screen ".$scr."</b>".big_screens(1)."</p>";
				$scr -= 1;
			}
			break;
		case('Infomercial/Advertainment'):	$out = blipverts();
		default:
			$out .= $cnt;
	}
	$out .= "</p>";
	return $out;
}

function blipverts($sponsor = 0) { /* If sponsor == 1, then it only returns a randomly selected company name, else a full blipvert ad */
	$blip_company = array(
		'No-Lo-Go',
		'Matsushira',
		'Arasaka',
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
		return "<p style='margin-left: 15px;'><b>Blipvert</b><br/><b>Corp:</b> ".$blip_company[array_rand($blip_company)]."<br/><b>Product:</b> ".$blip_range[array_rand($blip_range)]."<br/><b>Range:</b> ".$blip_product[array_rand($blip_product)]."<br/><b>AdStyle:</b>".$blip_style[array_rand($blip_style)]."</p>";
	}
}

function newsTicker_Owner() {
	$title = pickCorp('Media')." News";
	if (rand(1,10) > 1) {
		$nSponsor = pickCorp();
		$nSponsor = pickCorp(); $nSponsor = explode("~", $nSponsor); $nSponsor = $nSponsor[1];
		$title .= " brought to you by ".$nSponsor;
	}
	return $title;
}

function newsTicker_BodyCountLotto() {
	$districts = array(
		'New Westbrook (North)~20', 'Watson~4', 'Watson Projects~20', 'Little Europe~12',
		'University District~6', 'South NC~10', 'The Glen~10', 'Old Combat Zone~50',
		'Old Japan Town~20', 'Little China~12', 'Marina~8', 'Executive Zone~4',
		'New Westbrook (South)~20', 'Heywood~20', 'Santo Domingo~50', 'Pacifica~20'
	);

	$res = Array();
	$prize = 0;
	$c_districts = array_rand($districts, 5);
	$bcSponsor = pickCorp(); $bcSponsor = explode("~", $bcSponsor); $bcSponsor = $bcSponsor[1];
	$bc_lotto_results = "<span style=\"color: white\">Body Count Lotto&trade; results brought to you by ".$bcSponsor." <span class=\"dot\"></span></span> ";

	foreach ($c_districts as $c) {
		list($dist, $bcm) = explode('~', $districts[$c]);
		$bc = rand(0, $bcm);
		$d = $dist.": ".$bc;
		array_push($res, $d);
		$prize += $bc * $bcm;
	}
	$prize *= rand(1,5);

	$bc_lotto_results .= join(" <span class=\"dot\"></span> ", $res);
	$winners = rand(0,5);
	if 		($winners == 0) {	$bc_lotto_results .= "<span class=\"dot\"></span> <b>No winners</b>. Prize jackpots to ".$prize*rand(2,5)."eb."; }
	elseif	($winners == 1) {	$bc_lotto_results .= "<span class=\"dot\"></span> <b>".$winners." winner</b>. Prize total: ".$prize."eb."; }
	else 					{	$bc_lotto_results .= "<span class=\"dot\"></span> <b>".$winners." winners</b>. Prize total: ".$prize."eb."; }

	return $bc_lotto_results;
}

function newsTicker_Headlines() {
	global $E;
	$event = Array(
		"RegionalNews", "GangViolence", "NomadPolitics", "NCNews", "Weather", "Media", "Sports", "OffWorld"
	);

	$headlineTopics = Array();
	$sep = "&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-weight: bold; color: #00dd00;\">&#167;</span>&nbsp;&nbsp;&nbsp;&nbsp;";
	$num_headlines = rand(3,6);
	while ($num_headlines) {
		array_push($headlineTopics, $event[array_rand($event)]);
		$num_headlines -= 1;
	}

	foreach ($headlineTopics as &$h) {
		switch($h) {
			case("RegionalNews"):
				$w = Array(
					"NUSA delegation threaten &quot;dire consequences&quot; after <b>reunification talks stall</b> with NC Council.",
					"Agreement made between NC Council, SoCal Government on trade route reached.",
					"Reclamation north of Watson hindered by &quot;Hippies and local troublemakers&quot; - Biotechnica.",
					"<b>Body count rises to 225</b> found in pre-Crash, Baja-region shipping containers, part of &lsquo;30s trafficking racket.",
					"<b>Cyberpsycho kills 3</b> on westbound off Hwy 81.",
					"Texas Republic Gen. Walles warns of <b>border skirmishes</b> near Tijuana.",
				);
				$h = "NorthAm: ".$w[array_rand($w)];
				break;
			case("GangViolence"):
				$w = Array(
					"Night City PD <b>patrols strengthened in Santo Domingo</b> due to tensions between Valentinos and Maelstrom.",
					"Tensions decline in Pacifica after retreat of Red Chrome Legion from area."
				);
				$h = "Gang News: ".$w[array_rand($w)];
				break;
			case("NomadPolitics"):
				$w = Array(
					"Aldecados deny involvement in <b>shootout on Hwy 102</b>.",
					"'Raffen Shiv' blamed for <b>ambush on Jode Nation caravan</b>, leaving 15 civilians dead, 3 survivors.."
				);
				$h = "Nomad News: ".$w[array_rand($w)];
				break;
			case("NCNews"):
				$w = Array(
					"Councillor Piper says she will run on jobs, crime prevention platform in upcoming election.",
					"Arasaka breaks ground on <b>permanent memorial and museum</b> for city center bombing.",
					"<b>No fatalities in AV crash</b> on Pacifica outskirts. Pilot praised for quick thinking.",
					"Mayor - <b>SMR virus &quot;not immediate threat&quot;</b> to Night City after flight closures from Europe."
				);
				$h = "Night City: ".$w[array_rand($w)];
				break;
			case("Weather"):
				$w = Array(
					"Meteo. Dept. warns of <b>intermittent red rain until next Monday</b>.",
					"High winds off coast <b>preventing reconstruction efforts</b> in Pacifica.",
					"NorCal factory run off blamed for recent acid rain incidents in North Westbrook."
				);
				$h = "Weather: ".$w[array_rand($w)];
				break;
			case("Media"):
				$w = Array(
					"New Variant Strain <b>album leaked to fans</b> after raid on DMS offices in Seattle.",
					"Maria Mercurial reveals plans for <b>Pan-American tour in Fall</b> &quot;starting in Night City&quot;"
				);
				$h = "Media: ".$w[array_rand($w)];
				break;
			case("Sports"):
				$w = Array(
					"Night City FC full-back Djemir <b>sets transfer fee record</b> after move to Dallas.",
					"Portland move to semi-finals after Houston disqualification.",
					"NCBA and NCPD investigating Osaba-Braddock fight after unusual betting patterns, shooting."
				);
				$h = "Sport: ".$w[array_rand($w)];
				break;
			case("OffWorld"):
				$w = Array(
					"Crystal Palace <b>deny claims of interference</b> in recent Orbital Air takeover attempt.",
					"Mars base matter of 'when', not 'if'. Aeral Avionics close to signing deal with Off World authorities."
				);
				$h = "Off-World: ".$w[array_rand($w)];
				break;
			case("Crime"):
				$w = Array(
					"NCPD warn of <b>toxic batch of Blue Glass</b> being sold in Heywood, surrounding areas",
					"Sex worker violence on rise again, SW union <b>calls for increased protection</b>.",
					"Four arrested, <b>riots suppressed in Santo Domingo</b> after Oasis stores price hike.",
				);
				$h = "Crime: ".$w[array_rand($w)];
				break;
			case("CorpNews"):
				$w = Array(
					"SovOil <b>stocks rise 3.2%</b> on opening of new CHOOH<sub>2</sub> processing plant near Vancouver"
				);
				$h = "Business: ".$w[array_rand($w)];
				break;
		}
	}

	$news = join($headlineTopics, $sep);
	$news .= $sep.$E["Ticker"]["BodyCountLotto"];

	return $news;
}

?>