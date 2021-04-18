<?php

function makeCard ($in, $type) {
	if ($type == 'surrounds' && (strpos($in['Title'], 'Rubble') !== False)) {
		print t(7)."<div class='card bg-rubble h-100 card-block'>\n";
		print t(8)."<div class='card-header text-center'>".$in['Title']."</div>\n";
		print t(8)."<p class='card-text p-2'><span style='padding-left: 0 px'>".$in['Text']."</span></p>\n";
		print t(7)."</div>\n";
	}
	else {
		print t(7)."<div class='card bg-building h-100 card-block'>\n";
		print t(8)."<div class='card-header text-center'>".$in['Title']."</div>\n";
		print t(8)."<p class='card-text p-2'><span style='padding-left: 0 px'>".$in['Text']."</span></p>\n";
		print t(7)."</div>\n";
	}
}

function process_text($text) {
	if (preg_match("/(\d+)QQ(\d+)/", $text, $limits)) { 
		$cn = rand($limits[1], $limits[2]);
		$text = preg_replace('/'.$limits[0].'/', rand($limits[1], $limits[2]), $text);
	}
	return $text;
}

include 'utility.php';
include 'config.php';
include 'audio_visual.php';
include 'environment.php';
include 'night_market.php';
include 'plot_and_cast.php';
include 'senses_and_places.php';

$string = file_get_contents('content.json');
$C = json_decode($string, true);
$E = array();
$E["Environments"] = Array();
$E["Events"] = Array();
$E["Markets"] = Array();
$E["Mission"] = Array();
$E["Surrounds"] = Array();
$E["Ticker"] = Array();

$E["Ticker"]["Title"] = newsTicker_Owner();
$E["Ticker"]["BodyCountLotto"] = newsTicker_BodyCountLotto();
$E["Ticker"]["Headlines"] = newsTicker_Headlines();

$E["Environment"]["Sight"] = sights();
$E["Environment"]["Sound"] = sounds();
$E["Environment"]["Smell"] = smells();

$E["Surrounds"]["NW"] = array();	$E["Surrounds"]["N"] = array();		$E["Surrounds"]["NE"] = array();
$E["Surrounds"][ "W"] = array();										$E["Surrounds"][ "E"] = array();
$E["Surrounds"]["SW"] = array();	$E["Surrounds"]["S"] = array();		$E["Surrounds"]["SE"] = array();
surroundings();

$E["Mission"] = missionSelect();

$E["Events"] = random_events();

$E["Market"]= night_market();
?>

<!doctype html>
<html lang="en">
<head>
	<!-- My Font links -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Play">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Raleway">

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="css/style.css" rel="stylesheet">
	<title>Cyberpunk Red Environment Generator</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row"><!-- Title -->
			<div class="col-8 offset-2"><h1>Cyberpunk Red Scenario and Setting Generator</h1></div>
		</div>
		<div class="row"><!-- News Ticker -->
			<div class="col-6 offset-3">
				<div class="bg" id="NewsTicker">
					<div class="breaking-news-title text-center pb-2"><?php print $E["Ticker"]["Title"]; ?></div>
					<marquee class="breaking-news pt-1" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><?php print $E["Ticker"]["Headlines"]; ?></marquee>
				</div>
			</div>
		</div>
		<div class="row"><!-- Surrounds -->
			<h2 style="color: #ff0000;">Surroundings <a href="#" data-bs-toggle="modal" data-bs-target="#surroundings"><i class="material-icons">info_outline</i></a></h2>
			<div class="col-10 offset-1" id="Surroundings">
				<div class="row">
					<div class="col-4 pb-2"><?php makeCard($E["Surrounds"]["NW"], 'surrounds'); ?></div>
					<div class="col-4 pb-2"><?php makeCard($E["Surrounds"]["N"],  'surrounds'); ?></div>
					<div class="col-4 pb-2"><?php makeCard($E["Surrounds"]["NE"], 'surrounds'); ?></div>
				</div>
				<div class="row">
					<div class="col-4 pb-2"><?php makeCard($E["Surrounds"]["W"],  'surrounds'); ?></div>
					<div class="col-4 pb-2 align-items-stretch">
						<div class='card bg-danger h-100 text-white card-block'>
							<div class='card-header text-center'>Squad Here</div>
							<p class='card-text p-2'><span style='padding-left: 0 px'>The players are standing here.<br/>All locations are relative to this position.</span></p>
						</div>
					</div>
					<div class="col-4 pb-2"><?php makeCard($E["Surrounds"]["E"],  'surrounds'); ?></div>
				</div>
				<div class="row">
					<div class="col-4 pb-2"><?php makeCard($E["Surrounds"]["SW"], 'surrounds'); ?></div>
					<div class="col-4 pb-2"><?php makeCard($E["Surrounds"]["S"],  'surrounds'); ?></div>
					<div class="col-4 pb-2"><?php makeCard($E["Surrounds"]["SE"], 'surrounds'); ?></div>
				</div>
			</div>
		</div>
		<div class="row">
			<hr>
			<div class="col-3" id="Scenario"><!-- Scenario -->
				<div class="row justify-content-center">
					<h2 style="color: #deb887;">Action <a href="#" data-bs-toggle="modal" data-bs-target="#action"><i class="material-icons">info_outline</i></a></h2>
					<div class="row justify-content-center">
						<div class='card m-1 bg-mission card-block'>
							<?php
							ksort($E['Mission']);
							/*pretty_var($E['Mission'], '666666');*/
							foreach ($E["Mission"] as $name => $mission) {
								print t(7)."<div class='card-header text-center'>".$mission['Title']."</div>";
								print t(7)."<p class='card-text p-2'>".$mission["Text"]."</span></p>";
								/*pretty_var($mission, 'cccccc');*/
								foreach ($mission as $k => $v) {
									if ($k != "Title" && $k != "Text") {
										print t(7)."<div class='card-header text-center'>".$k."</div>";
										print t(7)."<p class='card-text p-2'>".$v."</span></p>";
									}
								}
							}
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-9" id="Events"><!-- Random Events -->
				<div class="row justify-content-center">
					<div class="col-9">
						<div class="row justify-content-center">
							<h2 style="color: #0dcaf0;">Random Events <a href="#" data-bs-toggle="modal" data-bs-target="#environment"><i class="material-icons">info_outline</i></a></h2>
							<div class="col-4">
								<div class='card m-1 bg-primary card-block'>
									<div class='card-header text-center'>Corporate Districts - Day</div>
									<div class='fw-bold card-text px-1 pt-2'><?php print key($E["Events"]['Corporate Districts - Day']);?></div>
									<div class='text-end card-text px-1 pb-2'><?php print current($E["Events"]['Corporate Districts - Day']);?></div>
									<div class='card-header text-center'>Corporate Districts - Evening</div>
									<div class='fw-bold card-text px-1 pt-2'><?php print key($E["Events"]['Corporate Districts - Evening']);?></div>
									<div class='text-end card-text px-1 pb-2'><?php print current($E["Events"]['Corporate Districts - Evening']);?></div>
									<div class='card-header text-center'>Corporate Districts - Night</div>
									<div class='fw-bold card-text px-1 pt-2'><?php print key($E["Events"]['Corporate Districts - Night']);?></div>
									<div class='text-end card-text px-1 pb-2'><?php print current($E["Events"]['Corporate Districts - Night']);?></div>
								</div>
							</div>
							<div class='col-4'>
								<div class='card m-1 bg-info card-block'>
									<div class='card-header text-center'>Suburban Areas - Day</div>
									<div class='fw-bold card-text px-1 pt-2'><?php print key($E["Events"]['Median Areas - Day']);?></div>
									<div class='text-end card-text px-1 pb-2'><?php print current($E["Events"]['Median Areas - Day']);?></div>
									<div class='card-header text-center'>Suburban Areas - Evening</div>
									<div class='fw-bold card-text px-1 pt-2'><?php print key($E["Events"]['Median Areas - Evening']);?></div>
									<div class='text-end card-text px-1 pb-2'><?php print current($E["Events"]['Median Areas - Evening']);?></div>
									<div class='card-header text-center'>Suburban Areas - Night</div>
									<div class='fw-bold card-text px-1 pt-2'><?php print key($E["Events"]['Median Areas - Night']);?></div>
									<div class='text-end card-text px-1 pb-2'><?php print current($E["Events"]['Median Areas - Night']);?></div>
								</div>
							</div>
							<div class='col-4'>
								<div class='card m-1 bg-danger card-block'>
									<div class='card-header text-center'>Combat Zones - Day</div>
									<div class='fw-bold card-text px-1 pt-2'><?php print key($E["Events"]['Combat Zones - Day']);?></div>
									<div class='text-end card-text px-1 pb-2'><?php print current($E["Events"]['Combat Zones - Day']);?></div>
									<div class='card-header text-center'>Combat Zones - Evening</div>
									<div class='fw-bold card-text px-1 pt-2'><?php print key($E["Events"]['Combat Zones - Evening']);?></div>
									<div class='text-end card-text px-1 pb-2'><?php print current($E["Events"]['Combat Zones - Evening']);?></div>
									<div class='card-header text-center'>Combat Zones - Night</div>
									<div class='fw-bold card-text px-1 pt-2'><?php print key($E["Events"]['Combat Zones - Night']);?></div>
									<div class='text-end card-text px-1 pb-2'><?php print current($E["Events"]['Combat Zones - Night']);?></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-3 justify-content-center" id="RandomEvents"><!-- Environment -->
						<h2 style="color: #ffffff;">Environment <a href="#" data-bs-toggle="modal" data-bs-target="#environment"><i class="material-icons">info_outline</i></a></h2>
						<div class='card bg-light card-block'>
							<div class='card-header text-center'>Smell</div>
							<p class='card-text p-2'><span style='padding-left: 0 px'><?php print $E["Environment"]["Smell"]; ?></span></p>
							<div class='card-header text-center'>Sound</div>
							<p class='card-text p-2'><span style='padding-left: 0 px'><?php print $E["Environment"]["Sound"]; ?></span></p>
							<div class='card-header text-center'>Sight</div>
							<p class='card-text p-2'><span style='padding-left: 0 px'><?php print $E["Environment"]["Sight"]; ?></span></p>
							<?php
								foreach(array_keys($E["Environment"]) as $k) {
									if ($k != "Sight" && $k != "Sound" && $k != "Smell") {
										print t(7)."<div class='card-header text-center'>".$k."</div>\n";
										print t(7)."<p class='card-text p-2'><span style='padding-left: 0 px'>".$E["Environment"][$k]."</span></p>\n";
									}
								}
							?>
						</div>
					</div>
				</div>
				<div class="row">
					<hr style="margin-top: 10px;">
					<div class="col-12" id="Market"> <!-- Night Market -->
						<h2 style="color: #00dd00;">Night Market <a href="#" data-bs-toggle="modal" data-bs-target="#environment"><i class="material-icons">info_outline</i></a></h2>
						<div class="row">
							<?php foreach ($E["Market"] as $n) { print $n; } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<p><a href="#" data-bs-toggle="modal" data-bs-target="#acknowledgements">Sources <i class="material-icons">info_outline</i></a></p>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<hr>

	<!-- Modal Help Files -->
	<div class="modal fade" id="surroundings" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="surroundings">Help > About > Surroundings</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h5>'Where are we?'</h5>
					<p>This is a tool for game referees to generate a suggested environment for players to be surrounded by when they ask what's around a particular spot.</p>
					<p>Each page load generates a new environment and each triggering selection (eg. gangs, shops, etc.) creates more details where necessary. You will find them in the sections below.</p>
					<p>If components of the environment are unsuitable (really? A brothel next to a private school? Really, random number generator, is that a good idea?) You can do two things.<br/><ol><li><b>Hit F5</b> - Generate yourself, a merry new neighbourhood. May your rolls be right.</li><li><b>Ignore it</b> - If you're happy just filling in the inconvenient spaces, swing batter swing!<br/>Remember: Everything here is just a suggestion. It's all your call.</li></ol></p>
					<p>The sense descriptions in the bottom-right are to be treated similarly and more intended as general scene-setting.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="acknowledgements" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="acknowledgements">Help > About > Acknowledgements</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h5>'Where did this come from?'</h5>
					<p>I've borrowed to varying degrees from the following sources.</p>
					<dl>
						<dt>Scenario Generator</dt>
						<dd><i>Cyberpunk Random Scenario Generator</i> by Antony Johnson.</dd>
						<dt>Random Encounters</dt>
						<dd><i>Cyberpunk Random Encounter Generator</i> by Cyberook</dd>
						<dt>Night Market</dt>
						<dd><i>Cyberpunk Red rulebook</i> by R. Talsorian</dd>
						<dt>Locations</dt>
						<dd><i>Chance of a Lifetime - Collected '20...' lists</i> of /u/almondbreath of /r/cyberpunkred</dd>
						<dd><i>30 Sider Rollers: Cyber City Drop In Spots vol. 1-3</i> by Fishwife Games</dd>
						<dd><i>The Book Of Random Tables - Cyberpunk vol. 2</i> by DiceGeeks</dd>
						<dt>NPCs</dt>
						<dd><i>Chance of a Lifetime - Collected '20...' lists</i> of /u/almondbreath of /r/cyberpunkred</dd>
						<dd><i>Cyberpunk 2077 video game</i> by CD Projekt Red, <i>Cyberpunk Red rulebook</i> by R. Talsorian, <i>Shadowrun sourcebooks</i> by FASA.</dd>
						<dt>Gang Generator</dt>
						<dd><i>Gangs in Cyberpunk 2020</i> by Gary Astleford</dd>
						<dt>Various company names</dt>
						<dd>Remember Me, Watch Dogs, Grand Theft Auto, Cyberpunk Red, 2020 and Shadowrun sourcebooks, Max Headroom, William Gibson's Sprawl Trilogy</dd>
						<dt>Environment Generator</dt>
						<dd><i>Augmented Reality</i> and <i>Augmented Reality PLUS</i> by Geist Hack Games.</dd>
						<dt>Additional Video Feeds</dt>
						<dd><i>100 Vid Feeds</i> by Fishwife Games</dd>
					</dl>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="randomevents" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="randomevents">Help > About > Random Events</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h5>'What's happening around us?'</h5>
					<p>This section is a smattering of suggestions to bring the area to life. Just slip it into the description, the situations can escalate if you and the players want it that way. I'll leave that to you.</p>
					<p>Of course, there's nothing stopping you from grabbing something from outside your current region and time, but the tables are aligned to their specific contexts. For example, the corporate space has more police patrols in the day and the combat zone has more chaos at night.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="action" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="action">Help > About > Action</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h5>'What are we doing?'</h5>
					<p>The Action panel has a randomly generated mission suggestion, if you're looking for such a thing.</p>
					<p>Stats aren't included; pre-generated personalities are only included sometimes. The rule in 'Surroundings' applies here, only use what tickles your fancy, ignore or re-roll everything else!</p>
					<p>A 'Meanwhile, ' indicates that there are actually <b>TWO</b> plots going on. How you and the plyers handle that is up to you.</p> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="environment" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="environment">Help > About > Environment</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h5>'What's that smell?'</h5>
					<p>Like the surroundings and random events, this is another opportunity to add colour to the scene. Smells and sights that aren't directly related to the mission-at-hand.<br/>This column also contains the additional bits and pieces that crop up elsewhere. Gang details for that hangout southwest of the players, things like that.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="market" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="environment">Help > About > Night Market</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Every fixer in the city either knows about the Night Markets, or runs them. A a regularly run grey-to-black market that sells everything from cheap knock-off Zemiel wristwatches to prototype cyberwear, just don't ask where it came from.</p>
					<p>Listed here are some highlights from the stalls. Due to the nature of the sellers, it's unlikely that you'll see these sales again at the next market.</p>
					<p>NB: Want something really special? You want the Midnight Markets, now <i>those</i> are hard to get access to...</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>