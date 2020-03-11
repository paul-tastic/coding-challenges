<?php

// A pangram is a sentence that contains every single letter of the alphabet at least once. 
// For example, the sentence "The quick brown fox jumps over the lazy dog" is a pangram, 
// because it uses the letters A-Z at least once (case is irrelevant).

// Given a string, detect whether or not it is a pangram. 
// Return True if it is, False if not. Ignore numbers and punctuation.

function pangramCheck($sentence) {
    $sentArr = array_flip(str_split(strtolower($sentence)));
    foreach (range("a", "z") as $step) {
        //echo $step;
        if (!isset($sentArr[$step])) {
            return false;
        }
    }
    return true;
}

echo pangramCheck("The quick brown fox jumps over the lazy dog");