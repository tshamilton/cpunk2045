<!doctype html>
<html lang="en">
	<head>
		<title>CyberPunk 2045: Augmented City Generator</title>
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

function draw_box ($su, $n = "X") {
	global $surrounds;
	global $aux;

	if ($su != 'aux') {
		if (isset($surrounds[$su]['Building'])) {
			print "<div class=\"card bg-success\">\n";
			print t(6)."<div class=\"card-block\">\n";
			print t(7)."<div class=\"card-header text-".$surrounds[$su]['Align']."\">".$surrounds[$su]['Building']['Building']." - ".$surrounds[$su]['Abbr']."</div>\n";
			print t(7)."<p class=\"card-text p-2\">\n";
			show_block($surrounds[$su]['Building']);
			print t(7)."</p>\n";
			print t(6)."</div>\n";
			print t(5)."</div>\n";
		}
		elseif (isset($surrounds[$su]['Open'])) {
			print "<div class=\"card bg-secondary\">\n";
			print t(6)."<div class=\"card-block\">\n";
			print t(7)."<div class=\"card-header text-".$surrounds[$su]['Align']."\">Rubble - ".$surrounds[$su]['Abbr']."</div>\n";
			print t(7)."<p class=\"card-text p-2\">\n";
			show_block($surrounds[$su]['Open']);
			print t(7)."</p>\n";
			print t(6)."</div>\n";
			print t(5)."</div>\n";
		}
	}
	else {
		foreach ($aux as $k => $v) {
			print t(4)."<div class=\"col-2 d-flex align-items-stretch\">\n";
			print t(5)."<div class=\"card bg-light\">\n";
			print t(6)."<div class=\"card-block\">\n";
			print t(7)."<div class=\"card-header text-center\">".$k."</div>\n";
			print t(7)."<p class=\"card-text p-2\">\n";
			show_block($aux[$k]);
			print t(7)."</p>\n";
			print t(6)."</div>\n";
			print t(5)."</div>\n";
			print t(4)."</div>\n";
		}
	}
}

function show_block($block, $ind = 0, $tab = 8) {
	foreach ($block as $k => $v) {
		if ($k == "Feature" && $v == "Police Presence") {
			continue;
		}
		elseif ($k != "Building") {
			if (is_array($v)) {
				print t($tab)."<b>".$k."</b><br/>";
				show_block($v, $ind+15, $tab+1);
			}
			else {
				print t($tab)."<span style=\"margin-left: ".$ind."px;\"><b>".$k."</b>: ".$v."</span><br/>\n";
			}
		}
	}
}

include('utility.php');
include('tables.php');
include('random_event.php');

?>
		<h1>Augmented Reality: Urban Environment Generator</h1>
		<?php
			/*pretty_var($surrounds, 'ccffcc');
			pretty_var($aux, 'ffffcc');*/
		?>
		<div class="container">
			<div class="row m-1">
				<div class="col-4 d-flex align-items-stretch">
					<?php draw_box("northwest", "NW"); ?>
				</div>
				<div class="col-4 d-flex align-items-stretch">
					<?php draw_box("north", "N"); ?>
				</div>
				<div class="col-4 d-flex align-items-stretch">
					<?php draw_box("northeast", "NE"); ?>
				</div>
			</div>
			<div class="row m-2">
				<div class="col-4 d-flex align-items-stretch">
					<?php draw_box("west", "W"); ?>
				</div>
				<div class="col-4 d-flex align-items-stretch">
					<div class="card bg-danger text-white">
						<div class="card-block">
							<div class="card-header text-center">Squad</div>
							<p class="card-text p-2">The players are standing here. All locations are relative to this position.</p>
						</div>
					</div>
				</div>
				<div class="col-4 d-flex align-items-stretch">
					<?php draw_box("east", "E"); ?>
				</div>
			</div>
			<div class="row m-1">
				<div class="col-4 d-flex align-items-stretch">
					<?php draw_box("southwest", "SW"); ?>
				</div>
				<div class="col-4 d-flex align-items-stretch">
					<?php draw_box("south", "S"); ?>
				</div>
				<div class="col-4 d-flex align-items-stretch">
					<?php draw_box("southeast", "SE"); ?>
				</div>
			</div>
		</div>
		<div class='container-fluid' style="margin-top: 4.0rem;">
			<div class='row m-1 justify-content-center'>
<?php
	draw_box('aux', 'X');
?>
			</div>
		</div>
		<div class='container-fluid' style="margin-top: 4.0rem;">
			<div class='row m-1 justify-content-center'>
<?php
			print t(5)."<div class=\"card bg-primary\">\n";
				print t(6)."<div class=\"card-block\">\n";
					print t(7)."<div class=\"card-header text-center\">Corporate Districts - Day</div>\n";
					print t(7)."<p class=\"card-text p-2\">\n";
					show_block($events['Corporate Districts - Day'], 0, 4);
					print t(7)."</p>\n";
					print t(7)."<div class=\"card-header text-center\">Corporate Districts - Evening</div>\n";
					print t(7)."<p class=\"card-text p-2\">\n";
					show_block($events['Corporate Districts - Evening'], 0, 4);
					print t(7)."</p>\n";
					print t(7)."<div class=\"card-header text-center\">Corporate Districts - Night</div>\n";
					print t(7)."<p class=\"card-text p-2\">\n";
					show_block($events['Corporate Districts - Night'], 0, 4);
					print t(7)."</p>\n";
				print t(6)."</div>\n";
			print t(5)."</div>\n";
			print t(5)."<div class=\"card bg-info\">\n";
				print t(6)."<div class=\"card-block\">\n";
					print t(7)."<div class=\"card-header text-center\">Median Areas - Day</div>\n";
					print t(7)."<p class=\"card-text p-2\">\n";
					show_block($events['Median Areas - Day'], 0, 4);
					print t(7)."</p>\n";
					print t(7)."<div class=\"card-header text-center\">Median Areas - Evening</div>\n";
					print t(7)."<p class=\"card-text p-2\">\n";
					show_block($events['Median Areas - Evening'], 0, 4);
					print t(7)."</p>\n";
					print t(7)."<div class=\"card-header text-center\">Median Areas - Night</div>\n";
					print t(7)."<p class=\"card-text p-2\">\n";
					show_block($events['Median Areas - Night'], 0, 4);
					print t(7)."</p>\n";
				print t(6)."</div>\n";
			print t(5)."</div>\n";
			print t(5)."<div class=\"card bg-danger\">\n";
				print t(6)."<div class=\"card-block\">\n";
					print t(7)."<div class=\"card-header text-center\">Combat Zones - Day</div>\n";
					print t(7)."<p class=\"card-text p-2\">\n";
					show_block($events['Combat Zones - Day'], 0, 4);
					print t(7)."</p>\n";
					print t(7)."<div class=\"card-header text-center\">Combat Zones - Evening</div>\n";
					print t(7)."<p class=\"card-text p-2\">\n";
					show_block($events['Combat Zones - Evening'], 0, 4);
					print t(7)."</p>\n";
					print t(7)."<div class=\"card-header text-center\">Combat Zones - Night</div>\n";
					print t(7)."<p class=\"card-text p-2\">\n";
					show_block($events['Combat Zones - Night'], 0, 4);
					print t(7)."</p>\n";
				print t(6)."</div>\n";
			print t(5)."</div>\n";
?>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	</body>
</html>