<?php

function checkPalindrome($text) {

    // if string contains 0, or 1 character return true
    // convert to lower case
    //put pointer at first and last character
    // in a loop, move pointers in by one character, if a space or punctuation move in until hits a character
    // if same, continue, else return false
    // when pointers are on same letter, or pass each other, return true

    if (strlen($text) <= 1) {
        return true;
    } 
    $text = strtolower($text);
    $count = strlen($text);
    $frontPos = 0;
    $backPos = $count - 1;

    while ($frontPos < $backPos) {
        while (!ctype_alnum($text[$frontPos])) {
            $frontPos += 1;
        }
        while (!ctype_alnum($text[$backPos])) {
            $backPos -= 1;
        }
        if ($text[$frontPos] != $text[$backPos]) {
            return $text[$frontPos]." != ".$text[$backPos]." - so false \r\n";
        } else {
            $frontPos += 1;
            $backPos -= 1;
        }            
    }
    return "true \r\n";

}

echo checkPalindrome('Abcdcba'); // true
echo checkPalindrome('ab cdcba'); // false
echo checkPalindrome('abchba!'); // false