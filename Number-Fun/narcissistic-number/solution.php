<?php

//A Narcissistic Number is a number which is the sum of its own digits, each raised to the power of the number of digits in a given base. In this Kata, we will restrict ourselves to decimal (base 10).

//Your code must return true or false depending upon whether the given number is a Narcissistic number in base 10.

function narcissistic(int $value): bool {
  $digArray = str_split($value);
  $power = count($digArray);
  foreach ($digArray as &$num) {
    $num = pow($num,$power);
  }
  $finalTally = array_sum($digArray);
  return ($finalTally == $value) ? true : false;
}

// call the function
narcissistic(17);