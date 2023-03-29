<?php
require '../include/conn.php';

$ISBN = $_POST['ISBN'];
$tajukBuku = $_POST['tajukBuku'];
$penulis1 = $_POST['penulis1'];
$penulis2 = $_POST['penulis2'];
$tahun = $_POST['tahun'];
$penerbit= $_POST['penerbit'];
$namaKategori =$_POST['namaKategori'];
$status = $_POST['status'];
$lokasi = $_POST['lokasi'];

$sql = "SELECT * FROM peminjam VALUES(NULL,'ISBN','tajukBuku','penulis1','penulis2','tahun','penerbit','namaKategori','status','lokasi')";
$conn->query($sql);

header('location:carian.php');
?>
