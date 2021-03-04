<?php

// memulai variabel global session, pengertian ada di rangkuman php8
session_start();
require("functions.php");

// Validasi Remember Me, Mengecek Cookie ada atau tidak
if( isset($_COOKIE["id"]) && isset($_COOKIE["id2"]) ) {
    $id = $_COOKIE["id"];
    $id2 = $_COOKIE["id2"];
    $verifID = mysqli_query($connect, "SELECT id FROM users WHERE id = $id"); // jika id bernilai true maka akan ada baris yang dikembalikan

    if( mysqli_num_rows($verifID) > 0 && $id2 = hash("sha512", $_POST["password"]) ) {
        $_SESSION["login"] = true;
    }
}

// Jika user telah login, user tidak akan bisa mengakses halaman login
// Memulai variabel global session
if( isset($_SESSION["login"]) ) {
    header("Location: php13.php");
    exit;
}

    // Validasi Login versi Pak Dhika 
    if (isset($_POST["submit"])) {
        $username = mysqli_real_escape_string($connect, $_POST["username"]);
        $password = mysqli_real_escape_string($connect, $_POST["password"]);

        $validUsername = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username' ");
        
        // fungsi mysqli_num_rows adalah untuk mengecek ada tidak nya baris yang dikembalikan pada parameter nya. Jika ada maka akan mengembalikan nilai 1, namun jika tidak ada akan mengembalikan nilai 0.
        if ( mysqli_num_rows($validUsername) === 1) {
            $row = mysqli_fetch_assoc($validUsername);
            if( password_verify($password, $row["password"]) ) {
                $_SESSION["login"] = true;

                // Cek Remember Me dan jika di centang maka akan membuat function setcookie()
                if (isset($_POST["rememberMe"]) ) {
                    // setcookie("remember", "true", time()+120); 
                    setcookie("id", $row["id"], time()+120);
                    setcookie("id2", hash("sha512", $password), time()+120);
                }
                
                // $user = $_SESSION["username"] = $username;
                header("Location: php13.php");
                exit;
            }
        }

        $error = true;
    }


    // Validasi Login versi Saya 
    // if ( isset($_POST["submit"]) ) {

    //     if (login($_POST) > 0) {
    //         echo "
    //             <script> 
    //             alert('Anda Berhasil Login'); 
    //             document.location.href = 'php13.php';
    //             </script>
    //         ";
    //     } else {
    //         echo "
    //             <script> 
    //             alert('Masukan Username dan Password dengan benar'); 
    //             </script>
    //         ";
    //     }
    // }
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        label {
            display: block;
        }
        h3,a {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    
    <h1>Selamat Datang Di Halaman Web Kami</h1>
    <h2>Silahkan Login Terlebih Dahulu</h2>

    <!-- Validasi Login versi Pak Dhika  -->
    <?php if(isset($error)) { ?>
        <p style="color: red; margin-left: 5px;">Masukan Username dan Password dengan Benar!!</p>
    <?php } ?>

    <form action="" method="post" style="margin-left:20px">
        <label for="username">Masukan Username</label>
        <input type="text" name="username" id="username" autofocus autocomplete="off" required>
        <br><br>
        <label for="password">Masukan Password</label>
        <input type="password" name="password" id="password" autocomplete="off" required>

        <label>
            Remember Me
            <input type="checkbox" name="rememberMe">
        <label>
        <br>
        <button type="submit" name="submit">Log In</button>
    </form>

    <h3>Belum Punya akun?</h3>
    <a href="register.php">Daftar Dulu</a>
</body>
</html>