<?php
require '../include/conn.php';

$namaKategori = $_POST['kategori'];

$sql = "INSERT INTO kategoribuku VALUES(null,'$namaKategori')";
$conn->query($sql);

header('location: kategori.php');
?>