<?php

// The default keyword specifies the code to run if there is no case match.

// If no cases get a match, the default block is executed:
    $d = 4;

switch ($d) {
  default:
    echo "Looking forward to the Weekend";
    break;
  case 6:
    echo "Today is Saturday";
    break;
  case 0:
    echo "Today is Sunday";
}

/*
Note: If default is not the last block in the switch block, 
remember to end the default block with a break statement.
*/