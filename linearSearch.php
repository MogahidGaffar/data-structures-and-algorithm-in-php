<?php
function linearsearch ($arr , $element){                        //declaring the function
$n = count ($arr);                                              //getting the size of the array
    $key= $element;                                             //getting the size of the array
    for ($i = 0 ; $i < $n;$i++){                                //for loop in the array
       if($arr[$i] == $key){                                    //check if the elment is exists
            return "the Element is found in the index : ".$i;   //print message  if the elment is exists
        }
    }
    return "this  Element is not exists";                       //print message if the elment is not exists
}
$array =[11,9,5,21];                                            //declaring an array of elements
$element =5;                                                    //declaring variable containg the required element 

echo linearsearch($array,$element);                           //calling the function

?>