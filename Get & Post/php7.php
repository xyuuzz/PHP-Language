<?php
    function enter() {
        echo "<br>";
    }
?>


<?php 

    // Variable Scope atau Lingkup Variabel => ruang lingkup yang dapat diakses oleh variabel tersebut.
    // Lingkup variabel dibedakan menjadi 3, yaitu :
    // Lokal variabel       => variabel yang hanya dapat diakses di dalam itu saja, contoh : variabel yang ada diluar function tidak dapat diakses didalam function.
    // Global variabel      => variabel yang dapat diakses dalam lingkup luas, tidak dibatasi. Biasanya dideklarasikan di dalam tag php.
    // Superglobals variabel => variabel variabel yang sudah dibuatkan oleh PHP dan dapat diakses dimanapun dan kapanpun. Dan semua Superglobals variabel ini berbentuk array associative.
    // Contoh : $_GET , $_POST , $_REQUEST , $_SESSION , $_COOKIE , $_SERVER , $_ENV .
    

    // $_GET
    // Karena $_GET berbentuk array associative, maka cara kita menambahkan element ke dalam nya adalah :
    $_GET["warna"] = "Merah";   // warna => key nya dan Merah => value nya
    echo $_GET["warna"];
    enter();

    // Ada cara lebih praktik lagi dari yang diatas. Yaitu menambahkan variabel $_GET di url website
    // Cara nya adalah dengan memberi tanda tanya (?) di akhir url lalu masukan key array = value array.
    // ..?warna=Hijau   => caranya begitu
    // Untuk memasukan lebih dari 1 array associative maka, 
    // ...?warna=hijau&baju=kemeja          // Dihubungkan dengan tanda and(&)
    // => saat menambahkan array di url, key tidak boleh sama dengan yang di $_GET.

    var_dump($_GET);    // => menampilkan isi dari $_GET.
    enter();

    // Menampilkan array associative pada $_GET menggunakan foreach
    foreach($_GET as $k => $g) {    // $k => key dari $_GET dan $g => value dari $_GET
        echo $k . " : " . $g;
        enter();
    }

?>

<br><br><br>
<?php

    // Studi kasus tentang $_GET 

    // Array associative
    $ciriBuah = [
        [
            "nama"      => "Mangga",
            "warna"     => "Kuning",
            "Musim"     => "Setiap Saat",
	    "Rasa"      => "Manis"
        ],
        [
            "nama"      => "Strawberry",
            "warna"     => "Merah",
            "Musim"     => "Gugur",
            "Rasa"      => "Asam Manis"
        ]
    ];


?>

<!-- Studi kasus tentang $_GET
<!-- Cara -->





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Get & Post</title>
    </head>
    <body>
        <h1>Profil Buah Buahan</h1>

        <ul>

        <?php foreach($ciriBuah as $k) { ?>     <!-- untuk melooping -->

            <li>
                <a href="php7.2.php?
			<?php foreach($k as $key => $value) { ?>
				<?= $key ?>=<?= $value; ?>&<?php } ?>
		"> 
                <?= $k["nama"]?> 
            </a>
            </li>

        <?php } ?>
        
        </ul>

	<?php echo $k["warna"]; ?>
        

    </body>
</html>