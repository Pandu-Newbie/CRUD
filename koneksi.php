<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "sistem_mahasiswa";

// Koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
