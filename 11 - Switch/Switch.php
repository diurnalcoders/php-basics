<?php

$favcolor = "";

switch ($favcolor) {
    case "red":
      echo "Your favorite color is red!";
      break;
    case "blue":
      "Your favorite color is blue!";
      break;
    case "green":
      echo "Your favorite color is green!";
      break;
    default:
      echo "Your favorite color is neither red, blue, nor green!";
  }

/* 
This is how it works:

The expression is evaluated once
The value of the expression is compared with the values of each case
If there is a match, the associated block of code is executed
The break keyword breaks out of the switch block
The default code block is executed if there is no match
*/