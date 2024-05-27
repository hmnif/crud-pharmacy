<?php
  include_once("connect.php");
  if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $kategori = $_POST["kategori"];
    $jumlah = $_POST["jumlah"];

    $query = mysqli_query($db, "INSERT INTO obat VALUES (
      NULL, '$nama', '$kategori', $jumlah
    )");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Obat</title>
</head>
<body>
  <h1>Form Tambah Obat</h1>
  <form action="" method="POST">
  <label for="nama">Nama</label>
  <input type="text" id="nama" name="nama">
  <br>
  <br>
  <label for="nama">Kategori jenis</label>
  <input type="text" id="kategori" name="kategori">
  <br>
  <br>
  <label for="nama">Jumlah</label>
  <input type="text" id="jumlah" name="jumlah">
  <br>
  <br>
  <button type="submit" name="submit">SUBMIT</button>
  </form>
  <button><a href="obat.php">Back</a></button>
</body>
</html>