<?php
	function makeCard($part, $title, $style='light', $name = 1, $tab = 3) {
		$content = "";
		$opener		=	t($tab)."<div class='d-flex align-items-stretch'>\n";
		$opener		.=	t($tab+1)."<div class='card bg-".$style." card-block mb-1'>\n";
		$closer		=	t($tab+1)."</div>\n".t($tab)."</div>\n";
		$content	.=	t($tab+2)."<div class='card-header text-center'>".$title."</div>\n";
		foreach($part as $k => $v) {
			$content	.=	t($tab+2)."<b>".$k."</b><span style='margin-left: 15px;'>".$v."</span>\n";
		}
		return $opener.$content.$closer;

	}

	include('utility.php');
	include('senses.php');
	include('broken.php');
	include('av.php');
	include('random_event.php');
	include('gangs.php');

	$aux = Array();
	$aux['Sound'] = sounds();
	$aux['Sight'] = sights();
	$aux['Smells'] = smells();

	$action = Array();

	/*pretty_var($aux, '77aaff');*/
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
			<div class="col-2" id="Scenario">
				<h2>Action</h2>
			</div>
			<div class="col-8" id="Surroundings">
				<h2>Surroundings</h2>
				<div class="container">
					<div class="row m-1">
						<div class="col-4 d-flex align-items-stretch">
							<div class="card bg-secondary card-block">
								<div class="card-header text-left">Rubble - NW</div>
								<p class="card-text p-2"><span style="margin-left: 0px;"><b>Space</b>: Waste land, just rough terrain</span><br/><span style="margin-left: 0px;"><b>Activity</b>: Corp work crew demolishing wreckage</span><br/></p>
							</div>
						</div>
						<div class="col-4 d-flex align-items-stretch">
							<div class="card bg-success card-block">
								<div class="card-header text-center">Garage - N</div>
								<p class="card-text p-2"><span style="margin-left: 0px;"><b>Floors</b>: 1</span><br/><span style="margin-left: 0px;"><b>Feature</b>: Wind Tunnel</span><br/></p>
							</div>
						</div>
						<div class="col-4 d-flex align-items-stretch">
							<div class="card bg-success card-block">
								<div class="card-header text-end">Hotel - NE</div>
								<p class="card-text p-2"><span style="margin-left: 0px;"><b>Floors</b>: 1</span><br/><span style="margin-left: 0px;"><b>Feature</b>: Accumulated Trash heaps</span><br/></p>
							</div>
						</div>
					</div>
					<div class="row m-1">
						<div class="col-4 d-flex align-items-stretch">
							<div class="card bg-success card-block">
								<div class="card-header text-left">Multi-level Car Park - W</div>
								<p class="card-text p-2"><span style="margin-left: 0px;"><b>Floors</b>: 1</span><br/><span style="margin-left: 0px;"><b>Feature</b>: Popular With Particular Subculture</span><br/></p>
							</div>
						</div>
						<div class="col-4 d-flex align-items-stretch">
							<div class="card bg-danger text-white card-block">
								<div class="card-header text-center">Squad</div>
								<p class="card-text p-2">The players are standing here. All locations are relative to this position.</p>
							</div>
						</div>
						<div class="col-4 d-flex align-items-stretch">
							<div class="card bg-success card-block">
								<div class="card-header text-end">Art Dealer/Gallery - E</div>
								<p class="card-text p-2"><span style="margin-left: 0px;"><b>Floors</b>: 1</span><br/><span style="margin-left: 0px;"><b>Feature</b>: Extensive Drone Docks</span><br/></p>
							</div>
						</div>
					</div>
					<div class="row m-1">
						<div class="col-4 d-flex align-items-stretch">
							<div class="card bg-secondary card-block">
								<div class="card-header text-left">Rubble - SW</div>
								<p class="card-text p-2"><span style="margin-left: 0px;"><b>Space</b>: Waste land, lingering smell</span><br/><b>Smell</b><br/><span style="margin-left: 15px;"><b>Smell 2</b>: Cordite</span><br/><span style="margin-left: 15px;"><b>Smell 1</b>: Wine</span><br/></p>
							</div>
						</div>
						<div class="col-4 d-flex align-items-stretch">
							<div class="card bg-secondary card-block">
								<div class="card-header text-center">Rubble - S</div>
								<p class="card-text p-2"><span style="margin-left: 0px;"><b>Space</b>: Half-collapsed building</span><br/></p>
							</div>
						</div>
						<div class="col-4 d-flex align-items-stretch">
							<div class="card bg-success card-block">
								<div class="card-header text-end">Nightclub - SE</div>
								<p class="card-text p-2"><span style="margin-left: 0px;"><b>Floors</b>: 2</span><br/></p>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<h2>Random Events</h2>
				<div class='container-fluid'>
					<div class='row justify-content-center'>
						<div class='card m-1 bg-primary card-block'>
							<div class='card-header text-center'>Corporate Districts - Day</div>
							<p class='card-text p-2'><?php print "<b>".key($events['Corporate Districts - Day'])."</b>: ".current($events['Corporate Districts - Day'])."<br/>"; ?></p>
							<div class='card-header text-center'>Corporate Districts - Evening</div>
							<p class='card-text p-2'><?php print "<b>".key($events['Corporate Districts - Evening'])."</b>: ".current($events['Corporate Districts - Evening'])."<br/>"; ?></p>
							<div class='card-header text-center'>Corporate Districts - Night</div>
							<p class='card-text p-2'><?php print "<b>".key($events['Corporate Districts - Night'])."</b>: ".current($events['Corporate Districts - Night'])."<br/>"; ?></p>
						</div>
						<div class='card m-1 bg-info card-block'>
							<div class='card-header text-center'>Suburban Areas - Day</div>
							<p class='card-text p-2'><?php print "<b>".key($events['Median Areas - Day'])."</b>: ".current($events['Median Areas - Day'])."<br/>"; ?></p>
							<div class='card-header text-center'>Suburban Areas - Evening</div>
							<p class='card-text p-2'><?php print "<b>".key($events['Median Areas - Evening'])."</b>: ".current($events['Median Areas - Evening'])."<br/>"; ?></p>
							<div class='card-header text-center'>Suburban Areas - Night</div>
							<p class='card-text p-2'><?php print "<b>".key($events['Median Areas - Night'])."</b>: ".current($events['Median Areas - Night'])."<br/>"; ?></p>
						</div>
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
			<div class="col-2" id="Auxiliary">
				<h2>Environment</h2>
<?php
	foreach($aux as $title => $deets) {
		$output = makeCard($deets, $title, 'light', 1, 4);
		print $output;
	}
?>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>