<?php

$radius = 5;
$pi = 3.14;


//basic operators in php are +, -, *, /, **
$area = $pi * $radius * $radius; // area of circle
echo "The area of circle is: " . $area; // Output: The area of circle is: 78.5

// BODMAS rule also applies in php
$calculation = (2 + 3) * 4 ** 2; // (5) * 16 = 80
echo "The result of calculation is: " . $calculation; // Output: The result of calculation is: 80

//** -> indicates power like ^ in maths

// Increment and Decrement operators
    echo$radius++;
    echo$radius; 
    // Output: 6 (first it prints 5 then increments to 6)

    echo$radius--;
    echo$radius;
    // Output: 5 (first it prints 6 then decrements to 5)

// shorthand operators
    $radius += 2; // equivalent to $radius = $radius + 2
    echo $radius; // Output: 7

    $radius *= 3; // equivalent to $radius = $radius * 3
    echo $radius; // Output: 21

    $radius -= 1; // equivalent to $radius = $radius - 1
    echo $radius; // Output: 20

    $ radius /= 4; // equivalent to $radius = $radius / 4
    echo $radius; // Output: 5

// about floor(), ceil(), round()
    $num = 4.7;
    echo floor($pi); // Output: 3
    echo ceil($pi);  // Output: 4
    echo pi(); // Output: 3.1415926535898
    
    ?>