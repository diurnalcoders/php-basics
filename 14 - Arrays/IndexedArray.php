<?php

/*
Indexed Arrays
In indexed arrays each item has an index number.

By default, the first item has index 0, the second item has item 1, etc.
*/
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];
echo "\n";

/*
Change Value
To change the value of an array item, use the index number:
*/
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);
echo "\n";

/*
Loop Through an Indexed Array
To loop through and print all the values of an indexed array, you could use a foreach loop, like this:
*/
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x ";
}
echo "\n";

/* 
Index Number
The key of an indexed array is a number, by default the first item is 0 and the second is 1 etc., but there are exceptions.
New items get the next index number, meaning one higher than the highest existing index.
So if you have an array like this:
*/
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

// And if you use the array_push() function to add a new item, the new item will get the index 3:
array_push($cars, "Ford");
var_dump($cars);
echo "\n";

// But if you have an array with random index numbers, like this:
$animals[5] = "Dog";
$animals[7] = "Cow";
$animals[14] = "Cat";

// And if you use the array_push() function to add a new item, what will be the index number of the new item?
array_push($animals, "Bird");
var_dump($animals);


