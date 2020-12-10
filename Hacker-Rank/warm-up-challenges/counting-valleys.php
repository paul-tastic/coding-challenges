<?php

/*
 * Complete the 'countingValleys' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER steps
 *  2. STRING path
 */

function countingValleys($steps, $path) {
    // Write your code here
    $valleys = 0;
    $currLevel = 0;
    $pathArray = str_split($path);
    
    // cycle through each step. if at sea level (currlevel == 0) and next step is D, then count a valley, else just process step
    
    foreach($pathArray as $p) {
        if ($currLevel == 0 && $p == 'D') {
            $valleys++;
        } 
        if ($p == 'D') {
            $currLevel--;
        } else {
            $currLevel++;
        }
    }
    return $valleys;
}