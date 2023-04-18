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
                           
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">PEMINJAM</button>
                        <div class="dropdown-content">
                            <a href="daftarbaru.php">DAFTAR PEMINJAM BARU</a>
                            <a href="pinjamanbaru.php">REKOD PINJAMAN BARU</a>
                            <a href="rekodpulang.php">REKOD PULANG BUKU</a>
                        </div>
                    </div>
                </ul>
            </nav>
        </header>
        <section>
            <fieldset>
                <legend>REKOD PINJAMAN BUKU</legend>
                <form action="" method="post">
                    <tr>
                        <table class="t"><br>
                            <br>
                            <tr><b>
                                    <th>BIL</th>
                                    <th>NAMA</th>
                                    <th>NO KAD PENGENALAN</th>
                                    <th>NO TEL</th>
                                    <th>ISBN</th>
                                    <th>TAJUK BUKU</th>
                                    <th>TARIKH PINJAM</th>
                                    <th>TARIKH PULANG</th>

                                </b></tr>
                            <?php
                            $bil = 1;
                            require '../include/conn.php';
                            $sql = "SELECT b.namaPeminjam,b.nokpPeminjam,b.noTel,c.ISBN,c.tajukBuku,a.tarikhPinjam,
                            a.tarikhPulang,a.idBuku,a.idPeminjam FROM `pinjamanbuku` a 
                            inner join peminjam b on a.idPeminjam=b.idPeminjam
                            inner join buku c on c.idBuku=a.idBuku";

                            $result = $conn->query($sql);
                            while ($row = $result->fetch_object()) {
                                ?>

                                <tr>
                                    <td>
                                        <?php echo $bil++; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->namaPeminjam; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->nokpPeminjam; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->noTel; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->ISBN; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->tajukBuku; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->tarikhPinjam; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->tarikhPulang; ?>
                                    </td>
                                   

                                </tr>

                               
                                <?php
                            }

                            ?>
                        </table>
            </fieldset>
        </section>

    </div>
</body>

</html>