<!DOCTYPE html>
<html>
<head>
<title>Forms!</title>
<style></style>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="fname" placeholder="Enter your name:">
  <input type="submit">
</form>

<?php


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // collect value of input field
    $name = $_GET['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo "Your name is: $name!";
    }
}

# $_GET can get vars from the URL, similar to youtube's watch?v=
# $_POST is for more secure things(login systems and such.)
?>

</body>
</html>