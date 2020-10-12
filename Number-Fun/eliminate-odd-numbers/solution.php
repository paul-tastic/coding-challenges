<?php

/* 
Create a function that takes an array of numbers and returns only the even values.

Examples
noOdds([1, 2, 3, 4, 5, 6, 7, 8]) ➞ [2, 4, 6, 8]

noOdds([43, 65, 23, 89, 53, 9, 6]) ➞ [6]

noOdds([718, 991, 449, 644, 380, 440]) ➞ [718, 644, 380, 440]
Notes
Return all even numbers in the order they were given.
All test cases contain valid numbers ranging from 1 to 3000.
*/

function noOdds($input) {
    $result = array();
    foreach($input as $digit) {
        if ($digit % 2 == 0) {
            array_push($result, $digit);
        }
    }
    return $result;
}

print_r(noOdds([718, 991, 449, 644, 380, 440]));