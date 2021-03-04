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

        $fotoSiswa = htmlspecialchars($data["fotoSiswa"]);   // berfungsi untuk tidak mengeksekusi tag html yang masuk
        $namaSiswa = htmlspecialchars($data["namaSiswa"]);
        $nilaiIPA = htmlspecialchars($data["nilaiIPA"]);
        $nilaiIPS = htmlspecialchars($data["nilaiIPS"]);

        $tambahData = "INSERT INTO kelas6a 
                        VALUES (
                            '', '$fotoSiswa', '$namaSiswa', '$nilaiIPA', '$nilaiIPS'
                        )";

        mysqli_query($connect, $tambahData);

        // Mengambalikan nilai untuk mengecek gagal atau sukses nya data yang dimasukan.
        return mysqli_affected_rows($connect);

    }

    function hapus ($id) {
        global $connect;

        mysqli_query($connect, "DELETE FROM kelas6a WHERE id = $id"); // untuk menghapus data 

        return mysqli_affected_rows($connect);
    }


    function edit ($data) {

        global $connect;

        $id = $data["id"];
        $fotoSiswa = htmlspecialchars($data["fotoSiswa"]);   // berfungsi untuk tidak mengeksekusi tag html yang masuk
        $namaSiswa = htmlspecialchars($data["namaSiswa"]);
        $nilaiIPA = htmlspecialchars($data["nilaiIPA"]);
        $nilaiIPS = htmlspecialchars($data["nilaiIPS"]);

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