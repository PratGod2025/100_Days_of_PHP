<?php

//continue and break statements example
for ($i = 1; $i <= 10; $i++) {

//another example
   foreach ($products as $product) {
    if ($product['price'] > 100) {
        continue; // Skip expensive products
    }
    echo $product['name'] . " is affordable.";
}
//output:
//Product B is affordable.



    if ($i == 5) {
        break; // Exit the loop when i is 5
    }
    echo $i . " ";
}   
//output: 1 2 3 4

?>