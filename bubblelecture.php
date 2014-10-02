<?php

$test = array(4,2,1,0,3);

function bubble_sort($array) {
	$swapped = true;
	// while something was swapped lets keep looking at the array
	while($swapped) {
		// set swapped to false so that if the if statement doesn't work we don't loop again
		$swapped = false;
		// loop through the array
		for($i = 1; $i < count($array); $i++) {
			// compare 2 values
			if($array[$i] < $array[$i-1]) {
				$temp = $array[$i-1];
				$array[$i-1] = $array[$i];
				$array[$i] = $temp;
				$swapped = true;
			}
		}
	}
	return $array;
}
var_dump(bubble_sort($test));


function bubble_cool($array) {
		// loop through the whole thing
		for($i = 0; $i < count($array); $i++) {
			// loop through everything except the last value (because the last one is floated)
			for ($j = 0; $j < count($array) - 1 - $i; $j++) {
				// check if you needa swap and swap
				if($array[$j + 1] < $array[$j]) {
					$temp = $array[$j];
					$array[$j] = $array[$j+1];
					$array[$j+1] = $temp;
				}
			}
		}
	return $array;
}

var_dump(bubble_cool($test));
?>