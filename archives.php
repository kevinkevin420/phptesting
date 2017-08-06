<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

NAME FORM
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

FORMS AND SUPERGLOBALS
<?php
$x = 50;
$y = 50;
function addition() {
$GLOBALS['z'] = $GLOBALS['y'] + $GLOBALS['x']; // $GLOBALS can access variables from anywhere in the script, and can be accessed anywhere(note $z)
}
addition();
echo $z, "<br><br>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "<br>";


/*
$_SERVER['PHP_SELF']	Returns the filename of the currently executing script
$_SERVER['GATEWAY_INTERFACE']	Returns the version of the Common Gateway Interface (CGI) the server is using
$_SERVER['SERVER_ADDR']	Returns the IP address of the host server
$_SERVER['SERVER_NAME']	Returns the name of the host server (such as www.w3schools.com)
$_SERVER['SERVER_SOFTWARE']	Returns the server identification string (such as Apache/2.2.24)
$_SERVER['SERVER_PROTOCOL']	Returns the name and revision of the information protocol (such as HTTP/1.1)
$_SERVER['REQUEST_METHOD']	Returns the request method used to access the page (such as POST)
$_SERVER['REQUEST_TIME']	Returns the timestamp of the start of the request (such as 1377687496)
$_SERVER['QUERY_STRING']	Returns the query string if the page is accessed via a query string
$_SERVER['HTTP_ACCEPT']	Returns the Accept header from the current request
$_SERVER['HTTP_ACCEPT_CHARSET']	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
$_SERVER['HTTP_HOST']	Returns the Host header from the current request
$_SERVER['HTTP_REFERER']	Returns the complete URL of the current page (not reliable because not all user-agents support it)
$_SERVER['HTTPS']	Is the script queried through a secure HTTP protocol
$_SERVER['REMOTE_ADDR']	Returns the IP address from where the user is viewing the current page
$_SERVER['REMOTE_HOST']	Returns the Host name from where the user is viewing the current page
$_SERVER['REMOTE_PORT']	Returns the port being used on the user's machine to communicate with the web server
$_SERVER['SCRIPT_FILENAME']	Returns the absolute pathname of the currently executing script
$_SERVER['SERVER_ADMIN']	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
$_SERVER['SERVER_PORT']	Returns the port on the server machine being used by the web server for communication (such as 80)
$_SERVER['SERVER_SIGNATURE']	Returns the server version and virtual host name which are added to server-generated pages
$_SERVER['PATH_TRANSLATED']	Returns the file system based path to the current script
$_SERVER['SCRIPT_NAME']	Returns the path of the current script
$_SERVER['SCRIPT_URI']	Returns the URI of the current page
*/

?>

-->
</body>
</html>