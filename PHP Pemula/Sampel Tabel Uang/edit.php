<?php
    require "functions.php";

    // untuk session
    session_start();
    if ( !isset($_SESSION["login"]) ) {
        header("Location: login.php");
        exit;
    }

    $id = $_GET["id"];

    $dataBaris = mysqli_query($connect, "SELECT * FROM keuangan WHERE id = $id");
    $arrData = mysqli_fetch_assoc($dataBaris);


    if (isset($_POST["submit"])) {
        if (edit($_POST) > 0) {
            echo "
                <script>
                    alert('Data Berhasil Di Ubah!');
                    document.location.href = 'home.php';
                </script>
            ";
        } else {
            echo "
                <script>
                alert('Gagal Mengubah Data');
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
        <input type="hidden" name="id">

        <label for="pemasukan">Pemasukan</label><br>
        <input type="number" name="pemasukan" id="pemasukan" required value="<?= $arrData["pemasukan"]?>">
        <br><br>
        <label for="pengeluaran">Pengeluaran</label><br>
        <input type="number" name="pengeluaran" id="pengeluaran" required value="<?= $arrData["pengeluaran"]?>">
        <br><br>
        <label for="deskripsi">Deskripsi</label required> <br>
        <textarea name="deskripsi" id="deskripsi" style="width: 300px; height: 80px;"> <?= $arrData["deskripsi"]?> </textarea>
        <br><br>

        <button type="submit" name="submit" style="padding: 10px 20px;">Simpan</button>

    </form>


</body>
</html>