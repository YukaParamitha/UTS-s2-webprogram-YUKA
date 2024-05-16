<?php
require_once "apps.php";

$id = $_GET["id"];
$sql = "DELETE FROM goodmovie WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: goodmovie.php?msg=Data deleted successfully");
} else {
    echo "Failed: " . mysqli_error($conn);
}