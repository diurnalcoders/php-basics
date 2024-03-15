<?php

// The break statement can be used to jump out of different kind of loops

// Break in for loop 
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x ";
  }
  echo "\n";

// Break in while loop
$x = 0;

while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x ";
  $x++;
}
echo "\n";

// Break in do while loop
$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);
echo "\n";

// Break in foreach
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x ";
}
