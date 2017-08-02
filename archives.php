<!DOCTYPE html>
<html>
<head>
	<title>Archives</title>
</head>
<body>
<h1>The archives are located inside the code, as a HTML comment.</h1>

<!-- 
===============================================================
Echo script 8/1/17
<?php 
 echo "<p id='phpoutput'>Hello!</p>";
?>
===============================================================
Variable to show love for SpaceX. 8/1/17
<?php
$txt = "SpaceX";
echo "<p id='phpoutput'>I love " . $txt . "!</p>";
?>
===============================================================
10 + 3, 8/1/17
<?php
$x = 10;
$y = 3;
$xy = $x + $y;
echo "$x + $y = $xy";
?>
===============================================================
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
PHP constants 8/1/17
<?php
define("GREETING", "Welcome to my mine!"/*, true */); # case insensitive.
echo GREETING;
?>
IF, ELSEIF, ELSE statements 8/1/17
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
===============================================================
For loops! 8/2/17
<?php 
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
} 

?>
===============================================================
Functions! 8/2/17
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
===============================================================
ARRRAYS AND ARRAY FUNCTIONS! 8/2/17
<?php
$people = array("Me", "Myself", "I");
echo "The best people out there are: $people[0], $people[1], and $people[2]!<br> ";
echo "There are ",count($people)," people in the &#36people array!";

$arrlength = count($people); // sets arrlength to 3
echo "<br>"; 

for($x = 0; $x < $arrlength; $x++) { // sets $x to 0, and while x is less then $arrlength, it increments x then does the code and loops until x < 3
    echo $people[$x];
    echo "<br>";
}

$age = array("Ben"=>"12", "Solomon"=>"12", "Kevin"=>"13"); //  Sets "Ben" to 12,  Solomon, and then sets Kevin to 13.
asort($age); # sorts people by age, young to old.
echo "Kevin is " . $age['Kevin'] . " years old."; // In this context, kevin being set to 13 is the age. A good way to store info.
echo "<br><br>";

foreach($age as $x => $x_value) { // for each $age value, as $x is greater/equal to $x_value, loop the following:
    echo "Person=" . $x . ", Age=" . $x_value; // prints $x (age), and $x_value
    echo "<br>";
}

sort($people);

$clength = count($people);
for($x = 0; $x < $clength; $x++) { // explained this in previos test
    echo $people[$x]; // echos $people, this can also sort numbers smallest to largest, and the other way using rsort()
    echo "<br>";
}
/* 
sort() alphabetical order
rsort() desending alphabetical order
asort() acending order for value(in arrays); arsort() desending
ksort() acending order for key(in arrays); krsort() desending

*/
?>



-->
</body>
</html>