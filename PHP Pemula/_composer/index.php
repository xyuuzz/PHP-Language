<?php 

// Penggunaan sederhana Composer menggunakan packagist

// Contoh menggunakan composer
require_once 'vendor/autoload.php'; // untuk meng include file composer

// use the factory to create a Faker\Generator instance
$faker = "Faker\Factory"::create("id_ID"); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composer</title>
</head>
<body>
    <h2>Daftar penduduk penerima Bansos</h2>
    <?php for( $x=0; $x < 5; $x++ ) { ?>
        
        <ul>
            <li><?= $faker->name; //menginclude nama ?></li>
            <li><?= $faker->address; //menginclude alamat ?></li>
        </ul>
    <?php } ?>

</body>
</html>