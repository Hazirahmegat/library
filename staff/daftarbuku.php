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
                            <a href="">DAFTARBARU</a>
                            <a href="">REKODPINJAM</a>
                            <a href="">REKODPULANGBUKU</a>
                        </div>
                    </div>
                </ul>
            </nav>
        </header>
        <section>

            <h1 style="text-align: center; font-size: 25px;">DAFTAR BUKU</h1>
            <form name="daftarbuku" action="" method="">

                <div class="container">
                    <form action="/daftarbuku.php">
                        <label for="ISBN">ISBN</label>
                        <input type="text" id="ISBN" name="ISBN" >

                        <label for="tajuk">Tajuk Buku</label><br>
                        <input type="text" id="tajuk" name="ltajuk" ><br>

                        <label for="penulis1">Penulis 1</label><br>
                        <input type="text" id="penulis1" name="penulis1" ><br>

                        <label for="penulis2">Penulis 2</label><br>
                        <input type="text" id="penulis2" name="penulis2" ><br>

                        <label for="tahun">Tahun</label><br>
                        <input type="text" id="tahun" name="tahun" ><br>

                        <label for="Penerbit">Penerbit</label><br>
                        <input type="text" id="penerbit" name="penerbit" ><br>

                        <label for="kategori">Kategori</label><br>
                        <input type="text" id="kategori" name="kategori" ><br>

                        <input type="submit" value="SIMPAN">
                    </form>
                </div>
        </section>

    </div>
</body>

</html>