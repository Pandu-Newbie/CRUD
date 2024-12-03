<?php
include 'koneksi.php';
// Method POST berfungsi untuk mengirim data ke server
// Mengecek apakah metode request adalah POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    // Query SQL untuk menambahkan data mahasiswa ke dalam tabel mahasiswa
    $query = "INSERT INTO mahasiswa (nama, nim, jurusan, email) VALUES ('$nama', '$nim', '$jurusan', '$email')";
    mysqli_query($koneksi, $query);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Tambah Mahasiswa</h1>
<form action="" method="POST">
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>NIM:</label><br>
    <input type="text" name="nim" required><br><br>

    <label>Jurusan:</label><br>
    <input type="text" name="jurusan" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <button type="submit">Simpan</button>
</form>

<a href="index.php">Kembali</a>

</body>
</html>
