<?php
require '../include/conn.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Online Library Management System
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="peminjam.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
    <div class="wrapper">
        <header>
            <div class="logo">
                <img src="logo1.png">
                <h3>SISTEM PERPUSTAKAAN ELEKTRONIK DESA KAMPUNG PULAU PISANG (e-Libs)</h3>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">LAMANUTAMA</a></li>
                    <div class="dropdown">
                        <button class="dropbtn">CARIAN BUKU</button>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">MAKLUMAT PEMINJAM</button>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><span class="fa fa-user-tie"></span>PROFIL</button>
                        <div class="dropdown-content">
                            <a>KEMASKINI</a>
                            <a>TUKAR KATA LALUAN</a>
                            <a href="../logout.php">LOG KELUAR</a>
                        </div>
                    </div>
                </ul>
            </nav>
        </header>
        <section>
            <h2> MAKLUMAT PINJAMAN </h2>
