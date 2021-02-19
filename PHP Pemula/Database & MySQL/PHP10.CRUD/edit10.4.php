<?php
    require("functions.php");

    // Mengambil data pada url
    $id = $_GET["id"];

    // Mengambil query berdasarkan $id
    $ubah = table("SELECT * FROM kelas6a WHERE id = $id")[0]; // karena berbentuk array numerik dan array numerik tersebut berisi array assosiatif, maka tambahkan indeks 0 agar bisa langsung mengakses array asosiatif.

    // Jika tombol submit ditekan jalankan syntax nya.
    if (isset($_POST["submit"])) {
        if (edit($_POST) > 0) {
            echo "
                <script> 
                    alert('Data Berhasil Diubah');
                    document.location.href = 'php10.php';
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
    
    <form action="" method="post" style="margin-left: 20px;">
        <input type="hidden" name="id" value="<?=$ubah["id"]?>>

        <label for="fotoSiswa">Nama Siswa : </label>
        <input type="text" name="fotoSiswa" id="fotoSiswa" required value="<?=$ubah["fotoSiswa"]?>">
        <br> <br>
        <label for="namaSiswa">Nomor Absen : </label>
        <input type="text" name="namaSiswa" id="namaSiswa" required value="<?=$ubah["namaSiswa"]?>">
        <br><br>
        <label for="nilaiIpa">Nilai IPA : </label>
        <input type="text" name="nilaiIPA" id="nilaiIpa" required value="<?=$ubah["nilaiIPA"]?>">
        <br><br>
        <label for="nilaiIPS">Nilai IPS : </label>
        <input type="text" name="nilaiIPS" id="nilaiIPS" require value="<?=$ubah["nilaiIPS"]?>"d>
        <br><br>
        <button type="submit" name="submit" style="margin-left: 20px;">Ubah Data</button>
    </form>


</body>
</html>
