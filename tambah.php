<?php
session_start();
if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
//koneksi ke DBMS
// $conn = mysqli_connect("localhost","root","","phpdasar");

// cek apakah tombol submith sudah di tekan apa belum
if( isset($_POST["submit"])) {
// var_dump($_POST); 
// var_dump($_FILES);
// die;

//cek apakah data berhasil di tambah atau tidak
if (tambah($_POST) > 0) {
    echo " 
    <script>
    alert('data berhasil di tambahkan!');
    document.location.href = 'index.php';
    </script>
    ";
}else{
    echo "
     <script>
    alert('data gagal di tambahkan!');
    document.location.href = 'index.php';
    </script>
    ";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    </head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <ul>
        <li>
            <label for="nrp">NRP : </label>
            <input type="text" name="nrp" id="nrp" required>
        </li>
        <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required>
        </li>
        <li>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email" required>
        </li>
        <li>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" required>
        </li>
        <li>
        <label for="gambar">Foto : </label>
        <input type="file" name="gambar" id="gambar" >
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data!</button>
        </li>
    </ul>

    </form>
</body>
</html>