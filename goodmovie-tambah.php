<?php
require_once"apps.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH NEW MOVIE</title>
    <style>
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid;
        }

        input[type=text] {
            width: 100%;
            border: 1px solid;
            padding: 5px;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>

<body>
    <h1>ADD GOOD MOVIE</h1>
    <a href="/goodmovie.php">back to GOOD MOVIE</a>
    <div class="content">

        <form action="goodmovie-store.php" method="post">
               <div>
                <label>Title</label>
                <input type="text" name="title">
            </div>
            <div>
                <label>Genre</label>
                <select name="genre">
                    <option value="Horror">Horor</option>
                    <option value="Romance">Romance</option>
                    <option value="Comedy">Comedy</option>
                    <option value="History">History</option>
                    <option value="Drama">Drama</option>
                    <option value="Action">Action</option>
                    <option value="Thriller">Thriller</option>
                </select>
            </div>
         
            <div>
                <label>Ratings</label>
                <input type="text" name="ratings">
            </div>
            <div>
                <label>Note</label>
                <input type="text" name="notes">
            </div>
            <div style="margin-top: 20px;">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

</body>

</html>

<!-- <?php 
require_once"data.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Riwayat Film</title>
    <style>
        :root{
    --text-color: #fff;
    --bg-color: #ff2400;
    --second-bg-color: #000;
    --main-color: #fff;
    --other-color: #c3cad5;

    --h1-font: 4.5rem;
    --h2-font: 2.9rem;
    --p-font: 1rem
}
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #fff;
        }   
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid;
        }

        input[type=text] {
            width: 100%;
            border: 1px solid;
            padding: 5px;
        }
            .content {
                padding: 20px;
            }
        header {
            background-color: #000;
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
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
    color: #e50914;
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
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
}

.search-container {
    position: relative;
}

#searchInput {
    padding: 5px 10px 5px 30px;
    border: none;
    border-radius: 3px;
    font-size: 1rem;
    background-color: #333;
    color: #fff;
}

#searchIcon {
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    color: #000;
    cursor: pointer;
}
span{
    color: var(--main-color);
}
.a-btn{
    display: inline-block;
    padding: 11px 26px;
    background: transparent;
    color: var(--main-color);
    border: 2px solid var(--main-color);
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    transition: all .50s ease;
    text-decoration: none;
}
.a-btn:hover{
    background: var(--main-color);
    color: var(--bg-color);
    box-shadow: 0 0 20px var(--main-color);
    transform: scale(1.1);
}
.content {
    color: #000;
}
</style>
        
</head>
<body>
<header>
        <div class="container">
        <div class="logo">Data Kucing</div>
            <nav>
                <ul>
                    <li><a href="index.php">kembali</a></li>
                </ul>
            </nav>
            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Search...">
                <i class="fas fa-search" id="searchIcon"></i>
            </div>
        </div>
    </header>
    <br>
    <br>
    <div class="content">
    <h1>Riwayat Kucing</h1>

    <form action="goodmovie-store.php" method="post">
        <div>
            <label>Nama Kucing</label>
            <input type="text" name="nama_kucing">
        </div>
        <div>
            <label>Jenis Kucing</label>
            <select name="jenis_kucing">
                <option value="Angora">Angora</option>
                <option value="Persia">Persia</option>
                <option value="Maine coon">Maine coon</option>
                <option value="Siam">Siam</option>
            </select>
        </div>
        <div>
            <label>Harga Kucing</label>
            <select name="harga_kucing">
                <option value="5.000.000">5.000.000</option>
                <option value="4.000.000">4.000.000</option>
                <option value="12.000.000">12.000.000</option>
                <option value="6.000.000">6.000.000</option>
            </select>
        </div>
        <div style="margin-top: 20px;">
            <input type="submit"  value="simpan">
    </form>
    
</body>
</html> -->