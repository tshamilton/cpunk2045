<?php
function sights() {
	$sights = array(
		'Armoured cops bundle violently reluctant vagrant into ERA-plated squad car,',
		'A bus shelter made entirely of screens',
		'Searchlights playing across the cloud cover and projecting branding',
		'A brightly lit aerocab taking off in a cloud of exhaust fumes, rainwater and trash',
		'AC vents in the sidewalk emitting a thick cloud of vapour',
		'A heavy rainwater cascade falls from damaged guttering',
		'Every underlit face on the street is concentrating solely on their phone',
		'An ancient looking geriatric lopes past strapped into a linear assistance frame',
		'A vid-blogger in full, wearable array, blatantly recording the scene',
		'The nearest building has an intermittently flickering security light',
		'Your view is blocked by a lumbering hi-vis recycling collection truck',
		'A cluster of kids vaping, LED-lit clouds from under designer pollution hoods',
		'A pair of bicycle couriers race one another through crawling traffic',
		'Gritty, chemical infused sediment sloughing off a nearby rooftop',
		'A large building-mounted flatscreen showing...',
		'Unattended roadworks, the area coned off and lit for safety for no good reason',
		'An automated noodle vending truck, jingle playing, folds open and deploys nearby',
		'A flock of scabrous-looking pigeons suddenly taking flight',
		'A busy metro platform, full to capacity with disgruntled, rain-soaked commuters',
		'An abandoned cybernetic limb lies forlornly by the kerb',
		'Animated street art that twists and turns across two adjoining walls',
		'Jittery homeless people, washing vehicle windscreens before the lights change',
		'The flashing orange lights of a fat, dirty-yellow street sweeping remote',
		'A nearby dataterm is missing it&quot;s screen and is stuffed with trash',
		'Your way is barred by a precarious heap of obsolete electronics',
		'The rainbow incandescence of oil on a large puddle of dirty water',
		'The substandard cheapcrete is pockmarked by years of corrosive rains',
		'A loaded pizza delivery drone hovering about three meters above the ground',
		'A wage-slave arguing with her phone&quot;s onboard AI, before breaking down crying',
		'An orange, multi-limbed, window cleaning remote clambers up the building facade',
		'A long, silent queue for a blocky, exhaust stained, kerb-side Euthanasia Booth™',
		'All the nearby street signs are gang-tagged over to the point of being useless',
		'Filthy red and white plastic Jersey barriers block most of the sidewalk',
		'An overpass or skywalk covered in colourful advertising animatics',
		'There are crowds of fast moving people swarming absolutely everywhere',
		'The scorched shell of a gutted vid-phone kiosk',
		'Pedestrians flooding across the nearest intersection, en masse, both ways',
		'A group of screeching street kids running along the overhead rail lines',
		'A thick pea soup fog rolling down the streets and alleyways',
		'All the street lights for this entire block just went out',
		'Rivers of rain-borne trash race along in the choked gutters',
		'A small crowd of people gawping upwards at a potential jumper',
		'A tight formation of drones races down the street, just above head height',
		'A group of sex workers on a nearby street corner, approaching cars',
		'An out-of-order ATM threatens violent action to passers by who stray too close',
		'Unnervingly, there is absolutely no-one about',
		'A pedicab operator struggling with heat exhaustion or dehydration',
		'A row of vendomats coated in layers of gang tags, going back many years',
		'A GeV taxi takes a corner hard, throwing up polluted water, trash and crud',
		'An energetic street preacher giving a digital presentation on Cybernetic Jesus&trade;',
		'The sidewalk consists of slabs of flickering screens, showing adverts'
	);

	$out = array('Sight' => $sights[array_rand($sights)]);

	switch($out['Sight']) {
		case ('A bus shelter made entirely of screens'):
		case ('An overpass or skywalk covered in colourful advertising animatics'):
		case ('The sidewalk consists of slabs of flickering screens, showing adverts'):
		case ('A large building-mounted flatscreen showing...'):		$out['Showing'] = big_screens(); break;
		case ('Searchlights playing across the cloud cover and projecting branding'): $out['Branding'] = blipverts(); break;
	}

	return $out;
}

$test_s = sights();

$uri = $_SERVER['REQUEST_URI'];
if (strpos($uri, 'php')) {
	?>
	<!doctype html>
	<html lang="en">
	<head>
		<title>CyberPunk 2045: Sights</title>
	
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
			<div class="d-flex align-items-stretch">
				<div class="card bg-light card-block mb-1">
					<div class="card-header text-center">Sights</div>
					<p class="card-text p-2"><span style="margin-left: 0px;"><?php print $test_s['Sight']; ?></span><br/></p>
				</div>
			</div>
		</div>
	
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	</body>
	</html>
<?php
}
?>
