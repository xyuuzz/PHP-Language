<?php 
require("../functions.php");
session_start();

$keyword = $_GET["keyword"];
// var_dump($keyword);
// Untuk Table

$allFields = table("SELECT * FROM kelas6a");
$query = "SELECT * FROM kelas6a WHERE namaSiswa LIKE '%$keyword%' ";
$tableHome = table($query);


// var_dump($tableHome);
if ( count($tableHome) > 0 ) {
    // Untuk menentukan index halaman ke berapa setelah ajax melakukan pencarian
    $_SESSION["indexHalaman"] = ceil( (array_search($tableHome[0], $allFields) + 1) / 2 );

    // $jumlahData = count( table("SELECT * FROM kelas6a") );
    // $dataDitampilkan = 2;
    // $jumlahHal = ceil($jumlahData / $dataDitampilkan);  // jumlah dari halaman untuk menampun data
}


?>


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
    <?php if ($x == $_SESSION["indexHalaman"]) { ?>
        <a class="pagnation" href="?page=<?= $x; ?>" style="font-weight: bold; color: green; font-size: 25px;"><?= $x ?></a>
    <?php } else { ?>
        <a class="pagnation" href="?page=<?= $x; ?>" style="font-size: 20px"><?= $x ?></a>
    <?php } ?>
<?php } ?>
<!-- Tombol ke kanan -->
<?php if( $_SESSION['actPages'] < $_SESSION['jumlahHal'] ) { ?>
    <a href="?page=<?= $_SESSION['actPages'] + 1; ?>" style="margin-left: 10px;">&raquo</a>
<?php } ?>

<!-- Tag Table  -->
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
            <?php foreach($tableHome as $values) { ?>
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
