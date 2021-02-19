<?php

    session_start();
    require("functions.php");

    // untuk session
    if ( !isset($_SESSION["login"]) ) {
        header("Location: login.php");
        exit;
    }

    // Untuk total uang pada baris total tabel keuangan
    $totalUang = table("SELECT SUM(total) FROM keuangan")[0]["SUM(total)"];

    // Untuk memformat uang menjadi rupiah
    function angka ($angka) {
        $rubah_angka = "Rp " . number_format($angka, 2, ',' , '.');

        return $rubah_angka;
    }
    
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Keuangan</title>
    <style>

        tr:nth-child(1) th:nth-child(5){
            width: 400px;
        }

        a { text-decoration: none; }

        .red {
            color: white;
            position: inline-block;
            background-color: red;
            padding: 10px 40px;
            margin-right: 20px;
        }

    </style>
</head>
<body>

    <h1>Selamat Datang</h1>
    <br><br>

    <a href="tambah.php" class="red">Tambah Data</a>
    <a class="red" href="logout.php">Log Out</a>
    <br><br>
    <table border="1" cellspacing="0" cellpadding="10" style="text-align: center;">
    
        <tr>
            <th>No</th>
            <th>Edit</th>
            <th>Pemasukan</th>
            <th>Pengeluaran</th>
            <th>Deskripsi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach(table("SELECT * FROM keuangan") as $value) { ?>

                <tr>
                    <td><?=$i?></td>
                    <td>
                    <a href="edit.php?id=<?=$value["id"];?>">Edit</a> | 
                    <a href="hapus.php?id=<?=$value["id"];?>" onclick= "return confirm('Anda Yakin akan menghapusnya?')";>Hapus</a>
                    </td>
                    <td><?=angka($value["pemasukan"]);?></td>
                    <td><?=angka($value["pengeluaran"]);?></td>
                    <td><?=$value["deskripsi"];?></td>
                </tr>
            <?php $i++; ?>
        <?php } ?>


        <tr>
            <td>Total Uang</td>
            <td colspan="4"><?=angka($totalUang);?></td>
        </tr>
    
    </table>



</body>
</html>