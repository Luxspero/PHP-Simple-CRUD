<?php
include("koneksi.php");
$query = "SELECT * FROM person";
$result = mysqli_query($conn, $query);

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
  <p>Berikut List Pegawai</p> 
  <hr>
  <button onclick="location.href='add.php'"> + Tambah Data</button>
  <hr>
  <table border="1">
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Tanggal Lahir</th>
      <th>Email</th>
      <th>Act</th>
    </tr>
    <?php 
    $no = 1;
    foreach ($result as $r) : ?>
      <tr>
        <td><?= $no ?></td>
        <td><?= $r['name'] ?></td>
        <td><?= $r['born'] ?></td>
        <td><?= $r['email'] ?></td>
        <td>
          <button onclick="location.href='edit.php?id=<?=$r['id']?>'">Edit</button>
          <button style="background-color:red;" onclick="location.href='delete.php?id=<?=$r['id']?>'">Delete</button>
        </td>
      </tr>
    <?php 
    $no++;
    endforeach;
    ?>
  </table>
</div>

</body>
</html>