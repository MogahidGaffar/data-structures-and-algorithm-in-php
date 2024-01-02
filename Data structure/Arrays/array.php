<?php 


$array= [1,2,3,4,5,6,7,8,9];   //declaring a simple  array

for ($i=0;$i<count($array) ; $i++) {
    echo $array[$i] ,"\n";                        // print the elements using For loop
 }                   

echo "==================== \n";  // just new line
 foreach ($array as $element) {
    echo $element,"\n";             // print the elements using For each loop
 }

 $k_v_array= ["name"=>"mogahid","gender"=>"male","nationality"=>"sudanese"];   //declaring a key value  array
 foreach ($k_v_array as $element) {
    echo $element,"\n";             // print the elements using For each loop
 }


//iterator
 $it = new ArrayIterator($k_v_array);
print_r ($it);
while($it->valid()){
    echo $it->current() , "\n";
    $it->next();
}



$cars = array("Volvo", "BMW", "Toyota"); //Indexed Arrays
var_dump($cars);


$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];



$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";             // Change Value
var_dump($cars);


array_push($cars, "Ford");     // add element
var_dump($cars);

// Multidimensional Arrays
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );


echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";


for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }



  $cars = array("Volvo", "BMW", "Toyota");      
  sort($cars);                              // Sort Array in Ascending Order 


$cars = array("Volvo", "BMW", "Toyota");  
rsort($cars);                             // in Descending Order


?>