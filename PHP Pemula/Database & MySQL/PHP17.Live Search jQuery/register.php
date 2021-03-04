<?php

// memulai variabel global session, pengertian ada di rangkuman php8
session_start();
// Jika user telah login, user tidak akan bisa mengakses halaman login
// Memulai variabel global session
if( isset($_SESSION["login"]) ) {
    header("Location: php13.php");
    exit;
} 

    require("functions.php");

    if ( isset($_POST["submit"]) ) {

        if (register($_POST) > 0) {
            tambahTable($_POST["username"]);
            echo "
                <script> 
                alert('Akun Berhasil Dibuat!!'); 
                document.location.href = 'login.php';
                </script>
            ";
        } else {
            echo "
            <script> 
            alert('Gagal Membuat Akun!!'); 
            </script>
            ";
        }
        
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regitrasi Akun</title>
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
    
    <h1>Regitrasi Akun</h1>
    <form action="" method="post" style="margin-left: 20px">

        <label for="username">Username : </label>
        <input type="text" name="username" id="username" autocomplete="off" autofocus required> <br><br>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password" autocomplete="off" required> <br><br>
        <label for="password2">Konfirmasi Password : </label>
        <input type="password" name="password2" id="password2" autocomplete="off" required> <br><br>
        
        <button type="submit" name="submit">Daftar</button>
    </form>

    <h3>Sudah Punya akun?</h3>
    <a href="login.php">Login</a>

</body>
</html>