<?php
require '../include/conn.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Online Library Management System
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="peminjam.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
    <div class="wrapper">
    <header>
            <div class="logo">
                <img src="logo1.png">
                <h3>SISTEM PERPUSTAKAAN ELEKTRONIK DESA KAMPUNG PULAU PISANG (e-Libs)</h3>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">LAMAN UTAMA</a></li>
                    <div class="dropdown">
                        <a class="dropbtn" href="carian.php">CARIAN BUKU</a>
                    </div>
                    <div class="dropdown">
                        <a class="dropbtn" href="makpeminjam.php">MAKLUMAT PEMINJAM</a>
                    </div>
                    <div class="dropdown">
                        <a class="dropbtn"><span class="fa fa-user-tie"></span>PROFIL</a>
                        <div class="dropdown-content">
                            <a href="kemaskini.php"> KEMASKINI</a>
							<a href="forgot-password.php">TUKAR KATA LALUAN </a>
                            <a href="../index.php">LOG KELUAR</a>
                        </div>
                    </div>
                </ul>
            </nav>
        </header>
        <section>
            <form class="example1" action="" method="POST">
            <h2>Carian Buku </h2><br>
                <input type="text" placeholder="ISBN/Tajuk Buku/Nama Penulis" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
                <table class="t">
                    <tr><b>
                        <th>BIL</th>
                        <th>ISBN</th>
                        <th>TAJUK BUKU</th>
                        <th>PENULIS 1</th>
                        <th>PENULIS 2</th>
                        <th>TAHUN</th>
                        <th>PENERBIT</th>
                        <th>KATEGORI</th>
                        <th>STATUS</th>
                        <th>LOKASI</th>
                    </b></tr>
                    <?php
                    $bil=1;

                    if(isset($_POST['search'])){

                    $search=$_POST['search'];

                    $sql="SELECT * FROM buku
                        WHERE tajukBuku LIKE '%$search%'
                        OR penulis1 LIKE '%$search%'
                        OR penulis2 LIKE '%$search%'
                        OR ISBN LIKE '%$search%'

                         ORDER BY tajukBuku";

                    $result = $conn->query($sql);
                    while($row = $result->fetch_object()){
                    ?>

                    <tr>
                                    <td>
                                        <?php echo $bil++; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->ISBN; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->tajukBuku; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->penulis1; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->penulis2; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->tahun; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->penerbit; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->namaKategori; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->status; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->lokasi; ?>
                                    </td>
                                </tr>
                                <?php
                    }
                }
                    ?>
                </table>
            </form>
        </section>

    </div>
</body>

</html>