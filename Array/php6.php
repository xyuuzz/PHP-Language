<?php

    // Mempelajari tentang Array Asosciative =>  berbeda seperti array numerik yang key (index) nya adalah angka yang dimulai dari 1, array Associative adalah array yang key (index) nya dapat dibuat sendiri.

    // Cara penulisan Array Associative
    $arAss = [ [
            "nama" => "Maulana",
            "absen" => 21,
            "kelas" => "6B"
        ],
        [   
            "nama" => "Yuuji",
            "absen" => "32",
            "kelas" => "6E"
        ] 
    ];

    echo $arAss[0]["absen"];    
    // Menggunakan 2 index dikarenakan array yang jamak, satu menggunakan angka => numerik, sedangkan satunya lagi adalah array Associative => index yang dapat diberi nama sendiri.
    
    
    // Looping assoative 
    foreach($arAss as $Ass) {   // untuk isi dari var $arAss
        foreach($Ass as $a) {   // untuk isi dari anak var $arAss => $a
            echo $a;
            echo "<br>";
        }
    }

    // Cara penggunaan foreach() pada array associative dengan menggunakan $key => $value

    $buah = [
        "Apel"          => "Merah",
        "Mangga"        => "Kuning",
        "Kiwi"          => "Hijau"
    ];

    foreach($buah as $nama => $warna) {
        echo $nama . " berwana " . $warna . "<br>";
    }
    // nilai $key bersifat opsional, jadi boleh tidak menggunakanya. Dan jika tidak menggunakanya foreach hanya akan mengakses value dari array.


?>

<?php 
    $sayuran = [
        "bayam"         => "Hijau",
        "Wortel"        => "Merah",
        "Kembang Kol"   => "Hijau Muda"       
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    
    <h2>Jika memakai $key untuk foreach</h2>
    <?php foreach($sayuran as $nama => $warna) { ?>
        <h3> <?= "Sayuran " . $nama . " berwana " . $warna; ?> </h3>
    <?php } ?>
    <h2>Dapat mengakses key dan array pada array associative</h2> <br>

    <h2>Jika tidak memakai $key untuk foreach</h2>
    <?php foreach($sayuran as $nama) { ?>
        <h3> <?= "Berwarna " . $nama; ?> </h3>
    <?php } ?>
    <h2>Hanya Dapat mengakses value dari array associative</h2>


</body>
</html>


<?php 

    // NB :
    // Fucntion count()     => untuk menghitung jumlah element(value) pada array.
    // Function strlen()    => untuk menghitung jumlah karakter pada suatu string.
    // Function rand()      => untuk mencetak sebuah angka acak, terdapat 2 argument di fungi rand.
                            // rand(angka awal, angka akhir) => cetak angka acak diantara angka awal dan akhir.
    

?>