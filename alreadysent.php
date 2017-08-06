<?php
$cookieNameTwo = "timeuntilexp";
$nxtFormDate = strtotime("+1 day");
$timeUntilNextForm = date("Y-m-d h:i:sa", $nxtFormDate);
if (!isset($_COOKIE['timeuntilexp'])){
setcookie($cookieNameTwo, $timeUntilNextForm, time() + (86400 * 30), "/");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
<title>You have already sent a form.</title></head>
<body bgcolor="black">
<p style="color:#6abcf7; font-family: 'roboto-thin', sans-serif;"> You have already sent a form. The next time you may send a form is 
<?php 

if (isset($_COOKIE['timeuntilexp'])) {
    echo $_COOKIE['timeuntilexp'];
} else {
    echo "in one day";
}
?>.</p>
</body>
</html>