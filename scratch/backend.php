<?php
include('utility.php');

$surrounds = array(
	'northwest' =>	array('Align' => 'left',	'Abbr' => 'NW'),
	'north' =>		array('Align' => 'center',	'Abbr' => 'N'),
	'northeast' =>	array('Align' => 'right',	'Abbr' => 'NE'),
	'east' =>		array('Align' => 'right',	'Abbr' => 'E'),
	'southeast' =>	array('Align' => 'right',	'Abbr' => 'SE'),
	'south' =>		array('Align' => 'center',	'Abbr' => 'N'),
	'southwest' =>	array('Align' => 'left',	'Abbr' => 'SW'),
	'west' =>		array('Align' => 'left',	'Abbr' => 'W')
);

$b = rand(3,5);
while($b) {
	print $b."<br/>\n";
}

/*pretty_var($surrounds, 'd60000');*/
?>