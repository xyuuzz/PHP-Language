<?php

    // Disini kita akan membuat banyak function MySQL yang akan dihubungkan dengan file php yang berisi bayak tabel.           

    $connect = mysqli_connect("localhost", "root", "", "daftarnilai6a");
    // Menghubungkan file php dengan database MySQL

    function table ($tableDatabase) {

        global $connect;
        $table = mysqli_query($connect, $tableDatabase);
        // Menyeleksi semua tabel dari database $tableDatabase

        $row = []; // Array kosong untuk tempat isi table 
        while ($rows = mysqli_fetch_assoc($table)) {
            $row[] = $rows;
        } 

        return $row;

    }



    // File php10.2 

    function tambah ($data) {
        global $connect;

        // htmlspecialchars() =>  berfungsi untuk tidak mengeksekusi tag html yang masuk
        $namaSiswa = htmlspecialchars($data["namaSiswa"]);
        $nilaiIPA = htmlspecialchars($data["nilaiIPA"]);
        $nilaiIPS = htmlspecialchars($data["nilaiIPS"]);

        $fotoSiswa = uplade();
        

        if ( !$fotoSiswa ) {
            return false;   // fungsi tambah akan menghasilkan false jika fungsi uplade gagal
        }

        $tambahData = "INSERT INTO kelas6a 
                        VALUES (
                            '', '$fotoSiswa', '$namaSiswa', '$nilaiIPA', '$nilaiIPS'
                        )";

        mysqli_query($connect, $tambahData);

        // Mengambalikan nilai untuk mengecek gagal atau sukses nya data yang dimasukan.
        return mysqli_affected_rows($connect);

    }


    function uplade () {
        
        $namaFoto = $_FILES["fotoSiswa"]["name"];
        $tmpName = $_FILES["fotoSiswa"]["tmp_name"];
        $ukuranGambar = $_FILES["fotoSiswa"]["size"];

        $ekstensiGambarValid = ["jpg", "png", "jpeg", "jfif"]; // ekstensi gambar yang diijinkan oleh website
        // function explode adalah untuk memecah string menjadi array, memiliki 2 parameter. 1 untuk delimiter(bertemu apa sehingga string tsb dipecah) nya dan kedua adalah string nya.
        $arrEkstensiGambar = explode(".", $namaFoto);   
        $ekstensiGambar = strtolower(end($arrEkstensiGambar));
        
        // Untuk memvalidasi ekstensi gambar
        if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            echo "
                <script> alert('Masukan gambar dengan ekstensi jpg, png, jpeg atau jfif'); </script>
            ";
            return false;
        }

        // Cek Ukuran File, Jika kebesaran maka eror
        if ($ukuranGambar > 2000000) {
            echo "
                <script> alert('Ukuran Gambar anda terlalu besar'); </script>
            ";
            return false;
        }

        // Fungsi uniqid adalah untuk membuat sebuah string acak
        $namaFotoAcak = uniqid(); 
        $namaFotoAcak = $namaFotoAcak . "." . $ekstensiGambar;
        move_uploaded_file($tmpName, "img/" . $namaFotoAcak);

        return $namaFotoAcak;

    }



    function hapus ($id) {
        global $connect;

        mysqli_query($connect, "DELETE FROM kelas6a WHERE id = $id"); // untuk menghapus data 

        return mysqli_affected_rows($connect);
    }


    function edit ($data) {

        global $connect;

        $id = $data["id"];
        // berfungsi untuk tidak mengeksekusi tag html yang masuk
        $namaSiswa = htmlspecialchars($data["namaSiswa"]);
        $nilaiIPA = htmlspecialchars($data["nilaiIPA"]);
        $nilaiIPS = htmlspecialchars($data["nilaiIPS"]);

        $gambarLama = $data["gambarLama"];
        if ($_FILES["fotoSiswa"]["error"] === 4) {
            $fotoSiswa = $gambarLama;
        } else {
            $fotoSiswa = uplade();
            // fungsi unlink adalah untuk menghapus file yang diinputkan ke dalam parameter.
            unlink("img/$gambarLama");  
        }

        $update = "UPDATE kelas6a SET 
                fotoSiswa = '$fotoSiswa', namaSiswa = '$namaSiswa', nilaiIPA = '$nilaiIPA', nilaiIPS = '$nilaiIPS'
                WHERE id = '$id' 
            "; 

        mysqli_query($connect, $update);

        // Mengambalikan nilai untuk mengecek gagal atau sukses nya data yang dimasukan.
        return mysqli_affected_rows($connect);
    }


    function cari($keyword) {
        $table = "SELECT * FROM kelas6a
                WHERE namaSiswa LIKE '%$keyword%'
        ";

        return table($table);
    }



?>