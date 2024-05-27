<?php
    session_start();

    // cek apakah user sudah punya SESSION["email"]
    if (!isset($_SESSION["email"])) {
        // pindahin ke halaman index.php
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Farmasi</title>
</head>
<body>
  <h1>Selamat datang di Aplikasi Farmasi V2</h1>
  <button><a href="obat.php">Daftar Obat</a></button>
  <button><a href="apotek.php">Daftar Apotek</a></button>

  <form action="./logout_proccess.php" method="POST">
    <button type="submit">Exit</button>
  </form>
</body>
</html>