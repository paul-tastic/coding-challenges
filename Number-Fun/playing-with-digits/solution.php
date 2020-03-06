<?php


// Given a positive integer n written as abcd... (a, b, c, d... being digits) and a positive integer p

// we want to find a positive integer k, if it exists, such as the sum of the digits of n taken to the successive powers of p is equal to k * n.
// In other words:

// Is there an integer k such as : (a ^ p + b ^ (p+1) + c ^(p+2) + d ^ (p+3) + ...) = n * k

// If it is the case we will return k, if not return -1.

// Note: n and p will always be given as strictly positive integers.

function digPow($n, $p) {
    $dividedN = str_split($n);
    foreach ($dividedN as &$digit) {
      $digit = pow($digit,$p);
      $p++;
    }
    $addedTogether = array_sum($dividedN);
    if ($addedTogether % $n == 0) { 
      return $addedTogether / $n;
    } else {
      return -1;
    }
}