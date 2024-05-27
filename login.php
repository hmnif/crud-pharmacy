<?php
    session_start();
 
    // cek apakah user sudah punya SESSION["email"]
    if (isset($_SESSION["email"])) {
        // pindahin ke halaman index.php
        header("Location: index.php");
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
 
    <!-- form, method: POST, action: ./login_proccess.php -->
    <form action="./log_proccess.php" method="POST">
        <!-- email -->
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
 
        <br>
 
        <!-- password -->
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
 
        <br>
 
        <button type="submit" name="submit">LOGIN</button>
    </form>
</body>
</html>