<html>
<body>

<!-- There are two main ways to send variables via the HTTP GET method: -->
Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

<?php
/*
$_GET contains an array of variables received via the HTTP GET method.
*/

/*
NOTE:
Think SECURITY when processing PHP forms!
The example above does not contain any form validation, it just shows how you can send and retrieve form data.
Proper validation of form data is important to protect your form from hackers and spammers!
*/

?>
</body>