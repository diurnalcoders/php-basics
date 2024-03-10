<?php

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));


/* NOTE :
The PHP is_numeric() function can be used to find whether a variable is numeric. 
The function returns true if the variable is a number or a numeric string, false otherwise.
From PHP 7.0: The is_numeric() function will return FALSE for numeric strings in hexadecimal form (e.g. 0xf4c3b00c), 
as they are no longer considered as numeric strings.
*/