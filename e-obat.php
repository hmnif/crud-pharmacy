<?php
  include_once("connect.php");
  $id = $_GET["id"];

  $query_get_data = mysqli_query($db, "SELECT * FROM obat WHERE id=$id");
  $obat = mysqli_fetch_assoc($query_get_data);

  if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $kategori = $_POST["kategori"];
    $jumlah = $_POST["jumlah"];

    $query = mysqli_query($db, "UPDATE obat SET nama='$nama', kategori='$kategori', jumlah=$jumlah WHERE id=$id");
    header("Location: obat.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Obat</title>
</head>
<body>
  <h1>Form Edit Obat</h1>
  <form action="" method="POST">
  <label for="nama">Nama</label>
  <input value="<?php echo $obat["nama"] ?>" type="text" id="nama" name="nama">
  <br>
  <br>
  <label for="nama">Kategori jenis</label>
  <input value="<?php echo $obat["kategori"] ?>" type="text" id="kategori" name="kategori">
  <br>
  <br>
  <label for="nama">Jumlah</label>
  <input value="<?php echo $obat["jumlah"] ?>" type="text" id="jumlah" name="jumlah">
  <br>
  <br>
  <button type="submit" name="submit">SUBMIT</button>
  </form>
  <button><a href="obat.php">Back</a></button>
</body>
</html>