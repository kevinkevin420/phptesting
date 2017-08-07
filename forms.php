<?php #setcookies/session
$userIP = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set("America/New_York");
$cookieName = "ip";

if (isset($_COOKIE["ip"])){
  header( 'Location: http://localhost:8888/alreadysent.php');
}


function abuser() {
$contRun = 0;
$continue = $GLOBALS['continue'];
$cookieName = "ip";
$userIP = $_SERVER['REMOTE_ADDR'];
$cookieNameTwo = "timeuntilexp";
$nxtFormDate = strtotime("+1 day");
$timeUntilNextForm = date("Y-m-d h:i:sa", $nxtFormDate);
echo $timeUntilNextForm;
if ($continue === 1 && $contRun === 0) {
  setcookie($cookieName, $userIP, time() + (86400 * 30), "/"); // 1 day expire
  setcookie($cookieNameTwo, $timeUntilNextForm, time() + (86400 * 30), "/"); // 1 day expire
  header( 'Location: http://localhost:8888/alreadysent.php');
  $contRun = 1;
} 
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
<title>PrettyDank - Forms</title>
<style>
#errorField {
 /* animation: shake 0.42s cubic-bezier(.36,.07,.19,.97) both;*/
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;
  color: red; padding: none; margin: none;
  font-family: 'roboto-thin', sans-serif;
  background-color: hsla(0, 100%, 50%, 0.3);
  display: inline;
}
#error {
  animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;
  color: red; padding: none; margin: none;
  font-family: 'roboto-thin', sans-serif;
  position: fixed;
  background-color: hsla(0, 100%, 50%, 0.12);
  display: inline;
}

::selection {
  color: rgba(255, 255, 255, 0.21);
}
::-moz-selection {
  color: rgba(255, 255, 255, 0.21);
}


@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
  
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}

body {background-color: black; 
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
} #body1 {
  background-color: black; 
  background-image: url("https://static.pexels.com/photos/110854/pexels-photo-110854.jpeg");
  height: 600px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  -webkit-transition: background-image 2s ease-in-out;
  -moz-transition: background-image 2s ease-in-out;
  transition: background-image 2s ease-in-out;
}
#body2 {
  background-image: url("http://wallpapercave.com/wp/0Xf6Hpa.jpg");
  -webkit-transition: background-image 2s ease-in-out;
  -moz-transition: background-image 2s ease-in-out;
  transition: background-image 2s ease-in-out;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 600px;
}
#body3 {
  background-image: url("https://www.aviationcv.com/aviation-blog/wp-content/uploads/2017/01/spacex-rocket-landing-531752474.jpg");
  -webkit-transition: background-image 2s ease-in-out;
  -moz-transition: background-image 2s ease-in-out;
  transition: background-image 2s ease-in-out;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 600px;
}
#body4 {
  background-image: url("http://spaceengine.org/media/2016/05/scr00009.jpg");
  -webkit-transition: background-image 2s ease-in-out;
  -moz-transition: background-image 2s ease-in-out;
  transition: background-image 2s ease-in-out;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 600px;
}
#body5 {
  background-image: url("http://cdn.wallpapersafari.com/11/4/UoSsIp.jpg");
  -webkit-transition: background-image 2s ease-in-out;
  -moz-transition: background-image 2s ease-in-out;
  transition: background-image 2s ease-in-out;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 600px;
}
#body6 {
  background-image: url("https://d1o50x50snmhul.cloudfront.net/wp-content/uploads/2017/03/13173300/050216-trappist-1-exoplanets-2.jpg");
  -webkit-transition: background-image 2s ease-in-out;
  -moz-transition: background-image 2s ease-in-out;
  transition: background-image 2s ease-in-out;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 600px;
}
#body7 {
  background-image: url("https://eclipse.aas.org/sites/eclipse.aas.org/files/TSE2012-C3DiamondRing-RickFienberg.jpg");
  -webkit-transition: background-image 2s ease-in-out;
  -moz-transition: background-image 2s ease-in-out;
  transition: background-image 2s ease-in-out;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 600px;
}
input[type="text"] {height: 20px; width: 150px;}input[type="radio"] {padding-left: 2px;}
input, textarea { 
    padding: none; margin:none; border: 1px solid #00ced6; color: #6abcf7;
    font-family: 'roboto-thin', sans-serif;
    margin-top: 5px;
}

input:focus, textarea:focus {
    background-color: #f2f9ff;
    border: 1px solid white;
    color: #6abcf7;
    transition: background-color 0.5s ease;
}
textarea {
    resize: none; 
    width: 400px; height: 100px;
    margin: 0px;
    font-family: 'roboto-thin', sans-serif;
}
input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
    color: grey;
    transition: color 1s ease;
}

input:focus::-webkit-input-placeholder, textarea:focus::-webkit-input-placeholder {
  color: grey;
  transition: color 1s ease;
}

button {
    border: 1px solid #6abcf7; 
    color: #6abcf7;
    background-color: white;
    transition: background-color, color 1s ease;
    transition-delay: 0.4s;
    padding: 4px 6px 4px 6px;
    font-family: 'roboto-thin', sans-serif;
}
button:hover {
    cursor: pointer;
    background-color: #00ced6;
    border-color: #00ced6;
    transition: background-color, color, border-color, 0.4s ease;
    color: white;
    transition-delay: 0.1s;
    
}

#errorborder {
    border: 1px solid red;
    animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
    transform: translate3d(0, 0, 0);
    backface-visibility: hidden;
    perspective: 1000px;
    
}

</style>
<link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body id="body1">
<script>

loop();
function body1() {
  document.getElementById('body1').id = 'body2';
}
function body2() {
  document.getElementById('body2').id = 'body3';
}
function body3() {
  document.getElementById('body3').id = 'body4';
}
function body4() {
  document.getElementById('body4').id = 'body5';
}
function body5() {
  document.getElementById('body5').id = 'body6';
}
function body6() {
  document.getElementById('body6').id = 'body7';
}
function body7() {
  document.getElementById('body7').id = 'body1';
  setTimeout(loop, 4000);
}
function loop() {
setTimeout(body1, 10000);
setTimeout(body2, 20000);
setTimeout(body3, 30000);
setTimeout(body4, 40000);
setTimeout(body5, 50000);
setTimeout(body6, 60000);
setTimeout(body7, 71000);
}
</script>
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = ""; // errors
$name = $email = $gender = $comment = $website = ""; // inputs

if ($_SERVER["REQUEST_METHOD"] == "POST") { // checks for empty vars
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $errorBorderName = "errorborder";
    $continue = 0;
    $errorMaster = 0;
  } else {
    $name = test_input($_POST["name"]);
    $continue = 1;
    $nameErr = "";
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed"; 
  $errorBorderName = "errorborder";
  $continue = 0;
  $errorMaster = 0;
}
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $errorBorderEmail = "errorborder";
    $continue = 0;
    $errorMaster = 0;
  } else {
    $email = test_input($_POST["email"]);
    $continue = 1;
    $emailErr = "";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
  $continue = 0;
  $errorBorderEmail = "errorborder";
  $errorMaster = 0;
}
  }

  if (empty($_POST["website"])) {
    $website = "";
  //  $errorBorderWebsite = "errorborder";
  } else {
    $website = test_input($_POST["website"]);
    $continue = 1;
    $websiteErr = "";
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  $websiteErr = "Invalid URL"; 
  $continue = 0;
  $errorBorderWebsite = "errorborder";
  $errorMaster = 0;
}
  }

  if (empty($_POST["comment"])) {
    $commentErr = "Comment is required";
    $errorBorderComment = "errorborder";
    $continue = 0;
    $errorMaster = 0;
  } else {
    $comment = test_input($_POST["comment"]);
    $continue = 1;
    $commentErr = "";
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $continue = 0;
    $errorBorderGender = "errorborder";
    $errorMaster = 0;
  } else {
    $gender = test_input($_POST["gender"]);
    $continue = 1;
    $genderErr = "";
  } 

  $genderLooper = 1;

  if ($gender === "female" && $genderLooper === 1) {
    $checkedFemale = "checked";
    $genderLooper = 0;
    $genderErr = "";
  } elseif ($gender === "male" && $genderLooper === 1) {
    $checkedMale = "checked";
    $genderLooper = 0;
    $genderErr = "";
  } elseif ($gender === "other" && $genderLooper === 1) {
    $genderLooper = 0;
    $checkedOther = "checked";
    $genderErr = "";
  } else {
    $errorBorderGender = "errorborder";
    $continue = 0;
    $genderErr = "Gender is required";
    $errorMaster = 0;
  }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



$time = date("Y-m-d h:i:sa");
// Upload to database
if ($continue === 1 && empty($errorMaster)) {

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "comments";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} elseif (!empty($website)) {
  $time = date("Y-m-d h:i:sa"); // updates time
  $sql = "INSERT INTO comments (name, dou, email, gender, website, comment, ip) # website not included
VALUES ('$name', '$time', '$email', '$gender', '$website', '$comment', '$userIP');";
} elseif (empty($website)) {
  $time = date("Y-m-d h:i:sa"); // updates time
  $sql = "INSERT INTO comments (name, dou, email, gender, website, comment, ip) 
VALUES ('$name', '$time', '$email', '$gender', '$website', '$comment', '$userIP');"; # website included
}


if ($conn->query($sql) === TRUE) {
    echo "<span id='blue'>Your suggestion has been uploaded.</span>";
    abuser();
} else {
    echo "<span id='blue'>Error: " . $sql . "<br><span>" . $conn->error;
}

$conn->close();
}

?>
<center>
<div style="background-color: rgba(0, 0, 0, 0.54); display: inline-block; float: center; padding: 50px 150px 50px 150px; margin-top: 100px;">

<style>#blue {color: #3a6ec1; font-family: 'roboto-thin', sans-serif; font-size: 15px; background-color: rgba(0, 0, 0, 0.64);}</style>
<span id="blue" style="padding: none; margin: none; background-color: rgba(0, 0, 0, 0.54);"><p style="background-color: rgba(0, 0, 0, 0.54);"> <b style="font-size: 23px; background-color: rgba(0, 0, 0, 0.54);">Comment/Suggestion form:</b> send your requests/suggestions here.</p></span>
<p id="errorField">* required field</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <span id="blue">Name:</span> <input id="<?php echo $errorBorderName; ?>" value="<?php echo "$name"; ?>" placeholder="Name" type="text" name="name">    <span id="error"><?php echo "* $nameErr";?></span><br>
    <span id="blue">E-mail:</span> <input id="<?php echo $errorBorderEmail; ?>" value="<?php echo "$email";?>" placeholder="E-mail:" type="text" name="email">   <span id="error"><?php echo "* $emailErr";?></span><br>
    <span id="blue" style="position: initial;">Website:</span> <input style="position: initial;"id="<?php echo "$errorBorderWebsite;";?>" value="<?php echo "$website";?>" placeholder="Website:" type="text" name="website">   <span id="error"><?php echo " $websiteErr";?></span><br>
    <span id="blue">Gender:</span> 
    <input id="<?php echo $errorBorderGender; ?>"<?php echo $checkedMale; ?> value="male" type="radio" name="gender"><span id="blue">Male</span>
    <input id="<?php echo $errorBorderGender;?>"<?php echo $checkedFemale; ?> value="female" type="radio" name="gender"><span id="blue">Female</span>
    <input id="<?php echo $errorBorderGender; ?>"<?php echo $checkedOther; ?> value="other" type="radio" name="gender"><span id="blue">Other </span>     <span id="error"><?php echo "* $genderErr";?></span><br>
    <span id="blue">Comment:</span><textarea maxlength="300" id="<?php echo $errorBorderComment; ?>" name="comment" placeholder="Your comment here:" maxlength="300" name="comment" rows="5" cols="40"><?php echo "$comment";?></textarea>  <span id="error"><?php echo "* $commentErr";?></span><br>
<button type="submit">Submit</button>



</form>
<span id="blue" style="color: white;">
<?php
if (!empty($name && $email && $gender && $comment)) {
echo "<br>You submited: <br>";
echo "Your name: $name. <br>";
echo "Your email: $email. <br>";
echo "Your website: $website. <br>";
echo "Your comment: $comment. <br>";
echo "Your gender: $gender. <br>";
}
?>
<p id="blue"> Note: after successfully sending a form, you may not resend another until ~1 day later. </p>
</span>
</center>
</div>
</body>
</html>