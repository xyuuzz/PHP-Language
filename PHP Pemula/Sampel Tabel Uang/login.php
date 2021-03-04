<?php 

require("functions.php");
session_start();

// Mengecek apakah cookie remember ada atau tidak
if( isset($_COOKIE["id"]) && isset($_COOKIE["kk"]) ) {
    $id = $_COOKIE["id"];
    $id2 = $_COOKIE["kk"];
    $validation = mysqli_query($connect, "SELECT * FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($validation);

    if( mysqli_num_rows($validation) ) {
        if( $id2 == hash("sha256", $row["password"]) ) {
            $_SESSION["login"] = true;
        }
    }
}

// Session
if ( isset($_SESSION["login"]) ) {
    header("Location: home.php");
    exit;
}

// Validasi Login
if ( isset($_POST["submit"]) ) {
    // var_dump(login($_POST)); die;

    $username = $_POST["username"];
    $password = $_POST["password"];
    $validation = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username' ");

    // Untuk menjadikan $validation menjadi arr asosiatif
    $row = mysqli_fetch_assoc($validation);
    
    if ( $row ) {
        if( password_verify($password, $row["password"]) ) {
            $_SESSION["login"] = true;
            // Membuat Cookie untuk remember Me
            if( isset($_POST["remember"]) ) {
                setcookie("id", $row["id"], time()+60);
                setcookie("kk", hash("sha256", $row["password"]), time()+60 );
            }
            echo "
                <script>
                    alert('Anda Berhasil Login');
                    document.location.href = 'home.php';
                </script>
            ";
        }
    }
    $error = true;

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body style="margin-left: 20px;">

    <h1>Halaman Login</h1>

<!-- Pesar Eror -->
    <?php if (isset($error)) { ?>
        <p style="color:red">Username atau password yang anda masukan salah</p>
    <?php } ?>
    
    <form method=post action="">
        
        <label>
            Username :
            <input type="text"name="username" autofocus autocomplete="off" required>
        <label>
        <br><br>
        <label>
            Password :
            <input type="password"name="password" autocomplete="off" required>
        <label>
        <br><br>
        <label>
            <input type="checkbox"name="remember">
            Remember Me
        <label>

        <br><br>
        <button type="submit" name="submit"> Login </button>

    </form>
    <br><br>
    <p>Belum Punya akun?</p>
    <a href="daftar.php">Daftar</a>


</body>
</html>