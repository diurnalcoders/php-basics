<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--The Form Element The HTML code of the form looks like this: -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); //This code will prevent xss

/*
What is the htmlspecialchars() function?

The htmlspecialchars() function converts special characters into HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;. 
This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.
*/

?>">
</body>
</html>

