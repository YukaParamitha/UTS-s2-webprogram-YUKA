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
        body {
        background-color: #E0CFC2;     
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

        .yuks {
            color: #fff;
        }
        button {
            background-color: #ff8080;
            color: #000;
            border: none;
            padding: 5px 10px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 14px;
        }
        button a {
            text-decoration: none;
        }

        button:hover {
            background-color: #873632;
        }

    </style>
</head>

<body>
    <h1>ADD NEW MOVIE</h1>
    <div class= "yuks">
         <button><a href="/goodmovie.php">BACK TO MOVIE</a></button>
    </div>

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

