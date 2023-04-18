<!DOCTYPE html>
<html>
<?php
require '../include/conn.php';
$id = $_GET['id'];
$sqlpeminjam = "SELECT `namaPeminjam`,`nokpPeminjam`,`noTel` FROM `peminjam` WHERE idPeminjam=$id ";
$result2 = mysqli_query($conn, $sqlpeminjam);
if (mysqli_num_rows($result2) > 0) {
    while ($row = mysqli_fetch_assoc($result2)) {
        $namaPeminjam = $row["namaPeminjam"];
        $nokpPeminjam = $row["nokpPeminjam"];
        $noTel = $row["noTel"];

    }
}

$sqlnukudipinjam = "SELECT count(idPinjaman)pinjaman FROM `pinjamanbuku` WHERE tarikhsebenarpulang is null";
$result3 = mysqli_query($conn, $sqlnukudipinjam);
while ($row2 = mysqli_fetch_assoc($result3)) {
    $jumlahpinjaman = $row2['pinjaman'];
}
?>

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
                <h4>MAKLUMAT PEMINJAM</h4>
                <p>NAMA PEMINJAM :
                    <?php echo $namaPeminjam; ?>
                </p>
                <h4>Carian Buku</h4>
                <form action="" method="POST">
                    <table>
                        <tr>
                            ISBN :<br>
                            <input type="text" id="isbn" name="isbn" required>
                        </tr><br>

                        <tr colspan="2"><br>
                            <?php if ($jumlahpinjaman <= '2') { ?>
                                <button type="submit" name="submit">PAPAR</button>
                            <?php } else {
                                echo "LIMIT BUKU ADALAH 5";
                            } ?>
                        </tr>
                    </table>
                </form>
                <br>
                <?php

                $bil = 1;

                if (isset($_POST['submit'])) {

                    $search = $_POST['isbn'];

                    $sql = "SELECT idBuku,isbn,tajukBuku,statusBuku FROM buku where isbn = '$search' and statusBuku='ADA'";

                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $isbn = $row["isbn"];
                            $tajukBuku = $row["tajukBuku"];
                            $idbuku = $row["idBuku"];
                            $statusBuku = $row["statusBuku"];
                        }


                        ?>
                        <form action="simpanrekod.php" method="POST">
                            <h4>Maklumat Buku</h4>
                            <table>

                                <tr>
                                    ISBN :<br>
                                    <input type="text" id="isbn" name="isbn" value="<?php echo $isbn; ?> " readonly>
                                </tr><br>
                                <tr>
                                    Tajuk Buku :<br>
                                    <input type="text" id="tajukbuku" name="tajukbuku" value="<?php echo $tajukBuku; ?> "
                                        readonly>
                                </tr><br>
                                <tr>
                                    Tarikh Pinjam :<br>
                                    <input type="text" id="tarikhpinjam" name="tarikhpinjam"
                                        value="<?php echo $date = date('d/m/Y'); ?> " required>
                                </tr><br>
                                <tr>
                                    Tarikh Pulang :<br>
                                    <input type="date" id="tarikhpulang" name="tarikhpulang" required>
                                </tr><br>


                                <tr colspan="2"><br>
                                    <input type="hidden" id="idbuku" name="idbuku" value="<?php echo $idbuku; ?> "><br>
                                    <input type="hidden" id="idpeminjam" name="idpeminjam" value="<?php echo $id; ?> "><br>

                                    <button type="submit" name="submit">SIMPAN</button>



                                </tr>
                            </table>
                        </form>
                    <?php } else {



                        echo '<script>alert("Tiada Buku di dalam Pangkalan Data.Sila Masukkan No. ISBN lain")</script>';

                    }


                } ?>

                <button type="submit" name="submit">PAPAR SENARAI PINJAMAN</button>

        </section>

    </div>

</body>

</html>