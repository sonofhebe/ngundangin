-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 07:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidoinikahv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `adat`
--

CREATE TABLE `adat` (
  `idAdat` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `penjelasan` text NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `adat`
--

INSERT INTO `adat` (`idAdat`, `iduser`, `penjelasan`, `updated_at`, `created_at`) VALUES
(1, 0, 'Pernikahan kami menggunakan adat jawa dan sunda yang dipadukan dengan nuansa modern..', NULL, NULL),
(4, 1, 'Pernikahan kami menggunakan adat jawa dan sunda yang dipadukan dengan nuansa modernnnnn', '2023-02-17', '2023-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `cerita`
--

CREATE TABLE `cerita` (
  `idCerita` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `judulCerita` varchar(30) NOT NULL,
  `isiCerita` text NOT NULL,
  `gambarCerita` text NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cerita`
--

INSERT INTO `cerita` (`idCerita`, `iduser`, `judulCerita`, `isiCerita`, `gambarCerita`, `updated_at`, `created_at`) VALUES
(1, 0, 'Pertama Bertemu', 'Aku bertemu di pinggir jalan kota bandung', '682906642.jpg', NULL, NULL),
(2, 0, 'Pertama Kali Jalan', 'Setelah pertemuan itu aku mengajak kamu jalan-jalan ke kota bandung dengan menggunakan sepeda ontel.', '7a83d66b5963c87248fd12fdd9e007bc.jpg', NULL, NULL),
(3, 0, 'Mulai Jatuh Cinta', 'Hari demi hari, aku makin jatuh cinta kepada wanita itu lalu aku memberanikan diri untuk pergi ke kedua orang tuamu dan melamarmu', 'cinta-hubungan-boys-ini-lho-5-inspirasi-cara-melamar-wanita-yang-romantis-111016.jpg', NULL, NULL),
(4, 0, 'Menikah', 'Dan pada akhirnya kaulah yang menjadi putri di hatiku dan pada hari ini aku akan menikah denganmu', 'pesona-citra-kirana-dan-rezky-aditya-di-akad-nikah-cerah-nan-elegan-3VfbMf4ata.jpg', NULL, NULL),
(5, 1, 'tesss', 'Ssetelah pertemuan itu aku mengajak kamu jalan-jalan ke kota bandung dengan menggunakan sepeda ontel.', 'pesona-citra-kirana-dan-rezky-aditya-di-akad-nikah-cerah-nan-elegan-3VfbMf4ata.jpg', '2023-02-18', NULL),
(7, 1, 'anjay', 'asd', '20-02-2023_10-19-53_Foto lite.jpg', '2023-02-20', '2023-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `idGalery` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `judulPhoto` text NOT NULL,
  `namaFile` text NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`idGalery`, `iduser`, `judulPhoto`, `namaFile`, `updated_at`, `created_at`) VALUES
(11, 0, 'asdasd', 'curhat-adik-cut-meyriska-soal-kakaknya.jpg', NULL, NULL),
(12, 0, '', '032558700_1574336639-74659547_806379023156200_5794764663790060496_n.jpg', NULL, NULL),
(13, 0, '', '009205300_1573652810-71181402_175706466948972_2141264900446734172_n.jpg', NULL, NULL),
(14, 0, '', '5dd4b88ba388660564749b79.jpg', NULL, NULL),
(15, 0, '', 'images.jpg', NULL, NULL),
(16, 0, '', 'Citra-Kirana-696x392.jpg', NULL, NULL),
(27, 1, 'blog', '20-02-2023-10-10_blog.jpg', '2023-02-20', '2023-02-20'),
(28, 1, 'blog', '20-02-2023_10-16-02_blog.jpg', '2023-02-20', '2023-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `lagu`
--

CREATE TABLE `lagu` (
  `idLagu` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `namaFile` varchar(225) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lagu`
--

INSERT INTO `lagu` (`idLagu`, `iduser`, `namaFile`, `updated_at`, `created_at`) VALUES
(1, 0, 'ARVIAN DWI - MELEPAS LAJANG.mp3', '2023-02-14', '2023-02-14'),
(2, 1, '04-29-43_Jegeg Bulan - Care Bebek.mp3', '2023-02-21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `idPesan` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `namaPengirim` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`idPesan`, `iduser`, `namaPengirim`, `isi`, `updated_at`, `created_at`) VALUES
(6, 0, 'Angga', 'Semoga menjadi keluarga sakinah mawahdah warohmah', NULL, NULL),
(7, 0, 'Devi', 'Cepet punya anak yah', NULL, NULL),
(8, 0, 'Hermawan', 'Samawa Yah Kaka', NULL, NULL),
(9, 1, 'Angga', 'Semoga Menjadi Keluarga Yang Sakinah Mawadah Warohmah', NULL, NULL),
(21, 1, 'auah', 'cape', '2023-02-20', '2023-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `resepsi`
--

CREATE TABLE `resepsi` (
  `idResepsi` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `namaPria` varchar(30) NOT NULL,
  `namaWanita` varchar(30) NOT NULL,
  `tglResepsi` date NOT NULL,
  `jamResepsi` time NOT NULL,
  `alamatResepsi` text NOT NULL,
  `namaGedung` text NOT NULL,
  `fileGambar` text NOT NULL,
  `maps` varchar(225) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `resepsi`
--

INSERT INTO `resepsi` (`idResepsi`, `iduser`, `namaPria`, `namaWanita`, `tglResepsi`, `jamResepsi`, `alamatResepsi`, `namaGedung`, `fileGambar`, `maps`, `updated_at`, `created_at`) VALUES
(1, 0, 'Putra', 'Putri', '2023-02-11', '08:03:22', 'Jl. Terusan Jend.Sudirman, Cibeber, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40531                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ', 'Gedung Sasana Krida Unjani', 'demo.jpg', 'https://www.google.com/maps?q=-6.175307,106.827131&hl=es;z=14&output=embed', NULL, NULL),
(4, 1, 'Fulantzy', 'Fulannah', '2023-02-22', '13:30:31', 'Jakarta', 'Rumah Saudari Fulannah / Gedung Pernikahan ABC', 'demo3.jpg', 'https://www.google.com/maps?q=-6.175307,106.827131&hl=es;z=14&output=embed', '2023-02-18', '2023-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `sambutan`
--

CREATE TABLE `sambutan` (
  `idSambutan` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `pembukaSambutan` text NOT NULL,
  `isiSambutan` text NOT NULL,
  `penutupSambutan` text NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sambutan`
--

INSERT INTO `sambutan` (`idSambutan`, `iduser`, `pembukaSambutan`, `isiSambutan`, `penutupSambutan`, `updated_at`, `created_at`) VALUES
(1, 0, 'Assalamualaikum Wr. Wb', 'Puji syukur kehadirat Allah SWT karena kita semua masih diberikan kesehatan untuk dapat berkumpul hari ini di acara resepsi pernikahan anak saya. Yang saya hormati [sebutkan semua nama yang ditua-kan dari keluarga mempelai pria], yang saya hormati [sebutkan semua nama yang ditua-kan dari keluarga mempelai wanita]. Yang saya hormati [sebutkan nama-nama yang dihormati di luar anggota keluarga, misalkan nama bos perusahaan, kepala pemerintahan, dll], yang saya hormati bapak penghulu dari KUA [sebutkan nama daerah KUA dan nama penghulu] serta para hadirin yang mohon maaf namanya tidak dapat saya sebutkan satu persatu. Saya mewakili keluarga besar dari kedua mempelai mengucapkan terima kasih yang sangat besar untuk seluruh hadirin yang telah menyempatkan waktu untuk bisa hadir di acara resepsi pernikahan kedua mempelai ini. Hari ini akan menjadi momen yang sakral dan indah bagi anak-anak kami karena hari ini akan memulai hidup baru dan menjalani kehidupan sebagai keluarga baru. Kami mohon restu kepada hadirin semua dan meminta doa agar putra putri kami bisa menjalankan kehidupan rumah tangga yang sakinah, mawaddah dan warohmah. Semoga kelak bisa segera memiliki keturunan yang sholeh dan sholehah dan berguna untuk bangsa dan negara. Kami mengucapkan permohonan maaf jika dalam pelayanan serta jamuannya di resepsi ini ada hal-hal yang mungkin kurang berkenan di hati bapak, ibu dan saudara-saudara sekali.                                                                                                         ', 'Sekian dari saya, kurang lebihnya mohon maaf. Atas perhatiannya saya ucapkan terima kasih. Wassalamualaikum Wr. Wb.', NULL, NULL),
(4, 1, 'Salam', 'Puji syukur kehadirat Allah SWT karena kita semua masih diberikan kesehatan untuk dapat berkumpul hari ini di acara resepsi pernikahan anak saya. Yang saya hormati [sebutkan semua nama yang ditua-kan dari keluarga mempelai pria], yang saya hormati [sebutkan semua nama yang ditua-kan dari keluarga mempelai wanita]. Yang saya hormati [sebutkan nama-nama yang dihormati di luar anggota keluarga, misalkan nama bos perusahaan, kepala pemerintahan, dll], yang saya hormati bapak penghulu dari KUA [sebutkan nama daerah KUA dan nama penghulu] serta para hadirin yang mohon maaf namanya tidak dapat saya sebutkan satu persatu. Saya mewakili keluarga besar dari kedua mempelai mengucapkan terima kasih yang sangat besar untuk seluruh hadirin yang telah menyempatkan waktu untuk bisa hadir di acara resepsi pernikahan kedua mempelai ini. Hari ini akan menjadi momen yang sakral dan indah bagi anak-anak kami karena hari ini akan memulai hidup baru dan menjalani kehidupan sebagai keluarga baru. Kami mohon restu kepada hadirin semua dan meminta doa agar putra putri kami bisa menjalankan kehidupan rumah tangga yang sakinah, mawaddah dan warohmah. Semoga kelak bisa segera memiliki keturunan yang sholeh dan sholehah dan berguna untuk bangsa dan negara. Kami mengucapkan permohonan maaf jika dalam pelayanan serta jamuannya di resepsi ini ada hal-hal yang mungkin kurang berkenan di hati bapak, ibu dan saudara-saudara sekali. asd', 'Sekian dari saya, kurang lebihnya mohon maaf. Atas perhatiannya saya ucapkan terima kasih. Wassalamualaikum Wr. Wb.b', '2023-02-18', '2023-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `link`, `nama`, `email`, `password`, `updated_at`, `created_at`) VALUES
(0, 'demo', 'Admin', 'admin@gmail.com', '$2y$10$KKnhaOOkGIlQyO33dtksLOCFVv4otOlpGUG8XLXv2/ofxu2lxK6QO', NULL, NULL),
(1, 'asd', 'Muhammad Sumbul', 'asd@asd.asd', '$2y$10$/1dd2LzQ0qyc3KyydqsH2.jQSAJNqP1ETp7pLleV8hdraugVbKV0u', '2023-02-21', '2023-02-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adat`
--
ALTER TABLE `adat`
  ADD PRIMARY KEY (`idAdat`);

--
-- Indexes for table `cerita`
--
ALTER TABLE `cerita`
  ADD PRIMARY KEY (`idCerita`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`idGalery`);

--
-- Indexes for table `lagu`
--
ALTER TABLE `lagu`
  ADD PRIMARY KEY (`idLagu`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`idPesan`);

--
-- Indexes for table `resepsi`
--
ALTER TABLE `resepsi`
  ADD PRIMARY KEY (`idResepsi`);

--
-- Indexes for table `sambutan`
--
ALTER TABLE `sambutan`
  ADD PRIMARY KEY (`idSambutan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adat`
--
ALTER TABLE `adat`
  MODIFY `idAdat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cerita`
--
ALTER TABLE `cerita`
  MODIFY `idCerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `idGalery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `lagu`
--
ALTER TABLE `lagu`
  MODIFY `idLagu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `idPesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `resepsi`
--
ALTER TABLE `resepsi`
  MODIFY `idResepsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sambutan`
--
ALTER TABLE `sambutan`
  MODIFY `idSambutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
