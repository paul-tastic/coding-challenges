<?php
/*

A left rotation operation on an array of size n shifts each of the array's elements 1 unit to the left. 
Given an integer, d, rotate the array that many steps left and return the result.

Example
d=2
arr=[1,2,3,4,5]
after 2 rotations, arr = [3,4,5,1,2]

<?php

/*
 * Complete the 'rotateLeft' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER d
 *  2. INTEGER_ARRAY arr
 */

function rotateLeft($d, $arr)
{
    $x = 0;

    $backArray = [];
    $frontArray = [];
    // loop through $arr, put in one of 2 arrays, join arrays
    foreach ($arr as $a) {
        if ($x < $d) {
            array_push($backArray, $a);
        } else {
            array_push($frontArray, $a);
        }
        $x++;
    }
    return array_merge($frontArray, $backArray);
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$d = intval($first_multiple_input[1]);

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map(
    'intval',
    preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY)
);

$result = rotateLeft($d, $arr);

fwrite($fptr, implode(' ', $result) . "\n");

fclose($fptr);
