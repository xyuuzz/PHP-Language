<?php

    // Disini kita akan membuat banyak function MySQL yang akan dihubungkan dengan file php yang berisi bayak tabel.           


    $connect = mysqli_connect("sql205.epizy.com", "epiz_27966708", "giGIA4440uiET", "epiz_27966708_daftarnilai6a");
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

    function tambah ($data, $table) {
        global $connect;

        // htmlspecialchars() =>  berfungsi untuk tidak mengeksekusi tag html yang masuk
        $namaSiswa = htmlspecialchars($data["namaSiswa"]);
        $nilaiIPA = htmlspecialchars($data["nilaiIPA"]);
        $nilaiIPS = htmlspecialchars($data["nilaiIPS"]);

        $fotoSiswa = uplade();
        

        if ( !$fotoSiswa ) {
            return false;   // fungsi tambah akan menghasilkan false jika fungsi uplade gagal
        }

        $tambahData = "INSERT INTO $table
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
        // function end adalah untuk mengambil element terakhir pada parameter.
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
        // function move_uploaded_file adalah untuk memindahkan file dari parameter 1 ke parameter 2.
        move_uploaded_file($tmpName, "img/" . $namaFotoAcak);

        return $namaFotoAcak;

    }



    function hapus ($id, $table) {
        global $connect;

        mysqli_query($connect, "DELETE FROM $table WHERE id = $id"); // untuk menghapus data 

        return mysqli_affected_rows($connect);
    }


    function edit ($data, $table) {

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

        $update = "UPDATE $table SET 
                fotoSiswa = '$fotoSiswa', namaSiswa = '$namaSiswa', nilaiIpa = '$nilaiIPA', nilaiIps = '$nilaiIPS'
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



    function register ($data) {
        global $connect;

        $username = mysqli_real_escape_string($connect, strtolower($data["username"]));
        $password = mysqli_real_escape_string($connect, $data["password"]);
        $validPassword = mysqli_real_escape_string($connect, $data["password2"]);

        // Memvalidasi agar tidak ada spasi pada username
        for ($i = 0; $i < strlen($username); $i++) {

            if($username[$i] == " ") {
                echo "
                <script> alert('Username tidak boleh memakai spasi!!'); </script>
                ";
                return false;
            }
        }

        // memvalidasi password yang dimasukan user
        if ($password !== $validPassword) {
            echo "
            <script> alert('Masukan password dengan benar!!'); </script>
            ";
            return false;
        }  
        
        // Menyeleksi username yang tidak boleh sama
        // Cara Saya
        // $arrUsername = table("SELECT username FROM users");
        
        // foreach($arrUsername as $usernameData) {
            
        //     if ($username === $usernameData["username"]) {
        //         echo "
        //         <script> alert('Username Sudah digunakan!!'); </script>
        //         ";
        //         return false;  
        //     }   
        // }
        
        // Cara Pak Dhika WPU
        $validUsername = mysqli_query($connect, "SELECT username FROM users WHERE username = '$username'");
        if ( mysqli_fetch_assoc($validUsername) ) {
            echo "
                <script> alert('Username Sudah digunakan!!'); </script>
                ";
                return false;    
        }

        // Enkripsi password user
        $enkripsiPass = password_hash($password, PASSWORD_DEFAULT);

        $tambahData = "INSERT INTO users VALUES ( '', '$username', '$enkripsiPass')";
        mysqli_query($connect, $tambahData);

        return mysqli_affected_rows($connect);
        
    }


    // Validasi Login versi Saya 
    function login($data) {
        global $connect;

        $users = table("SELECT * FROM users");

        $username = mysqli_real_escape_string($connect, $data["username"]);
        $password = mysqli_real_escape_string($connect, $data["password"]);

        foreach($users as $u) {
            
            if ($username !== $u["username"] && 
            $password !== $u["password"]) {
                return false;
            }   
        }

        return mysqli_affected_rows($connect);
    }


    function tambahTable($data) {
        global $connect;

        $create = "CREATE TABLE $data( ".
       'id INT AUTO_INCREMENT, '.
       'fotoSiswa VARCHAR(20) NOT NULL, '.
       'namaSiswa  VARCHAR(20) NOT NULL, '.
       'nilaiIpa INT NOT NULL, '.
       'nilaiIps INT NOT NULL, '.
       'primary key ( id ))';

        mysqli_query($connect, $create);

        return mysqli_error($connect);
    }


?>