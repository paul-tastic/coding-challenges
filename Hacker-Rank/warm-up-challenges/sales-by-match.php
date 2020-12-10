<?php

/*

source: https://www.hackerrank.com/challenges/sock-merchant/problem?h_l=interview&playlist_slugs%5B%5D=interview-preparation-kit&playlist_slugs%5B%5D=warmup

Alex works at a clothing store. There is a large pile of socks that must be paired by color for sale. Given an array of integers representing the color of each sock, determine how many pairs of socks with matching colors there are.

For example, there are  socks with colors . There is one pair of color  and one of color . There are three odd socks left, one of each color. The number of pairs is .

Function Description

Complete the sockMerchant function in the editor below. It must return an integer representing the number of matching pairs of socks that are available.


Return the total number of matching pairs of socks that Alex can sell.



*/

// Complete the sockMerchant function below.
function sockMerchant($n, $ar)
{
    $numMatches = 0;
    $matchPile = [];
    //cycle through array, check if already in matchPile. yes - numMatches ++, remove match from matchpile. no - add to matchPile
    foreach ($ar as $sock) {
        if (in_array($sock, $matchPile)) {
            $numMatches++;
            $index = array_search($sock, $matchPile);
            unset($matchPile[$index]);
        } else {
            array_push($matchPile, $sock);
        }
    }
    return $numMatches;
}
