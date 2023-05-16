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
                            <a href="kategori.php">DAFTAR KATEGORI</a>
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
                </form>
            </nav>
        </header>

        <section>

            <div align="center">
                <form action="simpan.php" method="post">

                    <label for="kategori">DAFTAR KATEGORI</label><br>
                    <input type="text" id="kategori" name="kategori"><br>
                    <button class="button">SIMPAN</button>
                </form>

            </div><br>

            <table class="t">
                <tr>
                    <th>Bil</th>
                    <th>Kategori Buku</th>
                    <th>Tindakan</th>
                </tr>
                <?php
                $bil = 1;
                $sql = "SELECT * FROM kategoribuku ORDER BY namaKategori";
                $result = $conn->query($sql);
                while ($row = $result->fetch_object()) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $bil++; ?>
                        </td>
                        <td>
                            <?php echo $row->namaKategori; ?>
                        </td>
                        <td>
                            <a href="padam.php?idKategori=<?php echo $row->idKategori; ?>"
                                onclick="return sahkan()">EDIT</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>

            <script>
                function sahkan() {
                    return confirm('Adakah anda pasti?');
                }
            </script>

        </section>

    </div>
</body>

</html>