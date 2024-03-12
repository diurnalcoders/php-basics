<?php

/*
When PHP reaches a break keyword, it breaks out of the switch block.
This will stop the execution of more code, and no more cases are tested.
The last block does not need a break, the block breaks (ends) there anyway.
*/

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
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
Warning: If you omit the break statement in a case that is not the last, and that case gets a match, 
the next case will also be executed even if the evaluation does not match the case!
*/