<?php
require '../include/conn.php';

$namaPeminjam = $_POST['namapeminjam'];
$nokpPeminjam = $_POST['nokppeminjam'];
$katalaluan = $_POST['katalaluan'];
$noTel = $_POST['noTel'];
$namaWaris = $_POST['namawaris'];
$noTelWaris = $_POST['notelwaris'];


echo $sql = "INSERT INTO peminjam (`namaPeminjam`, `nokpPeminjam`, `katalaluan`, `noTel`, `namaWaris`, `noTelWaris`)
VALUES('$namaPeminjam','$nokpPeminjam','$katalaluan','$noTel','$namaWaris','$noTelWaris')";
$conn->query($sql);

header('location: daftarbaru.php');
?>