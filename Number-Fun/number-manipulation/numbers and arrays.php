<?php

// was asked to code this for a job interview/screening under a time constraint. Truthfully, I bombed, but it was bothering me, so I went back through on my own time to solve it. In the end, I could have done a better job on the original test, but I'm glad I circled back around regardless.

// Given a number (n) create an array of numbers from 1 -> n, add digits of each number together, count how many duplicates of the sum there are, return the maximum value representing the number of duplicate sums (s).

// for example: n = 10
// array created: (1,2,3,4,5,6,7,8,9,10)
// sum of the values: (1,2,3,4,5,6,7,8,9,1)
// there is one duplicate sum: (1) and there are 2 values of it. It is the only duplicate, so return s = 1

// **** example 2

// n = 12
// array (1,2,3,4,5,6,7,8,9,10,11,12)
// sum of the values: (1,2,3,4,5,6,7,8,9,1,2,3)
// there are 3 duplicates (1,2,3,1,2,3), they each have 2 instances of it, s = 6

// It took me a lot of the alloted time just to understand the question (ha!) and then my coding went sideways with the reulting time crunch, yada yada... anyway, here is my solution:

function gonculate($n) {
  $origArray = range(1,$n);
  foreach ($origArray as $num => $value) {
     $addedArray[] = array_sum(str_split($value));
    }
  $ranked = array_count_values($addedArray);
  $dupCount = array_count_values($ranked);
  $result = array_values($dupCount);
  return $result[0];
}

$answer = gonculate(10);
echo $answer;

