<?php
require_once "apps.php";
session_start();

$n = moviebaru($conn, $_POST);
//simpan $_POST ke database
mysqli_close($conn);

if (is_null($n)) {
    $_SESSION['BERHASIL_TAMBAH_MOVIE'] = "Failed added data title";
} else {
    $_SESSION['BERHASIL_TAMBAH_MOVIE'] = "Successfully added data title {$_POST['title']},,
    genre : {$_POST['genre']}, ratings : {$_POST['ratings']}, notes : {$_POST['notes']}";
}

header("Location: /goodmovie.php");
die();
