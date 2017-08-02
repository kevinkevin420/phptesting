<!DOCTYPE html>
<html>
<head>
	<title>Archives</title>
</head>
<body>
<h1>The archives are located inside the code, as a HTML comment.</h1>

<!-- 
Echo script 8/1/17
<?php 
 echo "<p id='phpoutput'>Hello!</p>";
?>
Variable to show love for SpaceX. 8/1/17
<?php
$txt = "SpaceX";
echo "<p id='phpoutput'>I love " . $txt . "!</p>";
?>
10 + 3, 8/1/17
<?php
$x = 10;
$y = 3;
$xy = $x + $y;
echo "$x + $y = $xy";
?>
PHP strings 8/1/17
<?php 
echo strlen("hey vsauce, micheal here!"); // outputs 25, counts length
echo "<br>";
echo str_word_count("hey vsauce, micheal here!"); // outputs 4, counts words
echo "<br>";
echo strrev("elon musk is cool!"); // outputs the string reversed
echo "<br>";
echo strpos("smart person", "kevin"); // outputs false, because there is no kevin in smart person :(
echo "<br>";
echo str_replace("world", "Kevin", "Hello, world!");
echo "<br>String refrences!";
?>
PHP constants
<?php
define("GREETING", "Welcome to my mine!"/*, true */); # case insensitive.
echo GREETING;
?>
IF, ELSEIF, ELSE statements
<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>
For loops!
<?php 
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
} 

?>

Functions!
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




-->
</body>
</html>