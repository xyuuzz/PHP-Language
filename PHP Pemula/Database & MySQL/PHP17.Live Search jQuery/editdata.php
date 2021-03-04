<?php
// Memulai variabel global session
session_start();
// Untuk melemparkan user ke hal login jika user belum log in
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
} 

    require("functions.php");


    // Mengambil data pada url
    $id = $_GET["id"];
    $username = $_SESSION["username"];

    // Mengambil query berdasarkan $id
    $ubah = table("SELECT * FROM $username WHERE id = $id")[0]; // karena berbentuk array numerik dan array numerik tersebut berisi array assosiatif, maka tambahkan indeks 0 agar bisa langsung mengakses array asosiatif.

    // Jika tombol submit ditekan jalankan syntax nya.
    if (isset($_POST["submit"])) {

        if (edit($_POST, $username) > 0) {
            echo "
                <script> 
                    alert('Data Berhasil Diubah');
                    document.location.href = 'home.php';
                </script>
            ";

        } else {
            echo "

                <script> 
                alert('Gagal Mengubah Data');
                </script>
            ";
            var_dump(mysqli_error($connect));
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

    <h1>Edit Data Nilai Siswa</h1>
    
    <form action="" method="post" style="margin-left: 20px;" enctype="multipart/form-data">
    <!-- enctype="multipart/form-data" digunakan untuk nanti mengelola file gambar..  atribut tersebut nanti akan berfungsi untuk memecah form yang mana file gambar akan dikelola oleh variable global $_FILES sedangkan file lainya akan dikelola $_POST-->
        <input type="hidden" name="id" value="<?=$ubah["id"]?>">
        <input type="hidden" name="gambarLama" value="<?=$ubah["fotoSiswa"]?>">

        <label for="fotoSiswa">Foto Siswa : </label>
        <img src="img/<?= $ubah["fotoSiswa"]; ?>" width="100"> <br> <br>
        <input type="file" name="fotoSiswa" id="fotoSiswa" >
        <br> <br>
        <label for="namaSiswa">Nama Siswa : </label>
        <input type="text" name="namaSiswa" id="namaSiswa" required value="<?=$ubah["namaSiswa"]?>">
        <br><br>
        <label for="nilaiIpa">Nilai IPA : </label>
        <input type="text" name="nilaiIPA" id="nilaiIpa" required value="<?=$ubah["nilaiIpa"]?>">
        <br><br>
        <label for="nilaiIPS">Nilai IPS : </label>
        <input type="text" name="nilaiIPS" id="nilaiIPS" require value="<?=$ubah["nilaiIps"]?>"d>
        <br><br>
        <button type="submit" name="submit" style="margin-left: 20px;">Ubah Data</button>

    </form>


</body>
</html>
