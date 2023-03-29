<?php
require '../include/conn.php';
if (!isset($_SESSION['idPeminjam']))
	header('location:../');
$idPeminjam = $_SESSION['idPeminjam'];
$sql = "SELECT * FROM peminjam WHERE idPeminjam = $idPeminjam";
$row = $conn->query($sql)->fetch_object();
$namaPaminjam = $row->namaPeminjam;

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
                    <li><a href="index.php">LAMANUTAMA</a></li>
                    <div class="dropdown">
                        <a class="dropbtn" href="carian.php">CARIAN BUKU</a>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">MAKLUMAT PEMINJAM</button>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><span class="fa fa-user-tie"></span>PROFIL</button>
                        <div class="dropdown-content">
                            <a href="kemaskini.php"> KEMASKINI</a>
							<a>TUKAR KATA LALUAN </a>
                            <a href="../logout.php">LOG KELUAR</a>
                        </div>
                    </div>
                </ul>
            </nav>
        </header>
		<section>
			<div class="sec_img">
				<br><br><br>
				<div class="box">
					<br><br><br><br>
					<h1 style="text-align: center; font-size: 35px;">SELAMAT DATANG KE e-Libs</h1><br><br>
					<h1 style="text-align: center;font-size: 25px;">Buka Ahad - Khamis 10:00 - 6:00</h1><br>
					<h1 style="text-align: center;font-size: 25px;">Tutup pada Jumaat - Sabtu </h1><br>
				</div>
			</div>
		</section>
		<footer>
			<p style="color:white;  text-align: center; ">
				<br><br>
				Email: PerpustakaanDesaKampungPulauPisang@gmail.com<br>
				Mobile: 04-5678906
			</p>
		</footer>
	</div>
</body>

</html>