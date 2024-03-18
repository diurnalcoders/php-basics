<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <!-- When the user fills out the form above and clicks the submit button, 
 the form data is sent for processing to a PHP file named "welcome.php". 
 The form data is sent with the HTTP POST method.
To display the submitted data you could simply echo all the variables.
The "welcome.php" looks like this:--> 
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<form action="welcome.php" method="POST">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>