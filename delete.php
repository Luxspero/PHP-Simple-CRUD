<?php
include("koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM person WHERE id=$id";
    mysqli_query($conn, $query);

    header('Location: index.php');
    die();
}
?>