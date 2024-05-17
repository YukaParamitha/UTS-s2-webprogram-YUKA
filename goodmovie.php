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
    body {
        background-color: #E0CFC2;
        
    }
        header {
    background-color: #873632 ;
    padding: 15px 0;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}
      .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.logo {
    font-size: 1.5rem;
    font-weight: bold;
    color:#E0CFC2 ;
}

nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    color: #E0CFC2;
    text-decoration: none;
    font-size: 1rem;
}
        table,
        th,
        td {
            border: 2px solid;
            padding: 15px;
            margin-left: auto;
            margin-right: auto;
           
        }

        table {
            border-collapse: collapse;
            width: 70%;
            text-align: center;
            background-color: #E0CFC2;
        }
        .styled-table th {
        background-color: #873632;
        border: 1px solid #000;
        color: #E0CFC2;
        text-align: left;
        }

        .styled-table td {
        border: 1px solid #000;
        padding: 8px;
        background: #CAAE9F;
    }
        
 footer {
    position: fixed;
    display: flex;
    bottom: 0;
    width: 100%;
    height: 60px;
    background: #873632;
    align-items: center;
    justify-content: center;
 }

    </style>
</head>

<body>
<header>
        <div class="container">
            <div class="logo">Movie List</div>
            <nav>
                <ul>
                    <li><a href="index.php" class="a-btn">BACK TO HOME</a></li>
                    <li><a href="goodmovie-tambah.php" class="a-btn">ADD MORE</a></li>
                </ul>
            </nav>
           
        </div>
</header>
<br>
<br>
<br>
<br>
<br>
<br>

    <?php if (isset($_SESSION['BERHASIL_TAMBAH_GOOD_MOVIE'])) : ?>
        <p><?= $_SESSION['BERHASIL_TAMBAH_GOOD_MOVIE'] ?></p>
        <?php session_unset(); ?>
    <?php endif; ?>


    <table class="styled-table">
        <thead>
            <tr>
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
    <footer>
        <div class= "kaki">
            &copy; MovieList
        </div>
    </footer>
</body>

</html>