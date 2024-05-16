<?php
require_once "apps.php";
$id = $_GET['id'];

if (isset($_POST["submit"])) {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $ratings = $_POST['ratings'];
    $notes = $_POST['notes'];

    $sql = "UPDATE goodmovie SET `title`='$title',`genre`='$genre',`ratings`='$ratings',`notes`='$notes' WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: goodmovie.php?msg=Data updated successfully");
        exit;
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>

<body>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>Update Data Mahasiswa</title>
    </head>

    <body>

        <div class="container">
            <div class="text-center mb-4">
                <h3>Edit User Information</h3>
                <p class="text-muted">Click update after changing any information</p>
            </div>

            <?php
            $sql = "SELECT * FROM `goodmovie` WHERE id = $id LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $v = mysqli_fetch_assoc($result);
            ?>

            <div class="container d-flex justify-content-center">
                <form action="" method="post" style="width:50vw; min-width:300px;">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">title:</label>
                            <input type="text" class="form-control" name="title" value="<?php echo $v['title'] ?>">
                        </div>

                        <div class="col">
                        <label class="form-label">Genre</label>
                <select name="genre"value="<?php echo $v['genre']?>">
                    <option value="Horror">Horor</option>
                    <option value="Romance">Romance</option>
                    <option value="Comedy">Comedy</option>
                    <option value="History">History</option>
                    <option value="Drama">Drama</option>
                    <option value="Action">Action</option>
                    <option value="Thriller">Thriller</option>
                </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ratings:</label>
                        <input type="text" class="form-control" name="ratings" value="<?php echo $v['ratings'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">notes:</label>
                        <input type="text" class="form-control" name="notes" value="<?php echo $v['notes'] ?>">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                        <a href="goodmovie.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </body>

    </html>