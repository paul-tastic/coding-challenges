<?php

// Given two arrays a and b write a function comp(a, b)  
// that checks whether the two arrays have the "same" elements, with the same multiplicities. 
// "Same" means, here, that the elements in b are the elements in a squared, regardless of the order.

function comp($a,$b) {
    if ((count($a == count($b))) && ($a !== "")) { 
        foreach ($a as $check) {
            // if !exists $a ~ $b
            if (!in_array($check*$check, $b)) {
                return false;
            }
        }
        return true;
    }
    return false;
}

$a = [121, 144, 19, 161, 19, 144, 19, 11];  
$b = [121, 14641, 20736, 361, 25921, 361, 20736, 361];

echo comp($a,$b);