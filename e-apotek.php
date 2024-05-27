<?php
  include_once("connect.php");
  $id = $_GET["id"];

  $query_get_data = mysqli_query($db, "SELECT * FROM apotek WHERE id=$id");
  $obat = mysqli_fetch_assoc($query_get_data);

  if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $lokasi = $_POST["lokasi"];
    $tahun = $_POST["tahun"];

    $query = mysqli_query($db, "UPDATE apotek SET nama='$nama', lokasi='$lokasi', tahun=$tahun WHERE id=$id");
    header("Location: apotek.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Apotek</title>
</head>
<body>
  <h1>Form Edit Apotek</h1>
  <form action="" method="POST">
  <label for="nama">Nama</label>
  <input value="<?php echo $obat["nama"] ?>" type="text" id="nama" name="nama">
  <br>
  <br>
  <label for="nama">Lokasi</label>
  <input value="<?php echo $obat["lokasi"] ?>" type="text" id="lokasi" name="lokasi">
  <br>
  <br>
  <label for="nama">Tahun</label>
  <input value="<?php echo $obat["tahun"] ?>" type="text" id="tahun" name="tahun">
  <br>
  <br>
  <button type="submit" name="submit">SUBMIT</button>
  </form>
  <button><a href="apotek.php">Back</a></button>
</body>
</html>