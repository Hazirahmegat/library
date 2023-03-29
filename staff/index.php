<?php
require '../include/conn.php';
if (!isset($_SESSION['idStaff']))
	header('location:../');
$idstaff = $_SESSION['idStaff'];
$sql = "SELECT * FROM staff WHERE idStaff = $idstaff";
$row = $conn->query($sql)->fetch_object();
$namastaff = $row->namaStaff;

?>

<!DOCTYPE html>
<html>

<head>
	<title>
		Online Library Management System
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="staff.css">

</head>


<body>
	<div class="wrapper">
		<header>
			<div class="logo">
				<img src="logo1.png">
				<h3 style="color: black;">SISTEM PERPUSTAKAAN ELEKTRONIK DESA KAMPUNG PULAU PISANG (e-Libs)</h3>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">LAMAN UTAMA</a></li>
					<div class="dropdown">
						<button class="dropbtn">BUKU</button>
						<div class="dropdown-content">
							<a href="kategori.php">KATEGORI</a>
							<a href="daftarbuku.php">DAFTAR BUKU</a>
							<a href="senaraibuku.php">SENARAI BUKU</a>
						</div>
					</div>
					<div class="dropdown">
						<button class="dropbtn">CARIAN</button>
						<div class="dropdown-content">
							<a href="peminjam.php">PEMINJAM</a>
							<a href="buku.php">BUKU</a>
						</div>
					</div>
					<div class="dropdown">
						<button class="dropbtn">PEMINJAM</button>
						<div class="dropdown-content">
							<a href="daftarbaru.php">DAFTAR BARU</a>
							<a href="rekodpinjam.php">REKOD PINJAM</a>
							<a href="rekodpulang.php">REKOD PULANG BUKU</a>
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
			<p style="color:black;  text-align: center; ">
				<br><br>
				Facebook:Perpustakaan Desa Kampung Pulau Pisang <br>
				Mobile:04-7451019
			</p>
		</footer>
	</div>
</body>

</html>