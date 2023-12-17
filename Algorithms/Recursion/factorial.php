<?php

function factorial($num){
    $factorial_num=1;
  for ($i=$num;$i>=1;$i--)
  $factorial_num=$factorial_num * $i ;

  return $factorial_num;
}

echo factorial(4);