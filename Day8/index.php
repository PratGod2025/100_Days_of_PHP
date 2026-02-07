<?php


//multidimensional arrays using indexed arrays
$students = array(
    array("name" => "Alice", "age" => 20, "grade" => "A"),
    array("name" => "Bob", "age" => 22, "grade" => "B"),
    array("name" => "Charlie", "age" => 21, "grade" => "C")
);


//to access elements in multidimensional array
echo $students[0]["name"]; // Output: Alice 

//another way to create multidimensional array(asociative array of associative arrays)

$employees = array(
    "emp1" => array("name" => "John", "age" => 30, "department" => "HR"),
    "emp2" => array("name" => "Jane", "age" => 25, "department" => "IT"),
    "emp3" => array("name" => "Doe", "age" => 28, "department" => "Finance")
);
//multidimensional array using indexed arrays in big brackets
$products = [   
    ["name" => "Laptop", "price" => 1000, "quantity" => 10],
    ["name" => "Phone", "price" => 500, "quantity" => 20],
    ["name" => "Tablet", "price" => 300, "quantity" => 15]
];  

//to access elements in multidimensional array
echo $products[1]["name"]; // Output: Phone 

//using function array_pop to remove the last element of an array
$fruits = array("apple", "banana", "orange");       
$last_fruit = array_pop($fruits); // removes "orange" from the array and returns it
echo $last_fruit; // Output: orange
print_r($fruits); // Output: Array ( [0] => apple [1] => banana ) 


//using function array_push to add one or more elements to the end of an array
array_push($fruits, "grape", "melon"); // adds "grape" and "melon" to the end of the array
print_r($fruits); // Output: Array ( [0] => apple [1] => banana [2] => grape [3] => melon )



?>