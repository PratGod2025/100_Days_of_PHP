<?php


//associative arrays
$person = array("name" => "John", "age" => 30, "city" => "New York");
echo $person["name"]; // Output: John
echo $person["age"]; // Output: 30
echo $person["city"]; // Output: New York

//another way to create associative array
$car = ["make" => "Toyota", "model" => "Camry", "year" => 2020];
echo $car["make"]; // Output: Toyota    
//to change the value of an element in associative array
$person["age"] = 31;    
echo $person["age"]; // Output: 31

//to add new element in associative array
$person["country"] = "USA"; // adds "country" => "USA" to the array
echo $person["country"]; // Output: USA

//to count the number of elements in associative array
echo count($person); // Output: 4


//to merge two associative arrays
$address = ["street" => "123 Main St", "city" => "New York"];
$person_info = array_merge($person, $address);  
print_r($person_info); // Output: Array ( [name] => John [age] => 31 [city] => New York [country] => USA [street] => 123 Main St )

?>