<?php
include("koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM person WHERE id=$id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
}

if ($_SERVER["REQUEST_METHOD"]) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $born = $_POST["born"];
    $email = $_POST["email"];

    $query = "UPDATE person SET name='$name', born='$born', email='$email' WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Pemakai</title>
  <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
  </style>
</head>
<body>

<div>
  <h1>Data Pemakai</h1>
  <p>Edit Pemakai</p> 
  <hr>
  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <label for="">Nama</label>
    <input type="text" name="name" value="<?= $data['name']?>" required><br><br>
    <label for="">Tanggal Lahir</label>
    <input type="date" name="born" value="<?= $data['born']?>" required><br><br>
    <label for="">Email</label>
    <input type="email" name="email" value="<?= $data['email']?>" required><br><br>

    <button type="submit">Simpan</button>
    <button onclick="location.href='index.php'" style="background-color:red;">Batal</button>
    
  </form>
</div>

</body>
</html>