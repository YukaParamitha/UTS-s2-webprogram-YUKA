<?php
require_once "apps.php";

$id = $_GET['id'];
$d = tampilproduk($conn, $id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Movie</title>
</head>

<body>
    <h1>GOOD MOVIE DETAIL</h1>

    <a href="/goodmovie.php">back to GOOD MOVIE</a>

    <br>
    <br>

    <p>TITLE : <?=$d['title'] ?></p>
    <p>DATE WATCH : <?=$d['genre'] ?></p>
    <p>RATINGS : <?=$d['ratings'] ?></p>
    <p>NOTE : <?=$d['notes'] ?></p>

</body>

</html>