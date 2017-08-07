<?php
include 'header.php';
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "comments";


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PrettyDank - Admin</title>
<style>
th, table, td {
    border: 2px solid #6abcf7;
    border-collapse: collapse;
    background-color: black;
    color: #6abcf7;
    padding: 10px;
    border-radius: 10px;

}
#comment {
    padding: 0px 100px 0px 100px;
} #ip { padding: 0px 50px 0px 50px;}
#listlegnth {
    color: #00ced6;
    border: 2px solid #00ced6;
    padding: 6px;
    margin-right: 2px;
}
#delete {
    color: #00ced6;
    text-decoration: none;
    background-color: white;
    border: 1px solid #00ced6;
    padding: 5px;
}
#delete:hover {
    cursor: pointer;
    border: 1px solid white;
    background-color: #00ced6;
    color:white;
}
#deleted {
  color: #6abcf7;
}
#ban {
    color: #6abcf7;
}
</style>
</head>
<body bgcolor="black">
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th id="comment">Comment</th>
            <th>Website</th>
            <th>Gender</th>
            <th>Date Of Upload</th>
            <th>E-Mail</th>
            <th id="ip">IP</th>
        </tr>
    </thead>

    <tbody>
        <?php


            $delete = (int)$_GET['delete'];

            $page = $_GET['page']  ;
            $listlegnth = $_GET['listlegnth'];
            if (empty($listlegnth)) {
                $listlegnth = 30;
            } if (empty($page)){
                $page = 1;
            } if (empty($delete)) {
                $delete = "NaN";
            }

           $con = new mysqli($servername,$username, $password, $dbname);

            if(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $delete)) {
                $delete = (int)$delete;
                     if (is_int($delete)) {

                        $sql = "DELETE FROM comments WHERE id=$delete";

                             if (mysqli_query($con, $sql)) {
                                 echo "<span id='deleted'>Record deleted successfully</span>";
                              } else {
                                   echo "<span id='deleted'>Error deleting record: " . mysqli_error($con) . "</span>";
                           }
                             
                              } else {
                                    echo "<span id='deleted'>NaN1: Try again.</span>";
                               }
                               } else {
                                     echo "<span id='deleted'>NaN2: Try again.</span>";
                               }

            

            $execItems = $con->query("SELECT id, name, comment, website, gender, dou, email, ip FROM `comments` WHERE id BETWEEN $page AND $listlegnth ");

            while($infoItems = $execItems->fetch_array()){
                if (empty($infoItems['website'])) {
                    $infoItems['website'] = "N/A";
                }
                echo    "
                            <tr>
                                <td>".$infoItems['id']."</td>
                                <td>".$infoItems['name']."</td>
                                <td>".$infoItems['comment']."</td>
                                <td>".$infoItems['website']."</td>
                                <td>".$infoItems['gender']."</td>
                                 <td>".$infoItems['dou']."</td>
                                 <td><a id='ban' href='mailto:".$infoItems['email']."'>".$infoItems['email']."</a></td>
                                 <td>".$infoItems['ip']."</td>
                                 <td><a id='delete' href=admin.php?listlegnth=10&delete=".$infoItems['id'].">delete</a></td>
                            </tr>
                        ";
                        mysqli_close($con);

            }
            
        ?>
    </tbody>
</table>
<p id="listlegnth" style="border: none;"># of suggestions per page:</p>
<a id="listlegnth" href="admin.php?listlegnth=10<?php echo "&page=$page";?>">10</a>
<a id="listlegnth" href="admin.php<?php echo "?page=$page";?>">30</a>
<a id="listlegnth" href="admin.php?listlegnth=50<?php echo "&page=$page";?>">50</a>
<a id="listlegnth" href="admin.php?listlegnth=70<?php echo "&page=$page";?>">70</a>
<a id="listlegnth" href="admin.php?listlegnth=90<?php echo "&page=$page";?>">90</a>
<a id="listlegnth" href="admin.php?listlegnth=100<?php echo "&page=$page";?>">100</a>

<br><p id="listlegnth" style="border: none;">Page:</p>
<a id="listlegnth" href="admin.php<?php echo "?listlegnth=$listlegnth";?>">1</a>
<a id="listlegnth" href="admin.php?page=50<?php echo "&listlegnth=$listlegnth";?>">2</a>
<a id="listlegnth" href="admin.php?page=100<?php echo "&listlegnth=$listlegnth";?>">3</a>
<a id="listlegnth" href="admin.php?page=150<?php echo "&listlegnth=$listlegnth";?>">4</a>
<br><br><br>
<span id="ban"> <!-- Under construction!-->
<form action="<?php echo htmlspecialchars("header.php");?>" method="POST">
Ban a IP address: <input placeholder="IP Address" type="text"></input>
<button type="submit">Submit</button>
</form>
<br><br><br>
<span id="ban">
<form action="<?php echo  htmlspecialchars("gameadder.php");?>" method="POST" enctype="multipart/form-data">
Game adder:
<br>
Title: <input style="margin-bottom:2px ;" placeholder="Title:" name="title"type="text"></input><br>
Title(no spaces, undercase, or special chars): <input style="margin-bottom:2px ;" placeholder="Title:" name="titlens"type="text"></input><br>
Embed: <input style="margin-bottom:2px ;" placeholder="Embed:" name="embed" type="text"></input><br>
Image: <input style="margin-bottom:2px ;" type="file" name="file" /><br>
<button name="submit" type="submit">Submit</button>
<?php echo "<span style='color: red;'>".$_GET['error']."</span>";?>
</form>
</span>
<br>
<br>
</body>
</html>