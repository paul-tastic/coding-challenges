<?php

// doing this one on my own initiative, since I am studying data structures and algorithms for fun.

// Challenge: create a bubble sort to sort an array of numbers


function bubbleSort($array) {
    $counter = count($array);
    while ($counter >= 0) {
        // iterate through array and compare values of neighbors
        for ($i=0;$i<$counter-1;$i++) {
            if ($array[$i] > $array[$i+1]) {
                // swap position
                [$array[$i], $array[$i+1]] = [$array[$i+1], $array[$i]];
            }
        }
        $counter--;
    }
    return $array;
}

// test cases:
$inputArr = [3,2,5,7,1,9]; // expected sort output: 1,2,3,5,7,9
echo "before bubble sort: ".implode(',',$inputArr)."<br>";
$inputArr = bubbleSort($inputArr);
echo "after bubble sort: ".implode(',',$inputArr);
