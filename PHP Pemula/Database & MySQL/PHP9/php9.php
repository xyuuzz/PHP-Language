<?php  

    // Cara mengoneksikan file PHP dengan database 
    mysqli_connect("localhost", "root", "", "daftarnilai6a");
    // urutanya adalah "nama_server", "nama_user", "password", "nama_database"
    // Semua memakai tanda kutip
    // Karena mysqli_connect akan terus digunakan nanti, maka disarankan untuk disimpan didalam variabel
    $db =     mysqli_connect("localhost", "root", "", "daftarnilai6a");

    // Cara mengambil data pada Database MySQL
    mysqli_query($db, "SELECT * FROM daftarnilai6a");
    // Pada syntax diatas, ini berisi sebuah object yang tidak bisa dilihat isinya, tapi kita harus percaya bahwa isi database kita ada didalam object tersebut. Karena kita akan menggunakanya, maka kita simpan ke variabel.
    $daftarNilai = mysqli_query($db, "SELECT * FROM kelas6a");
    // var_dump($daftarNilai);

    // Ada beberapa cara untuk mengambil data dari database dalam bentuk array dari object diatas, diantaranya :
    // mysqli_fetch_row()   => mengembalikan array numerik yang ada pada baris paling atas
    // mysqli_fetch_assoc()      => mengembalikan array assosiatif yang ada pada baris paling atas
    // mysqli_fetch_array()     => mengembalikan array numerik dan assosiatif yang ada pada baris paling atas
    // mysqli_fetch_object()    => mengembalikan sebuah object yang ada pada baris paling atas

    // Bagaimana cara menampilkan semua baris di dalam tabel? 
    // Yaitu dengan cara melooping method yang digunakan untuk mengambil nilai baris pada tabel database.
    // Contoh :
    // while (mysqli_fetch_assoc($daftarNilai)) {      // lakukan looping jika $daftarNilai masih ada isinya
    //     foreach( $daftarNilai as $values) {     // lakukan looping terhadap object $daftarNilai menjadi array yang bervariabel $values
    //         foreach($values as $key => $value) {    // lakukan looping terhadap $values dan jadikan key nya sebagai $key dan value nya sebagai $value
    //             echo "$key : $value ";      // menampilkan $key dan $value
    //             echo "<br>";
    //         }
    //         echo "<br>";
    //     }
    // }







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar MySQL</title>
</head>
<body>
    
    <br><br>

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
        <?php while (mysqli_fetch_assoc($daftarNilai)) { ?>
            
            <?php foreach($daftarNilai as $values) { ?>
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
        <?php } ?>
    
    </table>


</body>
</html>