<?php

function linearsearch ($arr , $element){


    $n = count ($arr);
    $key= $element;

    for ($i = 0 ; $i < $n;$i++){

        if($arr[$i] == $key){
            return "the Element is found in the index : ".$i;
        }

    }

    return "this  Element is not exists";


}

$array =[11,9,5,21];

$element =5;

echo linearsearch($array,$element);





?>