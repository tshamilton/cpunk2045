<?php
function calc_cost($base, $vari) {
	$delta = 0;
	switch($vari) {
		case ("Ch"):
			$delta = 50; break;
		case ("Ev"):
			$delta = 25; break;
		case ("Co"):
			$delta = 20; break;
		case ("Pr"):
			$delta = 15; break;
		default:
			$delta = 10; break;
	}
	return round($base + (((rand(0,$delta*2) - $delta)/100)*$base));
}

function choose_programs($budget) {
	$on_offer = array();
	$total_stock = 0;
	$out = "";
	$low_prog_list = array(
		"Eraser" => 20,
		"See Ya" => 20,
		"Speedy Gonzalvez" => 100,
		"Worm" => 50,
		"Armor" => 50,
		"Flak" => 50,
		"Shield" => 20,
		"Banhammer" => 50,
		"Sword" => 50,
		"DeckKRASH" => 100,
		"Hellbolt" => 100,
		"Nervescrub" => 100,
		"Poison Flatline" => 100,
		"Superglue" => 100,
		"Vrizzbolt" => 50,
		"Asp" => 100,
		"Raven" => 50,
		"Scorpion" => 100,
		"Wisp" => 50,
	);
	$high_prog_list = array(
		"Speedy Gonzalvez" => 100,
		"DeckKRASH" => 100,
		"Hellbolt" => 100,
		"Nervescrub" => 100,
		"Poison Flatline" => 100,
		"Superglue" => 100,
		"Asp" => 100,
		"Giant" => 1000,
		"Hellhound" => 500,
		"Kraken" => 1000,
		"Liche" => 500,
		"Scorpion" => 100,
		"Skunk" => 500,
		"Dragon" => 1000,
		"Killer" => 500,
		"Sabretooth" => 1000
	);
	if ($budget == 100) {
		while($total_stock < $budget) {
			$p = array_rand($low_prog_list);
			array_push($on_offer, $p);
			$total_stock += $low_prog_list[$p];
		}
	}
	else {
		while($total_stock < $budget) {
			$p = array_rand($high_prog_list);
			array_push($on_offer, $p);
			$total_stock += $high_prog_list[$p];
		}
	}
	foreach($on_offer as $x) {
		switch($x) {
			case("Eraser"):
				$out .= t(10)."<dt>Eraser (20eb)</dt>\n".t(10)."<dd>Booster. Increases Cloak checks by 2.</dd>\n"; break;
			case("See Ya"):
				$out .= t(10)."<dt>See Ya (20eb)</dt>\n".t(10)."<dd>Booster. Increases Pathfinder checks by 2.</dd>\n"; break;
			case("Speedy Gonzalvez"):
				$out .= t(10)."<dt>Speedy Gonzalvez (100eb)</dt>\n".t(10)."<dd>Booster. Increases Speed by 2.</dd>\n"; break;
			case("Worm"):
				$out .= t(10)."<dt>Worm (50eb)</dt>\n".t(10)."<dd>Booster. Increases Backdoor checks by 2.</dd>\n"; break;
			case("Armor"):
				$out .= t(10)."<dt>Armor (50eb)</dt>\n".t(10)."<dd>Defender. Lowers physical damage by 4.</dd>\n"; break;
			case("Flak"):
				$out .= t(10)."<dt>Flak (50eb)</dt>\n".t(10)."<dd>Defender. Reduces all non-Black ICE ATK scores to 0.</dd>\n"; break;
			case("Shield"):
				$out .= t(10)."<dt>Shield (20eb)</dt>\n".t(10)."<dd>Defender. Absorbs 1st successful physical damage from non-Black ICE before derezzing.</dd>\n"; break;
			case("Banhammer"):
				$out .= t(10)."<dt>Banhammer (50eb)</dt>\n".t(10)."<dd>Attacker. 3d6 to non-Black ICE, 2d6 to Black ICE.</dd>\n"; break;
			case("Sword"):
				$out .= t(10)."<dt>Sword (50eb)</dt>\n".t(10)."<dd>Attacker. 3d6 to Black ICE, 2d6 to non-Black ICE.</dd>\n"; break;
			case("DeckKRASH"):
				$out .= t(10)."<dt>DeckKRASH (100eb)</dt>\n".t(10)."<dd>Attacker. Ejects target from the Net, getting hit by all extant architectural Black ICE on the way back out.</dd>\n"; break;
			case("Hellbolt"):
				$out .= t(10)."<dt>Hellbolt (100eb)</dt>\n".t(10)."<dd>Attacker. 2d6 physical damage to target. 2 dmg/rnd to deck.</dd>\n"; break;
			case("Nervescrub"):
				$out .= t(10)."<dt>Nervescrub (100eb)</dt>\n".t(10)."<dd>Attacker. Target's INT, DEX and REF lowered by 1d6 (min. 1) for an hour.</dd>\n"; break;
			case("Poison Flatline"):
				$out .= t(10)."<dt>Poison Flatline (100eb)</dt>\n".t(10)."<dd>Attacker. Destroys a random non-Black ICE program on the target's deck.</dd>\n"; break;
			case("Superglue"):
				$out .= t(10)."<dt>Superglue (100eb)</dt>\n".t(10)."<dd>Attacker. Target netrunner cannot proceed further into the architecture for 1d6 rounds. Can only perform unsafe JackOut.</dd>\n"; break;
			case("Vrizzbolt"):
				$out .= t(10)."<dt>Vrizzbolt (50eb)</dt>\n".t(10)."<dd>Attacker. 1d6 physical damage. Reduces NET actions for target's next turn by 1 (min. 2).</dd>\n"; break;
			case("Asp"):
				$out .= t(10)."<dt>Asp (100eb)</dt>\n".t(10)."<dd>Black ICE. Destroys a single random program on target deck.</dd>\n"; break;
			case("Giant"):
				$out .= t(10)."<dt>Giant (1000eb)</dt>\n".t(10)."<dd>Black ICE. 3d6 physical damage to target. Forcibly JackedOut, get hit by all extant architectural Black ICE on the way back out.</dd>\n"; break;
			case("Hellhound"):
				$out .= t(10)."<dt>Hellhound (500eb)</dt>\n".t(10)."<dd>Black ICE. 2d6 physical damage plus 2 hp burning/round until meatspace fire is put out.</dd>\n"; break;
			case("Kraken"):
				$out .= t(10)."<dt>Kraken (1000eb)</dt>\n".t(10)."<dd>Black ICE. 3d6 physical damage. Target netrunner cannot proceed further into the architecture for 1d6 rounds. Can only perform unsafe JackOut.</dd>\n"; break;
			case("Liche"):
				$out .= t(10)."<dt>Liche (500eb)</dt>\n".t(10)."<dd>Black ICE. Target's INT, DEX and REF lowered by 1d6 (min. 1) for an hour.</dd>\n"; break;
			case("Raven"):
				$out .= t(10)."<dt>Raven (50eb)</dt>\n".t(10)."<dd>Black ICE. Derezzes random Defender program then deals 1d6 physical damage.</dd>\n"; break;
			case("Scorpion"):
				$out .= t(10)."<dt>Scorpion (100eb)</dt>\n".t(10)."<dd>Black ICE. Reduces target's MOVE by 1d6 for next hour.</dd>\n"; break;
			case("Skunk"):
				$out .= t(10)."<dt>Skunk (500eb)</dt>\n".t(10)."<dd>Black ICE. While Rezzed, target Netrunners take -3 penalty to Slide checks.</dd>\n"; break;
			case("Wisp"):
				$out .= t(10)."<dt>Wisp (50eb)</dt>\n".t(10)."<dd>Black ICE. 1d6 physical damage. Reduces NET actions for target's next turn by 1 (min. 2).</dd>\n"; break;
			case("Dragon"):
				$out .= t(10)."<dt>Dragon (1000eb)</dt>\n".t(10)."<dd>Black ICE. 6d6 damage. If this is enough to Derezz the program, it is Destroyed.</dd>\n"; break;
			case("Killer"):
				$out .= t(10)."<dt>Killer (500eb)</dt>\n".t(10)."<dd>Black ICE. 4d6 damage. If this is enough to Derezz the program, it is Destroyed.</dd>\n"; break;
			case("Sabretooth"):
				$out .= t(10)."<dt>Sabretooth (1000eb)</dt>\n".t(10)."<dd>Black ICE. 6d6 damage. If this is enough to Derezz the program, it is Destroyed.</dd>\n"; break;
		}
	}
	return $out;
}

function night_market() {
	$output = array();
	$choice = array();

	$categories = array("Food", "Gadgets", "Weapons", "Cyber", "Fashion", "Gear");

	$num_categories = rand(1,4);
	$num_categories == 1?$choice[0] = array_rand($categories, $num_categories):$choice = array_rand($categories, $num_categories);
	$num_columns = 12/$num_categories;
	$o = "";

	foreach ($choice as $c) {
		$o .= t(7)."<div class=\"col-".$num_columns."\">\n";
		$o .= t(8)."<div class=\"card bg-nightmarket card-block\">\n";
		$o .= t(9)."<div class=\"card-header text-center\">".$categories[$c]."</div>\n";
		$o .= t(9)."<dl class=\"px-2\">\n";
		switch($categories[$c]) {
			case("Food"):
				$o .= nm_food(); break;
			case("Gadgets"):
				$o .= nm_gadget(); break;
			case("Fashion"):
				$o .= nm_fashion(); break;
			case("Gear"):
				$o .= nm_gear(); break;
			case("Weapons"):
				$o .= nm_weapons(); break;
			case("Cyber"):
				$o .= nm_cyber(); break;
		}
		$o .= t(9)."</dl>\n";
		$o .= t(8)."</div>\n";
		$o .= t(7)."</div>\n";
		array_push($output, $o);
		$o = "";
	}
	
	return $output;
}

function nm_cyber() {
	$count = rand(1,10);
	$out = "";
	$cyber = array(
		"Cybereye, 100(Pr)",
		"Cyberaudio suite, 500(Ex)",
		"Neural Link, 500(Ex)",
		"Cyberarm, 500(Ex)",
		"Cyberleg, 100(Pr)",
		"External cyberware, 500(Ex)",
		"External cyberware, 1000(Vx)",
		"Internal cyberware, 1000(Vx)",
		"Internal cyberware, 500(Ex)",
		"Cybereye option, 1000(Vx)",
		"Cybereye option, 500(Ex)",
		"Cyberaudio	option, 1000(Vx)",
		"Cyberaudio option, 500(Ex)",
		"Neuralware option, 1000(Vx)",
		"Neuralware option, 500(Ex)",
		"Cyberlimb option, 1000(Vx)",
		"Cyberlimb option, 500(Ex)",
		"Fashionware, 100(Pr)",
		"Borgware, 1000(Vx)",
	);
	if ($count == 1) { $this_cyber[0] = array_rand($cyber); } else { $this_cyber = array_rand($cyber, $count); }
	foreach ($this_cyber as $c) {
		preg_match("/(.+?), (\d+?)\((..)\)/", $cyber[$c], $tc);
		$uniq = rand(1,4);
		$qual = rand(1,100);
		switch($tc[1]) {
			case("Cybereye"):
				if ($uniq == 1) {
					if		($qual <= 17) {	$o = "<dt>Kiroshii Model-IV (Pair - ".calc_cost(200, "Pr")."eb)</dt>\n<dd>HL: ".rand(4,24).". 6 option slots.</dd>\n"; }
					elseif  ($qual <= 33) { $o = "<dt>Kiroshii Model-IV (Single - ".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(2,12).". 3 option slots</dd>\n"; }
					elseif  ($qual <= 50) { $o = "<dt>Zeiss Orbital (Pair - ".calc_cost(200, "Pr")."eb)</dt>\n<dd>HL: ".rand(4,24).". 6 option slots</dd>\n"; }
					elseif  ($qual <= 67) { $o = "<dt>Zeiss Orbital (Single - ".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(2,12).". 3 option slots</dd>\n"; }
					elseif  ($qual <= 83) { $o = "<dt>Blume OverSight (Pair - ".calc_cost(200, "Pr")."eb)</dt>\n<dd>HL: ".rand(4,24).". 6 option slots</dd>\n"; }
					else				  { $o = "<dt>Blume OverSight (Single - ".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(2,12).". 3 option slots</dd>\n"; }
				}
				else {
					$money = calc_cost($tc[2], $tc[3]);
					$o = t(10)."<dt>".$tc[1]." (".$money."eb)</dt>\n";
				}
				$out .= $o;
				break;
			case("Cyberaudio suite"):
				if ($uniq == 1) {
					if		($qual <= 33) {	$o = "<dt>Dynalar QAudio (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". 3 option slots.</dd>\n"; }
					elseif  ($qual <= 67) { $o = "<dt>Blume T-Audio (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". 3 option slots.</dd>\n"; }
					else				  { $o = "<dt>Dakai Crystal-4 (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". 3 option slots.</dd>\n"; }
				}
				else {
					$money = calc_cost($tc[2], $tc[3]);
					$o = t(10)."<dt>".$tc[1]." (".$money."eb)</dt>\n";
				}
				$out .= $o;
				break;
			case("Neural link"):
				if ($uniq == 1) {
					if		($qual <= 20) {	$o = "<dt>Zetatech Base (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". 5 option slots.</dd>\n"; }
					elseif  ($qual <= 40) { $o = "<dt>Memorize MindLink&trade; (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". 5 option slots</dd>\n"; }
					elseif  ($qual <= 60) { $o = "<dt>IEC Neural Port (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". 5 option slots</dd>\n"; }
					elseif  ($qual <= 80) { $o = "<dt>Cyphire Gateway-NG6 (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". 5 option slots</dd>\n"; }
					else				  { $o = "<dt>Raven Microcybernetics AC-2 (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". 5 option slots</dd>\n"; }
				}
				else {
					$money = calc_cost($tc[2], $tc[3]);
					$o = t(10)."<dt>".$tc[1]." (".$money."eb)</dt>\n";
				}
				$out .= $o;
				break;
			case("Cyberarm"):
				if ($uniq == 1) {
					if		($qual <= 12) {	$o = "<dt>Dynalar MAS-15 (Single - ".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". 4 option slots per arm.</dd>\n"; }
					elseif	($qual <= 25) {	$o = "<dt>Dynalar MAS-15 (Pair - ".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: ".rand(4,24).". 4 option slots per arm.</dd>\n"; }
					elseif  ($qual <= 37) { $o = "<dt>Arasaka FlexxU (Single - ".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". 4 option slots per arm.</dd>\n"; }
					elseif  ($qual <= 50) { $o = "<dt>Arasaka FlexxU (Pair - ".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: ".rand(4,24).". 4 option slots per arm.</dd>\n"; }
					elseif  ($qual <= 62) { $o = "<dt>IEC CyberArm (Single - ".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". 4 option slots per arm.</dd>\n"; }
					elseif  ($qual <= 75) { $o = "<dt>IEC CyberArm (Pair - ".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: ".rand(4,24).". 4 option slots per arm.</dd>\n"; }
					elseif  ($qual <= 87) { $o = "<dt>Kang Tao DL-7 (Single - ".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". 4 option slots per arm.</dd>\n"; }
					else				  { $o = "<dt>Kang Tao DL-7 (Pair - ".calc_cost(500, "Vx")."eb)</dt>\n<dd>HL: ".rand(4,24).". 4 option slots per arm.</dd>\n"; }
				}
				else {
					$money = calc_cost($tc[2], $tc[3]);
					$o = t(10)."<dt>".$tc[1]." (".$money."eb)</dt>\n";
				}
				$out .= $o;
				break;
			case("Cyberleg"):
				if ($uniq == 1) {
					if		($qual <= 17) {	$o = "<dt>Dynalar Cheetah (Single - ".calc_cost(100, "Ex")."eb)</dt>\n<dd>HL: ".rand(1,6).". 3 option slots per leg.</dd>\n"; }
					elseif	($qual <= 33) {	$o = "<dt>Dynalar Cheetah (Pair - ".calc_cost(200, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". 3 option slots per arm.</dd>\n"; }
					elseif  ($qual <= 50) { $o = "<dt>Arasaka FlexxA (Single - ".calc_cost(100, "Ex")."eb)</dt>\n<dd>HL: ".rand(1,6).". 3 option slots per arm.</dd>\n"; }
					elseif  ($qual <= 67) { $o = "<dt>Arasaka FlexxA (Pair - ".calc_cost(200, "Vx")."eb)</dt>\n<dd>HL: ".rand(2,12).". 3 option slots per arm.</dd>\n"; }
					elseif  ($qual <= 83) { $o = "<dt>EBM Charisse (Single - ".calc_cost(100, "Ex")."eb)</dt>\n<dd>HL: ".rand(1,6).". 3 option slots per arm.</dd>\n"; }
					else				  { $o = "<dt>EBM Charisse (Pair - ".calc_cost(200, "Vx")."eb)</dt>\n<dd>HL: ".rand(2,12).". 3 option slots per arm.</dd>\n"; }
				}
				else {
					$money = calc_cost($tc[2], $tc[3]);
					$o = t(10)."<dt>".$tc[1]." (".$money."eb)</dt>\n";
				}
				$out .= $o;
				break;
			case("External cyberware"):
				if ($tc[2] == 500) {
					if 		($qual <= 33) { $o = "<dt>Hidden Holster (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).".</dd>\n"; }
					elseif	($qual <= 67) { $o = "<dt>Skin Weave (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". 7 SP over whole body, conditions apply.</dd>\n"; }
					else				  { $o = "<dt>Subdermal Pocket (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,6).".</dd>\n"; }
				}
				else {
					$o = "<dt>Subdermal Armor (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: ".rand(4,24).". SP 11 over whole body, conditions apply.</dd>\n";
				}
				$out .= $o;
				break;
			case("Internal cyberware"):
				if ($tc[2] == 500) {
					if 		($qual <= 17) { $o = "<dt>AudioVox (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(1,6).". +2 Acting, Play Instrument (Singing).</dd>\n"; }
					elseif	($qual <= 33) { $o = "<dt>Enhanced Antibodies (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(1,3).". Heal 2xBODY/day.</dd>\n"; }
					elseif	($qual <= 50) { $o = "<dt>Nasal Filters (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,3).". Prevent harm from airborne pollutants, poisons.</dd>\n"; }
					elseif	($qual <= 67) { $o = "<dt>Toxin Binders (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,3).". +2 Resist Torture/Drugs.</dd>\n"; }
					elseif	($qual <= 83) { $o = "<dt>Vampyres (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(4,24).". 1d6 light melee weapon, can be used to administer poison.</dd>\n"; }
					else				  { $o = "<dt>Midnight Lady/Mr. Studd (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(2,12).". All night, every night. Be Desire. Or something.</dd>\n"; }
				}
				else {
					if 		($qual <= 20) { $o = "<dt>Cybersnake (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: ".rand(4,24).". Very heavy melee weapon (4d6) concealed in throat.</dd>\n"; }
					elseif	($qual <= 40) { $o = "<dt>Gills (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: ".rand(2,12).". Allows breathing underwater.</dd>\n"; }
					elseif	($qual <= 60) { $o = "<dt>Muscle and Bone Lace (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: ".rand(4,24).". +2 to Body (max 10, stackable, impacts HP and death save).</dd>\n"; }
					elseif	($qual <= 80) { $o = "<dt>Independent Air Supply (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: ".rand(1,3).". 30 minute air tank.</dd>\n"; }
					else				  { $o = "<dt>Radar/Sonar Implant (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: ".rand(2,12).". 50m range, alerts on moving objects in non-enclosed spaces.</dd>\n"; }
				}
				$out .= $o;
				break;
			case("Cybereye option"):
				if ($tc[2] == 500) {
					if 		($qual <= 20) { $o = "<dt>Anti-dazzle (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,3).". Immune to blindness from flashbangs, etc. Requires 2 cybereyes and slots.</dd>\n"; }
					elseif	($qual <= 40) { $o = "<dt>Chyron (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,3).". Projects small subscreen onto sight for messages, video.</dd>\n"; }
					elseif	($qual <= 60) { $o = "<dt>Colour Shift (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,3).". Cosmetic colour and pattern shifts for eyes. Can react to temperature and/or hormones.</dd>\n"; }
					elseif	($qual <= 80) { $o = "<dt>MicroOptics (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,3).". Up to 400x magnification.</dd>\n"; }
					else				  { $o = "<dt>Virtuality (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,3).". Projects view of cyberspace over real world Requires 2 cybereyes.</dd>\n"; }
				}
				else {
					if 		($qual <= 14) { $o = "<dt>Dartgun (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(1,3).". Dartgun. Single shot. Uses 3 cybereye slots.</dd>\n"; }
					elseif	($qual <= 29) { $o = "<dt>Image Enhance (".calc_cost(500, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,6).". +2 to Percept., Lip Reading and Conceal/Reveal. Requires 2 cybereyes.</dd>\n"; }
					elseif	($qual <= 43) { $o = "<dt>Low Light/IR/UV Sight (".calc_cost(500, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,6).". Sight in darkness, smoke, can see heat/cold but not through solid objects. Requires 2 cybereyes and 2 slots per eye.</dd>\n"; }
					elseif	($qual <= 57) { $o = "<dt>MicroVideo (".calc_cost(500, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,3).". Requires 2 cybereyes and 2 slots per eye.</dd>\n"; }
					elseif	($qual <= 71) { $o = "<dt>Radiation Detector (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: ".rand(1,6).". Sees radiation levels as blue glow to 100m.</dd>\n"; }
					elseif	($qual <= 86) { $o = "<dt>Targeting Scope (".calc_cost(500, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,6).". +1 to aimed shots</dd>\n"; }
					else				  { $o = "<dt>TeleOptics (".calc_cost(500, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,6).". Allows sight to 800m, +1 to aimed .</dd>\n"; }
				}
				$out .= $o;
				break;
			case("Cyberaudio option"):
				if ($tc[2] == 500) {
					if 		($qual <= 10) { $o = "<dt>Amplified Hearing (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,6).". +2 to hearing-based Perception checks.</dd>\n"; }
					elseif	($qual <= 20) { $o = "<dt>Audio Recorder (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,3).".</dd>\n"; }
					elseif	($qual <= 30) { $o = "<dt>Bug Detector (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,3).". Beeps within 2m of listening device.</dd>\n"; }
					elseif	($qual <= 40) { $o = "<dt>Homing Tracer (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,3).". Comes with free tracking button, can be traced 3.2 kilometers away.</dd>\n"; }
					elseif	($qual <= 50) { $o = "<dt>Internal Agent (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,6).". Can be paired with Chyron for video calling.</dd>\n"; }
					elseif	($qual <= 60) { $o = "<dt>Level Damper (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,3).". Automatic noise compensation.</dd>\n"; }
					elseif	($qual <= 70) { $o = "<dt>Radio Commlink (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,3).". Can communicate via radio, 1.6km radius.</dd>\n"; }
					elseif	($qual <= 80) { $o = "<dt>Music/Radio (".calc_cost(50, "Co")."eb)</dt>\n<dd>HL: ".rand(1,3).".</dd>\n"; }
					elseif	($qual <= 90) { $o = "<dt>Scrambler (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,3).".</dd>\n"; }
					else				  { $o = "<dt>Voice Stress Analyzer (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,6).". +2 to Human Percepton and Interrogation skills.</dd>\n"; }
				}
				else {
					$o = "<dt>Radar Detector (".calc_cost(500, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,3).". Range of 100m.</dd>\n";
				}
				$out .= $o;
				break;
			case("Neuralware option"):
				if ($tc[2] == 500) {
					if 		($qual <= 33) { $o = "<dt>Memory Chip (".calc_cost(10, "Ch")."eb)</dt>\n<dd>HL: 0.</dd>\n"; }
					elseif	($qual <= 67) { $o = "<dt>Olfactory Boost (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(2,12).". Can use olfactory aspects of Tracking skill.</dd>\n"; }
					else				  { $o = "<dt>Tactile Boost (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(2,12).". Motion detection through vibrations over 20m.</dd>\n"; }
				}
				else {
					if 		($qual <= 11) { $o = "<dt>Braindance Recorder (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". <i>Requires Neural Link</i>.</dd>\n"; }
					elseif	($qual <= 22) { $o = "<dt>Chipware Socket (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". <i>Requires Neural Link</i>.</dd>\n"; }
					elseif	($qual <= 33) { $o = "<dt>Interface Plugs (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". Link to Cyberdecks, Smartgun,etc. <i>Requires Neural Link</i>.</dd>\n"; }
					elseif	($qual <= 44) { $o = "<dt>Kerenzikov (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(4,24).". +2 to initiative. <i>Requires Neural Link</i>.</dd>\n"; }
					elseif	($qual <= 55) { $o = "<dt>Sandevistan (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". +3 to initiative rolls for 1 minute. <i>Requires Neural Link</i>.</dd>\n"; }
					elseif	($qual <= 66) { $o = "<dt>Chemical Analyzer (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(1,6).". <i>Requires Chipware Socket</i>.</dd>\n"; }
					elseif	($qual <= 77) { $o = "<dt>Pain Editor (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: ".rand(4,24).". Ignores side-effects of Seriously Wounded state. <i>Requires Chipware Socket</i></dd>\n"; }
					elseif	($qual <= 88) { $o = "<dt>Skill Chip (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". +3 to untrained skill. <i>Requires Chipware Socket</i>.</dd>\n"; }
					else				  { $o = "<dt>Skill Chip (for x2 cost Skills) (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: ".rand(2,12).". +3 to untrained skill. <i>Requires Chipware Socket</i></dd>\n"; }
				}
				$out .= $o;
				break;
			case("Cyberlimb option"):
				if ($tc[2] == 500) {
					if 		($qual <= 14) { $o = "<dt>Big Knucks (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,6).". Medium melee weapon (2d6), can be installed on meat arm..</dd>\n"; }
					elseif	($qual <= 29) { $o = "<dt>Grapple Hand (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,6).". Fires rocket propelled grappling hook with 30m range. Capacity 2x body weight..</dd>\n"; }
					elseif	($qual <= 43) { $o = "<dt>Quick Change Mount (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(2,12).". Allows use of different cyberarms..</dd>\n"; }
					elseif	($qual <= 57) { $o = "<dt>Scratchers (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,3).". Carbo-glass slanted artificial fingernails. Light melee weapon (1d6). Can be installed on meat arm..</dd>\n"; }
					elseif	($qual <= 71) { $o = "<dt>Subdermal Grip (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,6).". Allows smartgun use. Can be installed on meat arm. Requires Neural Link and takes Neuralware option slot..</dd>\n"; }
					elseif	($qual <= 86) { $o = "<dt>Tool Hand (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: ".rand(1,6).". Can be installed on meat arm..</dd>\n"; }
					else				  { $o = "<dt>Plastic Covering (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: 0. Doesn't take a slot. Variety of colours and designs..</dd>\n"; }
				}
				else {
					if 		($qual <= 5) { $o = "<dt>Cyberdeck (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(1,6).". Takes three option slots, give extra slot (Hard/Program).</dd>\n"; }
					elseif	($qual <= 11) { $o = "<dt>Medscanner (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". +2 to First Aid and Paramedic. Takes 2 option slots.</dd>\n"; }
					elseif	($qual <= 16) { $o = "<dt>Popup Grenade Launcher (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". Takes 2 option slots.</dd>\n"; }
					elseif	($qual <= 21) { $o = "<dt>Popup Melee Weapon (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". Takes 2 option slots.</dd>\n"; }
					elseif	($qual <= 26) { $o = "<dt>Popup Shield (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". Requires 3 option slots.</dd>\n"; }
					elseif	($qual <= 31) { $o = "<dt>Popup Ranged Weapon (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". Requires 2 option slots.</dd>\n"; }
					elseif	($qual <= 37) { $o = "<dt>Rippers (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(1,6).". Carbo-glass fingernails. Medium melee weapon (2d6). Can be installed on meat arm.</dd>\n"; }
					elseif	($qual <= 42) { $o = "<dt>Shoulder Cam (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". Requires 2 action slots.</dd>\n"; }
					elseif	($qual <= 47) { $o = "<dt>Slice 'n Dice (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(1,6).". Monofilament whip in thumb. Medium melee weapon (2d6, 2 ROF). Can be installed on meat arm.</dd>\n"; }
					elseif	($qual <= 53) { $o = "<dt>Techscanner (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". Adds +2 to their Basic Tech, Cybertech, xTech. Requires 2 Option Slots.</dd>\n"; }
					elseif	($qual <= 58) { $o = "<dt>Wolvers (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(2,12).". Extendable carbo-glass claws between knuckles. Heavy melee weapon (3d6, 2 ROF). Can be installed in meat arm.</dd>\n"; }
					elseif	($qual <= 63) { $o = "<dt>Grip Foot (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(1,6).". Negates movement penalty for climbing. Requires two cyberlegs.</dd>\n"; }
					elseif	($qual <= 68) { $o = "<dt>Jump Booster (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(1,6).". Negates movement penalty when jumping. Requires two cyberlegs and takes 2 option slots.</dd>\n"; }
					elseif	($qual <= 74) { $o = "<dt>Skate Foot (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(1,6).". Inline skates, +6m when running. Requires two cyberlegs.</dd>\n"; }
					elseif	($qual <= 79) { $o = "<dt>Talon Foot (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(1,6).". Blade mounted in foot. Light melee weapon (1d6). Can be installed on meat leg.</dd>\n"; }
					elseif	($qual <= 84) { $o = "<dt>Web Foot (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: ".rand(1,6).". Negates penalty when swimming. Requires two cyberlegs.</dd>\n"; }
					elseif	($qual <= 89) { $o = "<dt>Hardened Shielding (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: ".rand(1,6).". Protected from EMP, Microwaves or non-Black ICE program effects.</dd>\n"; }
					elseif	($qual <= 95) { $o = "<dt>RealSkinn&trade; (".calc_cost(500, "Ex")."eb)</dt>\n<dd>HL: 0. Doesn't take a slot.</dd>\n"; }
					else				  { $o = "<dt>SuperChrome&trade; (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: 0. Shiny. +2 Wardrobe and Style.</dd>\n"; }
				}
				$out .= $o;
				break;
			case("Fashionware"):
				if 		($qual <= 14) { $o = "<dt>Biomonitor (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: 0. Contant pulse, temp, respiration, etc. on LED readout.</dd>\n"; }
				elseif	($qual <= 29) { $o = "<dt>Chemskin (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: 0. Colour change, blemish hiding, reactive colours, give +2 Personal Grooming with TechHair.</dd>\n"; }
				elseif	($qual <= 43) { $o = "<dt>EMP Threading (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: 0. Fashion statement shiny lines.</dd>\n"; }
				elseif	($qual <= 57) { $o = "<dt>Light Tattoo (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: 0. Subdermal light emitting patches. 3 or more light tattoos give +2 Wardrobe and Style.</dd>\n"; }
				elseif	($qual <= 71) { $o = "<dt>Shift Tacts (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: 0. Colour changing lenses.</dd>\n"; }
				elseif	($qual <= 86) { $o = "<dt>SkinWatch (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: 0. Subdermal LED time readout.</dd>\n"; }
				else				  { $o = "<dt>TechHair (".calc_cost(100, "Pr")."eb)</dt>\n<dd>HL: 0. Coloured-light emitting hair. Adds +2 Personal Grooming with Chemskin.</dd>\n"; }
				$out .= $o;
				break;
			case("Borgware"):
				if 		($qual <= 20) { $o = "<dt>Artificial Shoulder Mount (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: ".rand(4,24).". Can mount 2 extra cyberarms.</dd>\n"; }
				elseif	($qual <= 40) { $o = "<dt>Implanted &Sigma; Frame (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: ".rand(4,24).". Enhanced skeleton, BODY to 12. Req. BODY > 5 and Muscle &amp; Bone Lace.</dd>\n"; }
				elseif	($qual <= 60) { $o = "<dt>Implanted &beta; Frame (".calc_cost(5000, "Lx")."eb)</dt>\n<dd>HL: ".rand(4,24).". Enhanced skeleton, BODY to 14. Req. BODY > 7 and Muscle &amp; Bone Lace..</dd>\n"; }
				elseif	($qual <= 80) { $o = "<dt>MultiOptic Mount (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: ".rand(4,24).". Can install up to 5 cybereyes (bought separately).</dd>\n"; }
				else				  { $o = "<dt>Sensor Array (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>HL: ".rand(4,24).". Antennae, allows additional 5 cyberaudio options.</dd>\n"; }
				$out .= $o;
				break;
		
		}
		$money = calc_cost($tc[2], $tc[3]);
		$out .= t(10)."<dt>".$tc[1]." (".$money."eb)</dt>\n";
	}
	return $out;
}

function nm_fashion() {
	$count = rand(1,10);
	$out = "";
	$fashion = array(
		"Bag Lady, 20(Ev)",
		"Gang colours, 50(Co)",
		"Generic chic, 50(Ev)",
		"Bohemian, 50(Ev)",
		"Leisurewear, 100(Pr)",
		"Nomad leathers, 100(Pr)",
		"Asia pop, 100(Pr)",
		"Urban flash, 100(Pr)",
		"Businesswear, 500(Ex)",
		"High fashion, 1000(Vx)",
		"Generic chic, 50(Ev)",
		"Leisurewear, 100(Pr)",
		"Military surplus, 100(Pr)",
		"Gang colours, 50(Co)",
	);
	$item = array(
		"Bottom",
		"Top",
		"Jacket",
		"Footwear",
		"Jewelry",
		"Glasses",
		"Contact Lenses",
		"Hats"
	);
	if ($count == 1) { $this_fash[0] = array_rand($fashion); } else { $this_fash = array_rand($fashion, $count); }
	foreach ($this_fash as $f) {
		$this_item = $item[array_rand($item)];
		preg_match("/(.+?), (\d+?)\((..)\)/", $fashion[$f], $tf);
		switch($tf[1]) {
			case("Asia pop"):
				$desc = array("Bright", "Costume-like", "Youthful");
				switch($this_item){
					case("Bottom"):
						$x = array("skirt", "pants", "shorts");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Top"):
						$x = array("top", "shirt", "tee");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Jacket"):
						$x = array("coat", "jacket", "blazer");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Footwear"):
						$x = array("shoes", "sneakers", "boots", "OTK boots", "heels");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Jewelry"):
						$x = array("ring", "necklace", "pendant", "cuff", "bracelet", "earrings");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Glasses"):
						$x = array("glasses", "frames", "sunglasses", "mirrorshades");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Contact Lenses"):
						$x = array("contact lenses");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Hats"):
						$x = array("sunhat", "fedora", "hat", "helmet");
						$this_cost = calc_cost(100, "Pr");
						break;
				}
				$o = $desc[array_rand($desc)].", Asia Pop-style ".$x[array_rand($x)]." (".calc_cost(100, "Pr")."eb).";
				break;
			case("Bag Lady"):
				$desc = array("Ragged", "Wrecked", "Vagrant");
				switch($this_item){
					case("Bottom"):
						$x = array("skirt", "pants", "shorts");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Top"):
						$x = array("top", "shirt", "tee");
						$this_cost = calc_cost(10, "Ch");
						break;
					case("Jacket"):
						$x = array("coat", "jacket", "blazer");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Footwear"):
						$x = array("shoes", "sneakers", "boots", "OTK boots", "heels");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Jewelry"):
						$x = array("ring", "necklace", "pendant", "cuff", "bracelet", "earrings");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Glasses"):
						$x = array("glasses", "frames", "sunglasses", "mirrorshades");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Contact Lenses"):
						$x = array("contact lenses");
						$this_cost = calc_cost(10, "Ch");
						break;
					case("Hats"):
						$x = array("sunhat", "fedora", "hat", "helmet");
						$this_cost = calc_cost(10, "Ch");
						break;
				}
				$o = $desc[array_rand($desc)].", Homeless-style ".$x[array_rand($x)]." (".calc_cost(100, "Pr")."eb).";
				break;
			case("Bohemian"):
				$desc = array("Vintage", "Free-spirited", "Retro", "Folksy");
				switch($this_item){
					case("Bottom"):
						$x = array("skirt", "pants", "shorts");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Top"):
						$x = array("top", "shirt", "tee");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Jacket"):
						$x = array("coat", "jacket", "blazer");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Footwear"):
						$x = array("shoes", "sneakers", "boots", "OTK boots", "heels");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Jewelry"):
						$x = array("ring", "necklace", "pendant", "cuff", "bracelet", "earrings");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Glasses"):
						$x = array("glasses", "frames", "sunglasses", "mirrorshades");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Contact Lenses"):
						$x = array("contact lenses");
						$this_cost = calc_cost(10, "Ch");
						break;
					case("Hats"):
						$x = array("sunhat", "fedora", "hat", "helmet");
						$this_cost = calc_cost(10, "Ch");
						break;
				}
				$o = $desc[array_rand($desc)].", Boho-style ".$x[array_rand($x)]." (".calc_cost(100, "Pr")."eb).";
				break;
			case("Businesswear"):
				$desc = array("Severe", "Formal", "Sombre", "Tailored");
				switch($this_item){
					case("Bottom"):
						$x = array("skirt", "pants", "shorts");
						$this_cost = calc_cost(500, "Ex");
						break;
					case("Top"):
						$x = array("top", "shirt", "tee");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Jacket"):
						$x = array("coat", "jacket", "blazer");
						$this_cost = calc_cost(500, "Ex");
						break;
					case("Footwear"):
						$x = array("shoes", "sneakers", "boots", "OTK boots", "heels");
						$this_cost = calc_cost(500, "Ex");
						break;
					case("Jewelry"):
						$x = array("ring", "necklace", "pendant", "cuff", "bracelet", "earrings");
						$this_cost = calc_cost(5000, "Lx");
						break;
					case("Glasses"):
						$x = array("glasses", "frames", "sunglasses", "mirrorshades");
						$this_cost = calc_cost(500, "Ex");
						break;
					case("Contact Lenses"):
						$x = array("contact lenses");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Hats"):
						$x = array("sunhat", "fedora", "hat", "helmet");
						$this_cost = calc_cost(500, "Ex");
						break;
				}
				$o = $desc[array_rand($desc)].", Corporate-style ".$x[array_rand($x)]." (".calc_cost(100, "Pr")."eb).";
				break;
			case("Gang colours"):
				$desc = array("Dangerous", "Studded", "Painted");
				switch($this_item){
					case("Bottom"):
						$x = array("skirt", "pants", "shorts");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Top"):
						$x = array("top", "shirt", "tee");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Jacket"):
						$x = array("coat", "jacket", "blazer");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Footwear"):
						$x = array("shoes", "sneakers", "boots", "OTK boots", "heels");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Jewelry"):
						$x = array("ring", "necklace", "pendant", "cuff", "bracelet", "earrings");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Glasses"):
						$x = array("glasses", "frames", "sunglasses", "mirrorshades");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Contact Lenses"):
						$x = array("contact lenses");
						$this_cost = calc_cost(10, "Ch");
						break;
					case("Hats"):
						$x = array("sunhat", "fedora", "hat", "helmet");
						$this_cost = calc_cost(10, "Ch");
						break;
				}
				$o = $desc[array_rand($desc)].", Gang-style ".$x[array_rand($x)]." (".calc_cost(100, "Pr")."eb).";
				break;
			case("Generic chic"):
				$desc = array("Standard", "Colourful", "Modular");
				switch($this_item){
					case("Bottom"):
						$x = array("skirt", "pants", "shorts");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Top"):
						$x = array("top", "shirt", "tee");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Jacket"):
						$x = array("coat", "jacket", "blazer");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Footwear"):
						$x = array("shoes", "sneakers", "boots", "OTK boots", "heels");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Jewelry"):
						$x = array("ring", "necklace", "pendant", "cuff", "bracelet", "earrings");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Glasses"):
						$x = array("glasses", "frames", "sunglasses", "mirrorshades");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Contact Lenses"):
						$x = array("contact lenses");
						$this_cost = calc_cost(10, "Ch");
						break;
					case("Hats"):
						$x = array("sunhat", "fedora", "hat", "helmet");
						$this_cost = calc_cost(10, "Ch");
						break;
				}
				$o = $desc[array_rand($desc)].", store-brand ".$x[array_rand($x)]." (".calc_cost(100, "Pr")."eb).";
				break;
			case("High fashion"):
				$desc = array("Exclusive", "Designer", "Haute-Couture");
				switch($this_item){
					case("Bottom"):
						$x = array("skirt", "pants", "shorts");
						$this_cost = calc_cost(1000, "Vx");
						break;
					case("Top"):
						$x = array("top", "shirt", "tee");
						$this_cost = calc_cost(500, "Ex");
						break;
					case("Jacket"):
						$x = array("coat", "jacket", "blazer");
						$this_cost = calc_cost(1000, "Vx");
						break;
					case("Footwear"):
						$x = array("shoes", "sneakers", "boots", "OTK boots", "heels");
						$this_cost = calc_cost(5000, "Lx");
						break;
					case("Jewelry"):
						$x = array("ring", "necklace", "pendant", "cuff", "bracelet", "earrings");
						$this_cost = calc_cost(50000, "Lx");
						break;
					case("Glasses"):
						$x = array("glasses", "frames", "sunglasses", "mirrorshades");
						$this_cost = calc_cost(1000, "Vx");
						break;
					case("Contact Lenses"):
						$x = array("contact lenses");
						$this_cost = calc_cost(1000, "Vx");
						break;
					case("Hats"):
						$x = array("sunhat", "fedora", "hat", "helmet");
						$this_cost = calc_cost(5000, "Lx");
						break;
				}
				$o = $desc[array_rand($desc)].", Haute Couture-style ".$x[array_rand($x)]." (".calc_cost(100, "Pr")."eb).";
				break;
			case("Leisurewear"):
				$desc = array("Comfortable", "Athletic", "Sporty");
				switch($this_item){
					case("Bottom"):
						$x = array("skirt", "pants", "shorts");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Top"):
						$x = array("top", "shirt", "tee");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Jacket"):
						$x = array("coat", "jacket", "blazer");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Footwear"):
						$x = array("shoes", "sneakers", "boots", "OTK boots", "heels");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Jewelry"):
						$x = array("ring", "necklace", "pendant", "cuff", "bracelet", "earrings");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Glasses"):
						$x = array("glasses", "frames", "sunglasses", "mirrorshades");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Contact Lenses"):
						$x = array("contact lenses");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Hats"):
						$x = array("sunhat", "fedora", "hat", "helmet");
						$this_cost = calc_cost(50, "Co");
						break;
				}
				$o = $desc[array_rand($desc)].", Leisurewear-style ".$x[array_rand($x)]." (".calc_cost(100, "Pr")."eb).";
				break;
			case("Military surplus"):
				$desc = array("Camoflauge", "Plain khaki", "Sturdy");
				switch($this_item){
					case("Bottom"):
						$x = array("skirt", "pants", "shorts");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Top"):
						$x = array("top", "shirt", "tee");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Jacket"):
						$x = array("coat", "jacket", "blazer");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Footwear"):
						$x = array("shoes", "sneakers", "boots", "OTK boots", "heels");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Jewelry"):
						$x = array("ring", "necklace", "pendant", "cuff", "bracelet", "earrings");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Glasses"):
						$x = array("glasses", "frames", "sunglasses", "mirrorshades");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Contact Lenses"):
						$x = array("contact lenses");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Hats"):
						$x = array("sunhat", "fedora", "hat", "helmet");
						$this_cost = calc_cost(50, "Co");
						break;
				}
				$o = $desc[array_rand($desc)].", MilSurp-style ".$x[array_rand($x)]." (".calc_cost(100, "Pr")."eb).";
				break;
			case("Nomad leathers"):
				$desc = array("Western", "Rugged", "Tribal");
				switch($this_item){
					case("Bottom"):
						$x = array("skirt", "pants", "shorts");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Top"):
						$x = array("top", "shirt", "tee");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Jacket"):
						$x = array("coat", "jacket", "blazer");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Footwear"):
						$x = array("shoes", "sneakers", "boots", "OTK boots", "heels");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Jewelry"):
						$x = array("ring", "necklace", "pendant", "cuff", "bracelet", "earrings");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Glasses"):
						$x = array("glasses", "frames", "sunglasses", "mirrorshades");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Contact Lenses"):
						$x = array("contact lenses");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Hats"):
						$x = array("sunhat", "fedora", "hat", "helmet");
						$this_cost = calc_cost(50, "Co");
						break;
				}
				$o = $desc[array_rand($desc)].", Nomad-style ".$x[array_rand($x)]." (".calc_cost(100, "Pr")."eb).";
				break;
			case("Urban flash"):
				$desc = array("Flashy", "Flashy", "Street");
				switch($this_item){
					case("Bottom"):
						$x = array("skirt", "pants", "shorts");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Top"):
						$x = array("top", "shirt", "tee");
						$this_cost = calc_cost(20, "Ev");
						break;
					case("Jacket"):
						$x = array("coat", "jacket", "blazer");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Footwear"):
						$x = array("shoes", "sneakers", "boots", "OTK boots", "heels");
						$this_cost = calc_cost(50, "Co");
						break;
					case("Jewelry"):
						$x = array("ring", "necklace", "pendant", "cuff", "bracelet", "earrings");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Glasses"):
						$x = array("glasses", "frames", "sunglasses", "mirrorshades");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Contact Lenses"):
						$x = array("contact lenses");
						$this_cost = calc_cost(100, "Pr");
						break;
					case("Hats"):
						$x = array("sunhat", "fedora", "hat", "helmet");
						$this_cost = calc_cost(100, "Pr");
						break;
				}
				$o = $desc[array_rand($desc)].", Urban-style ".$x[array_rand($x)]." (".calc_cost(100, "Pr")."eb).";
				break;
		}
		
		$out .= t(10)."<dt>".$o."</dt>\n";
	}
	return $out;
}

function nm_food() {
	$count = rand(1,10);
	$out = "";
	$food = array(
		"Canned goods, 10(Ch)",
		"Packaged goods, 10(Ch)",
		"Frozen goods, 10(Ch)",
		"Bags of grain, 20(Ev)",
		"Kibble pack, 10(Ch)",
		"Prepak bags, 20(Ev)",
		"Street drugs, 20(Ev)",
		"Bad alcohol, 10(Ch)",
		"Alcohol, 20(Ev)",
		"Good alcohol, 100(Pr)",
		"MRE, 10(Ch)",
		"Live chicken, 50(Co)",
		"Live fish, 50(Co)",
		"Fresh fruit, 50(Co)",
		"Fresh vegetables, 50(Co)",
		"Root vegetables, 50(Co)",
		"Live pigs, 100(Pr)",
		"Exotic fruit, 100(Pr)",
		"Exotic vegetables, 100(Pr)",
		"Street drugs, 50(Co)"
	);
	if ($count == 1) { $this_food[0] = array_rand($food); } else { $this_food = array_rand($food, $count); }
	foreach ($this_food as $f) {
		preg_match("/(.+?), (\d+?)\((..)\)/", $food[$f], $tf);
		$money = calc_cost($tf[2], $tf[3]);
		$out .= t(10)."<dt>".$tf[1]." (".$money."eb)</dt>\n";
	}
	return $out;
}

function nm_gadget() {
	$count = rand(1,10);
	$out = "";
	$gadgets = array(
		"Agent, 100(Pr)",
		"Audio recorder, 100(Pr)",
		"Braindance viewer, 1000(Vx)",
		"Bug detector, 500(Ex)",
		"Burner mobile phone, 50(Co)",
		"Chemical analyzer, 1000(Vx)",
		"Computer, 100(Co)",
		"Cyberdeck, 500(Ex)",
		"Electric Guitar or other instrument, 500(Ex)",
		"Homing Tracer, 500(Ex)",
		"Medscanner, 1000(Vx)",
		"Netrunning hardware, 100(Pr)",
		"Netrunning scripts, 100(Ex)",
		"Netrunning programs, 500(Ex)",
		"Radar detector, 500(Ex)",
		"Radio communciator, 100(Pr)",
		"Radio scanner/Music player, 50(Co)",
		"Scrambler/Descrambler, 500(Ex)",
		"Smart glasses, 500(Ex)",
		"Techscanner, 1000(Vx)",
		"Virtuality Goggles, 100(Pr)",
	);
	if ($count == 1) { $this_gadget[0] = array_rand($gadgets); } else { $this_gadget = array_rand($gadgets, $count); }
	foreach ($this_gadget as $g) {
		preg_match("/(.+?), (\d+?)\((..)\)/", $gadgets[$g], $tg);
		switch($tg[1]){
			case("Agent"):
				$out .= t(10)."<dt>".$tg[1]." (".calc_cost($tg[2], $tg[3])."eb)</dt>\n";
				$out .= t(10)."<dd>Adaptive-AI Smartphone, +2 to Library Search</dd>\n";
				break;
			case("Bug detector"):
				$out .= t(10)."<dt>".$tg[1]." (".calc_cost($tg[2], $tg[3])."eb)</dt>\n";
				$out .= t(10)."<dd>2m range</dd>\n";
				break;
			case("Medscanner"):
				$out .= t(10)."<dt>".$tg[1]." (".calc_cost($tg[2], $tg[3])."eb)</dt>\n";
				$out .= t(10)."<dd>Non-stacking +2 to First Aid and Paramedic skills.</dd>\n";
				break;
			case("Netrunning hardware"):
				$hw = array("Backup drive", "DNA Lock", "Hardened Circuitry", "Insulated Wiring", "KRASH Barrier", "Range Upgrade");
				$out .= t(10)."<dt>".$hw[array_rand($hw)]." (".calc_cost($tg[2], $tg[3])."eb)</dt>\n";
				break;
			case("Netrunning hardware"):
				$hw = array("Backup drive", "DNA Lock", "Hardened Circuitry", "Insulated Wiring", "KRASH Barrier", "Range Upgrade");
				$out .= t(10)."<dt>".$hw[array_rand($hw)]." (".calc_cost($tg[2], $tg[3])."eb)</dt>\n";
				break;
			case("Netrunning scripts"):
				$out .= choose_programs(100);
				break;
			case("Netrunning programs"):
				$out .= choose_programs(500);
				break;
			case("Techscanner"):
				$out .= t(10)."<dt>".$tg[1]." (".calc_cost($tg[2], $tg[3])."eb)</dt>\n";
				$out .= t(10)."<dd>Non-stacking +2 to most 'x'-Tech skills.</dd>\n";
				break;
			default:
				$out .= t(10)."<dt>".$tg[1]." (".calc_cost($tg[2], $tg[3])."eb)</dt>\n";
				break;
		}
	}
	return $out;
}

function nm_gear() {
	$count = rand(1,10);
	$out = "";
	$gear = array(
		"Anti-smog breathing mask, 20(Ev)",
		"Level dampening ear protection, 1000(Vx)",
		"Binoculars, 50(Co)",
		"Carryall, 20(Ev)",
		"Flashlight, 20(Ev)",
		"Duct tape, 20(Ev)",
		"Inflatable bed/sleeping bag, 20(Ev)",
		"Lock pick set, 20(Ev)",
		"Handcuffs, 50(Co)",
		"Medtech bag, 100(Pr)",
		"Tent and camping equipment, 50(Co)",
		"60m of rope, 20(Ev)",
		"Techtool, 100(Pr)",
		"Personal CarePak, 20(Ev)",
		"Radiation Suit, 1000(Vx)",
		"Road Flare, 10(Ch)",
		"Grapple gun, 100(Pr)",
		"Tech Bag, 500(Ex)",
		"Shovel or Axe, 50(Co)",
		"Airhypo, 50(Co)"
	);
	if ($count == 1) { $this_gear[0] = array_rand($gear); } else { $this_gear = array_rand($gear, $count); }
	foreach ($this_gear as $g) {
		preg_match("/(.+?), (\d+?)\((..)\)/", $gear[$g], $tg);
		$money = calc_cost($tg[2], $tg[3]);
		switch($tg[1]) {
			case "Medtech bag":
				$out .= t(10)."<dt>".$tg[1]." (".$money."eb)</dt>\n";
				$out .= t(10)."<dd>Required for Medics to perform on-site medical care.</dd>\n";
				break;
			case "Tech bag":
				$out .= t(10)."<dt>".$tg[1]." (".$money."eb)</dt>\n";
				$out .= t(10)."<dd>Required for Techs to perform on-the-fly repairs, checks, etc.</dd>\n";
				break;
			default:
				$out .= t(10)."<dt>".$tg[1]." (".$money."eb)</dt>\n";
				break;
		}
	}
	return $out;
}

function nm_weapons() {
	$count = rand(1,10);
	$uniq =  rand(1,4);
	$out = "";
	$weapons = array(
		"Medium pistol, 50(Co)",
		"Heavy or Very Heavy Pistol, 100(Pr)",
		"SMG, 100(Pr)",
		"Heavy SMG, 100(Pr)",
		"Shotgun, 500(Ex)",
		"Assault Rifle, 500(Ex)",
		"Sniper Rifle, 500(Ex)",
		"Bow or Crossbow, 100(Pr)",
		"Grenade, 500(Ex)",
		"Rocket launcher, 500(Ex)",
		"Ammunition, 500(Ex)",
		"Single exotic weapon, 100(Pr)",
		"Light melee weapon, 50(Co)",
		"Medium melee weapon, 50(Co)",
		"Heavy melee weapon, 100(Pr)",
		"Very heavy melee weaopn, 100(Pr)",
		"Light Armor, 100(Pr)",
		"Medium Armor, 500(Ex)",
		"Heavy Armor, 1000(Vx)",
		"Weapon attachments, 100(Pr)",
		"Weapon attachments, 500(Ex)"
	);
	if ($count == 1) { $this_weapons[0] = array_rand($weapons); } else { $this_weapons = array_rand($weapons, $count); }
	foreach ($this_weapons as $w) {
		preg_match("/(.+?), (\d+?)\((..)\)/", $weapons[$w], $tw);
		$qual = rand(1,100);
		switch($tw[1]) {
			case("Medium pistol"):
				if ($uniq == 1) {
					if		($qual <= 10) {	$o = "<dt>Dai Lung StreetMaster Handgun (".calc_cost(20, "Ev")."eb)</dt>\n<dd>DMG: 2d6-1. Clip: 12. Jams on natural 1 attack roll.</dd>\n"; }
					elseif  ($qual <= 20) { $o = "<dt>Budget Arms 'BP-7 King' Handgun(".calc_cost(20, "Ev")."eb)</dt>\n<dd>DMG: 2d6. Clip: 12. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 50) { $o = "<dt>Federated Arms X-9mm Sidearm (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 2d6.</dd>\n"; }
					elseif	($qual <= 80) { $o = "<dt>Arasaka 'R-3 Strike' Sidearm (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 2d6.</dd>\n"; }
					elseif	($qual <= 90) { $o = "<dt>Militech 'Avenger' Pistol (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 2d6+1. Add 1 to attack roll.</dd>\n"; }
					else 				  { $o = "<dt>Arasaka 'Ashigaru' Pistol (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 2d6+1.</dd>\n"; }
				}
				else {
					$money = calc_cost($tw[2], $tw[3]);
					$o = t(10)."<dt>".$tw[1]." (".$money."eb)</dt>\n";
				}
				$out .= $o;
				break;
			case("Heavy or Very Heavy Pistol"):
				if ($uniq == 1) {
					if		($qual <= 10) {	$o = "<dt>Dai Lung Magnum Handgun (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 3d6. Clip: 8. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 20) {	$o = "<dt>Federated Arms 'Super Chief' Sidearm (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 4d6. Clip: 8. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 50) {	$o = "<dt>Mustang Arms Mk. III Handgun (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 3d6. Clip: 8.</dd>\n"; }
					elseif	($qual <= 80) {	$o = "<dt>Sternmeyer P-35 Sidearm (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 4d6. Clip: 8.</dd>\n"; }
					elseif	($qual <= 90) {	$o = "<dt>Nova 'CityHunter' Pistol (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 3d6. Clip: 8. Add 1 to attack roll.</dd>\n"; }
					else				  {	$o = "<dt>Militech 'Buster' Pistol (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 4d6-1. Clip: 8. Add 1 to attack roll.</dd>\n"; }
				}
				else {
					$money = calc_cost($tw[2], $tw[3]);
					$o = t(10)."<dt>".$tw[1]." (".$money."eb)</dt>\n";
				}
				$out .= $o;
				break;
			case("SMG"):
				if ($uniq == 1) {
					if		($qual <= 20) {	$o = "<dt>Federated Arms Tech-Assault SMG (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 2d6. Clip: 30. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 80) {	$o = "<dt>Militech 'Mini-Gat' SMG (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 2d6. Clip: 30.</dd>\n"; }
					else				  {	$o = "<dt>Arasaka Minami 10 SMG (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 2d6. Clip: 30. Add 1 to attack roll.</dd>\n"; }
				}
				else {
					$money = calc_cost($tw[2], $tw[3]);
					$o = t(10)."<dt>".$tw[1]." (".$money."eb)</dt>\n";
				}
				$out .= $o;
				break;
			case("Heavy SMG"):
				if ($uniq == 1) {
					if		($qual <= 20) {	$o = "<dt>Chadran Arms 'City Reaper' (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 3d6. Clip: 40. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 80) {	$o = "<dt>Sternmeyer SMG-21 (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 3d6. Clip: 40.</dd>\n"; }
					else				  {	$o = "<dt>Minami 'Viper' (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 3d6. Clip: 40. Add 1 to attack roll.</dd>\n"; }
				}
				else {
					$money = calc_cost($tw[2], $tw[3]);
					$o = t(10)."<dt>".$tw[1]." (".$money."eb)</dt>\n";
				}
				$out .= $o;
				break;
			case("Shotgun"):
				if ($uniq == 1) {
					if		($qual <= 20) {	$o = "<dt>GunMart 'Home Defender' (".calc_cost(100, "Co")."eb)</dt>\n<dd>DMG: 5d6. Clip: 4. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 80) {	$o = "<dt>Arasaka 'Rapid Assault' (".calc_cost(500, "Pr")."eb)</dt>\n<dd>DMG: 5d6. Clip: 4.</dd>\n"; }
					else				  {	$o = "<dt>Militech 'Bulldog' (".calc_cost(1000, "Ex")."eb)</dt>\n<dd>DMG: 5d6. Clip: 4. Add 1 to attack roll.</dd>\n"; }
				}
				else {
					$money = calc_cost($tw[2], $tw[3]);
					$o = t(10)."<dt>".$tw[1]." (".$money."eb)</dt>\n";
				}
				$out .= $o;
				break;
			case("Assault Rifle"):
				if ($uniq == 1) {
					if		($qual <= 20) {	$o = "<dt>Chadran Arms 'Jungle Reaper' (".calc_cost(100, "Co")."eb)</dt>\n<dd>DMG: 5d6. Clip: 25. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 80) {	$o = "<dt>Militech 'Ronin' (".calc_cost(500, "Pr")."eb)</dt>\n<dd>DMG: 5d6. Clip: 25.</dd>\n"; }
					else				  {	$o = "<dt>Militech 'Dragon' (".calc_cost(1000, "Ex")."eb)</dt>\n<dd>DMG: 5d6. Clip: 25. Add 1 to attack roll.</dd>\n"; }
				}
				else {
					$money = calc_cost($tw[2], $tw[3]);
					$o = t(10)."<dt>".$tw[1]." (".$money."eb)</dt>\n";
				}
				$out .= $o;
				break;
			case("Sniper Rifle"):
				if ($uniq == 1) {
					if		($qual <= 20) {	$o = "<dt>GunMart 'Snipe-Star' (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 5d6. Clip: 4. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 80) {	$o = "<dt>Nomad 'Long Rifle' (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 5d6. Clip: 4.</dd>\n"; }
					else				  {	$o = "<dt>Arasaka WSSA Sniper System (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 5d6. Clip: 4. Add 1 to attack roll.</dd>\n"; }
				}
				else {
					$money = calc_cost($tw[2], $tw[3]);
					$o = t(10)."<dt>".$tw[1]." (".$money."eb)</dt>\n";
				}
				$out .= $o;
				break;
			case("Grenade"):
				if ($uniq == 1) {
					if		($qual <= 20) {	$o = "<dt>Towa Manufacturing Type-G (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 6d6. Clip: 2. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 80) {	$o = "<dt>Militech 'Mini-Grenade' (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 6d6. Clip: 2.</dd>\n"; }
					else				  {	$o = "<dt>Tsunami Arms Type-18 (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 6d6. Clip: 2. Add 1 to attack roll.</dd>\n"; }
				}
				else {
					$money = calc_cost($tw[2], $tw[3]);
					$o = t(10)."<dt>".$tw[1]." (".$money."eb)</dt>\n";
				}
				$out .= $o;
				break;
			case("Rocket launcher"):
				if ($uniq == 1) {
					if		($qual <= 20) {	$o = "<dt>Towa Manufacturing Type-R (".calc_cost(100, "Co")."eb)</dt>\n<dd>DMG: 8d6. Clip: 1. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 80) {	$o = "<dt>Militech 'Urban' (".calc_cost(500, "Pr")."eb)</dt>\n<dd>DMG: 8d6. Clip: 1.</dd>\n"; }
					else				  {	$o = "<dt>Militech 'Hotshot' (".calc_cost(1000, "Ex")."eb)</dt>\n<dd>DMG: 8d6. Clip: 1. Add 1 to attack roll.</dd>\n"; }
				}
				else {
					$money = calc_cost($tw[2], $tw[3]);
					$o = t(10)."<dt>".$tw[1]." (".$money."eb)</dt>\n";
				}
				$out .= $o;
				break;
			case("Bow or Crossbow"):
				if ($uniq == 1) {
					if		($qual <= 10) {	$o = "<dt>GunMart 'Sherwood' (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 4d6. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 20) {	$o = "<dt>GunMart 'Hunter' (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 4d6. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 50) {	$o = "<dt>Eagletech 'Tomcat' (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 4d6.</dd>\n"; }
					elseif	($qual <= 80) {	$o = "<dt>Eagletech 'Striker' (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 4d6.</dd>\n"; }
					elseif	($qual <= 90) {	$o = "<dt>Eagletech 'Bearcat' (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 4d6. Add 1 to attack roll.</dd>\n"; }
					else				  {	$o = "<dt>Eagletech 'Scorpion' (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 4d6. Add 1 to attack roll.</dd>\n"; }
				}
				else {
					$money = calc_cost($tw[2], $tw[3]);
					$o = t(10)."<dt>".$tw[1]." (".$money."eb)</dt>\n";
				}
				$out .= $o;
				break;
			case("Ammunition"):
				$money = calc_cost($tw[2], $tw[3]);
				$o = t(10)."<dt>".$tw[1]." (".$money."eb)</dt>\n";
				$out .= $o;
				break;
			case("Single exotic weapon"):
				if		($qual <= 7)  {	$o = "<dt>Air Pistol (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 2d6 (Armor only). Clip: 12.</dd>\n"; }
				elseif	($qual <= 14) {	$o = "<dt>Battleglove (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>May hold up to three cyberarm options.</dd>\n"; }
				elseif	($qual <= 21) {	$o = "<dt>Constitution Arms Hurricane Assault Weapon (".calc_cost(5000, "Lu")."eb)</dt>\n<dd>DMG: 5d6. Clip: 4. ROF 2, Req. BODY 11 to fire.</dd>\n"; }
				elseif	($qual <= 29) {	$o = "<dt>Dartgun (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: Varies based on non-standard bow ammunition.</dd>\n"; }
				elseif	($qual <= 36) {	$o = "<dt>Flamethrower (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 5d6, +4/round burn. Clip: 4. Effectively a shotgun with incendiary ammo.</dd>\n"; }
				elseif	($qual <= 43) {	$o = "<dt>Kendachi Mono-Three (".calc_cost(5000, "Lu")."eb)</dt>\n<dd>DMG: 4d6. Ignores Armor below SP12.</dd>\n"; }
				elseif	($qual <= 50) {	$o = "<dt>Malorian Arms 3516 (".calc_cost(10000, "SL")."eb)</dt>\n<dd>DMG: 5d6. Clip: 1. Preloaded with Smartgun Link.</dd>\n"; }
				elseif	($qual <= 57) {	$o = "<dt>Microwaver (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 0. Clip: 8. DV15 Cybertech check against losing 2 pieces of cyberware.</dd>\n"; }
				elseif	($qual <= 64) {	$o = "<dt>Militech 'Cowboy' U-56 Grenade Launcher (".calc_cost(5000, "Lx")."eb)</dt>\n<dd>DMG: 6d6. Clip: 2. ROF 2, Req. BODY 11 to fire.</dd>\n"; }
				elseif	($qual <= 71) {	$o = "<dt>Rhinemetall EMG-86 Railgun (".calc_cost(5000, "Lx")."eb)</dt>\n<dd>DMG: 5d6. Clip: 4. ROF 2, Req. BODY 11 to fire.</dd>\n"; }
				elseif	($qual <= 79) {	$o = "<dt>Shrieker (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 0. Clip: 8. Potential critical damage to ear.</dd>\n"; }
				elseif	($qual <= 86) {	$o = "<dt>Stun Baton (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 2d6. Will make target unconcious at below 1HP rather than kill.</dd>\n"; }
				elseif	($qual <= 93) {	$o = "<dt>Stun Gun (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 3d6. Clip: 8. Will make target unconcious at below 1HP rather than kill.</dd>\n"; }
				else				  {	$o = "<dt>Tsunami Arms Helix (".calc_cost(5000, "Lu")."eb)</dt>\n<dd>DMG: 2d6successful hit margin. Clip: 40. Autofire only.</dd>\n"; }
				$out .= $o;
				break;
			case("Light melee weapon"):
				if ($uniq == 1) {
					if		($qual <= 50) {	$o = "<dt>Combat knife (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 1d6. ROF: 2.</dd>\n"; }
					else				  {	$o = "<dt>Tomahawk (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 1d6. ROF: 2.</dd>\n"; }
				}
				else {
					if		($qual <= 50) {	$o = "<dt>Combat knife (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 1d6. ROF: 2.</dd>\n"; }
					else				  {	$o = "<dt>Tomahawk (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 1d6. ROF: 2.</dd>\n"; }
				}
				$out .= $o;
				break;
			case("Medium melee weapon"):
				if ($uniq == 1) {
					if		($qual <= 33) {	$o = "<dt>Baseball bat (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 2d6. ROF: 2.</dd>\n"; }
					elseif	($qual <= 67) {	$o = "<dt>Crowbar (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 2d6. ROF: 2.</dd>\n"; }
					else				  {	$o = "<dt>Machete (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 2d6. ROF: 2.</dd>\n"; }
				}
				else {
					if		($qual <= 33) {	$o = "<dt>Baseball bat (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 2d6. ROF: 2.</dd>\n"; }
					elseif	($qual <= 67) {	$o = "<dt>Crowbar (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 2d6. ROF: 2.</dd>\n"; }
					else				  {	$o = "<dt>Machete (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 2d6. ROF: 2.</dd>\n"; }
				}
				$out .= $o;
				break;
			case("Heavy melee weapon"):
				if ($uniq == 1) {
					if		($qual <= 33) {	$o = "<dt>Pipe (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 3d6. ROF: 2.</dd>\n"; }
					elseif	($qual <= 67) {	$o = "<dt>Sword (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 3d6. ROF: 2.</dd>\n"; }
					else				  {	$o = "<dt>Spiked bat (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 3d6. ROF: 2.</dd>\n"; }
				}
				else {
					if		($qual <= 33) {	$o = "<dt>Pipe (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 3d6. ROF: 2.</dd>\n"; }
					elseif	($qual <= 67) {	$o = "<dt>Sword (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 3d6. ROF: 2.</dd>\n"; }
					else				  {	$o = "<dt>Spiked bat (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 3d6. ROF: 2.</dd>\n"; }
				}
				$out .= $o;
				break;
			case("Very heavy melee weapon"):
				if ($uniq == 1) {
					if		($qual <= 33) {	$o = "<dt>Naginata (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 4d6. ROF: 1.</dd>\n"; }
					elseif	($qual <= 67) {	$o = "<dt>Chainsaw (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 4d6. ROF: 1.</dd>\n"; }
					else				  {	$o = "<dt>Sledgehammer (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 4d6. ROF: 1.</dd>\n"; }
				}
				else {
					if		($qual <= 33) {	$o = "<dt>Naginata (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 4d6. ROF: 1.</dd>\n"; }
					elseif	($qual <= 67) {	$o = "<dt>Chainsaw (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 4d6. ROF: 1.</dd>\n"; }
					else				  {	$o = "<dt>Sledgehammer (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 4d6. ROF: 1.</dd>\n"; }
				}
				$out .= $o;
				break;
			case("Light armor"):
				if ($uniq == 1) {
					if		($qual <= 50) {	$o = "<dt>Leathers (".calc_cost(20, "Ev")."eb)</dt>\n<dd>4 SP.</dd>\n"; }
					else				  {	$o = "<dt>Kevlar (".calc_cost(50, "Co")."eb)</dt>\n<dd>7 SP.</dd>\n"; }
				}
				else {
					if		($qual <= 50) {	$o = "<dt>Leathers (".calc_cost(20, "Ev")."eb)</dt>\n<dd>4 SP.</dd>\n"; }
					else				  {	$o = "<dt>Kevlar (".calc_cost(50, "Co")."eb)</dt>\n<dd>7 SP.</dd>\n"; }
				}
				$out .= $o;
				break;
			case("Medium armor"):
				if ($uniq == 1) {
					if		($qual <= 33) {	$o = "<dt>Light armorjack (".calc_cost(100, "Pr")."eb)</dt>\n<dd>11 SP.</dd>\n"; }
					elseif	($qual <= 67) {	$o = "<dt>Medium armorjack (".calc_cost(100, "Pr")."eb)</dt>\n<dd>12 SP. -2 REF, DEX and MOVE.</dd>\n"; }
					else				  {	$o = "<dt>Bulletproof shield (".calc_cost(100, "Pr")."eb)</dt>\n<dd>10 HP. Requires 1 arm.</dd>\n"; }
				}
				else {
					if		($qual <= 33) {	$o = "<dt>Light armorjack (".calc_cost(100, "Pr")."eb)</dt>\n<dd>11 SP.</dd>\n"; }
					elseif	($qual <= 67) {	$o = "<dt>Medium armorjack (".calc_cost(100, "Pr")."eb)</dt>\n<dd>12 SP. -2 REF, DEX and MOVE.</dd>\n"; }
					else				  {	$o = "<dt>Bulletproof shield (".calc_cost(100, "Pr")."eb)</dt>\n<dd>10 HP. Requires 1 arm.</dd>\n"; }
				}
				$out .= $o;
				break;
			case("Heavy armor"):
				if ($uniq == 1) {
					if		($qual <= 25) {	$o = "<dt>Heavy armorjack (".calc_cost(500, "Ex")."eb)</dt>\n<dd>13 SP. -2 REF, DEX and MOVE.</dd>\n"; }
					elseif	($qual <= 50) {	$o = "<dt>Flak jacket (".calc_cost(500, "Ex")."eb)</dt>\n<dd>15 SP. -4 REF, DEX and MOVE.</dd>\n"; }
					elseif	($qual <= 75) {	$o = "<dt>Bodyweight suit (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>11 SP. Full body coverage, one piece.</dd>\n"; }
					else				  {	$o = "<dt>Metalgear (".calc_cost(5000, "Lu")."eb)</dt>\n<dd>18 HP. -4 REF, DEX and MOVE..</dd>\n"; }
				}
				else {
					if		($qual <= 25) {	$o = "<dt>Heavy armorjack (".calc_cost(500, "Ex")."eb)</dt>\n<dd>13 SP. -2 REF, DEX and MOVE.</dd>\n"; }
					elseif	($qual <= 50) {	$o = "<dt>Flak jacket (".calc_cost(500, "Ex")."eb)</dt>\n<dd>15 SP. -4 REF, DEX and MOVE.</dd>\n"; }
					elseif	($qual <= 75) {	$o = "<dt>Bodyweight suit (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>11 SP. Full body coverage, one piece.</dd>\n"; }
					else				  {	$o = "<dt>Metalgear (".calc_cost(5000, "Lu")."eb)</dt>\n<dd>18 HP. -4 REF, DEX and MOVE..</dd>\n"; }
				}
				$out .= $o;
				break;
			case("Weapon attachments"):
				if ($tw[3] == 100) {
					if		($qual <= 33) {	$o = "<dt>Bayonet (".calc_cost(100, "Pr")."eb)</dt>\n"; }
					elseif	($qual <= 67) {	$o = "<dt>Extended Magazine (".calc_cost(100, "Pr")."eb)</dt>\n"; }
					else				  {	$o = "<dt>Sniping Scope (".calc_cost(100, "Pr")."eb)</dt>\n"; }
				}
				else {
					if		($qual <= 20) { $o = "<dt>Drum Magazine (".calc_cost(500, "Ex")."eb)</dt>\n"; }
					elseif	($qual <= 40) { $o = "<dt>Grenade Launcher Underbarrel (".calc_cost(500, "Ex")."eb)</dt>\n"; }
					elseif	($qual <= 60) { $o = "<dt>Infrared Nightvision Scope (".calc_cost(500, "Ex")."eb)</dt>\n"; }
					elseif	($qual <= 80) { $o = "<dt>Shotgun Underbarrel (".calc_cost(500, "Ex")."eb)</dt>\n"; }
					else				  { $o = "<dt>Smartgun Link (".calc_cost(500, "Ex")."eb)</dt>\n"; }
				}
				$out .= $o;
				break;
		}
	}
	return $out;
}

?>