<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db   = "sekolah";

$connect = mysqli_connect ($host, $user, $pass, $db);

if (!$connect) {
    die ("Gagal Terhubung dengan Database: " . mysqli_connect_error());
}

?>