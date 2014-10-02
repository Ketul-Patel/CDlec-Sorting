<?php
$test = array(5, 7, 13, 1, 2, 6);

// Selection Sort
// Continuously add the minimum value from the array to a sorted subarray

// Step 1 loop through the array
	// Step 2 Initialize the min variable to keep track of the min value's position
	// Step 3 loop through the rest of the array (starting at the current position of the outer loop)
		// Step 4 find the min value (from the rest of the array inside the inner loop)
	// Step 5 Swap the min with the value next to the sorted subset (the position of the outer loop)
// Step 6 return the array


// Insertion Sort
// Grow a sorted subarray by comparing the next value in the array to the subarray to see where it fits in

// Step 1 loop through the array
	// Step 2 Initialize the "sortee" variable (the value to be sorted)
	// Step 3 while the position is not less than 0 and the value of the sortee is less than the value to the left of it, move the value over and go to the next value
	// Step 4 after the while loop breaks, insert sortee
// Step 5 return the array


// Bubble Sort
// Iterate over pairs and swap if the right is less than the left. Keep iterating until nothing is swapped

// Step 1 create a boolean to keep track of whether something was swapped on the last pass
// Step 2 while something was swapped on the last pass keep looping
	// Set the bool to false before you do anything so that if something is swapped you can set it to true before looping again
	// loop over the array
		// compare each value to the next value and swap if right is less than left (also set bool to true if swapping)
// return the array
?>