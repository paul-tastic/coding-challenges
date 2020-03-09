<?php 

function listSquared($m, $n) {
    $result = array();
     while ($m < $n) {
       $sumOfSquares = 0;
       $divisors = array();
       $temp = array();
     // get divisors of $m
       for ($i=1;$i<=$m;$i++) {
         if ($m % $i == 0) {
         // found a divisor of m
           $divisors[] = $i;
         }
       }
     // see if sum of the square of divisors == perfect square
     foreach ($divisors as $divisor) {
       $sumOfSquares += $divisor ** 2;
     }
     if (sqrt($sumOfSquares) === floor(sqrt($sumOfSquares))) {
       $result[] = array($m, $sumOfSquares);
     }
     $m++;
     }
     return $result;
}