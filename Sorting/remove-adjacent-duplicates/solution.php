<?php

// Create a function that takes a sequence of either strings or numbers, removes the surrounding duplicates and returns an array of items without any items with the same value next to each other and preserves the original order of items.


function uniquify($str) {
    $count = strlen($str);
    $answer[0] = $str[0];
    for ($i=1;$i<$count;$i++) {
        if ($str[$i] !== $str[$i-1]) {
            array_push($answer, $str[$i]);
        }
    }
    return $answer;
}

$answer = uniquify('AABBCCDEEFF'); // change this to whatever
print_r($answer);

// Array
// (
//     [0] => A
//     [1] => B
//     [2] => C
//     [3] => D
//     [4] => E
//     [5] => F
// )