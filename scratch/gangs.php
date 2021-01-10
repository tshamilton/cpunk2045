<?php
function gang() {
	global $aux;

	$gang_name_a = array(
		'Cortical',		'Subway',		'Radical',		'Binary',
		'Fragile',		'Hate',			'Electric',		'Mobile',
		'Endgame',		'Bubblegum',	'Biological',	'Shaolin',
		'Chrome',		'Polymer',		'Rudeboy',		'Terminal',
		'Shadow',		'Subsonic',		'Chemical',		'Chosen',
		'Toxic',		'Steel',		'Black',		'Cannibal',
		'Panzer',		'Gun',			'Disposable',	'Iron',
		'Speedball',	'AK',			'Liquid',		'Junky',
		'Instant',		'Zone',			'Red',			'Devils',
		'Remodelled',	'Faceless',		'Vampire',		'Crosstown',
		'Blue',			'Spirit',		'Nomad',		'Hyraulic',
		'Fractal',		'Brain',		'Screaming',	'Lucid',
		'Napalm',		'Happy'
	);

	$gang_name_b = array(
		'Dogs',			'Assassins',		'Dragons',			'Prophets',
		'Machine',		'Society',			'Freaks',			'Girls',
		'Militia',		'Atrocity',			'Impulse',			'Rippers',
		'Savages',		'Riot',				'Apocalypse',		'Storm',
		'Soldiers',		'Cult',				'Loas',				'Kidz',
		'Ghosts',		'Church',			'Technicals',		'Clowns',
		'Fists',		'Sharks',			'Boys',				'Maniacs',
		'Ultimates',	'Legends',			'Killaz',			'Bullets',
		'Revolvers',	'Bosses',			'Thugs',			'Babies',
		'Army',			'Fanatics',			'Daddies',			'Chaos',
		'Hammer',		'Method',			'Clan',				'Terror',
		'State',		'Wasters',			'Shards',			'Moderns',
		'Harvest',		'Losers'
	);

	$gang_type = array(
		'Booster',
		'Chromer',
		'Combat',
		'Drug',
		'Eco',
		'Exotic',
		'Go',
		'Guardian',
		'Netrunner',
		'Nihilist',
		'Nostalgia',
		'Party',
		'Political',
		'Poser',
		'Prank',
		'Puppet',
		'Racist',
		'Taggers',
		'Holy',
		'Gender'
	);
	
	$gang_style = $gang_type[array_rand($gang_type)]."/".$gang_type[array_rand($gang_type)]." (".$gang_type[array_rand($gang_type)].")";

	$gang_colour = array(
		'Black' => '000000',
		'Gold' => 'ffcc00',
		'Chrome' => 'aaaaaa',
		'Blood' => 'cc0000',
		'Red' => 'ff0000',
		'Blue' => '0000ff',
		'Green' => '00cc00',
		'Magenta' => 'ff00ff',
		'Orange' => 'ff9900',
		'Purple' => '660099',
		'White' => 'ffffff',
		'Yellow' => 'ffff00'
	);
	
	$gcolrs = rand(1,10);
	if ($gcolrs) {
		$pik = array_rand($gang_colour);
		$col = $gang_colour[$pik];
		$gc = $pik." <span class=\"badge badge-pill\" style=\"background-color: #".$col."; border: 1px solid black;\">&nbsp;</span>";
	}
	if ($gcolrs >= 6) {
		$pik = array_rand($gang_colour);
		$col = $gang_colour[$pik];
		$gc .= "/".$pik." <span class=\"badge badge-pill\" style=\"background-color: #".$col."; border: 1px solid black;\">&nbsp;</span>";
	}
	if ($gcolrs == 10) {
		$pik = array_rand($gang_colour);
		$col = $gang_colour[$pik];
		$gc .= "/".$pik." <span class=\"badge badge-pill\" style=\"background-color: #".$col."; border: 1px solid black;\">&nbsp;</span>";
	}

	$name = rand(1,100);
	switch($name){
		case ($name <= 15): $gang_name = "The ".$gang_name_a[array_rand($gang_name_a)]; break;
		case ($name <= 85): $gang_name = $gang_name_a[array_rand($gang_name_a)]." ".$gang_name_b[array_rand($gang_name_b)]; break;
		default:			$gang_name = "The ".$gang_name_b[array_rand($gang_name_b)]; break;
	}

	$g_age = rand(1,10);
	switch($g_age) {
		case ($g_age <= 4): $gang_age = "New, ".rand(1,12)." months."; $g_age = -2; break;
		case ($g_age <= 7): $gang_age = "Young, ".rand(1,4)." years."; $g_age = -1; break;
		case ($g_age <= 9): $gang_age = "Established, ".rand(5,10)." years."; $g_age = 0; break;
		default:			$gang_age = "Old, ".rand(10,20)." years."; $g_age = 1; break;
	}

	$g_size = rand(1,10) + $g_age;
	switch($g_size) {
		case ($g_size <= 0):	$gang_size = 'Tiny, '.rand(1,5).' members.'; $g_size = -3; $g_aff = 70; break;
		case ($g_size == 1):	$gang_size = 'Small, '.rand(5,10).' members.'; $g_size = -2; $g_aff = 60; break;
		case ($g_size <= 5):	$gang_size = 'Medium, '.rand(11,25).' members.'; $g_size = -1; $g_aff = 50; break;
		case ($g_size <= 8):	$gang_size = 'Large, '.rand(26,50).' members.'; $g_size = 0; $g_aff = 40; break;
		case ($g_size <= 9):	$gang_size = 'Huge, '.rand(51,100).' members.'; $g_size = 1; $g_aff = 30; break;
		default:				$gang_size = 'Gigantic, '.rand(101,500).' members.'; $g_size = 2; $g_aff = 20; break;
	}

	$g_turf = rand(1,10) + $g_size;
	switch($g_turf) {
		case ($g_turf <= 0):	$gang_turf = 'No turf'; $g_turf = -4; break;
		case ($g_turf <= 2):	$gang_turf = 'A couple of buildings'; $g_turf = -3; break;
		case ($g_turf <= 5):	$gang_turf = 'One city block'; $g_turf = -2; break;
		case ($g_turf <= 8):	$gang_turf = '2-3 city blocks'; $g_turf = -1; break;
		case ($g_turf <= 9):	$gang_turf = '4-6 city blocks'; $g_turf = 0; break;
		default:				$gang_turf = '7-10 city blocks'; $g_turf = 1; break;
	}

	$g_inf = rand(1,10) + $g_turf;
	switch($g_inf) {
		case ($g_inf <= 3):		$gang_influence = 'No external growth, unknown outside locale'; break;
		case ($g_inf <= 4):		$gang_influence = 'Influence in nearby city/town'; break;
		case ($g_inf <= 5):		$gang_influence = 'Influence in 2-3 cities in region'; break;
		default:				$gang_influence = 'Influence in 4-6 cities nationwide'; break;
	}

	$aux['Gang - '.$gang_name] = array('GangName' => $gang_name, 'GangType' => $gang_style, 'GangAge' => $gang_age, 'GangSize' => $gang_size, 'GangTurf' => $gang_turf, 'GangInfluence' => $gang_influence, 'GangColors' => $gc);

	$linked = rand(1,100);
	if ($linked < $g_aff) {
		$g_aff = rand(1,100);
		switch($g_aff) {
			case($g_aff <= 12):		$gang_affiliation = 'a Nomad Tribe';
			case($g_aff <= 23):		$gang_affiliation = 'Maelstrom';
			case($g_aff <= 34):		$gang_affiliation = 'Voodoo Boys';
			case($g_aff <= 45):		$gang_affiliation = '6th Street';
			case($g_aff <= 56):		$gang_affiliation = 'Valentinos';
			case($g_aff <= 67):		$gang_affiliation = 'Tyger Claws';
			case($g_aff <= 78):		$gang_affiliation = 'Iron Sights';
			case($g_aff <= 89):		$gang_affiliation = 'Red Chrome Legion';
			default:				$gang_affiliation = 'Steel Dragons';
		}
	
		$aux['Gang - '.$gang_name]['GangAffiliation'] = 'Affiliated to '.$gang_affiliation;
	}
	return array('GangName' => $gang_name, 'GangType' => $gang_style);
}

$uri = $_SERVER['REQUEST_URI'];
if (strpos($uri, 'php')) {
	$test_g['Gang'] = gang();
	?>
	<!doctype html>
	<html lang="en">
	<head>
		<title>CyberPunk 2045: Gangs</title>
	
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
		<?php
			pretty_var($test_g);
			pretty_var($aux, '77aaff');	
		?>

		<h1>Gang Test Page</h1>
		<div class="container-fluid">
			<div class="d-flex align-items-stretch">
				<div class="card bg-light card-block mb-1">
					<div class="card-header text-center">Gang</div>
					<p class="card-text p-2"><span style="margin-left: 0px;"><?php print $test_g['Gang']; ?></span><br/></p>
				</div>
			</div>
		</div>
	
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	</body>
	</html>
<?php
}
?>

