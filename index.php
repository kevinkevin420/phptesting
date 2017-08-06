<!DOCTYPE html>
<html>
<head>
	<title>PHP Testing</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style></style>
</head>
<body>
<?php
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo "<br>";
echo readfile("test.txt");
echo "<br>";
?>


<a href="forms.php">Forms</a>

</body>
</html>
