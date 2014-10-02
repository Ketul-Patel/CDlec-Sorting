<?php

// start with a blank sorted subarray and add to it with the min value from the remaining portion of the array

$test = array(4,2,1,0,3);

function selection_sort($array) {
	// helps us build the subarray
	for($i = 0; $i < count($array); $i++) {
		$min_pos = $i;
		// loop over the remaining array
		for($j = $i; $j < count($array); $i++) {
			// update the minimum position
			if($array[$j] < $array[$min_pos]) {
				$min_pos = $j;
			}
		}
		// Swap to the subarray
		$temp = $array[$i];
		$array[$i] = $array[$min_pos];
		$array[$min_pos] = $temp;
	}
	return $array;
}

var_dump(selection_sort($test));
?>