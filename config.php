<?php 

$server = "localhost";
$user = "root";
$pass = "steven";
$database = "RegistroIs";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>