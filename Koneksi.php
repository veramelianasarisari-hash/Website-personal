<?php

$host     = "localhost";
$user     = "root";
$password = "";
$database = "clothesis";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>