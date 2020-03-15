<?php

// Write a factorial function that takes a positive integer,  as a parameter and prints the 
// result of  ( factorial).

function factorial($n) {
    if ($n > 1) {
        return $n * factorial($n-1);
    } else {
        return 1;
    }
}

echo factorial(4);