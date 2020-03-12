<?php

// Given an array, , of  integers, print 's elements in reverse order as a single line of space-separated numbers.

function reverseArray($array) {
  for ($i=count($array)-1;$i>=0;$i--) {
     echo $array[$i].' ';
    }
}

reverseArray(array(1,2,3,4));