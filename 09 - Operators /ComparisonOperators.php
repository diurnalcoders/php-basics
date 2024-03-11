<?php

$x = 100;
$y = 100;

// Equal
var_dump($x == $y);  // returns true because values are equal

// 	Identical
var_dump($x === $y);  // returns false because types are not equal

// Not equal
var_dump($x != $y); // returns false because values are equal

// Not equal
var_dump($x <> $y); // returns false because values are equal

// Not identical
var_dump($x !== $y); // returns true because types are not equal

// 	Greater than
var_dump($x > $y); // returns true because $x is greater than $y

// Less than
var_dump($x < $y); // Returns true if $x is less than $y

// Greater than or equal to
var_dump($x >= $y); // Returns true if $x is greater than or equal to $y

// Less than or equal to
var_dump($x <= $y); // Returns true if $x is less than or equal to $y

// Spacehip
var_dump($x <=> $y); // Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
