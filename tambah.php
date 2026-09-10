<?php
include_once 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

  mysqli_query($koneksi, "INSERT INTO siswa (nama, kelas) VALUES ('$nama', '$kelas')");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>rafa</title>
</head>
<body>

<h2>Tambah Siswa</h2>

<form method="POST">
    Nama <br>
    <input type="text" name="nama"><br><br>

    Kelas <br>
    <input type="text" name="kelas"><br><br>

    <input type="submit" name="simpan" value="Simpan">
</form>

<br>

<a href="index.php">Kembali</a>

</body>
</html>