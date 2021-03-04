<?php 

// Memulai variabel global session
session_start();
// Untuk melemparkan user ke hal login jika user belum log in
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

    require("functions.php");    
    // Mengimport semua syntax yang ada pada functions9.2.php agar bisa digunakan di file ini

    $nilaiKelas6a = table("SELECT * FROM kelas6a");   
    // Variabel ini berisi fungsi tabel dengan argument yang mengarah ke nama tabel pada database

    if (isset($_POST["search"])) {
        $nilaiKelas6a = cari($_POST["keyword"]);
    }


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MySQL</title>
        <style>
            .logout, .hapus {
                margin-right: 10px;
            } 
            .tambah, .hapus {
                margin-left: 10px;
            }
        </style>
    </head>
    <body>

        <h1>Daftar Nilai Siswa Kelas 6a</h1>
        <!-- <p>Halo <? //$_SESSION["username"] ?> Apa Kabar?</p> -->

        <a class="logout" href="logout.php">Log Out</a>
        <a>|</a>
        <a class="hapus" href="hapusakun.php" onclick="return confirm('Anda yakin akan menghapus akun iki?');">Hapus Akun</a>
        <a>|</a>
        <a class="tambah" href="tambah13.2.php">Tambah Data Nilai</a>
<br><br>
<!-- Search Bar -->
        <form action="" method="post">
        
            <input type="text" name="keyword" size= "25" autofocus autocomplete="off" 
            placeholder="Masukan Nama Siswa">
            <button type="submit" name="search">Search</button>
        </form>

<br>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>

                <th>No</th>
                <th>Edit</th>
                <th>Foto Siswa</th>
                <th>Nama Siswa</th>
                <th>Nilai IPA</th>
                <th>Nilai IPS</th>

            </tr>

            <?php $i = 1; ?>
            <?php foreach($nilaiKelas6a as $values) { ?>
                <tr>
                    <td> <?= $i ?> </td>
                    <td>
                        <a href="edit13.4.php?id=<?= $values["id"]?>">Edit</a> |
                        <a href="hapus13.3.php?id=<?=$values["id"]; ?>" onclick= "return confirm ('Anda yakin menghapus data ini?')" ; >Hapus</a>   <!-- isi dari onclick berfungsi sebagai konfirmasi data -->
                    </td>
                    <td> <img src="img/<?= $values["fotoSiswa"] ?>" width="100"> </td>
                    <td> <?= $values["namaSiswa"] ?> </td>
                    <td> <?= $values["nilaiIPA"] ?> </td>
                    <td> <?= $values["nilaiIPS"] ?> </td>
                </tr>   
                <?php $i++; ?>
            <?php } ?>

        </table>


    </body>
</html>