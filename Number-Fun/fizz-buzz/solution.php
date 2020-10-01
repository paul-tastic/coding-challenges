<?php

// not a lot of time today, so figured I'd write a fizzbuzz as my challenge for the day

// Write a program that prints the numbers from 1 to 100.
// For multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”.
// For numbers which are multiples of both three and five print “FizzBuzz”.


for ($i=1; $i<=100; $i++) {
    $result = 0;
    if ($i % 3 == 0) {
      echo "Fizz";
      $result++;
    } 
    if ($i % 5 == 0) {
        echo "Buzz";
        $result++;
      } 
    if ($result == 0) {
        echo $i;
    }
    echo " ";

}