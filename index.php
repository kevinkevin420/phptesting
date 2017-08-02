<!DOCTYPE html>
<html>
<head>
	<title>PHP Testing</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>#tester {color: lightblue;}</style>
</head>
<body>

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


</body>
</html>
