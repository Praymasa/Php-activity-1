<?php

function countInstancesOfOne($array) {
    $count = 0; 

    for ($i = 0; $i < count($array); $i++) {
        for ($a = 0; $a < count($array[$i]); $a++) {
            if ($array[$i][$a] === 1) {
                $count++; 
            }
        }
    }

    return $count; 
}


$twoDimensionalArray = [
    array(5, 1, 10, 2, 3),
    array(4, 61, 100, 1, 5, 1),
    array(11, 2, 1, 19, 6, 1)
];

echo countInstancesOfOne($twoDimensionalArray);

?>