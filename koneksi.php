<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$myDB = "toko_bca";
$conn = new mysqli($servername, $username, $password, $myDB);
if ($conn->connect_error) {
    die("Koneksi ke server-database gagal " . $conn->connect_error);
}
?>