<?php

// Given a  2D Array, :

// 1 1 1 0 0 0
// 0 1 0 0 0 0
// 1 1 1 0 0 0
// 0 0 0 0 0 0
// 0 0 0 0 0 0
// 0 0 0 0 0 0

// We define an hourglass in A to be a subset of values with indices falling in this pattern in 's graphical representation:

// a b c
//   d
// e f g
// There are 16 hourglasses in A, and an hourglass sum is the sum of an hourglass' values.

// Task
// Calculate the hourglass sum for every hourglass in A, then print the maximum hourglass sum.

function build2DArray($maxRow, $maxCol) {
    for ($row = 0; $row < $maxRow; $row++) {
        for ($col = 0; $col < $maxCol; $col++) {
            $arrVar[$row][$col] = rand(0,9);
        }
    }
    return $arrVar;
}

function print2DArray($arrVar, $maxRow, $maxCol) {
    echo "printing created 2D array <br>";
    for ($row = 0; $row < $maxRow; $row++) {
        for ($col = 0; $col < $maxCol; $col++) {
            echo $arrVar[$row][$col]." ";
        }
        echo "<br>";
    }
    echo "** ** ** ** ** ** <br>";
}

function maxHourglass($myArray) {
    // hourglass top and bottom are 3 wide, hourglass is 3 tall. 
    // Pattern is set, so only need to iterate over hourglass shape where values exist.

    $maxCols = count($myArray[0]);
    $maxRows = count($myArray);

    if (!$maxCols > 2 || !$maxRows > 2) {
        return "This 2D array is too small (only {$maxRows} x {$maxCols}), exiting program.";
    } else {
        $topTotal = 0;
        for ($row = 0; $row + 2 < $maxRows; $row++) {
            for ($col = 0; $col + 2 < $maxCols; $col++) {
                $col1 = $col+1;
                $col2 = $col+2;
                $row1 = $row+1;
                $row2 = $row+2;
                $tempTotal = $myArray[$col][$row] + $myArray[($col1)][$row] + $myArray[($col2)][$row]; 
                $tempTotal += $myArray[($col1)][($row1)]; 
                $tempTotal += $myArray[$col][($row2)] + $myArray[($col1)][($row2)] + $myArray[($col2)][($row2)]; 
            }
        }
        $topTotal = ($tempTotal > $topTotal) ? $tempTotal : $topTotal;
        
    }
    return $topTotal;
}

// build 2D array
$maxRow = $maxCol = 6;
$myArray = build2DArray($maxRow, $maxCol);
print2DArray($myArray, $maxRow, $maxCol);

// run math checker
echo maxHourglass($myArray);