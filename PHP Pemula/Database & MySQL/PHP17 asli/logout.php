<?php

session_start();

// Untuk meyakinkan bahwa session telah tidak ada/ dihapus
session_unset();
// menimpa dengan array kosong
$_SESSION = [];
session_destroy();

// Menghilangkan cookie yang telah dibuat
setcookie("id","", time()-1);   // Dengan cara mengisi nama cookie dengan kosong => tidak ada nilai, men set time menjadi kurang dari, jadi sudah kadaluarsa
setcookie("id2","", time()-1);

header("Location: login.php");

?>