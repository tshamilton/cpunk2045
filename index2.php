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
			<hr>
			<div class="col-3" id="Scenario">
				<h2>Action</h2>
<?php
	makeCard($mission['A-Plot'], 'mission');
	if (key_exists('B-Plot', $mission)) {
		makeCard($mission['B-Plot'], 'mission');
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
pretty_var($surrounds, '77aadd');*/
pretty_var('MISSION', 'cccccc');
pretty_var($mission, 'ccffcc');
?>
</body>
</html>
