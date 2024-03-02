<?php
// $x = 5; // global scope

// function myTest() {
   # using x inside this function will generate an error
//   echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

// echo "<p>Variable x outside function is: $x</p>";

#The global keyword
$x = 5;
$y = 10;

function myTest1() {
  global $x, $y;
  $y = $x + $y;
}

myTest1();
echo $y; // outputs 15
echo "\n";

#  Stores all global variables in an array
$x = 6;
$y = 10;

function myTest2() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest2();
echo $y; // outputs 16