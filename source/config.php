<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "food_paradise";

$conn = mysqli_connect($server, $user, $pass, $database);

// I prefer to use OOP style :D
$dbconn = new mysqli($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>