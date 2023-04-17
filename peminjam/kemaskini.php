<?php
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
	<script src="https://kit.fontawesome.com/c52decb24a.js" crossorigin="anonymous"></script>

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
                    <li><a href="index.php">LAMAN UTAMA</a></li>
                    <div class="dropdown">
                        <a class="dropbtn" href="carian.php">CARIAN BUKU</a>
                    </div>
                    <div class="dropdown">
                        <a class="dropbtn" href="makpeminjam.php">MAKLUMAT PEMINJAM</a>
                    </div>
                    <div class="dropdown">
                        <a class="dropbtn"><span class="fa fa-user-tie"></span>PROFIL</a>
                        <div class="dropdown-content">
                            <a href="kemaskini.php"> KEMASKINI</a>
							<a href="forgot-password.php">TUKAR KATA LALUAN </a>
                            <a href="../index.php">LOG KELUAR</a>
                        </div>
                    </div>
                </ul>
            </nav>
        </header>
        <h2>Kemaskini Profil </h2>
