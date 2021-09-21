<?php

//Delete duplicate Elements from array in sorted order -

$inputArray = [3, 8, 9, 3, 1, 7, 2, 8];
$outputArray = [];

foreach ($inputArray as $val) {
    if (!in_array($val, $outputArray)) {
        $outputArray[] = $val;
    }
}

 $length = count($outputArray);
    for ($i = 0; $i < $length; ++$i) {
        $min = $i;
        for ($j = $i + 1; $j < $length; ++$j) {
            if ($outputArray[$j] < $outputArray[$min]) {
                $min = $j;
            }
        }
        $tmp = $outputArray[$min];
        $outputArray[$min] = $outputArray[$i];
        $outputArray[$i] = $tmp;
    }
print_r($outputArray);
