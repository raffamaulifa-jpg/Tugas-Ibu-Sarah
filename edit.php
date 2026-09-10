<?php
include_once 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$d = mysqli_fetch_array($data);

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    mysqli_query($koneksi, "UPDATE siswa SET nama='$nama', kelas='$kelas' WHERE id='$id'");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>rafa</title>
</head>
<body>

<h2>Edit Siswa</h2>

<form method="POST">
    Nama <br>
    <input type="text" name="nama" value="<?= $d['nama']; ?>"><br><br>

    Kelas <br>
    <input type="text" name="kelas" value="<?= $d['kelas']; ?>"><br><br>

    <input type="submit" name="update" value="Update">
</form>

<br>

<a href="index.php">Kembali</a> ``
</body>
</html>