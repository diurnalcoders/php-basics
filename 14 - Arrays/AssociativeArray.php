<?php

/*
Associative Arrays
Associative arrays are arrays that use named keys that you assign to them.
*/
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
echo "\n";
echo $car["model"]; // Acces associative arrays
echo "\n";

/*
Change Value
To change the value of an array item, use the key name:
*/
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;
var_dump($car);
echo "\n";

/*
Loop Through an Associative Array
To loop through and print all the values of an associative array, you could use a foreach loop, like this:
*/
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y ";
}