<?php

//indexed arrays
$fruits = array("Apple", "Banana", "Cherry");
echo $fruits[0]; // Output: Apple
echo $fruits[1]; // Output: Banana
echo $fruits[2]; // Output: Cherry
//position of first element is 0, second is 1 and so on

//another way to create indexed array
$colors = ["Red", "Green", "Blue"];
echo $colors[0]; // Output: Red 
 

//another way to print the array in readable format
print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Cherry )

//to change the value of an element in array
$fruits[1] = "Mango";   
echo $fruits[1]; // Output: Mango

//to add new element in array
$fruits[] = "Orange"; // adds "Orange" at the end of the array
echo $fruits[3]; // Output: Orange

//another way to add new element in array
array_push($fruits, "Grapes"); // adds "Grapes" at the end of the array
echo $fruits[4]; // Output: Grapes

//to count the number of elements in array
echo count($fruits); // Output: 5

//to merge two arrays
$vegetables = ["Carrot", "Broccoli"];
$food = array_merge($fruits, $vegetables);
print_r($food); // Output: Array ( [0] => Apple [1] => Mango [2] => Cherry [3] => Orange [4] => Grapes [5] => Carrot [6] => Broccoli )  

?>

