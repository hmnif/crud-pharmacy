<?php
  include_once("connect.php");

  $query = mysqli_query($db, "SELECT * FROM apotek");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Apotek</title>
</head>
<body>
  <h1>Daftar Apotek</h1>

  <table border="2">
    <tr>
      <td>Nama</td>
      <td>Lokasi</td>
      <td>Tahun Berdiri</td>
      <td>Action</td>
    </tr>
    <?php foreach($query as $apotek){ ?>
    <tr>
      <td><?php echo $apotek["nama"]?></td>
      <td><?php echo $apotek["lokasi"]?></td>
      <td><?php echo $apotek["tahun"]?></td>
      <td><a href="<?php echo "e-apotek.php?id=" . $apotek["id"]?>">Edit</a> | 
      <a href="<?php echo "d-apotek.php?id=" . $apotek["id"]?>">Delete</a></td>
    </tr>
  <?php }?>
  </table>
  <br>
  <button><a href="c-apotek.php">Tambah Apotek</a></button>
  <button><a href="index.php">Back</a></button>
</body>
</html>