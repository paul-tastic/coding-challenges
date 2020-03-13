<?php
// Given a string, , of length  that is indexed from  to , print its even-indexed and odd-indexed characters 
// as  space-separated strings on a single line.

// Note: 0 is considered to be an even index.
// do not include spaces in calc

function stringSplitter($string) {
    $odds = array();
    echo "Input string: $string <br>";
    $string = preg_replace('/\s+/', '', $string);
    for ($i=0; $i<strlen($string);$i++) {
        if ($i % 2 == 0) {
            echo $string[$i]." ";
        } else {
            array_push($odds,$string[$i]);
        }
    }
        echo "|| ";
        foreach ($odds as $char) {
            echo $char." ";
        }
    
}


stringSplitter("This is a long string to test the thing about the thing!!");

