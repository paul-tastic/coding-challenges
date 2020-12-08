<?php

// An array is a type of data structure that stores elements of the same type in a contiguous block of memory. In an array, , of size , each memory location has some unique index,  (where ), that can be referenced as  or .

// Reverse an array of integers.

// Example
// $a = [1,2,3]

// Return .
// [3,2,1]
// Function Description

// reverseArray has the following parameter(s):

// int A[n]: the array to reverse
// Returns

// int[n]: the reversed array
// Input Format

// Complete the reverseArray function below.
function reverseArray($a)
{
    $retArr = [];
    foreach ($a as $char) {
        array_unshift($retArr, $char);
    }
    return $retArr;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$stdin = fopen('php://stdin', 'r');

fscanf($stdin, "%d\n", $arr_count);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map(
    'intval',
    preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY)
);

$res = reverseArray($arr);

fwrite($fptr, implode(' ', $res) . "\n");

fclose($stdin);
fclose($fptr);
