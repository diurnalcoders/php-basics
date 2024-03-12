<?php

// The if...else statement executes some code if a condition is true and another code if that condition is false.
# Example:
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
echo "\n";

// The if...elseif...else statement executes different codes for more than two conditions.
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "10") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}