<?php
if(isset($_POST['submit'])) {
       
        $file = $_FILES['file'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];

        $tilens = $_POST["tilens"];
        
		$fileName = $titlens;

        $fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('jpeg', 'jpg', 'png');

		if(in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $titlens)) {
    $fileDestination = '/images/game-images/'.$fileNameNew;

	move_uploaded_file($fileName, $fileDestination);

    $title = $_POST["title"];
    $embed = $_POST["embed"];  

    // add game
    $gameURL = "/games/$titlePage.php";
    $gamePage = fopen($gameURL, "w");
    $gamePageContents = '
    

<!DOCTYPE html>
<html>
<head>
	<!-- STYLE -->
	<style></style>
	<!-- META -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<!-- Link -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"
  ></script>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="gamestyle.css">
	<!-- TITLE -->
	<title>'.$title.' - PrettyDank</title>
</head>
<body vlink="#00ced6">
<center>
<!-- Game Header -->
<p>'.$title.'</p>
<!-- Insert Game Embed Here -->
'.$embed.'
<br><br><br>
<br><br><br>
<button id="stealthmode" onclick="myFavicon(); myTitle(); ">Click me to go into stealth mode!</button>
<script>
function myFavicon() {
    var link = document.querySelector("link[rel*=\'icon\']") || document.createElement(\'link\');
    link.type = \'image/x-icon\';
    link.rel = \'shortcut icon\';
    link.href = \'/classroom.png\';
    document.getElementsByTagName(\'head\')[0].appendChild(link);
};
</script>
<script>
    function myTitle() {
    document.title = "Classes";
}
</script>
<br><br><br>
<br><br><p2> If this game is not working, please tell us. Visit the <a target="_blank" href="/about.php/">about page</a> if you would like to know how to contact us.</p2><br>

<!-- Navigaion Links -->

<ul id="ulleft">

<li id="lileft"><a href="/index.php">Home</a></li>

<li id="lileft"><a href="/games.php">Games</a></li>

<li id="lileft"><a href="/music.php">Music</a></li>

<li id="lileft"><a href="/videos.php">Videos</a></li>

<li id="lileft"><a href="/about.php">About</a></li>

<li class="youareheregame"><a href="'.$titlens.'">'.$title.'</a></li>

<li><button id="backbutton" onclick="goBack()">Back</button></li>

      </ul>
</center>
</body>
</html>


 

    
    ';
    fwrite($gamePage, $gamePageContents);
    fclose($gamePage);
    
    // add game to .txt file
    $gameTXT = fopen("/games/games.txt", "a");
    $gameTXTContents = "\n <a id='gameunder' href='/games/".$titlePage.".php'>
    <img id='/images/game-images/$fileName'>
    </a>";
    fwrite($gameTXT, $gameTXTContents);
    fclose($gameTXT);

    header("Location: http://localhost:888/admin.php?successgame");

} else {
    header("Location: http://localhost:8888/admin.php?listlegnth=10&error=You+did+not+enter+a+title,+embed+or+upload+a+file.");
}
} else {
    header("Location: http://localhost:8888/admin.php?listlegnth=10&error=Invalid+title+with+undercase.");
}
} else {
    header("Location: http://localhost:8888/admin.php?listlegnth=10&error=Invalid+file+extension.");
} }

?>

