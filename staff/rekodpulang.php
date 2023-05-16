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
            <fieldset>
                <legend>REKOD PULANGAN BUKU</legend>

                <h4>MAKLUMAT PEMINJAM</h4>
                <table>
                    <tr>
                        NAMA :<br>
                        <input type="text" id="isbn" name="isbn" value="<?php echo $isbn; ?> " readonly>
                    </tr><br>
                    <tr>
                        ISBN :<br>
                        <input type="text" id="isbn" name="isbn" value="<?php echo $isbn; ?> " readonly>
                    </tr><br>
                    <tr>
                        TAJUK BUKU :<br>
                        <input type="text" id="tajukbuku" name="tajukbuku" value="<?php echo $tajukBuku; ?> " readonly>
                    </tr><br>
                    <tr>
                        TARIKH PINJAM :<br>
                        <input type="text" id="tarikhpinjam" name="tarikhpinjam"
                            value="<?php echo $tarikhpinjam = date('d/m/Y'); ?> " readonly>
                    </tr><br>
                    <tr>
                        TARIKH PULANG :<br>
                        <input type="text" id="tarikhpulang" name="tarikhpulang"
                            value="<?php echo $tarikhpulang = date('d/m/Y'); ?> " readonly>
                    </tr><br>
                    <tr>
                        TARIKH SEBENAR PULANG :<br>
                        <input type="date" id="tarikhsebenarpulang" name="tarikhpulang" required>
                    </tr><br>

                    <tr colspan="2"><br>
                        <input type="hidden" id="idbuku" name="idbuku" value="<?php echo $idbuku; ?> "><br>
                        <input type="hidden" id="idpeminjam" name="idpeminjam" value="<?php echo $id; ?> "><br>

                        <button type="submit" name="submit">SIMPAN</button>
                    </tr>

            </fieldset>
        </section>

    </div>
</body>

</html>