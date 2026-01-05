<?php
$server = "localhost";
$user = "root";
$pass = "12345678";
$database = "login";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>