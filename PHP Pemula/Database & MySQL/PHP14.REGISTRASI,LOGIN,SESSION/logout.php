<?php

session_start();

// Untuk meyakinkan bahwa session telah tidak ada/ dihapus
session_unset();
// menimpa dengan array kosong
$_SESSION = [];
session_destroy();

header("Location: login.php");

?>