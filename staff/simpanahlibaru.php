<?php
require '../include/conn.php';

$namaPeminjam = $_POST['namapeminjam'];
$nokpPeminjam = $_POST['nokppeminjam'];
$katalaluan = $_POST['katalaluan'];
$noTel = $_POST['noTel'];
$namaWaris = $_POST['namawaris'];
$noTelWaris = $_POST['notelwaris'];
$tokentele = $_POST['tokentele'];
$chatid = $_POST['chatid'];


echo $sql = "INSERT INTO peminjam (`namaPeminjam`, `nokpPeminjam`, `katalaluan`, `noTel`, `namaWaris`, `noTelWaris`,`tokentele`,`chatid`)
VALUES('$namaPeminjam','$nokpPeminjam','$katalaluan','$noTel','$namaWaris','$noTelWaris','$tokentele','$chatid')";
$conn->query($sql);

header('location: daftarbaru.php');
?>