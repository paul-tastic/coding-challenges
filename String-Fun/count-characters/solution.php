<?php

// given an input string, count number of occurences of each character, return results in array for each character.
// do not count punctuation or spaces

function countThese($str) {
	$result = array();
	$str = (strtolower($str));
	preg_match_all('/[a-z0-9]/', $str, $matches);
	foreach ($matches[0] as $char) {
	  (isset($result[$char])) ? $result[$char] ++ : $result[$char] = 1; 
	}
  return $result;
}

print_r(countThese("Young punks, get off my lawn!"));