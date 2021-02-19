<?php 

    require("functions.php");    
    // Mengimport semua syntax yang ada pada functions9.2.php agar bisa digunakan di file ini

    $nilaiKelas6a = table("kelas6a");   
    // Variabel ini berisi fungsi tabel dengan argument yang mengarah ke nama tabel pada database

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MySQL</title>
    </head>
    <body>

        <table border="1" cellspacing="0" cellpadding="10">
            <tr>

                <th>No</th>
                <th>Edit</th>
                <th>Nama Siswa</th>
                <th>No Absen</th>
                <th>Nilai IPA</th>
                <th>Nilai IPS</th>

            </tr>

            <?php $i = 1; ?>
            <?php foreach($nilaiKelas6a as $values) { ?>
                <tr>
                    <td> <?= $i ?> </td>
                    <td>
                        <a href="#">Ubah</a> |
                        <a href="">Hapus</a>
                    </td>
                    <td> <?= $values["namaSiswa"] ?> </td>
                    <td> <?= $values["noAbsen"] ?> </td>
                    <td> <?= $values["nilaiIPA"] ?> </td>
                    <td> <?= $values["nilaiIPS"] ?> </td>
                </tr>   
                <?php $i++; ?>
            <?php } ?>

        </table>


    </body>
</html>