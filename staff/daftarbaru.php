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

            <form action="simpanahlibaru.php" method="post">
                <fieldset>
                    <legend>DAFTAR PEMINJAM BARU</legend>
                    <table>
                        <tr>
                            Nama Peminjam :<br>
                            <input type="text" id="namapeminjam" name="namapeminjam" style="text-transform: uppercase"
                                requied>
                        </tr><br>
                        <tr>
                            No.KP Peminjam :<br>
                            <input type="text" id="nokppeminjam" name="nokppeminjam" style="text-transform: uppercase"
                                requied>
                        </tr><br>
                        <tr>
                            Katalaluan :<br>
                            <input type="text" id="katalaluan" name="katalaluan" style="text-transform: uppercase"
                                requied>
                        </tr><br>
                        <tr>
                            Nombor Telefon :<br>
                            <input type="text" id="noTel" name="noTel">
                        </tr><br>
                        <tr>
                            Nama Waris :<br>
                            <input type="text" id="namawaris" name="namawaris" style="text-transform: uppercase">
                        </tr><br>
                        <tr>
                            Nombor Telefon Waris :<br>
                            <input type="text" id="notelwaris" name="notelwaris" style="text-transform: uppercase">
                        </tr><br>
                        <tr>
                            Token Telegram :<br>
                            <input type="text" id="tokentele" name="tokentele" style="text-transform: uppercase">
                        </tr><br>
                        <tr>
                            Chat ID :<br>
                            <input type="text" id="chatid" name="chatid" style="text-transform: uppercase">
                        </tr><br>
                        

                        <tr colspan="2"><br>
                            <button type="submit">SIMPAN</button>
                        </tr>

                    </table>
            </form>

            

        </section>

    </div>
</body>

</html>