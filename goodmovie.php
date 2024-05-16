<?php
session_start();
require_once "apps.php";

$p= getAllData($conn);
?>

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoodMovie</title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>

<body>
    <center><h1>GOOD MOVIE</h1><center>

    <button><a href="index.php">BACK TO HOME</a></button>

    <br>

    <br>

    <button><a href="/goodmovie-tambah.php">ADD MORE</a></button>

    <br>
    
    <br>


    <?php if (isset($_SESSION['BERHASIL_TAMBAH_GOOD_MOVIE'])) : ?>
        <p><?= $_SESSION['BERHASIL_TAMBAH_GOOD_MOVIE'] ?></p>
        <?php session_unset(); ?>
    <?php endif; ?>


    <table>
        <thead>
            <tr>
            <th>id</th>
                <th>TITLE</th>
                <th>GENRE</th>
                <th>RATINGS</th>
                <th>NOTE</th>
                <th>OPTION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($p as $k => $v) : ?>
                <tr>
                    <td><?= $v['id'] ?></td>
                    <td><?= $v['title'] ?></td>
                    <td><?= $v['genre'] ?></td>
                    <td><?= $v['ratings'] ?></td>
                    <td><?= $v['notes'] ?></td>
                    
                    
                    <td>
                    <a href="<?= "/goodmovie-detail.php?id={$v['id']}" ?>"class="btn btn-primary">show</a>
                    <a href="<?= "/goodmovie-hapus.php?id={$v['id']}" ?>"class="btn btn-danger">Delete</a>
                    <a href="<?= "/goodmovie-edit.php?id={$v['id']}" ?>"class="btn btn-success">update</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>