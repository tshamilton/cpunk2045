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
	$contents = array(
		'Time/Date/Weather/Lotto',
		'Time/Date/Weather/Lotto brought to you by '.blipverts(1),
		'Latest news headlines &amp; lottery results',
		'Latest news headlines &amp; lottery results brought to you by '.blipverts(1),
		'Video gaming event',
		'eSports event sponsored by '.blipverts(1),
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
		return "<p style='margin-left: 15px;'><b>Blipvert</b><br/><b>Corp:</b> ".$blip_company[array_rand($blip_company)]."<br/><b>Product:</b> ".$blip_range[array_rand($blip_range)]."<br/><b>Range:</b> ".$blip_product[array_rand($blip_product)]."<br/><b>AdStyle:</b>".$blip_style[array_rand($blip_style)]."</p>";
	}
}

function bc_lotto() {
	$news = "";
	$districts = array('New Westbrook (North)', 'Watson', 'Watson Projects', 'Little Europe', 'University District', 'South NC', 'The Glen', 'Old Combat Zone', 'Old Japan Town', 'Little China', 'Marina', 'Executive Zone', 'New Westbrook (South)', 'Heywood', 'Santo Domingo', 'Pacifica');
	$body_count = array(20,4,20,12,6,10,10,50,20,12,8,6,20,20,50,20);
	$gen_news = array(
		'NUSA delegation threaten &quot;dire consequences&quot; after <b>reunification talks stall</b> with NC Council.',
		'Night City PD <b>patrols strengthened in Santo Domingo</b> due to tensions between Valentinos and Maelstrom.',
		'Aldecados deny involvement in <b>shootout on Hwy 102</b>.',
		'Sex worker violence on rise again, SW union <b>calls for increased protection</b>.',
		'Meteo. Dept. warns of <b>intermittent red rain until next Monday</b>.',
		'Arasaka breaks ground on <b>permanent memorial and museum</b> for city center bombing.',
		'Reclamation north of Watson hindered by &quot;Hippies and local troublemakers&quot; - Biotechnica.',
		'New T4 Strain <b>album leaked to fans</b> after raid on DMS offices in Seattle.',
		'Night City FC full-back Djemir <b>sets transfer fee record</b> after move to Dallas.',
		'Crystal Palace <b>deny claims of interference</b> in recent Orbital Air takeover attempt.',
		'NCPD warn of <b>toxic batch of Blue Glass</b> being sold in Heywood, surrounding areas',
		'Texas Republic Gen. Walles warns of <b>border skirmishes</b> near Tijuana',
		'SovOil <b>stocks rise 3.2%</b> on opening of new CHOOH<sub>2</sub> processing plant near Vancouver',
		'Maria Mercurial reveals plans for <b>American tour in Fall</b> &quot;starting in Night City&quot;',
		'<b>No fatalities in AV crash</b> on Pacifica outskirts. Pilot praised for quick thinking.',
		'<b>Cyberpsycho kills 3</b> on westbound off Hwy 81',
		'<b>Body count rises to 225</b> in pre-Crash shipping containers, part of &lsquo;30s trafficking racket.',
		'Four arrested, <b>riots suppressed in Santo Domingo</b> after Oasis stores price hike.',
		'Mayor - SMR virus &quot;not immediate threat&quot; to Night City after flight closures from Eastern Europe.',
	);
	$hls = array();
	$hls = array_rand($gen_news, rand(3,6));
	$headlines = array();
	$sep = "&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-weight: bold; color: #00dd00;\">&#167;</span>&nbsp;&nbsp;&nbsp;&nbsp;";
	foreach($hls as $h) {
		array_push($headlines, $gen_news[$h]);
	}
	$news = join($headlines, $sep);
	$news .= $sep;

	$res = array();
	$prize = 0;
	$c_districts = array_rand($districts, 5);
	$sponsor = pickCorp(); $sponsor = explode("~", $sponsor); $sponsor = $sponsor[1];
	$bc_lotto_results = "Body Count Lotto&trade; results brought to you by ".$sponsor." <span class=\"dot\"></span> ";

	foreach ($c_districts as $c) {
		$bc = rand(0, $body_count[$c]);
		$d = $districts[$c].": ".$bc;
		array_push($res, $d);
		$prize += $bc * $body_count[$c];
	}

	$bc_lotto_results .= join(" <span class=\"dot\"></span> ", $res);
	$winners = rand(0,5);
	if ($winners == 0) {
		$bc_lotto_results .= "<span class=\"dot\"></span> <b>No winners</b>. Prize jackpots to ".$prize*rand(2,5)."eb.";
	}
	elseif ($winners == 1) {
		$bc_lotto_results .= "<span class=\"dot\"></span> <b>".$winners." winner</b>. Prize total: ".$prize."eb.";
	}
	else {
		$bc_lotto_results .= "<span class=\"dot\"></span> <b>".$winners." winners</b>. Prize total: ".$prize."eb.";
	}
	$news .= $bc_lotto_results;

	return $news;

}


?>