<?php
$test = array(0,1,2,04,3);

function insertion_sort($array) {
	// Loop over array
	for($i = 1; $i < count($array); $i++) {
		$sortee = $array[$i];
		$j = $i;
		while($j > 0 && $sortee < $array[$j-1]) {
			$array[$j] = $array[$j-1];
			$j--;
		}
		$array[$j] = $sortee;
	}
	return $array;
}

var_dump(insertion_sort($test));

?>