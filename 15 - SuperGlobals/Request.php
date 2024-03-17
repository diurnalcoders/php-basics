<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
/*
$_REQUEST is a PHP super global variable which contains submitted form data, and all cookie data.
In other words, $_REQUEST is an array containing data from $_GET, $_POST, and $_COOKIE.
You can access this data with the $_REQUEST keyword followed by the name of the form field, or cookie, like this:
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_REQUEST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}

//When a user clicks the link, the query string data is sent to demo_phpfile.php. In the PHP file we can use the $_REQUEST variable to collect the value of the query string.
echo "Study " . $_REQUEST['subject'] . " at " . $_REQUEST['web'];
?>

</body>
</html>