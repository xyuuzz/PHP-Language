<?php

    // Perulangan pada PHP

    // Perulangan pada PHP dibagi menjadi 4
    // yaitu For loop, While Loop, do While Loop dan forEach()
    // Khusus forEach() akan dibahas pada tipe data array

    // For Loop
    // Penulisan syntax for loop adalah
    for ($i = 0; $i <= 10; $i++) { // inisialisasi, kondisi, inc/dec
        echo "Halo Dunia! <br>";
        // statement
    }
    echo "<br>";
    // While Loop 
    // While loop fungsinya sama seperti For Loop, namun hanya berbeda syntaxnya saja
    $j = 0;     // inisialisasi
    while ($j <= 5) {   // kondisi
        echo "Halo dunia while loop <br>";
        $j++;   // inc / dec
    }
    echo "<br>";
    // do While Loop 
    // Pada do while, akan dijalankan terlebih dahulu statement nya, lalu di cek kondisinya.
    $x = 10;
    do {
        echo "Halo dunia 1x karena false";
        $x--;
    } while ($x < 5);


?>

<!-- Contoh cara penulisan PHP di dalam tag HTML menggunakan metode template yaitu memisahkan antara tag HTML dan syntax PHP -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
    <style>
    
        .emas {
            background-color: gold;
        }
        .gaje {
            background-color: darkkhaki;
        }

    </style>
</head>
<body>
    
    <!-- Kita akan membuat tabel menggunakan for loop -->
    <table border="1" cellpadding ="10" cellspacing="0">

        <?php for( $i = 1; $i <= 5; $i++ ) : ?> <!-- Melakukan looping pada <tr></tr>, dan syntax : dan endfor; itu sama seperti penggunaan tanda {} -->
        
            <?php if ($i % 2 == 1) { ?>
                <tr class= "emas">
            <?php } else { ?>
                <tr class="gaje">
            <?php } ?>

            <!-- Menambahkan Percabangan pada tabel yang sudah dibuat : -->
            
                <?php for( $k = 1; $k <= 4; $k++ ) : ?>     
                    <td> <?= "ini adalah tabel ke-$i , dan kolom ke-$k" ?> </td>
                    <!-- syntax diatas adalah versi singkatnya dari php => echo -->
                <?php endfor; ?>
                <!-- : dan endfor; bagaikan {} -->

            </tr>
        <?php endfor; ?>
    </table>
        


    <!-- Membuat segitiga siku-siku menggunakan For Loop -->
    <h3>Membuat segitiga menggunakan for loop</h3>
    <?php for ($u = 0; $u < 5; $u++) : ?>

        <?php for ($y = 0; $y <= $u; $y++) : ?>
            *
        <?php endfor; ?>
        <br>

    <?php endfor; ?>
    <br><br>

</body>
</html>