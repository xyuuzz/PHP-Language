<?php

    require("functions.php");

    if ( isset($_POST["submit"]) ) {

        if (daftar($_POST) > 0) {
            echo "
                <script> 
                    alert('Berhasil Membuat Akun!'); 
                    document.location.href = 'login.php';
                </script>
            ";
        } else {
            echo "
                <script> 
                    alert('Gagal Membuat Akun!'); 
                    document.location.href = 'login.php';
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
    <title>Buat Akun</title>
</head>
<body>
    
    <h1>Buat Akun</h1>

    <form action="" method="post">
    
        <label for="username">Username</label>
        <input type="text" name="username" id="username" autocomplete="off" required>
        <br><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" autocomplete="off">
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" autocomplete="off" required>
        <br><br>
        <button type="submit" name="submit">Masuk</button>
    </form>

</body>
</html>