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
                <h3 style="color: white;">SISTEM PERPUSTAKAAN ELEKTRONIK DESA KAMPUNG PULAU PISANG (e-Libs)</h3>
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
							<a href="report.php">LAPORAN BULANAN</a>
						</div>
					</div>
					<div class="dropdown">
						<button class="dropbtn">PEMINJAM</button>
						<div class="dropdown-content">
							<a href="daftarbaru.php">DAFTAR PEMINJAM BARU</a>
							<a href="pinjamanbaru.php">REKOD PINJAMAN BARU</a>
							<a href="rekodpulang.php">REKOD PULANG BUKU</a>
							<a href="telegram.php">NOTIFICATION TELEGARM</a>
						</div>
					</div>
				</ul>
            </nav>
        </header>
        <section>

        <form action="" method="post">
                <fieldset>
                    <legend>CARIAN BUKU</legend>
                    <table>
                        <tr>
                            NO.KP PEMINJAM:<br>
                            <input type="text" id="nokp" name="nokpPeminjam" required>
                        </tr><br>

                        <tr colspan="2"><br>
                            <button type="submit" name="submit">PAPAR</button>
                        </tr>
                    </table>

                    <table class="t">
                        <tr>
                            <th>ID PEMINJAM</th>
                            <th>NAMA PEMINJAM</th>
                            <th>NO.KP PEMINJAM</th>
                            <th>TINDAKAN</th>
                        </tr>
                        <?php
                        require '../include/conn.php';
                        $bil = 1;

                        if (isset($_POST['submit'])) {

                            $search = $_POST['nokpPeminjam'];

                            $sql = "SELECT idPeminjam,namaPeminjam,nokpPeminjam FROM peminjam where nokpPeminjam = '$search'";

                            $result = $conn->query($sql);
                            while ($row = $result->fetch_object()) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $bil++; ?>
                                    </td><br>
                                    <td>
                                        <?php echo $row->namaPeminjam; ?>
                                    </td><br>
                                    <td>
                                        <?php echo $row->nokpPeminjam; ?>
                                    </td>
                                    <td>
                                    <a href="rekodpinjam.php?id=<?php echo $row->idPeminjam; ?>"
                                        onclick="">pilih</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </table>
        </section>


    </div>
</body>

</html>