<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "crud1";

$mysqli = mysqli_connect($server, $user, $pass, $database);

if (!$mysqli) {
    die("<script>alert('Connection Failed.')</script>");
}

?>