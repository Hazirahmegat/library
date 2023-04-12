<?php
require '../include/conn.php';

$nokpPeminjam = $_POST['nokp'];
$ISBN1 = $_POST['isbn1'];
$ISBN2 = $_POST['isbn2'];
$ISBN3 = $_POST['isbn3'];
$tarikhPinjam = $_POST['tarikhpinjam'];
$tarikhPulang = $_POST['tarikhpulang'];
$denda = $_POST['denda'];

echo $sql = "INSERT INTO pinjamanbuku (`nokpPeminjam`, `ISBN1`, `ISBN2`, `ISBN3`, `tarikhPinjam`, `tarikhPulang`, `denda`) VALUES ('$nokpPeminjam','$ISBN1','$ISBN2','$ISBN3','$tarikhPinjam','$tarikhPulang','$denda')";
$conn->query($sql);

header('location: simpanrekodpinjam.php');

?>