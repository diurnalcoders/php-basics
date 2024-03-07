<?php

// You can return a range of characters by using the substr() function.
// Specify the start index and the number of characters you want to return.

// Start the slice at index 6 and end the slice 5 positions later:
$x = "Hello World!";
echo substr($x, 6, 5);
echo "\n";

# Slice to the end
// Start the slice at index 6 and go all the way to the end:
$j = "Hello World!";
echo substr($j, 6);
echo "\n";

# Slice from the end
// Use negative indexes to start the slice from the end of the string:
$s = "Hello World!";
echo substr($s, -5, 3);
echo "\n";

# Negative length
/* NOTE:
From the string "Hi, how are you?", get the characters starting from index 5, 
and continue until you reach the 3. character from the end (index -3). 
*/
// Use negative length to specify how many characters to omit, starting from the end of the string:
    $x = "Hi, how are you?";
    echo substr($x, 5, -3);