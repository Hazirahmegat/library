<!DOCTYPE>
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

            <h1 style="text-align: center; font-size: 25px;">SENARAI BUKU</h1>


            <div align="center">
                <form action="" method="POST">
                    <tr>
                        <?php
                        echo "<br>Kategori<br>";
                        require '../include/conn.php';
                        $query = "SELECT idKategori,namaKategori FROM kategoribuku";
                        if ($r_set = $conn->query($query)) {
                            echo "<SELECT name=Kategoribuku class='form-control' style='width:300px'>";

                            while ($row = $r_set->fetch_assoc()) {
                                echo "<option value =$row[idKategori]>$row[namaKategori]</option>";
                            }
                            echo "</select>";
                        } else {
                            echo $conn->error;
                        }
                        ?>
                    </tr><br>
                    <br>


                    <tr>

                        <button type="submit" name="submit">PAPAR</button>
                        <table class="tsenaraibuku"><br>
                            <br>
                            <tr><b>
                                    <th>BIL</th>
                                    <th>ISBN</th>
                                    <th>TAJUK BUKU</th>
                                    <th>PENULIS 1</th>
                                    <th>PENULIS 2</th>
                                    <th>TAHUN</th>
                                    <th>PENERBIT</th>
                                    <th>KATEGORI</th>
                                    <th>STATUS</th>
                                    <th>LOKASI</th>
                                </b></tr>
                            <?php
                            $bil = 1;

                            if (isset($_POST['submit'])) {

                                $search = $_POST['Kategoribuku'];

                                $sql = "SELECT `ISBN`, `tajukBuku`, `penulis1`, `penulis2`, `tahun`, `penerbit`, b.`namaKategori`, `lokasi`, `statusBuku` 
                                FROM buku a inner join kategoribuku b on a.namaKategori =b.idKategori
                                WHERE a.namaKategori LIKE '%$search%'

                                ORDER BY tajukBuku";

                                $result = $conn->query($sql);
                                while ($row = $result->fetch_object()) {
                                    ?>

                                    <tr>
                                        <td>
                                            <?php echo $bil++; ?>
                                        </td>
                                        <td>
                                            <?php echo $row->ISBN; ?>
                                        </td>
                                        <td>
                                            <?php echo $row->tajukBuku; ?>
                                        </td>
                                        <td>
                                            <?php echo $row->penulis1; ?>
                                        </td>
                                        <td>
                                            <?php echo $row->penulis2; ?>
                                        </td>
                                        <td>
                                            <?php echo $row->tahun; ?>
                                        </td>
                                        <td>
                                            <?php echo $row->penerbit; ?>
                                        </td>
                                        <td>
                                            <?php echo $row->namaKategori; ?>
                                        </td>
                                        <td>
                                            <?php echo $row->statusBuku; ?>
                                        </td>
                                        <td>
                                            <?php echo $row->lokasi; ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </table>
                </form>
            </div>
        </section>

    </div>
</body>

</html>