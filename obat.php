<?php
  include_once("connect.php");

  $query = mysqli_query($db, "SELECT * FROM obat");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Obat</title>
</head>
<body>
  <h1>Daftar Obat</h1>

  <table border="2">
    <tr>
      <td>Nama</td>
      <td>Kategori</td>
      <td>Jumlah</td>
      <td>Action</td>
    </tr>
    <?php foreach($query as $obat){ ?>
    <tr>
      <td><?php echo $obat["nama"]?></td>
      <td><?php echo $obat["kategori"]?></td>
      <td><?php echo $obat["jumlah"]?></td>
      <td><a href="<?php echo "e-obat.php?id=" . $obat["id"]?>">Edit</a> | 
      <a href="<?php echo "d-obat.php?id=" . $obat["id"]?>">Delete</a></td>
    </tr>
  <?php }?>
  </table>
  <br>
  <button><a href="c-obat.php">Tambah Obat</a></button>
  <button><a href="index.php">Back</a></button>
</body>
</html>