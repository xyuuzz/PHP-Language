<?php

    require("functions.php");
    

    if( isset($_POST["submit"]) ) {
        login($_POST);
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <h1>LOG IN SISTEM</h1>
    <br>


    <form action="" method="post">
    
        <label for="username">Username</label>
        <input type="text" name="username" id="username" autocomplete="off" required>
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" autocomplete="off" required>
        <br><br>
        <button type="submit" name="submit">Masuk</button>
    </form>

    <h3>Belum Punya Akun?</h3>
    <a href="daftar.php">Buat Akun</a>
</body>
</html>