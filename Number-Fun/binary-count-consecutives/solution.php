<?php

// Given a base-10 integer, n , convert it to binary (base-2). Then find and print the base-10 integer denoting the maximum number of 
// consecutive 1's in n's binary representation.

// for example

// input 5, binary representation is 101, so max consecutive 1's is 1
// inut 13, binary representation is 1101, so max consecutive 1's is 2

function getConsecRefactor($n) {
    $binN = str_split(base_convert($n,10,2));
    $maxCount = 0;
    $count = 0;
    foreach($binN as $char) {
        $count = ($char == 0) ? 0 : $count=$count+1;
        if ($count > $maxCount) {
            $maxCount = $count;
        }
    }
    echo $maxCount;
}


getConsecRefactor(111);