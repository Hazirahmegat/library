-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2023 at 03:45 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int NOT NULL,
  `katalaluan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `idBuku` int NOT NULL,
  `ISBN` int NOT NULL,
  `tajukBuku` varchar(800) NOT NULL,
  `penulis1` varchar(200) NOT NULL,
  `penulis2` varchar(200) NOT NULL,
  `tahun` int NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `namaKategori` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lokasi` int NOT NULL,
  `statusBuku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`idBuku`, `ISBN`, `tajukBuku`, `penulis1`, `penulis2`, `tahun`, `penerbit`, `namaKategori`, `lokasi`, `statusBuku`) VALUES
(3, 1234, 'logbook', 'hazirah', '', 2019, 'snka', '16', 0, ''),
(12, 12345, 'MATH SUCCESS', 'Choo wan yat', 'Yee Sook Fen', 2015, 'PELANGI', '19', 0, ''),
(13, 978983473, 'MUET', 'Yeoh Wei Tzee', '', 2013, 'OXFORD', '20', 0, ''),
(14, 865279303, 'SANG KANCIL', 'AINA', '', 2012, 'AIN', '18', 0, ''),
(16, 126543267, 'MARVEL', 'MAHARANI', '', 2011, 'ELINE', '11', 12, 'ADA');

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku`
--

CREATE TABLE `kategoribuku` (
  `idKategori` int NOT NULL,
  `namaKategori` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategoribuku`
--

INSERT INTO `kategoribuku` (`idKategori`, `namaKategori`) VALUES
(11, 'Novel'),
(18, 'Kanak-kanak'),
(19, 'Lain-lain'),
(20, 'Akademik'),
(21, 'Fiksyen');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `idPeminjam` int NOT NULL,
  `namaPeminjam` varchar(200) NOT NULL,
  `nokpPeminjam` varchar(20) NOT NULL,
  `katalaluan` varchar(300) NOT NULL,
  `noTel` int NOT NULL,
  `namaWaris` varchar(200) NOT NULL,
  `noTelWaris` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`idPeminjam`, `namaPeminjam`, `nokpPeminjam`, `katalaluan`, `noTel`, `namaWaris`, `noTelWaris`) VALUES
(1, 'aten', '020825090038', '$2y$10$3igU/adg.8YmDt3KiZUCtOagiG3x0xF1T.dc6tiavZLvZ1QntRDqO', 195612029, 'hazirah', 175536169);

-- --------------------------------------------------------

--
-- Table structure for table `pinjamanbuku`
--

CREATE TABLE `pinjamanbuku` (
  `idPinjaman` int NOT NULL,
  `nokpPeminjam` varchar(20) NOT NULL,
  `ISBN1` int NOT NULL,
  `ISBN2` int DEFAULT NULL,
  `ISBN3` int DEFAULT NULL,
  `tarikhPinjam` date NOT NULL,
  `tarikhPulang` date NOT NULL,
  `denda` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `idStaff` int NOT NULL,
  `namaStaff` varchar(250) NOT NULL,
  `nokpStaff` varchar(20) NOT NULL,
  `katalaluan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`idStaff`, `namaStaff`, `nokpStaff`, `katalaluan`) VALUES
(1, 'hazirah', '020320020456', '$2y$10$PzoQyqzkNwgGW1Fo0K98W.mJiROJ/SdGHxDNEiIGU4jShlRJ08nje');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`idBuku`),
  ADD UNIQUE KEY `idKategori` (`namaKategori`);

--
-- Indexes for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`idPeminjam`),
  ADD UNIQUE KEY `nokpPeminjam` (`nokpPeminjam`);

--
-- Indexes for table `pinjamanbuku`
--
ALTER TABLE `pinjamanbuku`
  ADD PRIMARY KEY (`idPinjaman`),
  ADD UNIQUE KEY `nokpPeminjam` (`nokpPeminjam`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`idStaff`),
  ADD UNIQUE KEY `nokpStaff` (`nokpStaff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `idBuku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  MODIFY `idKategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `idPeminjam` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pinjamanbuku`
--
ALTER TABLE `pinjamanbuku`
  MODIFY `idPinjaman` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `idStaff` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
