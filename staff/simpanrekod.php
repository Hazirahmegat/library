<?php
require '../include/conn.php';

$idbuku = $_POST['idbuku'];
$idpeminjam = $_POST['idpeminjam'];
$tarikhpinjam = $_POST['tarikhpinjam'];
$tarikhpulang = $_POST['tarikhpulang'];

$tarikhpinjam=date('Y-m-d',strtotime(str_replace('/','-',($tarikhpinjam))));
$tarikhpulang=date('Y-m-d',strtotime(str_replace('/','-',($tarikhpulang))));

echo $sql = "INSERT INTO pinjamanbuku (`idPeminjam`,`idBuku`, `tarikhPinjam`, `tarikhPulang` )
VALUES('$idpeminjam','$idbuku','$tarikhpinjam','$tarikhpulang')";
$sqlinsert=$conn->query($sql);

if($sqlinsert){
    $sqlupdate="UPDATE buku set statusBuku='DIPINJAM' where idBuku=$idbuku";
    $conn->query($sqlupdate);

echo "<script>alert('Maklumat Telah Disimpan');
window.location='rekodpinjam.php?id=".$idpeminjam."'
</script>";
//header('location: rekodpinjam.php?id=" . $idpeminjam ." ');
}else{
    echo '<script>alert("Maklumat Tidak Disimpan")</script>';
}
?>