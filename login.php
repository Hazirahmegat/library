<?php
require 'include/conn.php';

$idpengguna = $_POST['idpengguna'];
$katalaluan = $_POST['katalaluan'];

//jika admin
if($idpengguna == 'admin'){
     $sql = "SELECT * FROM admin";
    $row = $conn->query($sql)->fetch_object();
    if (password_verify($katalaluan, $row->katalaluan)) {
        $_SESSION['idpengguna'] = 'admin';
        header('location:admin/');
    } else {
        ?>
        <script>
            alert('maaf,kata laluan salah.1');
            window.location = './';
        </script>
        <?php
    }
}else{
    //jika bukan admin cari dalam table staff
    $sql = "SELECT idStaff, katalaluan FROM staff WHERE nokpStaff = '$idpengguna'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_object();
        if (password_verify($katalaluan, $row->katalaluan)) {
            $_SESSION['idStaff'] = $row->idStaff;
            //header('location:staff/index.php');
            ?>
            <script>
                alert('Anda Berjaya Log Masuk Ke Sistem');
                window.location = 'staff/';
            </script>
            <?php
        } else {
            ?>
            <script>
                alert('Maaf,Kata laluan salah.2');
                window.location = './';
            </script>
            <?php
        }
    } else {
        ?>
    <script>
        alert('Maaf, kata laluan salah.3');
        window.location = './';
    </script>
    <?php

    }
} 
?>