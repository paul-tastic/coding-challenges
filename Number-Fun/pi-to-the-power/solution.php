<?php

//Raise PI to the nth degree

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