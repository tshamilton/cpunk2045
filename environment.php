<?php
function broken_tech() {
	$actual_break = array(
		'Actual physical damage',
		'Screen broken',
		'Screen broken by gunfire',
		'Overzealous defensive software',
		'Harbours malicious virus',
		'Being assessed by sysadmin',
		'Layers of legacy programming',
		'Randomly goes into standby mode',
		'Badly formatted AR plug-in',
		'Installing software upgrade',
		'Hacker currently querying system',
		'ROM overloaded by surplus apps',
		'Recently reset to factory defaults',
		'Inquisitive low-grade AI assistant',
		'Requires biometric verification',
		'Auto-downloads to linked device',
		'Net connection keeps dropping out',
		'Incompatible operating system',
		'Pop-up pandemic',
		'Software conflicts, glitchy',
		'Processor overclocked',
		'Active ‘vigilance suite&quot; warns user',
		'Tendency to stall or hang',
		'Malware sifting for linked devices',
		'Missing system tools/utilities',
		'Errors with user interface display',
		'Physically damaged, or faulty',
		'Non-standard reprogramming',
		'D6 software subroutines triggered',
		'Logs recently tampered with',
		'Overheating (heat sink failing)',
		'Heavily encrypted for device type',
		'Constant security warnings',
		'Non-intuitive user interface',
		'Hogging the local bandwidth',
		'Prone to system crashes',
		'Uses badly patched legacy code',
		'File sharing denied',
		'Configured for periodic back-up',
		'Insufficient internal battery life',
		'Reveals a scheduled exploit (short)',
		'&quot;Access Denied&quot; system file errors',
		'Reboots the system at random',
		'Requires admin password',
		'Can only handle minimal processes',
		'User interface in foreign language',
		'Discomforting feedback',
		'3rd party updaters need unchecking',
		'Menu options it shouldn&quot;t have',
		'In the process of being stolen',
		'Running slow, searching for updates',
		'Feeds log and data to manufacturer',
		'Tagged and monitored by rogue AI',
		'Nothing, just dead',
		'Nothing, just dead',
		'Nothing, just dead'
	);

	return $actual_break[array_rand($actual_break)];
}

function health_hazard() {
	$symptom_list = array(
		'Difficulty Breathing',
		'Lesions/Redness/Lumps',
		'Immunodeficiency',
		'Lethargy/Weight Loss',
		'Flaky/Spots/Blisters',
		'Hair Loss/Discolouration',
		'Unpleasant Odour',
		'Vomiting/Diarrhea',
		'Silvery Grey Emissions',
		'Red Watery Eyes/Painful'
	);

	$source_list = array(
		'Bad Air/Pollutants/Smoke',
		'Elevated UV levels/Toxic Rain',
		'Pollutants/Waste',
		'Vitamin Deficiency/Junkfood',
		'Pollutants/Chemical Soup',
		'Pollutants/Waste',
		'Pollutants/Industrial Run-off',
		'Junkfood/Pollutants/Toxins',
		'Radiation',
		'Bad Air/Pollutants/Toxins'
	);

	$potential_list = array(
		'Emphysema',
		'Skin Cancer',
		'Toxic Shock',
		'Malnutrition',
		'Messed Up Skin',
		'Alopecia',
		'BO/Body Funk',
		'Gastric Catastrophe',
		'Rad/Chem Burns',
		'Burning Eyes/Nasal/Mouth'
	);

	return "<b>Health Hazard</b>:<br/><p style='margin-left: 15px;'><b>Symptoms</b> - ".$symptom_list[array_rand($symptom_list)]."<br/><b>Source</b> - ".$source_list[array_rand($source_list)]."<br/><b>Poten'l Dmg</b> - ".$potential_list[array_rand($potential_list)]."</p>";
}

function legacy_infrastructure() {
	$leg_infra = array(
		'Decommissioned subway tunnel, accessible from building, and vice versa',
		'Off site telecoms junction box, once served the local neighborhood',
		'Condemned slum quarantined with concrete seal, or biohazard containment zone',
		'Interconnected basements and foundation voids, poorly secured',
		'Sealed sub-basement parking for previous building, with still functioning elevator',
		'Forgotten floor following remodelling work, accessible through crawl space',
		'Disused loading or maintenance bay, with hidden goods elevator',
		'Undocumented Cold War bomb shelter or bunker network',
		'Exposed air venting system, leading to moth-balled sub-basement laboratory',
		'Unused utilities still feed into buildings, accessible from empty sewerage system'
	);

	return $leg_infra[array_rand($leg_infra)];
}

?>