<?php

    session_start();
    // untuk session
    if ( !isset($_SESSION["login"]) ) {
        header("Location: login.php");
        exit;
    }

    require("functions.php");
    
    if (hapus($_GET["id"]) > 0) {
        echo "
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'home.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Dihapus!');
                document.location.href = 'home.php';
            </script>
        ";
    }

?>