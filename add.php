<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $born = $_POST["born"];
    $email = $_POST["email"];

    $query = "INSERT INTO person (name, born, email) VALUES ('$name','$born','$email')";
    mysqli_query($conn, $query);
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Pemakai</title>
</head>
<body>

<div>
  <h1>Data Pemakai</h1>
  <p>Edit Pemakai</p> 
  <hr>
  <form action="" method="post">
    <label for="">Nama</label>
    <input type="text" name="name" value="" required><br><br>
    <label for="">Tanggal Lahir</label>
    <input type="date" name="born" value="" required><br><br>
    <label for="">Email</label>
    <input type="email" name="email" value=""><br><br>

    <button type="submit">Simpan</button>
    <button onclick="location.href='index.php'" style="background-color:red;">Batal</button>
    
  </form>
</div>

</body>
</html>