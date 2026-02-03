    DAY 3: BRAIN

Today I learned about strings and how to use them in PHP  :

1. How to Create a String ?--> To create a String we can use single quote or double quote for example 
              $Name = 'Pratyush'
2. How do I join 2 or more strings --> Through the method of concatenation as shown in index.php 
 conctenation can be used in PHP by the help of '.' (full stop sign)
                                                                     
3. Why double quote is needed? --> A double quote reduces the need for concatenation through '.' as it can automatically join two string by writing the variable names
                            for eg: $stringOne = 'Hello there, ';
                                    $stringTwo = ' My name is ';
                                    $Name = ' Prats';
                                    echo " $stringOne $stringTwo $Name ";

5. We can escape character by writing "\" when needed 
                            for eg: If I need a quote text in my string,
                             I could write 
                            echo " the world is on \"fire\"";
6. If we dont want to use escape character for double quote we can basically use single quote 
                             for eg: 
                             echo 'the world is on "fire"';
7. Learned about some string functions
                     for eg:
                      strlen()  → this function finds the length of the string
                      strtoupper() → takes the string and takes it to uppercase 
                      strtolower() → takes the string to lowercase
                      str_replace() → to replace letters with letters

                      written in index.php
8. The position of string can be found by using 
                           echo $name[1]
                           i.e [] is used to find the position of string's position
                           but it starts from 0 (similar to javascript)
 
Tommorow target : Learning about Numbers in php.

Resources for today --> https://www.youtube.com/watch?v=U2EliFC9NrQ