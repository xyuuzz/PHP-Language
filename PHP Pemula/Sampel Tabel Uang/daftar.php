<?php 

require("functions.php");
session_start();

// Session
if ( isset($_SESSION["login"]) ) {
    header("Location: home.php");
    exit;
}

if( isset($_POST["submit"]) ) {
    if (daftar($_POST) > 0) {
        echo "
        <script>
            alert('Akun Berhasil Dibuat!');
            document.location.href = login.php;
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Gagal Membuat Akun!');
            document.location.href = login.php;
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
    <title>Daftar</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>
<body style="margin-left: 20px">
    
    <h1>Buat Akun</h1>

    <form method=post action="">
        
        <label>
            Username :
            <input type="text"name="username" autofocus autocomplete="off" required>
        <label>
        <br><br>   
        <label>
            Email :
            <input type="email"name="email" autocomplete="off" required>
        <label>
        <br><br>
        <label>
            Password :
            <input type="password"name="password" autocomplete="off" required>
        <label>
        <br><br>
        <button type="submit" name="submit">Daftar</button>

    </form>
    <br><br>
    <p>Sudah Punya Akun?</p>
    <a href="login.php">Log In</a>


</body>
</html>