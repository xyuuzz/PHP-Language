<?php
    require("functions.php");
    // Jika tombol submit ditekan jalankan syntax nya.
    if (isset($_POST["submit"])) {
        if (tambah($_POST) > 0) {
            echo "

                <script> 
                    alert('Data Berhasil Dimasukan');
                    document.location.href = 'php10.php';
                </script>
            ";
            // header("Location: php10.php");

        } else {
            echo "

                <script> 
                alert('Gagal Memasukan Data');
                document.location.href = 'php10.php';
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
    
    <form action="" method="post" style="margin-left: 20px;">
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