<?php

session_start();
require("functions.php");

$username = $_SESSION["username"];

mysqli_query($connect, "DELETE FROM users WHERE username = '$username' ");

session_unset();
$_SESSION = [];
session_destroy();

header("Location: login.php");


?>