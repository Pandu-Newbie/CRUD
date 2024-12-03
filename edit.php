<?php
include 'koneksi.php';
// Mengambil ID mahasiswa dari URL menggunakan metode GET
$id = $_GET['id'];
// Query untuk mengambil data mahasiswa berdasarkan ID yang dipilih
$query = "SELECT * FROM mahasiswa WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    // Query untuk mengupdate data mahasiswa berdasarkan ID
    $query = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', jurusan = '$jurusan', email = '$email' WHERE id = $id";
    mysqli_query($koneksi, $query);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Edit Mahasiswa</h1>
<form action="" method="POST">
    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required><br><br>

    <label>NIM:</label><br>
    <input type="text" name="nim" value="<?php echo $data['nim']; ?>" required><br><br>

    <label>Jurusan:</label><br>
    <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $data['email']; ?>" required><br><br>

    <button type="submit">Update</button>
</form>

<a href="index.php">Kembali</a>

</body>
</html>
