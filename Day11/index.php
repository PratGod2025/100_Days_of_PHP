<?php

//conditional statements example
$price = 100;
if ($price > 50) {
    echo "The price is greater than 50.";
} elseif ($price == 50) {
    echo "The price is equal to 50.";
} else {
    echo "The price is less than 50.";
}
//output: The price is greater than 50.

//another example
$products = [
    ['name' => 'Product A', 'price' => 150],
    ['name' => 'Product B', 'price' => 80],
    ['name' => 'Product C', 'price' => 120],
];

foreach ($products as $product) {
    if ($product['price'] > 100) {
        echo $product['name'] . " is expensive.";
    } else {
        echo $product['name'] . " is affordable.";
    }
}
//output:
//Product A is expensive.   
//Product B is affordable.
//Product C is expensive.

//putting in html
$age = 25;
?>
<!DOCTYPE html>
<html>      
<head>
    <title>Conditional Statements Example</title>
</head>
<body>
    <h1>Age Check</h1>
    <?php
    if ($age >= 18) {
        echo "<p>You are an adult.</p>";
    } else {
        echo "<p>You are a minor.</p>";
    }
    ?>
</body>
</html>

//output: You are an adult.
