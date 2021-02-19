<?php

    $connect = mysqli_connect("localhost", "root", "", "ubkeuangan");

    function table ($nameTable) {
        global $connect;

        $tables = mysqli_query($connect, $nameTable);

        $row = [];
        while( $rows = mysqli_fetch_assoc($tables) ) {

            $row[] = $rows;
        }

        return $row;
    }


    function tambah ($post) {

        global $connect;

        $pemasukan = intval($post["pemasukan"]);    // intval digunakan untuk mengubah string menjadi integer
        $pengeluaran = intval($post["pengeluaran"]);
        $desk = htmlspecialchars($post["deskripsi"]);
        $total = intval($pemasukan - $pengeluaran);

        $tambah = "INSERT INTO keuangan 
            VALUES (
            '', '$pemasukan', '$pengeluaran', '$desk', '$total'
        )";

        mysqli_query($connect, $tambah);

        return mysqli_affected_rows($connect);
        
    }

    function hapus ($id) {

        global $connect;

        mysqli_query($connect, "DELETE FROM keuangan WHERE id = $id");

        return mysqli_affected_rows($connect);
    }


    function edit($data) {

        global $connect;
        $id = $_GET["id"];


        $pemasukan = intval($data["pemasukan"]);  
        $pengeluaran = intval($data["pengeluaran"]);
        $desk = htmlspecialchars($data["deskripsi"]);
        $total = intval($pemasukan - $pengeluaran);

        $tambah = "UPDATE keuangan SET 
            pemasukan = $pemasukan, pengeluaran = $pengeluaran, deskripsi = '$desk', total = $total
         WHERE id = $id";

        mysqli_query($connect, $tambah);

        return mysqli_affected_rows($connect);
    }


    function daftar($data) {
        global $connect;

        $username = $data["username"];
        $email = $data["email"];
        $password = $data["password"];

        // Enkripsi Password yang masuk ke database
        $enPass = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($connect, "INSERT INTO users VALUES (
                '', '$username', '$email', '$enPass' )
            ");

        return mysqli_affected_rows($connect);
    }



?>