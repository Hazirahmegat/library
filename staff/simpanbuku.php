<?php
require '../include/conn.php';

$ISBN = $_POST['isbn'];
$tajukBuku = $_POST['tajukbuku'];
$penulis1 = $_POST['penulis1'];
$penulis2 = $_POST['penulis2'];
$tahun = $_POST['tahun'];
$penerbit = $_POST['penerbit'];
$namaKategori = $_POST['Kategoribuku'];

echo $sql = "INSERT INTO buku (`ISBN`, `tajukBuku`, `penulis1`, `penulis2`, `tahun`, `penerbit`, `namaKategori`)VALUES('$ISBN','$tajukBuku','$penulis1','$penulis2','$tahun','$penerbit','$namaKategori')";
$conn->query($sql);

header('location: senaraibuku.php');
?>