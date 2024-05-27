<?php
  session_start();

  include_once("./connect.php");

  if(isset($_POST['email']) && ($_POST['password'])) {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($db, $sql);

    if(mysqli_num_rows($result) > 0) {
      echo "Email telah terdaftar";
    } else {
      $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
      if(mysqli_query($db, $sql)) {
        echo "Register telah berhasil silahkan";
      } else {
        echo "Register gagal";
      }
    }
  }
?>