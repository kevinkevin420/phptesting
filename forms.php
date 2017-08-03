<!DOCTYPE html>
<html>
<head>
<title>Forms!</title>
<style>
#error {color: red; padding: none; margin: none;} 
body {background-color: lightgrey;}
input, textarea { 
    padding: none; margin:none; border: 1px solid #6abcf7; color: #6abcf7;
}

input:focus, textarea:focus {
    background-color: #f2f9ff;
    border: 1px solid white;
    color: #6abcf7;
    transition: background-color 0.5s ease;
}
textarea {
    resize: none; 
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
    border: 1px solid black;
    background-color: lightgrey;
    transition: background-color, color 1s ease;
    transition-delay: 1s;
    padding: 4px 6px 4px 6px;
}
button:hover {
    cursor: pointer;
    background-color: #6abcf7;
    transition: background-color, color 1s ease;
    color: white;
    transition-delay: 0.3s;
}

#errorborder {
    border: 1px solid red;
}

</style>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = ""; // errors
$name = $email = $gender = $comment = $website = ""; // inputs

if ($_SERVER["REQUEST_METHOD"] == "POST") { // checks for empty vars
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $errorBorderName = "errorborder";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed"; 
  $errorBorderName = "errorborder";
}
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $errorBorderEmail = "errorborder";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
  $errorBorderEmail = "errorborder";
}
  }

  if (empty($_POST["website"])) {
    $website = "";
    $errorBorderWebsite = "errorborder";
  } else {
    $website = test_input($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  $websiteErr = "Invalid URL"; 
  $errorBorderWebsite = "errorborder";
}
  }

  if (empty($_POST["comment"])) {
    $commentErr = "Comment is required.";
    $errorBorderComment = "errorborder";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $errorBorderGender = "errorborder";
  } else {
    $gender = test_input($_POST["gender"]);
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


?>
<style>#blue {color: #35aaff}</style>
<p id="error">* required field</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    
    <span id="blue">Name:</span> <input id="<?php echo $errorBorderName ?>" value="<?php echo "$name"; ?>" placeholder="Name" type="text" name="name">    <span id="error"><?php echo "* $nameErr";?></span><br>
    <span id="blue">E-mail:</span> <input id="<?php echo $errorBorderEmail ?>" value="<?php echo "$email";?>" placeholder="E-mail:" type="text" name="email">   <span id="error"><?php echo "* $emailErr";?></span><br>
    <span id="blue">Website:</span> <input id="<?php echo "$errorBorderWebsite";?>" value="<?php echo "$website";?>" placeholder="Website:" type="text" name="website">   <span id="error"><?php echo " $websiteErr";?></span><br>
    <span id="blue">Gender:</span> <input id="<?php echo $errorBorderGender ?>" value="male" type="radio" name="gender"><span id="blue">Male</span>
    <input id="<?php echo $errorBorderGender ?>" value="female" type="radio" name="gender"><span id="blue">Female</span>
    <input id="<?php echo $errorBorderGender ?>" value="other" type="radio" name="gender"><span id="blue">Other </span>     <span id="error"><?php echo "* $genderErr";?></span><br>
    <span id="blue">Comment:</span><textarea id="<?php echo $errorBorderComment ?>" name="comment" placeholder="Your comment here:" maxlength="300" name="comment" rows="5" cols="40"><?php echo "$comment";?></textarea>  <span id="error"><?php echo "* $commentErr";?></span><br>
<button type="submit">Submit</button>
</form>
<span id="blue">
<?php
if (!empty($name && $email && $gender && $comment)) {
echo "<br>You submited: <br>";
echo "Your name: $name. <br>";
echo "Your email: $email. <br>";
echo "Your website(optional): $website. <br>";
echo "Your comment: $comment. <br>";
echo "Your gender: $gender. <br>";
}
?>
</span>
</body>
</html>