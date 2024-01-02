<?php



// Create a fixed array with a length of 5
$array = new SPLFixedArray(5);

// Set values in the fixed array
$array[0] = 'A';
$array[1] = 'B';
$array[2] = 'C';
$array[3] = 'D';
$array[4] = 'E';

// Get the size of the fixed array
echo $array->getSize(); // 5

// Iterate over the fixed array
for ($i = 0; $i < $array->getSize(); ++$i) {
    echo $array[$i] . ' ';
}
// Output: A B C D E






?>