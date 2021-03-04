<?php

    $connect = mysqli_connect("localhost", "root", "", "login");

    function query ($data) {

        global $connect;

        $query = mysqli_query($connect, $data);

        $row = [];
        while ($rows = mysqli_fetch_assoc($query)) {

            $row[] = $rows;
        }
        
        return $row;
    }


    function login ($data) {
        global $connect;

        $arrCorrect = query("SELECT * FROM login1");

        foreach($arrCorrect as $correct) {
            if( $data["username"] == $correct["username"] && 
                $data["password"] == $correct["password"]
            ) {
                echo "
                    <script> 
                        alert('Log In berhasil'); 
                        document.location.href = 'Sampel Tabel Uang/home.php?user=$correct[username]';
                    </script>
                ";
            } 
        } 
            if ($data["username"] != $correct["username"]) {
                echo "
                    <h3 style='color:red';>Username Atau Password Anda Salah</h3>
                
                ";
            }

    }


    function daftar ($data) {
        global $connect;

        $username= $data["username"];
        $email = $data["email"];
        $password = $data["password"];

         mysqli_query ($connect, "INSERT INTO login1 VALUES (
                '', '$username', '$email', '$password'
            ) ");

        return mysqli_affected_rows($connect);
    }


?>