<?php


//for loop basic example
for ($i = 0; $i < 10; $i++) {
    echo "The number is: $i <br>";
}   

//for loop with array
$fruits = ["apple", "banana", "orange", "grape", "kiwi"];
for ($i = 0; $i < count($fruits); $i++) {
    echo "Fruit: " . $fruits[$i] . "<br>";
}

//for each loop example
$colors = ["red", "green", "blue", "yellow", "purple"]; 
foreach ($colors as $color) {
    echo "Color: $color <br>";
}

//for each loop with associative array
$person = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];
foreach ($person as $pop => $value) {
    echo "$pop: $value <br>";
}


//while loop example
$count = 0; 
while ($count < 5) {
    echo "Count: $count <br>";
    $count++;
}


//to use loop inside html

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

  <h1> products </h1>
  <ul>//ul is unordered list
 <?php foreach ($products as $product) { ?>
 
 <h3> <?php echo $product['name']; ?> </h3>
 <p> <?php echo $product['price']; ?> </p>  

    <?php } ?>
    </ul>
</body>
</html>



?>