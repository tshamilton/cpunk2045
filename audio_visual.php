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
		$cnt = $contents;
	}
	else {
		$cnt = $contents;
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

function newsTicker_Weather() {
	$m = date("M");

	$weather_range = Array();
	$weather_range["Jan"] = Array(2,8,9,15);
	$weather_range["Feb"] = Array(3,11,12,19);
	$weather_range["Mar"] = Array(6,16,17,24);
	$weather_range["Apr"] = Array(9,20,20,30);
	$weather_range["May"] = Array(14,25,26,37);
	$weather_range["Jun"] = Array(18,34,35,43);
	$weather_range["Jul"] = Array(21,33,34,46);
	$weather_range["Aug"] = Array(21,32,33,44);
	$weather_range["Sep"] = Array(18,28,29,38);
	$weather_range["Oct"] = Array(12,21,22,30);
	$weather_range["Nov"] = Array(6,13,14,21);
	$weather_range["Dec"] = Array(3,9,10,15);
	
	$min_temp = rand($weather_range[$m][0], $weather_range[$m][1]);
	$max_temp = rand($weather_range[$m][2], $weather_range[$m][3]);
	
	if		(in_array($m, array("Mar", "Apr", "May"))) {	$season = "Autumn";	}
	elseif	(in_array($m, array("Jun", "Jul", "Aug"))) {	$season = "Winter"; }
	elseif	(in_array($m, array("Sep", "Oct", "Nov"))) {	$season = "Spring"; }
	else											   {	$season = "Summer"; }

	$x = rand(1, 100);
	switch($season) {
		case("Autumn"):
			switch(true) {
				case (in_array($x, range( 0, 12))): $weather_desc = "Chilly"; break;
				case (in_array($x, range(13, 15))): $weather_desc = "Cold"; break;
				case (in_array($x, range(16, 21))): $weather_desc = "Foggy"; break;
				case (in_array($x, range(22, 29))): $weather_desc = "Hazy"; break;
				case (in_array($x, range(30, 32))): $weather_desc = "Overcast"; break;
				case (in_array($x, range(33, 38))): $weather_desc = "Showers"; break;
				case (in_array($x, range(39, 41))): $weather_desc = "Snowflakes"; break;
				case (in_array($x, range(42, 44))): $weather_desc = "Sleet"; break;
				case (in_array($x, range(45, 47))): $weather_desc = "Stormy"; break;
				case (in_array($x, range(48, 50))): $weather_desc = "Thunderheads"; break;
				case (in_array($x, range(51, 59))): $weather_desc = "Clear"; break;
				case (in_array($x, range(60, 65))): $weather_desc = "Cloudy"; break;
				case (in_array($x, range(66, 71))): $weather_desc = "Mild"; break;
				case (in_array($x, range(72, 74))): $weather_desc = "Hot"; break;
				case (in_array($x, range(75, 76))): $weather_desc = "Humid"; break;
				case (in_array($x, range(77, 82))): $weather_desc = "Warm"; break;
				case (in_array($x, range(83, 94))): $weather_desc = "Breezy"; break;
				case (in_array($x, range(95,100))): $weather_desc = "Windy"; break;
			}
			break;
		case("Winter"):
			switch(true) {
				case (in_array($x, range( 0,  3))): $weather_desc = "Chilly"; break;
				case (in_array($x, range( 4, 19))): $weather_desc = "Cold"; break;
				case (in_array($x, range(20, 22))): $weather_desc = "Foggy"; break;
				case (in_array($x, range(23, 31))): $weather_desc = "Frigid"; break;
				case (in_array($x, range(32, 33))): $weather_desc = "Hail"; break;
				case (in_array($x, range(34, 35))): $weather_desc = "Hazy"; break;
				case (in_array($x, range(36, 42))): $weather_desc = "Overcast"; break;
				case (in_array($x, range(43, 50))): $weather_desc = "Showers"; break;
				case (in_array($x, range(51, 61))): $weather_desc = "Sleet"; break;
				case (in_array($x, range(62, 64))): $weather_desc = "Stormy"; break;
				case (in_array($x, range(65, 67))): $weather_desc = "Clear"; break;
				case (in_array($x, range(68, 78))): $weather_desc = "Cloudy"; break;
				case (in_array($x, range(79, 81))): $weather_desc = "Sunny"; break;
				case (in_array($x, range(82, 92))): $weather_desc = "Breezy"; break;
				case (in_array($x, range(93,100))): $weather_desc = "Windy"; break;
			}
			break;
		case("Spring"):
			switch(true) {
				case (in_array($x, range( 0,  6))): $weather_desc = "Chilly"; break;
				case (in_array($x, range( 7,  9))): $weather_desc = "Cold"; break;
				case (in_array($x, range(10, 18))): $weather_desc = "Downpour"; break;
				case (in_array($x, range(19, 21))): $weather_desc = "Drizzle"; break;
				case (in_array($x, range(22, 24))): $weather_desc = "Hazy"; break;
				case (in_array($x, range(25, 30))): $weather_desc = "Overcast"; break;
				case (in_array($x, range(31, 33))): $weather_desc = "Showers"; break;
				case (in_array($x, range(34, 36))): $weather_desc = "Thunderheads"; break;
				case (in_array($x, range(37, 42))): $weather_desc = "Clear"; break;
				case (in_array($x, range(43, 48))): $weather_desc = "Cloudy"; break;
				case (in_array($x, range(49, 61))): $weather_desc = "Mild"; break;
				case (in_array($x, range(62, 64))): $weather_desc = "Hot"; break;
				case (in_array($x, range(65, 70))): $weather_desc = "Humid"; break;
				case (in_array($x, range(71, 79))): $weather_desc = "Sunny"; break;
				case (in_array($x, range(80, 85))): $weather_desc = "Warm"; break;
				case (in_array($x, range(86, 94))): $weather_desc = "Breezy"; break;
				case (in_array($x, range(95,100))): $weather_desc = "Windy"; break;
			}
			break;
		case("Summer"):
			switch(true) {
				case (in_array($x, range( 0,  7))): $weather_desc = "Hazy"; break;
				case (in_array($x, range( 8, 10))): $weather_desc = "Showers"; break;
				case (in_array($x, range(11, 14))): $weather_desc = "Stormy"; break;
				case (in_array($x, range(15, 21))): $weather_desc = "Thunderheads"; break;
				case (in_array($x, range(22, 31))): $weather_desc = "Clear"; break;
				case (in_array($x, range(32, 41))): $weather_desc = "Mild"; break;
				case (in_array($x, range(42, 52))): $weather_desc = "Hot"; break;
				case (in_array($x, range(53, 66))): $weather_desc = "Humid"; break;
				case (in_array($x, range(67, 76))): $weather_desc = "Sunny"; break;
				case (in_array($x, range(77, 79))): $weather_desc = "Sweltering"; break;
				case (in_array($x, range(80, 90))): $weather_desc = "Warm"; break;
				case (in_array($x, range(91, 97))): $weather_desc = "Breezy"; break;
				case (in_array($x, range(98,100))): $weather_desc = "Windy"; break;
			}
			break;
	}

	$special_weather_chance = rand(1,100);
	if ($special_weather_chance >= 85) {
		switch(true) {
			case (in_array($weather_desc, array("Windy", "Breezy"))):
				$w = array(
					"<b>High Winds</b> - Highway travel not advised. Air traffic shut down.",
					"<b>High Winds</b> - Air travel warning. Pedestrians advised to consider travel before or after wind speed reduction.",
					"<b>Air pollution</b> - Aerosol pollution moving north from dumpsites. Breathing apparatus advised.",
					"<b>Frequent gusts</b> - Small vehicle travel not advised on highways. Pedestrians advised to consider travel before or after wind speed reduction.",
					"<b>Air pollution</b> - Dust cloud moving from dump sites. Eye and breath protection advised."
				);
				$weather_warning = $w[array_rand($w)];
				break;
			case (in_array($weather_desc, array("Foggy"))):
				$w = array(
					"<b>Acid Fog</b> - Reduced vision. Eye and breath protection advised.",
					"<b>Heavy Fog</b> - Reduced vision (human and electronic).",
					"<b>Light Fog</b> - Reduced vision (human and electronic). Air vehicles advised to maintain altitude when possible.",
					"<b>Smog</b> - Reduced vision. Temperature drop. Eye and breath protection advised.",
					"<b>Smog</b> - Reduced vision. Eye and breath protection advised. Ban on gunfire and open flames.",
					"<b>Misty</b> - Reduced vision. Caution advised for all transport."
				);
				$weather_warning = $w[array_rand($w)];
				break;
			case (in_array($weather_desc, array("Chilly", "Cold", "Drizzle", "Frigid"))):
				$w = array(
					"<b>Drizzle</b> - Road traction impaired. Speed limits will protect drivers.",
					"<b>Red Rain</b> - Polluted rainfall. Limit exposure. Eye and breath protection advised."
				);
				$weather_warning = $w[array_rand($w)];
				break;
			case (in_array($weather_desc, array("Hail", "Showers", "Snowflakes", "Sleet", "Downpour", "Stormy", "Thunderheads"))):
				$w = array(
					"<b>Acid Hail</b> - People strongly advised to seek cover and move possessions out of exposure.",
					"<b>Acid Rain</b> - People strongly advised to seek cover.",
					"<b>Downpour</b> - Air travel strongly advised against. Reduced visibility and traction.",
					"<b>Heavy Rain</b> - Poor driving conditions. Air travel cautioned.",
					"<b>Rain</b> - Consider safe driving speed limits.",
					"<b>Red Rain</b> - Polluted rainfall. Limit exposure. Eye and breath protection advised.",
					"<b>Thunderheads</b> - Increased chance of local network interference. Potential heavy rain.",
					"<b>Thunderstorm</b> - Reduced network range. Safe driving practices advised. Air travel cautioned."
				);
				$weather_warning = $w[array_rand($w)];
				break;
			case (in_array($weather_desc, array("Clear", "Cloudy", "Mild", "Overcast", "Warm"))):
				$w = array(
					"<b>Blood Skies</b> - Limit exposure. Eye and breath protection advised."
				);
				$weather_warning = $w[array_rand($w)];
				break;
			case (in_array($weather_desc, array("Hazy", "Hot", "Humid", "Sunny", "Sweltering"))):
				$w = array(
					"<b>Blood Skies</b> - Limit exposure. Eye and breath protection advised.",
					"<b>Heatwave</b> - Increased ground temp. Street crime increases likely.",
					"<b>Sunny</b> - Increased foot traffic."
				);
				$weather_warning = $w[array_rand($w)];
				if (strpos($weather_warning, "Heatwave")) {
					$min_temp += rand(1,8);
					$max_temp += rand(1,5);
				}
				break;

		}
		$weather_warning = " <span style=\"color: red;\"><span class=\"material-icons\">warning_amber</span>Warning: ".$weather_warning."</span>";
	}
	else {	$weather_warning = ""; }

	return "Weather: ".$weather_desc." Hi: ".$min_temp.", Lo: ".$max_temp.$weather_warning;
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
		"RegionalNews", "GangViolence", "NomadPolitics", "NCNews", "Environment", "Media", "Sports", "OffWorld"
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
					"<b>Cyberpsycho kills 3</b> on westbound off Hwy 81, still at large. MAXTAC on scene.",
					"Texas Republic Gen. Walles warns of <b>border skirmishes</b> near Tijuana.",
				);
				$h = "NorthAm: ".$w[array_rand($w)];
				break;
			case("GangViolence"):
				$w = Array(
					"Silver Slash leaders confirm deal brokered between Jokers, Valentinos will 'reduce tensions'",
					"Night City PD <b>patrols strengthened in Santo Domingo</b> due to tensions between Valentinos and Maelstrom.",
					"Tensions decline in Pacifica after retreat of Red Chrome Legion from area."
				);
				$h = "Gang News: ".$w[array_rand($w)];
				break;
			case("NomadPolitics"):
				$w = Array(
					"Aldecados deny involvement in <b>shootout on Hwy 102</b>.",
					"'Raffen Shiv' blamed for <b>ambush on Jode Nation caravan</b>, leaving 15 civilians dead, 3 survivors.",
					"17 hour delay through MetaKey over after cyberpsycho attack killed 6."
				);
				$h = "Nomad News: ".$w[array_rand($w)];
				break;
			case("NCNews"):
				$w = Array(
					"Sex worker violence on rise again, SW union <b>calls for increased protection</b>.",
					"Four arrested, <b>riots suppressed in Santo Domingo</b> after Oasis stores price hike.",
					"Councillor Piper says she will run on jobs, crime prevention platform in upcoming election.",
					"Arasaka breaks ground on <b>permanent memorial and museum</b> for city center bombing.",
					"<b>No fatalities in AV crash</b> on Pacifica outskirts. Pilot praised for quick thinking."
				);
				$h = "Night City: ".$w[array_rand($w)];
				break;
			case("Environment"):
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
					"Maria Mercurial reveals plans for <b>Pan-American tour in Fall</b> &quot;starting in Night City&quot;",
					"25th anniversary release of Entropy album on hold due to legal dispute."
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
					"NCPD warn of <b>toxic batch of Blue Glass</b> being sold in Heywood, surrounding areas.",
					"Sex worker violence on rise again, SW union <b>calls for increased protection</b>.",
					"Four arrested, <b>riots suppressed in Santo Domingo</b> after Oasis stores price hike.",
				);
				$h = "Crime: ".$w[array_rand($w)];
				break;
			case("CorpNews"):
				$w = Array(
					"SovOil <b>stocks rise 3.2%</b> on opening of new CHOOH<sub>2</sub> processing plant near Vancouver",
					"Network 54 deny rumors of 'lower dividend' on back of Waterman/Cole report. Shares drop 0.7% at close.",
					"Zetatech appoint former Arasaka VP Todakashi as new CTO, Arasaka spokesperson refuses questions.",
					"Blume claim new facial recognition system installed in NCART 'hackproof'."
				);
				$h = "Business: ".$w[array_rand($w)];
				break;
		}
	}

	$news = join($sep, $headlineTopics);
	$news .= $sep.$E["Ticker"]["Weather"];
	$news .= $sep.$E["Ticker"]["BodyCountLotto"];

	return $news;
}

?>