<?php

// Memulai variabel global session
session_start();
// Untuk melemparkan user ke hal login jika user belum log in
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
} 

    require("functions.php");
    // Jika tombol submit ditekan jalankan syntax nya.
    if (isset($_POST["submit"])) {
        
        if (tambah($_POST, $_SESSION["username"]) > 0) {
            echo "

                <script> 
                    alert('Data Berhasil Dimasukan');
                    document.location.href = 'home.php';
                </script>
            ";

        } else {
            echo "

                <script> 
                alert('Gagal Memasukan Data');
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

    <h1>Tambah Data Nilai Siswa</h1>
    
    <form action="" method="post" style="margin-left: 20px;" enctype="multipart/form-data">
    <!-- enctype="multipart/form-data" digunakan untuk nanti mengelola file gambar..  atribut tersebut nanti akan berfungsi untuk memecah form yang mana file gambar akan dikelola oleh variable global $_FILES sedangkan file lainya akan dikelola $_POST-->
        <label for="fotoSiswa">Foto Siswa : </label>
        <input type="file" name="fotoSiswa" id="fotoSiswa" required>
        <br> <br>
        <label for="namaSiswa">Nama Siswa : </label>
        <input type="text" name="namaSiswa" id="namaSiswa" required>
        <br><br>
        <label for="nilaiIpa">Nilai IPA : </label>
        <input type="text" name="nilaiIPA" id="nilaiIpa" required>
        <br><br>
        <label for="nilaiIPS">Nilai IPS : </label>
        <input type="text" name="nilaiIPS" id="nilaiIPS" required>
        <br><br>
        <button type="submit" name="submit" style="margin-left: 20px;">Tambah</button>
    </form>


</body>
</html>