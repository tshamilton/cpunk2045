<?php
include 'utility.php';
include 'view.php';
include 'config.php';
include 'senses.php';
include 'surrounds.php';
include 'av.php';
include 'people.php';
include 'random_event.php';

$surrounds = array(
	'northwest' =>	array('Align' => 'start',	'Abbr' => 'NW'),
	'north' 	=>	array('Align' => 'center',	'Abbr' => 'N'),
	'northeast' =>	array('Align' => 'end',		'Abbr' => 'NE'),
	'east' 		=>	array('Align' => 'end',		'Abbr' => 'E'),
	'southeast' =>	array('Align' => 'end',		'Abbr' => 'SE'),
	'south' 	=>	array('Align' => 'center',	'Abbr' => 'S'),
	'southwest' =>	array('Align' => 'start',	'Abbr' => 'SW'),
	'west' 		=>	array('Align' => 'start',	'Abbr' => 'W'),
);

$aux = array();
$aux['Smell'] = smells();
$aux['Sight'] = sights();
$aux['Sound'] = sounds();

$mission = array();
$mission['A-Plot'] = makeMission();
surroundings();
?>
<!doctype html>
<html lang="en">
<head>
	<title>CyberPunk 2045: Augmented City Generator</title>

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
	<div class="container-fluid">
		<div class="row">
			<div class="col-2">&nbsp;</div>
			<div class="col-8"><h1>Cyberpunk Scenario and Setting Generator</h1></div>
			<div class="col-2">&nbsp;</div>
		</div>
		<div class="row">
			<div class="col-10 offset-1" id="Surroundings">
				<h2>Surroundings</h2>
				<div class="container-fluid">
					<div class="row m-1">
						<div class="col-4 align-items-stretch">
							<?php makeCard($surrounds['northwest'], 'surrounds'); ?>
						</div>
						<div class="col-4 align-items-stretch">
							<?php makeCard($surrounds['north'], 'surrounds'); ?>
						</div>
						<div class="col-4 align-items-stretch">
							<?php makeCard($surrounds['northeast'], 'surrounds'); ?>
						</div>
					</div>
					<div class="row m-1">
						<div class="col-4 align-items-stretch">
							<?php makeCard($surrounds['west'], 'surrounds'); ?>
						</div>
						<div class="col-4 align-items-stretch">
							<?php makeCard($cfg, 'squad'); /* At the moment, makeCard expects an K/V array, so I give it $cfg though it's not required. */  ?> 
						</div>
						<div class="col-4 align-items-stretch">
							<?php makeCard($surrounds['east'], 'surrounds'); ?>
						</div>
					</div>
					<div class="row m-1">
						<div class="col-4 align-items-stretch">
							<?php makeCard($surrounds['southwest'], 'surrounds'); ?>
						</div>
						<div class="col-4 align-items-stretch">
							<?php makeCard($surrounds['south'], 'surrounds'); ?>
						</div>
						<div class="col-4 align-items-stretch">
							<?php makeCard($surrounds['southeast'], 'surrounds'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<hr>
			<div class="col-3" id="Scenario">
				<h2>Action</h2>
<?php
	makeCard($mission['A-Plot'], 'mission');
	if (key_exists('B-Plot', $mission)) {
		makeCard($mission['B-Plot'], 'mission');
	}
	foreach ($mission as $m => $v) {
		if (!(strpos($m, 'Plot'))) {
			makeCard($mission[$m], 'mission');
		}
	}

?>
			</div>
			<div class="col-6" id="Events">
				<h2>Random Events</h2>
				<div class='container'>
					<div class='row justify-content-center'>
						<div class="col-4">
							<div class='card m-1 bg-primary card-block'>
								<div class='card-header text-center'>Corporate Districts - Day</div>
								<p class='card-text p-2'><?php print "<b>".key($events['Corporate Districts - Day'])."</b>: ".current($events['Corporate Districts - Day'])."<br/>"; ?></p>
								<div class='card-header text-center'>Corporate Districts - Evening</div>
								<p class='card-text p-2'><?php print "<b>".key($events['Corporate Districts - Evening'])."</b>: ".current($events['Corporate Districts - Evening'])."<br/>"; ?></p>
								<div class='card-header text-center'>Corporate Districts - Night</div>
								<p class='card-text p-2'><?php print "<b>".key($events['Corporate Districts - Night'])."</b>: ".current($events['Corporate Districts - Night'])."<br/>"; ?></p>
							</div>
						</div>
						<div class='col-4'>
							<div class='card m-1 bg-info card-block'>
								<div class='card-header text-center'>Suburban Areas - Day</div>
								<p class='card-text p-2'><?php print "<b>".key($events['Median Areas - Day'])."</b>: ".current($events['Median Areas - Day'])."<br/>"; ?></p>
								<div class='card-header text-center'>Suburban Areas - Evening</div>
								<p class='card-text p-2'><?php print "<b>".key($events['Median Areas - Evening'])."</b>: ".current($events['Median Areas - Evening'])."<br/>"; ?></p>
								<div class='card-header text-center'>Suburban Areas - Night</div>
								<p class='card-text p-2'><?php print "<b>".key($events['Median Areas - Night'])."</b>: ".current($events['Median Areas - Night'])."<br/>"; ?></p>
							</div>
						</div>
						<div class='col-4'>
							<div class='card m-1 bg-danger card-block'>
								<div class='card-header text-center'>Combat Zones - Day</div>
								<p class='card-text p-2'><?php print "<b>".key($events['Combat Zones - Day'])."</b>: ".current($events['Combat Zones - Day'])."<br/>"; ?></p>
								<div class='card-header text-center'>Combat Zones - Evening</div>
								<p class='card-text p-2'><?php print "<b>".key($events['Combat Zones - Evening'])."</b>: ".current($events['Combat Zones - Evening'])."<br/>"; ?></p>
								<div class='card-header text-center'>Combat Zones - Night</div>
								<p class='card-text p-2'><?php print "<b>".key($events['Combat Zones - Night'])."</b>: ".current($events['Combat Zones - Night'])."<br/>"; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-3" id="Auxiliary">
				<h2>Environment</h2>
<?php
	foreach ($aux as $a) {
		makeCard($a, 'aux');
	}
?>
			</div>
		</div>
	</div>
	<hr>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<?php
/*pretty_var('CONFIG', 'cccccc');
pretty_var($cfg, 'cccccc');*/
pretty_var('AUX', 'cccccc');
pretty_var($aux, 'ffaaaa');
/*pretty_var('SURROUNDS', 'cccccc');
pretty_var($surrounds, '77aadd');
pretty_var('MISSION', 'cccccc');
pretty_var($mission, 'ccffcc');*/
?>
</body>
</html>
