<?php

/*
The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.
*/

/*
Sort Array in Ascending Order - sort()
The following example sorts the elements of the $cars array in ascending alphabetical order:
*/
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo " ";
}
echo "\n";

// The following example sorts the elements of the $numbers array in ascending numerical order:
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo " ";
}
echo "\n";

/*
Sort Array in Descending Order - rsort()
The following example sorts the elements of the $cars array in descending alphabetical order:
*/
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo " ";
}
echo "\n";

// The following example sorts the elements of the $numbers array in descending numerical order:
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo " ";
}
echo "\n";

/*
Sort Array (Ascending Order), According to Value - asort()
The following example sorts an associative array in ascending order, according to the value:
*/
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }