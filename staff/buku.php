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
                            <a href="rekodpinjam.php">REKODP INJAM</a>
                            <a href="rekodpulang.php">REKOD PULANG BUKU</a>
                        </div>
                    </div>
                </ul>
            </nav>
        </header>
        <section>

            <h1 style="text-align: center; font-size: 25px;">CARIAN BUKU</h1>
            <form name="daftarbuku" action="" method="">

                <div align="center" class="container">
                    <form action="/peminjam.php">


                        <label for="tajuk">TAJUK</label><br>

                        <input type="text" id="tajuk" name="tajuk"><br>

                        <label for="kategori">KATEGORI</label><br>

                        <input type="text" id="kategori" name="kategori"><br>

                        <label for="penulis">PENULIS</label><br>

                        <input type="text" id="penulis" name="penulis"><br>

                        <button class="button">CARI</button>

                    </form>
                </div>

        </section>

    </div>
</body>

</html>