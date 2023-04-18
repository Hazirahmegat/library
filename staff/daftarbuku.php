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

            <form action="simpanbuku.php" method="post">
                <fieldset>
                    <legend>DAFTAR BUKU</legend>
                    <table>

                        <tr>
                            ISBN :<br>
                            <input type="text" id="ISBN" name="isbn" style="text-transform: uppercase" required>
                        </tr><br>
                        <tr>
                            Tajuk Buku :<br>
                            <input type="text" id="tajukBuku" name="tajukbuku" style="text-transform: uppercase"
                                required>
                        </tr><br>
                        <tr>
                            Penulis 1 :<br>
                            <input type="text" id="penulis1" name="penulis1" style="text-transform: uppercase" required>
                        </tr><br>
                        <tr>
                            Penulis 2 :<br>
                            <input type="text" id="penulis2" name="penulis2" style="text-transform: uppercase">
                        </tr><br>
                        <tr>
                            Tahun :<br>
                            <input type="text" id="tahun" name="tahun" style="text-transform: uppercase" required>
                        </tr><br>
                        <tr>
                            Penerbit :<br>
                            <input type="text" id="penerbit" name="penerbit" style="text-transform: uppercase" required>
                        </tr><br>
                        <tr>
                            <?php
                            echo "<br>Kategori<br> ";
                            require '../include/conn.php';
                            $query = "SELECT idKategori,namaKategori FROM kategoribuku";
                            if ($r_set = $conn->query($query)) {
                                echo "<SELECT name=Kategoribuku class='form-control' style='width:360px'>";


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
                            Lokasi :<br>
                            <input type="text" id="lokasi" name="lokasi" style="text-transform: uppercase" required>
                        </tr><br>
                        <br>
                        <tr>
                            <label for="status">Status Buku :</label><br>
                            <br>
                            <select id="status" name="statusBuku" style='width:360px'>
                                <option value="ada">ADA</option>
                                <option value="dipinjam">DIPINJAM</option>
                                <option value="tiada">TIADA</option>
                            </select>
                        </tr><br>
                        <tr colspan="2"><br>
                            <button type="submit">SIMPAN</button>
                            <button type="reset">BATAL</button>

                        </tr>
                    </table>

        </section>

    </div>
</body>

</html>