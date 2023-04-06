<?php
require '../include/conn.php';

$nokpPeminjam = $_POST['nokpPeminjam'];
$ISBN1 = $_POST['ISBN1'];
$ISBN2 = $_POST['ISBN2'];
$ISBN3 = $_POST['ISBN3'];
$tarikhPinjam = $_POST['tarikhPinjam'];
$tarikhPulang = $_POST['tarikhPulang'];
$denda = $_POST['denda'];

echo $sql = "INSERT INTO pinjamBuku (`nokpPeminjam`, `ISBN1`, `ISBN2`, `ISBN3`, `tarikhPinjam`, `tarikhPulang`, `denda`) VALUES ('nokpPeminjam','ISBN1','ISBN2','ISBN3','tarikhPinjam','tarikhPulang','denda')";
$conn->query($sql);

header('location: rekodpinjam.php');

?>