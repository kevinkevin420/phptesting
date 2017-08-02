<!DOCTYPE html>
<html>
<head>
	<title>PHP Testing</title>
</head>
<body>
<?php
function helloWorld() {
	echo "<p> Hello world! </p>";
}

function names($names, $favcolor) {
	echo "My name is: $names, and my favorite color is $favcolor <br>";
}

helloWorld();
names("Kevin", "green");

function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);

?>



</body>
</html>
