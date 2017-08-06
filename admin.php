<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "comments";


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>
<style>
th, table, td {
    border: 2px solid #6abcf7;
    border-collapse: collapse;
    background-color: black;
    color: #6abcf7;
    padding: 10px;

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
            <th id="ip">IP</th>
        </tr>
    </thead>

    <tbody>
        <?php

            $_GET['page'] = $page;
            $_GET['listlegnth'] = $page;
            if (empty($listlegnth)) {
                $listlegnth = 30;
            } if (empty($page)){
                $page = 1;
            }
            $con = new mysqli($servername,$username, $password, $dbname);

            $execItems = $con->query("SELECT id, name, comment, website, gender, dou, ip FROM `comments` WHERE id BETWEEN $page AND $listlegnth ");

            while($infoItems = $execItems->fetch_array()){
                echo    "
                            <tr>
                                <td>".$infoItems['id']."</td>
                                <td>".$infoItems['name']."</td>
                                <td>".$infoItems['comment']."</td>
                                <td>".$infoItems['website']."</td>
                                <td>".$infoItems['gender']."</td>
                                 <td>".$infoItems['dou']."</td>
                                 <td>".$infoItems['ip']."</td>
                            </tr>
                        ";

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

</body>
</html>