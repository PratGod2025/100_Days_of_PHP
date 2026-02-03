<?php

$stringOne = "Hello there";
$stringTwo = "My name is ";
$Name = "Pratyush";

// Using Concatenation
echo $stringOne . $stringTwo . $Name;
// Not using concatenation
echo "$stringOne $stringTwo $Name";
//these two give the same output ie, Hello there My name is Pratyush

//also we can say
"My name is $Name"; // gives My name is Pratyush
//but if we do
'My name is $Name'; // gives My name is $Name because in single quotes variables are not parsed 

// if we want to add double quote inside a string
echo "She said, \"Hello there\""; // output She said, "Hello there"

// Or the easier way is to use single quotes for the string
echo 'She said, "Hello there"'; // output She said, "Hello there"

// to find the position of string
echo $name[1]; // gives r because indexing starts from 0

// some string function
echo strlen($Name); // gives length of string ie, 7
echo strtoupper($Name); // gives PRATYUSH
echo strtolower($Name); // gives pratyush
echo str_replace("tyu", "XYZ", $Name); // gives PraXYZsh

?>

Leant this in Day 4 :>

