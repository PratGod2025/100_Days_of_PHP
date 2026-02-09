<?php


//boolean data type example
$isTrue = true; //output: 1
$isFalse = false; //output: (nothing)

//example of using boolean basic

echo true //output: 1
echo false //output: (nothing)

//in case of numbers
echo 5 > 3; //output: 1
echo 2 < 1; //output: (nothing)
echo 5==5; //output: 1
echo 5!=5; //output: (nothing)
echo 5 >= 5; //output: 1
echo 4 <= 3; //output: (nothing)

//in case of strings
echo "hello" == "hello"; //output: 1
echo "hello" != "world"; //output: 1
echo "hello" == "Hello"; //output: (nothing)
echo "apple" > "banana"; //output: (nothing)
echo "apple" < "banana"; //output: 1
echo "apple" >= "apple"; //output: 1
echo "apple" <= "banana"; //output: 1
  

//loose vs strict comparison
echo 5 == "5"; //output: 1 (loose comparison)
echo 5 === "5"; //output: (nothing) (strict comparison)
echo 0 == false; //output: 1 (loose comparison) 
echo 0 === false; //output: (nothing) (strict comparison)
echo null == false; //output: 1 (loose comparison)
echo 1 == true; //output: 1 (loose comparison)
echo 1 === true; //output: (nothing) (strict comparison)

?>
