<?php 

$server = "localhost:3309";
$user = "root";
$pass = "";
$database = "charity_system";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>