<?php
  if(isset($_SESSION['email'])) {
    header('Location: index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>
<body>
  <h1>Register!</h1>
  <form action="./req_proccess.php" method="POST">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="email">Password</label>
    <input type="password" name="password" id="password">

    <button type="submit" value="register">SUBMIT</button>
  </form>
</body>
</html>