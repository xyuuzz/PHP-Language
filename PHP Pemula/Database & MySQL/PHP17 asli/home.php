<?php 

// Memulai variabel global session
session_start();
// Untuk melemparkan user ke hal login jika user belum log in
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
// Mengimport semua syntax yang ada pada functions9.2.php agar bisa digunakan di file ini
require("functions.php");    

// Untuk username, => table, index halaman
$username = $_SESSION["username"]; 

// -- Pagnation -- => MEMBAGI BEBERAPA DATA MENJADI BEBERAPA HALAMAN
$_SESSION['dataDitampilkan'] = 2; // data yang ditampilkan per halaman
$dataDitampilkan = $_SESSION["dataDitampilkan"]; // data yang ditampilkan per halaman
$_SESSION['jumlahData'] = count( table("SELECT * FROM $username") ); // jmenghitung umlah data yang ada di database
$_SESSION['actPages'] = ( isset($_GET["page"]) ) ? $_GET["page"] : 1; // menyimpan variabel global $_GET
$awalData = ($_SESSION['dataDitampilkan'] * $_SESSION['actPages'])  - $_SESSION['dataDitampilkan']; // untuk data index awal pada halamaan

$_SESSION['jumlahHal'] = ceil($_SESSION['jumlahData'] / $_SESSION['dataDitampilkan']);  // jumlah dari halaman untuk menampun data

$tableHome = table("SELECT * FROM $username LIMIT $awalData, $dataDitampilkan");

// Array untuk semua fields pada database kelas6a
$allFields = table("SELECT * FROM $username");

// if (isset($_POST["search"])) {
//     $tableHome = cari($_POST["keyword"]);
//     if ( !isset($tableHome[0]) ) {
//         $tableEror = true;
//     } 
    // array_search berfungsi untuk mencari index array ke berapa pada array pada array yang dituju                                             
    // => array_search("hai", ["hai", "halo"]); -> 0 . artinya string hai berada pada indeks 0 pada array tersebut.
// }

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
            a {
                text-decoration: none;
                color: black;
            }
            .pagnation {
                margin-right: 10px;
            }
           .loading {
               width: 25px;
               position: absolute;
               top: 112px;
               left: 230px;
               display: none;
           }
        </style>
    </head>
    <body>

        <h1>Daftar Nilai Siswa Kelas 6a</h1>

        <a class="logout" href="logout.php">Log Out</a>
        <a>|</a>
        <a class="hapus" href="hapusakun.php" onclick="return confirm('Anda yakin akan menghapus akun iki?');">Hapus Akun</a>
        <a>|</a>
        <a class="tambah" href="tambah.php">Tambah Data Nilai</a>
<br><br>
<!-- Search Bar -->
        <form action="" method="post">

            <input type="text" name="keyword" size= "25" autofocus autocomplete="off" 
            placeholder="Masukan Nama Siswa" id="keyword">
            <!-- Tombol cari dihilangkan -->
            <!-- <button type="submit" name="search" id="search">Search</button> --> 
            <img class="loading" src="img/loading.gif">
            
        </form>
        <br>

        <div id="table">

            <!-- Pagnation => membagi tabel ke beberapa halaman -->
            <!-- Tombol Ke kiri -->
            <?php if( $_SESSION['actPages'] > 1 ) { ?>
                <a href="?page=<?= $_SESSION['actPages'] - 1; ?>" style="margin-right: 10px;">&laquo</a>
            <?php } else { ?>
                <!-- Untuk jarak margin jika tombol menghilang -->
                <a href="?page=<?= $_SESSION['actPages'] - 1; ?>" style="margin-right: 20px;"></a>
            <?php } ?>

            <!-- Looping Angka -->
            <?php for($x = 1; $x <= $_SESSION['jumlahHal']; $x++ ) { ?>
                <?php if ($x == $_SESSION['actPages']) { ?>
                    <a class="pagnation" href="?page=<?= $x; ?>" style="font-weight: bold; color: green; font-size: 25px;"><?= $x ?></a>
                <?php } else { ?>
                    <a class="pagnation" href="?page=<?= $x; ?>" style="font-size: 20px"><?= $x ?></a>
                <?php } ?>
            <?php } ?>

            <!-- Tombol ke kanan -->
            <?php if( $_SESSION['actPages'] < $_SESSION['jumlahHal'] ) { ?>
                <a href="?page=<?= $_SESSION['actPages'] + 1; ?>" style="margin-left: 10px;">&raquo</a>
            <?php } ?>

<br>
            <!-- Judul Tabel -->
            <table border="1" cellspacing="0" cellpadding="10">
            <tr>

                <th>No</th>
                <th>Edit</th>
                <th>Foto Siswa</th>
                <th>Nama Siswa</th>
                <th>Nilai IPA</th>
                <th>Nilai IPS</th>

            </tr>
            <!-- Looping isi dari table database -->
            <?php $i = 1; ?>
            <?php foreach($tableHome as $values) { ?>
                <tr>
                    <td> <?= $i ?> </td>
                    <td>
                        <a href="editdata.php?id=<?= $values["id"]?>">Edit</a> |
                        <a href="hapusdata.php?id=<?=$values["id"]; ?>" onclick= "return confirm ('Anda yakin menghapus data ini?')" ; >Hapus</a>   <!-- isi dari onclick berfungsi sebagai konfirmasi data -->
                    </td>
                    <td> <img src="img/<?= $values["fotoSiswa"] ?>" width="100"> </td>
                    <td> <?= $values["namaSiswa"] ?> </td>
                    <td> <?= $values["nilaiIpa"] ?> </td>
                    <td> <?= $values["nilaiIps"] ?> </td>
                </tr>   
                <?php $i++; ?>
            <?php } ?>
            </table>
        </div>

        <script src="javascript/jquery-3.5.1.min.js"></script>
        <script src="javascript/ajax.js"></script>
    </body>
</html>

