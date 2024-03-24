<?php

function modulos($integers) {
    $new_numbers = [];
    for ($i = 0; $i < count($integers); $i++) { 
        if ($integers[$i] % 2 == 0) { 
            $new_numbers[] = $integers[$i]; 
        }
    }
    return $new_numbers;
}

$arrNum = [21, 35, 41, 32, 85, 90, 12, 2, 54];
$new_arrNum = modulos($arrNum);
print_r($new_arrNum);


?>