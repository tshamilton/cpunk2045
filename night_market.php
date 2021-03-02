<?php
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
		"Biomonitor, 100(Pr)",
		"Chemskin, 100(Pr)",
		"EMP Threading, 100(Pr)",
		"Light tattoo, 100(Pr)",
		"Shift tacts, 100(Pr)",
		"Skinwatch, 100(Pr)",
		"Techhair, 100(Pr)",
		"Generic chic, 50(Ev)",
		"Leisurewear, 100(Pr)",
		"Gang colours, 50(Co)",
	);
	if ($count == 1) { $this_fash[0] = array_rand($fashion); } else { $this_fash = array_rand($fashion, $count); }
	foreach ($this_fash as $f) {
		preg_match("/(.+?), (\d+?)\((..)\)/", $fashion[$f], $tf);
		$money = calc_cost($tf[2], $tf[3]);
		$out .= t(10)."<dt>".$tf[1]." (".$money."eb)</dt>\n";
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
		"Grenade or Rocket launcher, 500(Ex)",
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
		if ($uniq) {
			$qual = rand(1,100);
			switch($tw[1]){
				case("Medium pistol"):
					if		($qual <= 10) {	$out .= "<dt>Dai Lung StreetMaster Handgun (".calc_cost(20, "Ev")."eb)</dt>\n<dd>DMG: 2d6-1. Clip: 12. Jams on natural 1 attack roll.</dd>\n"; }
					elseif  ($qual <= 20) { $out .= "<dt>Budget Arms 'BP-7 King' Handgun(".calc_cost(20, "Ev")."eb)</dt>\n<dd>DMG: 2d6. Clip: 12. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 50) { $out .= "<dt>Federated Arms X-9mm Sidearm (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 2d6.</dd>\n"; }
					elseif	($qual <= 80) { $out .= "<dt>Arasaka 'R-3 Strike' Sidearm (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 2d6.</dd>\n"; }
					elseif	($qual <= 90) { $out .= "<dt>Militech 'Avenger' Pistol (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 2d6+1. Add 1 to attack roll.</dd>\n"; }
					else 				  { $out .= "<dt>Arasaka 'Ashigaru' Pistol (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 2d6+1.</dd>\n"; }
					break;
				case("Heavy or Very Heavy Pistol"):
					if		($qual <= 10) {	$out .= "<dt>Dai Lung Magnum Handgun (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 3d6. Clip: 8. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 20) {	$out .= "<dt>Federated Arms 'Super Chief' Sidearm (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 4d6. Clip: 8. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 50) {	$out .= "<dt>Mustang Arms Mk. III Handgun (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 3d6. Clip: 8.</dd>\n"; }
					elseif	($qual <= 80) {	$out .= "<dt>Sternmeyer P-35 Sidearm (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 4d6. Clip: 8.</dd>\n"; }
					elseif	($qual <= 90) {	$out .= "<dt>Nova 'CityHunter' Pistol (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 3d6. Clip: 8. Add 1 to attack roll.</dd>\n"; }
					else				  {	$out .= "<dt>Militech 'Buster' Pistol (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 4d6-1. Clip: 8. Add 1 to attack roll.</dd>\n"; }
					break;
				case("SMG"):
					if		($qual <= 20) {	$out .= "<dt>Federated Arms Tech-Assault SMG (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 2d6. Clip: 30. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 80) {	$out .= "<dt>Militech 'Mini-Gat' SMG (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 2d6. Clip: 30.</dd>\n"; }
					else				  {	$out .= "<dt>Arasaka Minami 10 SMG (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 2d6. Clip: 30. Add 1 to attack roll.</dd>\n"; }
					break;
				case("Heavy SMG"):
					if		($qual <= 20) {	$out .= "<dt>Chadran Arms 'City Reaper' (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 3d6. Clip: 40. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 80) {	$out .= "<dt>Sternmeyer SMG-21 (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 3d6. Clip: 40.</dd>\n"; }
					else				  {	$out .= "<dt>Minami 'Viper' (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 3d6. Clip: 40. Add 1 to attack roll.</dd>\n"; }
					break;
				case("Shotgun"):
					if		($qual <= 20) {	$out .= "<dt>GunMart 'Home Defender' (".calc_cost(100, "Co")."eb)</dt>\n<dd>DMG: 5d6. Clip: 4. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 80) {	$out .= "<dt>Arasaka 'Rapid Assault' (".calc_cost(500, "Pr")."eb)</dt>\n<dd>DMG: 5d6. Clip: 4.</dd>\n"; }
					else				  {	$out .= "<dt>Militech 'Bulldog' (".calc_cost(1000, "Ex")."eb)</dt>\n<dd>DMG: 5d6. Clip: 4. Add 1 to attack roll.</dd>\n"; }
					break;
				case("Assault Rifle"):
					if		($qual <= 20) {	$out .= "<dt>Chadran Arms 'Jungle Reaper' (".calc_cost(100, "Co")."eb)</dt>\n<dd>DMG: 5d6. Clip: 25. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 80) {	$out .= "<dt>Militech 'Ronin' (".calc_cost(500, "Pr")."eb)</dt>\n<dd>DMG: 5d6. Clip: 25.</dd>\n"; }
					else				  {	$out .= "<dt>Militech 'Dragon' (".calc_cost(1000, "Ex")."eb)</dt>\n<dd>DMG: 5d6. Clip: 25. Add 1 to attack roll.</dd>\n"; }
					break;
				case("Sniper Rifle"):
					if		($qual <= 20) {	$out .= "<dt>GunMart 'Snipe-Star' (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 5d6. Clip: 4. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 80) {	$out .= "<dt>Nomad 'Long Rifle' (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 5d6. Clip: 4.</dd>\n"; }
					else				  {	$out .= "<dt>Arasaka WSSA Sniper System (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 5d6. Clip: 4. Add 1 to attack roll.</dd>\n"; }
					break;
				case("Grenade Launcher"):
					if		($qual <= 20) {	$out .= "<dt>Towa Manufacturing Type-G (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 6d6. Clip: 2. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 80) {	$out .= "<dt>Militech 'Mini-Grenade' (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 6d6. Clip: 2.</dd>\n"; }
					else				  {	$out .= "<dt>Tsunami Arms Type-18 (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 6d6. Clip: 2. Add 1 to attack roll.</dd>\n"; }
					break;
				case("Rocket Launcher"):
					if		($qual <= 20) {	$out .= "<dt>Towa Manufacturing Type-R (".calc_cost(100, "Co")."eb)</dt>\n<dd>DMG: 8d6. Clip: 1. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 80) {	$out .= "<dt>Militech 'Urban' (".calc_cost(500, "Pr")."eb)</dt>\n<dd>DMG: 8d6. Clip: 1.</dd>\n"; }
					else				  {	$out .= "<dt>Militech 'Hotshot' (".calc_cost(1000, "Ex")."eb)</dt>\n<dd>DMG: 8d6. Clip: 1. Add 1 to attack roll.</dd>\n"; }
					break;
				case("Bow or Crossbow"):
					if		($qual <= 10) {	$out .= "<dt>GunMart 'Sherwood' (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 4d6. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 20) {	$out .= "<dt>GunMart 'Hunter' (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 4d6. Jams on natural 1 attack roll.</dd>\n"; }
					elseif	($qual <= 50) {	$out .= "<dt>Eagletech 'Tomcat' (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 4d6.</dd>\n"; }
					elseif	($qual <= 80) {	$out .= "<dt>Eagletech 'Striker' (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 4d6.</dd>\n"; }
					elseif	($qual <= 90) {	$out .= "<dt>Eagletech 'Bearcat' (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 4d6. Add 1 to attack roll.</dd>\n"; }
					else				  {	$out .= "<dt>Eagletech 'Scorpion' (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 4d6. Add 1 to attack roll.</dd>\n"; }
					break;
				case("Single exotic weapon"):
					if		($qual <= 7)  {	$out .= "<dt>Air Pistol (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 2d6 (Armor only). Clip: 12.</dd>\n"; }
					elseif	($qual <= 14) {	$out .= "<dt>Battleglove (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>May hold up to three cyberarm options.</dd>\n"; }
					elseif	($qual <= 21) {	$out .= "<dt>Constitution Arms Hurricane Assault Weapon (".calc_cost(5000, "Lu")."eb)</dt>\n<dd>DMG: 5d6. Clip: 4. ROF 2, Req. BODY 11 to fire.</dd>\n"; }
					elseif	($qual <= 29) {	$out .= "<dt>Dartgun (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: Varies based on non-standard bow ammunition.</dd>\n"; }
					elseif	($qual <= 36) {	$out .= "<dt>Flamethrower (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 5d6, +4/round burn. Clip: 4. Effectively a shotgun with incendiary ammo.</dd>\n"; }
					elseif	($qual <= 43) {	$out .= "<dt>Kendachi Mono-Three (".calc_cost(5000, "Lu")."eb)</dt>\n<dd>DMG: 4d6. Ignores Armor below SP12.</dd>\n"; }
					elseif	($qual <= 50) {	$out .= "<dt>Malorian Arms 3516 (".calc_cost(10000, "SL")."eb)</dt>\n<dd>DMG: 5d6. Clip: 1. Preloaded with Smartgun Link.</dd>\n"; }
					elseif	($qual <= 57) {	$out .= "<dt>Microwaver (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 0. Clip: 8. DV15 Cybertech check against losing 2 pieces of cyberware.</dd>\n"; }
					elseif	($qual <= 64) {	$out .= "<dt>Militech 'Cowboy' U-56 Grenade Launcher (".calc_cost(5000, "Lx")."eb)</dt>\n<dd>DMG: 6d6. Clip: 2. ROF 2, Req. BODY 11 to fire.</dd>\n"; }
					elseif	($qual <= 71) {	$out .= "<dt>Rhinemetall EMG-86 Railgun (".calc_cost(5000, "Lx")."eb)</dt>\n<dd>DMG: 5d6. Clip: 4. ROF 2, Req. BODY 11 to fire.</dd>\n"; }
					elseif	($qual <= 79) {	$out .= "<dt>Shrieker (".calc_cost(500, "Ex")."eb)</dt>\n<dd>DMG: 0. Clip: 8. Potential critical damage to ear.</dd>\n"; }
					elseif	($qual <= 86) {	$out .= "<dt>Stun Baton (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 2d6. Will make target unconcious at below 1HP rather than kill.</dd>\n"; }
					elseif	($qual <= 93) {	$out .= "<dt>Stun Gun (".calc_cost(100, "Pr")."eb)</dt>\n<dd>DMG: 3d6. Clip: 8. Will make target unconcious at below 1HP rather than kill.</dd>\n"; }
					else				  {	$out .= "<dt>Tsunami Arms Helix (".calc_cost(5000, "Lu")."eb)</dt>\n<dd>DMG: 2d6*successful hit margin. Clip: 40. Autofire only.</dd>\n"; }
				case("Light melee weapon"):
					if		($qual <= 50) {	$out .= "<dt>Combat knife (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 1d6. ROF: 2.</dd>\n"; }
					else				  {	$out .= "<dt>Tomahawk (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 1d6. ROF: 2.</dd>\n"; }
				case("Medium melee weapon"):
					if		($qual <= 33) {	$out .= "<dt>Baseball bat (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 2d6. ROF: 2.</dd>\n"; }
					elseif	($qual <= 67) {	$out .= "<dt>Crowbar (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 2d6. ROF: 2.</dd>\n"; }
					else				  {	$out .= "<dt>Machete (".calc_cost(50, "Co")."eb)</dt>\n<dd>DMG: 2d6. ROF: 2.</dd>\n"; }
				case("Heavy melee weapon"):
					if		($qual <= 33) {	$out .= "<dt>Pipe (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 3d6. ROF: 2.</dd>\n"; }
					elseif	($qual <= 67) {	$out .= "<dt>Sword (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 3d6. ROF: 2.</dd>\n"; }
					else				  {	$out .= "<dt>Spiked bat (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 3d6. ROF: 2.</dd>\n"; }
				case("Very heavy melee weapon"):
					if		($qual <= 33) {	$out .= "<dt>Naginata (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 4d6. ROF: 1.</dd>\n"; }
					elseif	($qual <= 67) {	$out .= "<dt>Chainsaw (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 4d6. ROF: 1.</dd>\n"; }
					else				  {	$out .= "<dt>Sledgehammer (".calc_cost(100, "Ex")."eb)</dt>\n<dd>DMG: 4d6. ROF: 1.</dd>\n"; }
				case("Light armor"):
					if		($qual <= 50) {	$out .= "<dt>Leathers (".calc_cost(20, "Ev")."eb)</dt>\n<dd>4 SP.</dd>\n"; }
					else				  {	$out .= "<dt>Kevlar (".calc_cost(50, "Co")."eb)</dt>\n<dd>7 SP.</dd>\n"; }
				case("Medium armor"):
					if		($qual <= 33) {	$out .= "<dt>Light armorjack (".calc_cost(100, "Pr")."eb)</dt>\n<dd>11 SP.</dd>\n"; }
					elseif	($qual <= 67) {	$out .= "<dt>Medium armorjack (".calc_cost(100, "Pr")."eb)</dt>\n<dd>12 SP. -2 REF, DEX and MOVE.</dd>\n"; }
					else				  {	$out .= "<dt>Bulletproof shield (".calc_cost(100, "Pr")."eb)</dt>\n<dd>10 HP. Requires 1 arm.</dd>\n"; }
				case("Heavy armor"):
					if		($qual <= 25) {	$out .= "<dt>Heavy armorjack (".calc_cost(500, "Ex")."eb)</dt>\n<dd>13 SP. -2 REF, DEX and MOVE.</dd>\n"; }
					elseif	($qual <= 50) {	$out .= "<dt>Flak jacket (".calc_cost(500, "Ex")."eb)</dt>\n<dd>15 SP. -4 REF, DEX and MOVE.</dd>\n"; }
					elseif	($qual <= 75) {	$out .= "<dt>Bodyweight suit (".calc_cost(1000, "Vx")."eb)</dt>\n<dd>11 SP. Full body coverage, one piece.</dd>\n"; }
					else				  {	$out .= "<dt>Metalgear (".calc_cost(5000, "Lu")."eb)</dt>\n<dd>18 HP. -4 REF, DEX and MOVE..</dd>\n"; }
				default:
					$money = calc_cost($tw[2], $tw[3]);
					$out .= t(10)."<dt>".$tw[1]." (".$money."eb)</dt>\n";
					break;
			}
		}
		else {
			$money = calc_cost($tw[2], $tw[3]);
			$out .= t(10)."<dt>".$tw[1]." (".$money."eb)</dt>\n";
		}
	}
	return $out;
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
		"Any, 1000(Vx)"
	);
	if ($count == 1) { $this_cyber[0] = array_rand($cyber); } else { $this_cyber = array_rand($cyber, $count); }
	foreach ($this_cyber as $c) {
		preg_match("/(.+?), (\d+?)\((..)\)/", $cyber[$c], $tc);
		$money = calc_cost($tc[2], $tc[3]);
		$out .= t(10)."<dt>".$tc[1]." (".$money."eb)</dt>\n";
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

	/*pretty_var($choice);*/
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
?>