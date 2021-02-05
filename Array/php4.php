<?php

    // Implementasi Array pada bahasa PHP
    // Array adalah sebuah variabel yang dapat menampung lebih dari 1 data.
    // Tipe data pada array dapat berbeda.

    // Contoh syntac array
    $arr = ["Senin", "Selasa"];
    // index pada array dimulai dari 0 
    // Jadi, "Senin" Mimiliki index 0 dan "Selasa" memiliki index 1.

    // Cara mengakses Array
    // variabel Array tidak bisa diakses menggunakan echo, kecuali ditambahkan index.
    // echo $arr => eror
    echo $arr[1];   // Menampilkan 1 elemen pada array menggunakan no index nya
    echo "<br>";
    // Menggunakan var_dump
    var_dump($arr);     // Menampilkan informasi tentang variabel tersebut.
    echo "<br>";
    // Menggunakan print_r
    print_r($arr);
    // fungsi nya sama seperti var_dump tetapi dengan informasi yang lebih singkat.
    echo "<br>";
    echo "<br>";

    // Menambahkan elemen baru pada array.
    $arr1 = ["Siang", "Sore"];
    var_dump($arr1);
    echo "<br>";
    $arr1[] = "Pagi";   // Menambahkan element baru dipaling akhir pada array $arr1 
    var_dump($arr1);

    // Pengulangan pada Array menggunakan for loop dan forEach
    $angka = [5,12,56,9,17,4,60,12];


?>
<br><br><br>
<!-- Menggunakan HTML -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belajar PHP</title>
        <style>
            .kotak {
                width: 60px;
                height: 60px;
                line-height: 60px;
                margin: 5px;
                float: left;
                background-color: orange;
                text-align: center;
            }
            .clear {
                clear: both;
            }
        </style>
    </head>
    <body>

        <!-- Menggunakan for loop -->
        <?php for ($a = 0; $a < count($angka); $a++) { ?>   <!-- count() => menghitung panjang element pada parameter yang dimasukan, sama seperti length.. -->
            <div class="kotak"> <?= $angka[$a] ?> </div>
        <?php } ?>

        <div class="clear"></div>

        <!-- Menggunakan foreach() -->
        <?php foreach($angka as $a) { ?>    <!-- nama var array as var => simpan var array ke var ini, dan jalankan fungsi berikut -->
            <div class="kotak"> <?= $a ?> </div>    <!-- tampilkan $a => $a adalah isi array $angka yang sudah di looping -->
        <?php } ?>


    </body>
</html>