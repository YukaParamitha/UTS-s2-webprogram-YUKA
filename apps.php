<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gfgf";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("gagal konek ke database: " . mysqli_connect_error());
}

function getAllData($conn)
{
    $sql = " SELECT * from goodmovie";
    $result = mysqli_query($conn, $sql);

    $data = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }

    return $data;
}

function tampilproduk($conn, $id)
{
    $sql = " SELECT * from goodmovie where id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    }

    return null;
}

function moviebaru($conn, $data)
{
    $sql = "INSERT INTO goodmovie
    (title, genre, ratings, notes, created_at, updated_at)
    VALUES (
        '{$data['title']}',
        '{$data['genre']}', 
        '{$data['ratings']}',
        '{$data['notes']}',
    NOW(),
    NOW()
    );";

    if (mysqli_query($conn, $sql)) {
        return mysqli_insert_id($conn);
    }

    return null;
}


