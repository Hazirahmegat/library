<?php
require '../include/conn.php';

$idBuku = $_GET['idBuku'];
$sql = "DELETE FROM buku WHERE idBuku = $idBuku";
$conn->query($sql);

header('location: senaraibuku.php');