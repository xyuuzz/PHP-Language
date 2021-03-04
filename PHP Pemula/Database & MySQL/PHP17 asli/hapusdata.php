<?php

// Memulai variabel global session
session_start();
// Untuk melemparkan user ke hal login jika user belum log in
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
} 

    require("functions.php");

    $id = $_GET["id"];  // untuk mendapatkan nilai id dari $_GET

    if (hapus($id, $_SESSION["username"]) > 0) {
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
