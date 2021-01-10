<!doctype html>
<html lang="en">
	<head>
		<title>CP2045 Augmented City Generator</title>
		<!-- Required meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- My CSS links -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Play">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Raleway">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
<?php 
include('utility.php');
include('tables.php');

function contents($c) {
	global $surrounds;

	$out = "<fieldset class=\"rounded green\">\n";
	$out .= "<legend>".ucwords($c)."</legend>\n";
	foreach ($surrounds[$c] as $k => $v) {
		$out .= "<b>".$k."</b>: ".$v."<br/>\n";
	}
	$out .= "</fieldset>\n";
	return $out;
}

$surrounds = array();

$items = rand(3,5);
while ($items) {
	$site = array_rand($directions);
	if (in_array($directions[$site], $surrounds)) {
		continue;
	}
	else {
		$items -= 1;
		array_push($surrounds, $directions[$site]);
	}
}

foreach ($surrounds as $site) {
	$surrounds[$site]['Building'] = $block[array_rand($block)];
	$f = rand(1,10);
	if ($f >= 7) {
		$surrounds[$site]['Feature'] = $feature[array_rand($feature)];
		switch($surrounds[$site]['Feature']) {
			case "Causes Sickness":
				$surrounds[$site]['Malady'] = $environmental_sickness[array_rand($environmental_sickness)]; break;

			case "Unusual Smell":
				$smells = rand(1,2);
				while ($smells) {
					$surrounds[$site]['Smell_'.$smells] = $environmental_smells[array_rand($environmental_smells)]; 
				}
				break;

			case "Repurposed As...":
				$surrounds[$site]['IsNow'] = $block[array_rand($block)]; break;

			case "Legacy Infrastructure":
				$surrounds[$site]['LegacyInfrastructure'] = $legacy_infrastructure[array_rand($legacy_infrastructure)]; break;
		}
	}
}
?>
		<div class="container">
			<div class="row">
				<div class="col-4">
					<?php 
						if (isset($surrounds['north'])) {
							$no = contents('north');
							print $no;
						}
					?>
				</div>
				<div class="col-4">
					<?php 
						if (isset($surrounds['northeast'])) {
							$ne = contents('northeast');
							print $ne;
						}
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<?php 
						if (isset($surrounds['west'])) {
							$we = contents('west');
							print $we;
						}
					?>
				</div>
				<div class="col-4">
					<fieldset class="rounded red">
						<legend>Squad</legend>
						<p>Where the team are standing.</p>
					</fieldset>
				</div>
				<div class="col-4">
					<?php 
						if (isset($surrounds['east'])) {
							$ea = contents('east');
							print $ea;
						}
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<?php 
						if (isset($surrounds['southwest'])) {
							$sw = contents('southwest');
							print $sw;
						}
					?>
				</div>
				<div class="col-4">
					<?php 
						if (isset($surrounds['south'])) {
							$so = contents('south');
							print $so;
						}
					?>
				</div>
				<div class="col-4">
					<?php 
						if (isset($surrounds['southeast'])) {
							$se = contents('southeast');
							print $se;
						}
					?>
				</div>
			</div>
		</div>
		<p>
			
		<?php pretty_var($surrounds, 'd60000'); ?>
		<?php 
			$kell = array();
			$kell = health_hazard();
			pretty_var($kell, '77aadd');
		?>
		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	</body>
</html>