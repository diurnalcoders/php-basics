<?php 

# This is a integer
$x = 5985;
var_dump(is_int($x));

# This is a float
$x = 10.365;
var_dump(is_float($x));

# This is a infinity
$x = 1.9e411;
var_dump($x);

# This is a NaN
$x = acos(8);
var_dump($x);
