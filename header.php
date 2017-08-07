<?php
//header("location: http://localhost:8888/index.php");
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ipban";
$con = new mysqli($servername, $username, $password, $dbname); //est conn


/*
$execItems = $con->query("SELECT id, ip FROM `ipban`");


while($infoItems = $execItems->fetch_array()){
               echo "".$infoItems['ip']."";
                 
                 $bannedIPS = array($infoItems['id']);
echo $bannedIPS;

if (in_array ($_SERVER['REMOTE_ADDR'], $bannedIPS)) {
   header("location: https://www.google.com/");
}
} CONTINUE LATER
*/ 
mysqli_close($con);
?>