<?php
    require "functions.php";
    session_start();

    // untuk session
    if ( !isset($_SESSION["login"]) ) {
        header("Location: login.php");
        exit;
    }

    if (isset($_POST["submit"])) {
        if (tambah($_POST) > 0) {
            echo "
                <script>
                    alert('Data Berhasil Ditambahkah');
                    document.location.href = 'home.php';
                </script>
            ";
        } else {
            echo "
                <script>
                alert('Data Gagal Ditambahkah');
                document.location.href = 'home.php';
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
    <title>Tambah Data</title>
</head>
<body>
    
    <h1>Tambahkan Data disini</h1>

    <form action="" method="post">

        <label for="pemasukan">Pemasukan</label><br>
        <input type="number" name="pemasukan" id="pemasukan" required>
        <br><br>
        <label for="pengeluaran">Pengeluaran</label><br>
        <input type="number" name="pengeluaran" id="pengeluaran" required>
        <br><br>
        <label for="deskripsi">Deskripsi</label required> <br>
        <textarea name="deskripsi" id="deskripsi" style="width: 300px; height: 80px;"> </textarea>
        <br><br>

        <button type="submit" name="submit" style="padding: 10px 20px;">Tambah</button>

    </form>


</body>
</html>