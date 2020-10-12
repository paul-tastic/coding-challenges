<?php
/* Write a function that returns true if both numbers are:

    Smaller than 0, OR ...
    Greater than 0, OR ...
    Exactly 0
    Otherwise, return false.
    
    Examples
    both(6, 2) ➞ true
    
    both(0, 0) ➞ true
    
    both(-1, 2) ➞ false
    
    both(0, 2) ➞ false
    Notes
    Inputs will always be two numbers.

*/

function checkNumbers($a, $b) {
    if ($a < 0 && $b < 0) {
        return "true";
    } elseif ($a > 0 && $b > 0) {
        return "true";
    } elseif ($a == 0 && $b == 0) {
        return "true";
    } else {
        return "false";
    }
}

echo checkNumbers(6,2);
