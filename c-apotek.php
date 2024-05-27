<?php
  include_once("connect.php");
  if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $lokasi = $_POST["lokasi"];
    $tahun = $_POST["tahun"];

    $query = mysqli_query($db, "INSERT INTO apotek VALUES (
      NULL, '$nama', '$lokasi', $tahun
    )");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Apotek</title>
</head>
<body>
  <h1>Form Tambah Apotek</h1>
  <form action="" method="POST">
  <label for="nama">Nama</label>
  <input type="text" id="nama" name="nama">
  <br>
  <br>
  <label for="nama">Lokasi</label>
  <input type="text" id="lokasi" name="lokasi">
  <br>
  <br>
  <label for="nama">Tahun berdiri</label>
  <input type="text" id="tahun" name="tahun">
  <br>
  <br>
  <button type="submit" name="submit">SUBMIT</button>
  </form>
  <button><a href="apotek.php">Back</a></button>
</body>
</html>