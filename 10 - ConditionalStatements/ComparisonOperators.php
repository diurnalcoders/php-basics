<?php

// If statements usually contain conditions that compare two values.
$x = 14;

if ($x == 14){
    echo "Have a good day!";
}
echo "\n";

// To check more than one condition, we can use logical operators, like the && operator:
$d = 100;
$b = 300;
$c = 40;

if($d < $b && $d > $c){
    echo "Both conditions are true";
}
echo "\n";

// We can compare as many conditions as we like in one if statement:
$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
     echo "$a is a number between 2 and 7";
}
echo "\n";


