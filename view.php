<?php
function makeCard($in, $type, $name = '') {
	global $cfg;
	if ($type == 'surrounds' && array_key_exists('Building', $in)) {
		$style = 'building h-100';
		$name = $in['Building']['Building']." - ".$in['Abbr'];
		$talign = $in['Align'];
		$content = $in['Building'];
	}
	elseif ($type == 'surrounds' && array_key_exists('Open', $in)) {
		$style = 'rubble h-100';
		$name = 'Rubble - '.$in['Abbr'];
		$talign = $in['Align'];
		$content = $in['Open'];
	}
	elseif ($type == 'squad') {
		$style = 'danger h-100 text-white';
		$name = 'Squad Here';
		$talign = 'center';
		$content = $cfg['SQUAD_MSG'];
	}
	elseif ($type == 'aux') {
		$style = 'light';
		$talign = 'center';
		if (array_key_exists('Title', $in)) {
			$name = $in['Title'];
			$content = $in['Text'];
		}
		else {
			$name = key($in);
			$content = $in[key($in)];
		}
	}
	elseif ($type == 'mission') {
		$style = 'mission';
		$talign = 'center';
		$name = $in['Title'];
		$content = $in['Text'];
	}

	print "<div class='card bg-".$style." card-block'>\n";
	print t(1)."<div class='card-header text-".$talign."'>".$name."</div>\n";
	print t(1)."<p class='card-text p-2'>".makeText($content)."</p>\n";
	print "</div>\n";
}

function makeText($in, $indent = 0) {
	if (gettype($in) == "string") {
		print "<span style='padding-left: ".$indent." px'>".$in."</span>\n";
	}
	elseif (gettype($in) == "array") {
		if (count($in) == 1) {
			print "<span style='padding-left: ".$indent." px'>".$in[key($in)]."</span>\n";
		}
		else {
			foreach($in as $k => $v) {
				if (is_array($v)) {
					makeText($v, ($indent + 15));
				}
				if (is_string($v) || is_int($v)) {
					print "<span style='padding-left: ".$indent." px'><b>".$k.":</b> ".$v."</span>\n";
				}
			}
		}
	}
}
?>

