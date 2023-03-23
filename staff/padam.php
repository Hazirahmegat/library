<?php
require '../include/conn.php';

$idKategori = $_GET['idKategori'];
$sql = "DELETE FROM kategoriBuku WHERE idKategori = $idKategori";
$conn->query($sql);

header('location: kategori.php');