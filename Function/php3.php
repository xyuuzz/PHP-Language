<?php 

    // Contoh User-defined Function
    function enter() {
        echo "<br>";
    }


    // Function built-in pada PHP

    // Function Data
    // date => menampilkan tanggal dengan format tertentu
    echo date("l, d-M-Y");
    echo "<br>";
    // l => day
    // d-M-Y => day, month, year

    // Function Time
    echo time();
    // UNIX Timestamp / EPOCH time => detik yang sudah berlalu sejak 1 Januari 1970..
    echo "<br>";

    // Menggabungkan Function date() dan time() untuk mengetahui hari apa besok
    echo date("l", time() + 3600 * 24 * 10);    // Saturday
    // => hari apa 10 hari dari hari ini
    // time() + total detik berlalu
    enter();

    // Function mktime()
    // fungsinya adalah untuk  membuat detik sendiri dari waktu yang diinputkan.
    // ada 6 parameter pada function mktime() => jam. menit, detik, bulan. tanggal, tahun
    // membuat aplikasi sederhana untuk mengatahui hari apa saya dilahirkan
    echo date("l", mktime(0,0,0,8,10,2005)) . " adalah hari dimana saya lahir";
    enter();

    // Function strtotime()
    // Fungsinya sama seperti mktime(), namun parameternya diisi oleh tanggal bukan angka.
    echo date("l", strtotime("8 may 2008")); // => Thursday

    // Function yang mungkin wajib dipelajari nanti menurut WPU :
    // Function String 
    // strlen()
    // strcmp()
    // explode()
    // htmlspecialchars()
    // Function Utillity => function untuk membantu kinerja pembuatan website
    // var_dump_
    // iseet()
    // empty()
    // die()
    // sleep()



    // Studi Kasus User-defined Function
    // Membuat tulisan selamat datang menggunakan function

    function salam($user) {
        return "Selamat Datang, $user";
    }
    // Pada PHP, jika sebuah function memiliki 2 paremeter sedangkan argument yang dikirim hanya 1 argument saja, maka akan terjadi eror. Untuk menghindari hal itu bisa membuat parameter default.
    function waktu($keadaan = "Malam") {
        return $keadaan;
    }

    function salam2($user2, $keadaan) {
        return "Selamat $keadaan, $user2";
    }
?>

<!-- Tag HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function PHP</title>
</head>
<body>
    <h1><?= salam2("Maulana", waktu()) ?></h1>
    <!-- Disini Argumen juga dapat berisi fungsi -->
</body>
</html>