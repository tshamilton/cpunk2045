<?php
include 'utility.php';
include 'senses.php';

$surrounds = array(
	'northwest' =>	array('Align' => 'left',	'Abbr' => 'NW'),
	'north' =>		array('Align' => 'center',	'Abbr' => 'N'),
	'northeast' =>	array('Align' => 'right',	'Abbr' => 'NE'),
	'east' =>		array('Align' => 'right',	'Abbr' => 'E'),
	'southeast' =>	array('Align' => 'right',	'Abbr' => 'SE'),
	'south' =>		array('Align' => 'center',	'Abbr' => 'S'),
	'southwest' =>	array('Align' => 'left',	'Abbr' => 'SW'),
	'west' =>		array('Align' => 'left',	'Abbr' => 'W')
);
$aux = array();
/*$aux['Smell'] = smells();
$aux['Sight'] = sights();
$aux['Sound'] = sounds();*/

pretty_var($aux, 'ffaaaa');
pretty_var($surrounds, '77aadd')
?>