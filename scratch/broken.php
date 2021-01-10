<?php
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
$uri = $_SERVER['REQUEST_URI'];
if (strpos($uri, 'php')) {
	$test_bl['Legacy'] = legacy_infrastructure();
	$test_bl['Broken'] = broken_tech();
	?>
	<!doctype html>
	<html lang="en">
	<head>
		<title>CyberPunk 2045: Broken Tech</title>
	
		<!-- My CSS links -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Play">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Raleway">
	
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<h1>Broken Tech and Legacy Infrastructure Test Page</h1>
		<div class="container-fluid">
			<div class="d-flex align-items-stretch">
				<div class="card bg-light card-block mb-1">
					<div class="card-header text-center">Legacy Infrastructure</div>
					<p class="card-text p-2"><span style="margin-left: 0px;"><?php print $test_bl['Legacy']; ?></span><br/></p>
				</div>
			</div>
			<div class="d-flex align-items-stretch">
				<div class="card bg-light card-block mb-1">
					<div class="card-header text-center">Broken Tech</div>
					<p class="card-text p-2"><span style="margin-left: 0px;"><?php print $test_bl['Broken']; ?></span><br/></p>
				</div>
			</div>
		</div>
	
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	</body>
	</html>
<?php
}
?>
