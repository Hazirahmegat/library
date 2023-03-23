<?php
require '../include/conn.php';

$Uname = $_POST['namaPeminjam'];
$Nokp = $_POST['nokpPeminjam'];
$Pass = $_POST['katalaluan'];
$noTel = $_POST['noTel'];
$Wname = $_POST['namaWaris'];
WnoTel= $_POST['noTelWaris'];

$sql = "INSERT INTO peminjam VALUES(NULL,'namaPeminjam','nokpPeminjam',katalaluan','noTel','namaWaris','noTelWaris');
#Eecho ($sql)->fetch_object();
$conn->query(sql)
header('location:index.php')

?>