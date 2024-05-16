
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIE LIST</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
        body {
            background-image: url(img/bioskopgelap.jpg);
            filter: grayscale(50%);
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #e87272;
            background-image: url(img/bioskopterang.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            padding: 150px;
            border-radius: 100px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .h1 {
            margin-bottom: 20px;
            color: white;
        }

        button {
            background-color: #a9a9a9;
            color: black;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        button a {
            text-decoration: none;
        }

        button:hover {
            background-color: #c53c3c;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>MOVIE LIST ?></h1>
        <button><a href="goodmovie.php">GOOD MOVIE</a></button>
        <br>
        <button><a href="badmovie.php">BAD MOVIE</a></button>
    </div>
</body>

</html>
