<?php

// The continue statement can be used to jump out of the current iteration of a loop, and continue with the next.

// Continue in for loop
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x ";
  }
  echo "\n";

// Continue in while loop
$x = 0;

while($x < 10) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x ";
  $x++;
}
echo "\n";

// Continue in do while loop
$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);
echo "\n";

// Continue in foreach loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x ";
}