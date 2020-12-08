<?php

/*
Given a 6x6 2D Array, $arr:

1 1 1 0 0 0
0 1 0 0 0 0
1 1 1 0 0 0
0 0 0 0 0 0
0 0 0 0 0 0
0 0 0 0 0 0

An hourglass in $arr is a subset of values with indices falling in this pattern in $arr's graphical representation:

a b c
  d
e f g

There are 16 hourglasses in $arr. An hourglass sum is the sum of an hourglass' values. 
Calculate the hourglass sum for every hourglass in $arr, then print the maximum hourglass sum. 
The array will always be 6x6.

Example


-9 -9 -9  1 1 1 
 0 -9  0  4 3 2
-9 -9 -9  1 2 3
 0  0  8  6 6 0
 0  0  0 -2 0 0
 0  0  1  2 4 0
The  hourglass sums are:

-63, -34, -9, 12, 
-10,   0, 28, 23, 
-27, -11, -2, 10, 
  9,  17, 25, 18
The highest hourglass sum is 28 from the hourglass beginning at row 1, column 2:

0 4 3
  1
8 6 6

*/

// Complete the hourglassSum function below.
function hourglassSum($arr)
{
    $top = 0;
    for ($y = 0; $y < 4; $y++) {
        for ($x = 0; $x < 4; $x++) {
            $hg =
                $arr[$y][$x] +
                $arr[$y][$x + 1] +
                $arr[$y][$x + 2] +
                $arr[$y + 1][$x + 1] +
                $arr[$y + 2][$x] +
                $arr[$y + 2][$x + 1] +
                $arr[$y + 2][$x + 2];
            if ($hg > $top) {
                $top = $hg;
            }
        }
    }
    return $top;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$stdin = fopen('php://stdin', 'r');

$arr == [];

for ($i = 0; $i < 6; $i++) {
    fscanf($stdin, "%[^\n]", $arr_temp);
    $arr[] = array_map(
        'intval',
        preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY)
    );
}

$result = hourglassSum($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
