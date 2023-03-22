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
                    <li><a href="index.php">LAMANUTAMA</a></li>
                    <div class="dropdown">
                        <button class="dropbtn">BUKU</button>
                        <div class="dropdown-content">
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
                            <a href="daftarbaru.php">DAFTARBARU</a>
                            <a href="rekod.php">REKODPINJAM</a>
                            <a href="pulang.php">REKODPULANGBUKU</a>
                        </div>
                    </div>
                </ul>
            </nav>
        </header>
        <section>

            <h1 style="text-align: center; font-size: 25px;">DAFTAR BUKU</h1>
            <form name="daftarbuku" action="" method="">

                <div class="container">
                    <form action="/peminjam.php">
                        <label for="tajuk">TAJUK</label><br>
                        <input type="text" id="tajuk" name="tajuk" ><br>

                        <label for="kategori">KATEGORI</label><br>
                        <input type="text" id="kategori" name="kategori" ><br>

                        <label for="penulis">PENULIS</label><br>
                        <input type="text" id="penulis" name="penulis" ><br>

                        <input type="submit" value="CARI">
                    </form>
                </div>
        </section>

    </div>
</body>

</html>