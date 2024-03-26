<?php
$servername = "localhost";
$database = "test";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

//cek koneksi
if (!$conn) {
    die("Koneksi Gagal : ".mysqli_connect_error());
}


?>
