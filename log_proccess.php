<?php
    // memulai interaksi SESSION
    session_start();
    // mengambil koneksi database
    include_once("./connect.php");
    // cek apakah ada request (kiriman) email dan password dari form
    if(isset($_POST['email']) && isset($_POST['password'])) {
        // kalo misal ada, simpen dalam masing-masing variable.
        $email = $_POST['email']; // email
        $password = $_POST['password']; // password
        // cek apakah email beneran terdaftar di database
        $sql = "SELECT * FROM users WHERE email='$email'";
        // jalankan query pengambilan data
        $result = mysqli_query($db, $sql);
        // jika email ditemukan, maka cek password.
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            // mencocokkan input password dengan hash password.
            if(password_verify($password, $row['password'])) {
                // memberikan SESSION["email"]
                $_SESSION['email'] = $email;
                // pindahkan lokasi ke index.php
                header("Location: index.php");
                exit;
            } else {
                echo "Password salah.";
            }
        } else {
            echo "Email tidak ditemukan.";
        }
    }