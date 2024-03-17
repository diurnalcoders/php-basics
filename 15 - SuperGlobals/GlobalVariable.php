<?php

/*
Global variables are variables that can be accessed from any scope.
Variables of the outer most scope are automatically global variables, and can be used by any scope, e.g. inside a function.
To use a global variable inside a function you have to either define them as global with the global keyword, 
or refer to them by using the $GLOBALS syntax.
*/

// Refer to the global variable $x inside a function:
$x = 75;
  
function myfunction() {
  echo $GLOBALS["x"];
}

myfunction();