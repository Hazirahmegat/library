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

                    <form action="simpanbuku.php" method="post">
                        <fieldset>
                            <legend>DAFTAR BUKU</legend>
                            <table>
                                <tr>
                                    ISBN :<br>
                                    <input type="text" id="ISBN" name="isbn" requied>
                                </tr><br>
                                <tr>
                                    Tajuk Buku :<br>
                                    <input type="text" id="tajukBuku" name="tajukbuku" requied>
                                </tr><br>
                                <tr>
                                    Penulis 1 :<br>
                                    <input type="text" id="penulis1" name="penulis1" requied>
                                </tr><br>
                                <tr>
                                    Penulis 2 :<br>
                                    <input type="text" id="penulis2" name="penulis2">
                                </tr><br>
                                <tr>
                                    Tahun :<br>
                                    <input type="text" id="tahun" name="tahun">
                                </tr><br>
                                <tr>
                                    Penerbit :<br>
                                    <input type="text" id="penerbit" name="penerbit">
                                </tr><br>
                                <tr>
                                    <?php
                                    echo "<br>Student ";
                                    require'../include/conn.php';
                                    $query = "SELECT idKategori,namaKategori FROM kategoribuku";
                                    if($r_set=$conn->query($query)){
                                        echo "<SELECT name=Kategoribuku class='form-control' style='width:200px'>";

                                        while($row=$r_set->fetch_assoc()){
                                            echo "<option value =$row[idKategori]>$row[namaKategori]</option>";
                                        }
                                        echo "</select>";
                                    }else{
                                        echo $conn->error;
                                    }
                                    ?>
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