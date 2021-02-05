<?php 

    // Membuat Array Multidimensi => array yang isinya adalah array

    $siswa = [
        ["Maulana", 21, "Laki-Laki"],
        ["Dani", 11, "Laki-Laki"],
        ["Lina", 17, "Perempuan"],
        ["Dion", 13, "Laki-Laki"],
        ["Maya", 15, "Perempuan"]
    ]

?>

<!-- Kita akan menampikanya dalam bentuk HTML -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belajar PHP</title>
    </head>
    <body>
        <h1>Daftar Siswa SD Suka Cita</h1>
        <?php foreach($siswa as $s) { ?>
            <?php for($x = 0; $x < count($s); $x++) { ?>

                <ul>
                    <li> <?= $s[$x] ?> </li>
                </ul>

            <?php } ?>
            <br>
        <?php } ?>

    </body>
</html>