<!-- Disini ekstensi PHP bisa berisi file HTML dan ekstensi HTML juga bisa berisi file PHP -->

<!-- Jika syntax PHP ditulis di dalam tag HTML maka wajib di beri tag PHP -->
<!-- Jika tag HTML di tulis di syntax PHP maka tag HTML wajib didalam tanda kutip dari PHP tersebut -->

<!-- Disini kita akan lebih banyak menggunakan syntax PHP didalam tag HTML -->

<?php
    // Standar ouput yaitu istilah mencetak tulisan ke layar, diantaranya :
    // echo, print      => default, mencetak tulisan string dan dll ke layar
    //echo "Hello World <br>";
    // print_r          => untuk mencetak isi array ke layar
    //print_r ("Hello World <br>");
    // var_dump         => untuk mencetak isi variabel
    //var_dump("Hello World");
    
    // Variabel dan Tipe Data 
    // Variabel di dalam PHP dituliskan dengan => $nama_vaiabel = nilai_variabel
    $nama = "Maulana Yusuf";
    echo "Halo  $nama <br>"; // contoh penulisan tag html di dalam syntax PHP
    // Ini disebut Interpolasi yaitu menuliskan nama variabel didalam tanda kutip
    //interpolasi ini hanya dapat dilakukan oleh petik dua, sedangkan petik satu tidak bisa

    // Operator pada Bahasa PHP
    // Aritmatika 
    // + - * / dan %

    // Penggabung string / concatenation / concat
    $sapa = "Halo";
    $nama_mu = "Rema";
    echo $sapa . " " . $nama_mu;

    // Assignment
    // = += -= *= /= %= dan .= 
    // .= berlaku hanya untuk tipe data string

    // Perbandingan
    // < > <= >= ==

    // Identitas
    // === dan !==
    // Berfungsi untuk mengecek nilai dan tipe datanya, jika dua dua nya true maka nilainya true, jika salah satu false maka nilainya adalah false.

    // Logika
    // && (and) || (or) dan ! (not atau negasi)
    // pada operator && jika nilai nya true semua => true, jika ada salah satu yang false => false
    // pada operator || jika nilainya ada yang true => true
    // operator ! => mencetak nilai sebaliknya 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    






</body>
</html>
    
