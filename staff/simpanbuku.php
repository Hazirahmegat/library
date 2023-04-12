<?php
require '../include/conn.php';

$ISBN = $_POST['isbn'];
$tajukBuku = $_POST['tajukbuku'];
$penulis1 = $_POST['penulis1'];
$penulis2 = $_POST['penulis2'];
$tahun = $_POST['tahun'];
$penerbit = $_POST['penerbit'];
$namaKategori = $_POST['Kategoribuku'];
$lokasi = $_POST['lokasi'];
$statusBuku = $_POST['statusBuku'];

echo $sql = "INSERT INTO buku (`ISBN`, `tajukBuku`, `penulis1`, `penulis2`, `tahun`, `penerbit`, `namaKategori`,`lokasi`, `statusBuku`)VALUES('$ISBN','$tajukBuku','$penulis1','$penulis2','$tahun','$penerbit','$namaKategori','$lokasi','$statusBuku')";
$conn->query($sql);

header('location: senaraibuku.php');
?>