<?php
// String Concatenation
 
 // To concatenate, or combine, two strings you can use the . operator:
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;
echo "\n";

// The result of the example above is HelloWorld, without a space between the two words. You can add a space character like this:
$x = "Hello";
$y = "World";
$z = $x . " " . $y;
echo $z;
echo "\n";

/*
An easier and better way is by using the power of double quotes.
By surrounding the two variables in double quotes with a white space between them, the white space will also be present in the result:\
*/
$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z;
echo "\n";
