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
                            <a href="daftarbaru.php">DAFTAR BARU</a>
                            <a href="rekodpinjam.php">REKOD PINJAM</a>
                            <a href="rekodpulang.php">REKOD PULANG BUKU</a>
                        </div>
                    </div>
                </ul>
            </nav>
        </header>
        <section>

                    <form action="simpanrekodpinjam.php" method="post">
                        <fieldset>
                            <legend>REKOD PINJAM BUKU</legend>
                            <table>
                                <tr>
                                    No.kp Peminjam :<br>
                                    <input type="text" id="nokp" name="nokp" required>
                                </tr><br>
                                <tr>
                                    ISBN 1 :<br>
                                    <input type="text" id="isbn1" name="isbn1" required>
                                </tr><br>
                                <tr>
                                    ISBN 2 :<br>
                                    <input type="text" id="isbn2" name="isbn2" >
                                </tr><br>

                                <tr>
                                   ISBN 3 :<br>
                                    <input type="text" id="isbn3" name="isbn3">
                                </tr><br>
                                <tr>
                                   Tarikh Pinjam :<br>
                                    <input type="date" id="tarikhpinjam" name="tarikhpinjam" required>
                                </tr><br>
                                <tr>
                                   Tarikh Pulang :<br>
                                    <input type="date" id="tarikhpulang" name="tarikhpulang" required>
                                </tr><br>
                                <tr>
                                   Denda :<br>
                                    <input type="text" id="denda" name="denda">
                                </tr><br>
                                
                                
                                <tr colspan="2"><br>
                                        <button type="submit">SIMPAN</button>                                  
                                </tr>
                            </table>

        </section>

    </div>
</body>

</html>