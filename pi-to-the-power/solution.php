<?php

//Find PI to the Nth Digit - Enter a number and have the program generate PI up to that many decimal places. Keep a limit to how far the program will go.

function piPower($n) {
    $i = 2;
    $result = 3.14159;
    while ($i<=$n) {
        $result = $result * 3.14159;
        $i++;
    }
    return $result;
}

echo piPower(5); // 306.01839236862