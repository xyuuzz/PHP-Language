<?php 

session_start();

session_destroy();

// Menghapus cookie remember
setcookie("id","", time()-1);
setcookie("kk","", time()-1);

header("Location: login.php");


?>