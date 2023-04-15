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
                            <a href="buku.php">BUKU</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">PEMINJAM</button>
                        <div class="dropdown-content">
                            <a href="daftarbaru.php">DAFTAR PEMINJAM BARU</a>
                            <a href="rekodpinjam.php">REKOD PINJAMAN BARU</a>
                            <a href="rekodpulang.php">REKOD PULANG BUKU</a>
                        </div>
                    </div>
                </ul>
            </nav>
        </header>
        <section>

            <form action="senaraibuku.php" method="post">

                <table class="t">
                    <tr>
                        <td>No.KP Peminjam :</td>
                        <td>Nama :</td>
                        <td>Tajuk Buku 1</td>
                        <td>Tajuk Buku 2</td>
                        <td>Tajuk Buku 3</td>
                        <td>Tarikh Pinjam Buku</td>
                        <td>Tarikh Pulang Buku</td>
                    </tr>
                    <?php
                    $bil = 1;
                    $sql = "SELECT  `ISBN`, `tajukBuku`, `penulis1`, `penulis2`, `tahun`, `penerbit`,kategoribuku.`namaKategori`,`lokasi`, `statusBuku` FROM buku 
                    inner join kategoribuku on kategoribuku.idKategori=buku.namaKategori ORDER BY tajukBuku";
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
                                <?php echo $row->lokasi; ?>
                            </td>
                            <td>
                                <?php echo $row->statusBuku; ?>
                            </td>

                            <td>
                                <a href="senaraibuku.php?menu=senarai&edit=<?php echo $row->idBuku; ?>"
                                    onclick="return sahkan()">edit</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </form>

        </section>

    </div>
</body>

</html>