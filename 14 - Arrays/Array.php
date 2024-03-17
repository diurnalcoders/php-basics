<?php

/*
What is an Array?
An array is a special variable that can hold many values under a single name, 
and you can access the values by referring to an index number or name.
*/

// An array stores multiple values in one single variable:
$cars = ["Volvo", "BMW", "Toyota"];
var_dump($cars);
echo "\n";


/*
What is an Array?
An array is a special variable that can hold many values under a single name,
and you can access the values by referring to an index number or name.
*/

// An array stores multiple values in one single variable:
$cars = ["Volvo", "BMW", "Toyota"];
var_dump($cars);
echo "\n";

/*
Array Items
Array items can be of any data type.
The most common are strings and numbers (int, float), but array items can also be objects, functions or even arrays.
You can have different data types in the same array.
*/

// function example:
function myFunction() {
   echo "This text comes from a function";
}

// create array:
$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction());

// calling the function from the array item:
$myArr[3]();
echo "\n";

/*
Array Functions
The real strength of PHP arrays are the built-in array functions,
like the count() function for counting array items:
*/

// How many items are in the $animals array:
$animals = array("Dog", "Bird", "Cat");
echo count($animals);

