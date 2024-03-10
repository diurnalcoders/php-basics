<?php

/* 
NOTE:
Constants are like variables, except that once they are defined they cannot be changed or undefined.
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
A valid constant name starts with a letter or underscore (no $ sign before the constant name).
Unlike variables, constants are automatically global across the entire script.
*/

// Syntax
# define(name, value, case-insensitive);

// To create a constant, use the define() function.
define("give", "hello");
echo give;
echo "\n";

// From PHP7, you can create an Array constant using the define() function.
define("cars",[
    "Volvo",
    "BMW",
    "Toyota"
]);
echo cars[2];
echo "\n";

// Constants are automatically global and can be used across the entire script.
define("greeting", "Hello World!");
function myTest(){
    echo greeting;
}

myTest();