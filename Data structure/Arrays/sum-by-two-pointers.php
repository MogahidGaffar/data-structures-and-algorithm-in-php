<?php

$array = range(1,1000);
$count = 0;

function sumUsingTwoPointers($array,$count){
    $i = 0;
    $j = count($array) - 1;
    $sum = 0;
    while($i <= $j){
        if($i == $j){
            $sum += $array[$i];
            break;
        }

        $sum += $array[$i] + $array[$j];
        $i++;
        $j--;
        $count++;
    }

    echo $sum , " is calc with $count iterations ";
}


sumUsingTwoPointers($array,$count);
