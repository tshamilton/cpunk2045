<?php
include "utility.php";

$gang_colour = array(
	'Black' => '000000',
	'Gold' => 'ffcc00',
	'Chrome' => 'aaaaaa',
	'Blood' => 'cc0000',
	'Red' => 'ff0000',
	'Blue' => '0000ff',
	'Green' => 'cc0000',
	'Magenta' => 'f00ff',
	'Orange' => 'ff9900',
	'Purple' => '660099',
	'White' => 'ffffff',
	'Yellow' => 'ffff00'
);

$gcolrs = rand(1,10);

if ($gcolrs) {
	$pik = array_rand($gang_colour);
	$col = $gang_colour[array_rand($gang_colour)];
	$out = $pik." <span class=\"badge badge-pill\" style=\"background-color: ".$col."> </span>";
}
if ($gcolrs >= 6) {
	$pik = array_rand($gang_colour);
	$col = $gang_colour[array_rand($gang_colour)];
	$out .= "/".$pik." <span class=\"badge badge-pill\" style=\"background-color: ".$col."> </span>";
}
if ($gcolrs == 10) {
	$pik = array_rand($gang_colour);
	$col = $gang_colour[array_rand($gang_colour)];
	$out .= "/".$pik." <span class=\"badge badge-pill\" style=\"background-color: ".$col."> </span>";
}
print($gcolrs);
pretty_var($out);

?>