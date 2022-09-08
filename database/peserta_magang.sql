-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Sep 2022 pada 15.02
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peserta_magang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `asal`
--

CREATE TABLE `asal` (
  `id_asal` int(11) NOT NULL,
  `nama_asal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `asal`
--

INSERT INTO `asal` (`id_asal`, `nama_asal`) VALUES
(1, 'SMA Negeri 1'),
(2, 'SMA Negeri 2'),
(3, 'SMA Negeri 3'),
(4, 'SMA Negeri 4'),
(5, 'SMA Negeri 5'),
(6, 'SMA Negeri 6'),
(7, 'SMA Negeri 7'),
(8, 'SMA Negeri 8'),
(9, 'SMA Negeri 9'),
(10, 'SMA Negeri 10'),
(11, 'SMA Negeri 11'),
(12, 'SMA Negeri 12'),
(13, 'SMA Negeri 13'),
(14, 'SMA Negeri 14'),
(15, 'SMA Negeri 15'),
(16, 'SMA Negeri 16'),
(17, 'SMK Texmaco Semarang'),
(18, 'SMK Negeri 3 Kendal'),
(19, 'SMK Negeri 4 Kendal'),
(20, 'SMK Negeri 1 Semarang'),
(21, 'SMK Negeri 5 Semarang'),
(22, 'SMK Negeri 4 Semarang'),
(23, 'SMK Negeri 7 Semarang'),
(24, 'USM '),
(25, 'Praja IPDN '),
(26, 'Unika Soegijapranata Semarang '),
(27, 'UNDIP'),
(28, 'Universitas PGRI Semarang '),
(29, 'UNNES'),
(30, 'UNISBANK'),
(31, 'UDINUS'),
(32, 'SMK Muhammadiyah 1 Semarang '),
(33, 'Universitas Telkom Bandung '),
(34, 'Politeknik Negeri Semarang '),
(35, 'UNIMUS'),
(36, 'SMK Negeri 10 Semarang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Ryu', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` varchar(125) NOT NULL,
  `nama_peserta` varchar(255) NOT NULL,
  `id_asal` int(11) NOT NULL,
  `mulai` date NOT NULL,
  `berakhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nama_peserta`, `id_asal`, `mulai`, `berakhir`) VALUES
('MG001', 'Dhonny Fajar Saputra', 24, '2018-01-02', '2018-02-02'),
('MG002', 'Wahyu Setya N', 17, '2018-01-02', '2018-04-30'),
('MG003', 'Demar Septyayani', 17, '2018-01-02', '2018-04-30'),
('MG004', 'Heni Sekar Widosari', 25, '2018-01-02', '2018-02-02'),
('MG005', 'Caroline Kurniawan', 26, '2018-01-02', '2018-02-28'),
('MG006', 'Inge Astri', 26, '2018-01-02', '2018-02-28'),
('MG007', 'Andi Sakina', 26, '2018-01-02', '2018-02-28'),
('MG008', 'Meiliawati Aniska', 27, '2018-01-08', '2018-02-08'),
('MG009', 'David Ramdhani Abdullah', 28, '2018-01-08', '2018-02-28'),
('MG010', 'Haris Bagus Mawardhi', 28, '2018-01-08', '2018-02-28'),
('MG011', 'Nadia Putriani', 28, '2018-01-08', '2018-02-28'),
('MG012', 'Aldy Bayu Krisna', 18, '2018-01-08', '2018-04-07'),
('MG013', 'Ivan Adi Nugroho', 18, '2018-01-08', '2018-04-07'),
('MG014', 'Adinda Audia Caessarani Adrian', 29, '2018-01-15', '2018-02-26'),
('MG015', 'Nanang Arif Andriyani', 29, '2018-01-15', '2018-02-26'),
('MG016', 'Donny Pranata', 19, '2018-02-01', '2018-04-30'),
('MG017', 'Miftachul Arzak', 19, '2018-02-01', '2018-04-30'),
('MG018', 'Rifqi Khoirudin Aji S', 19, '2018-02-01', '2018-04-30'),
('MG019', 'Rizal Mustofa Alip', 19, '2018-02-01', '2018-04-30'),
('MG020', 'Muhammad Andy Yudha Rohadi', 30, '2018-02-01', '2018-03-02'),
('MG021', 'Bagas Priyo Sambodho', 30, '2018-02-01', '2018-03-02'),
('MG022', 'Ardi Teguh Nugroho', 31, '2018-02-12', '2018-03-12'),
('MG023', 'Rezky Akbar Gea', 24, '2018-03-01', '2018-03-31'),
('MG024', 'Fahrul Rizky Diego Satrio', 24, '2018-03-01', '2018-03-31'),
('MG025', 'Dedy Yuliyan', 24, '2018-03-01', '2018-03-31'),
('MG026', 'Muhammad Bayu Suseno', 30, '2018-03-01', '2018-03-31'),
('MG027', 'Togar Hatopan', 30, '2018-03-01', '2018-03-31'),
('MG028', 'Syakib Hammam Rasyid', 30, '2018-03-01', '2018-03-31'),
('MG029', 'Dani Muchlis R', 36, '2018-03-01', '2018-05-31'),
('MG030', 'Jafar Shidiq Maulana', 36, '2018-03-01', '2018-05-31'),
('MG031', 'M. Riski Alghofar', 36, '2018-03-01', '2018-05-31'),
('MG032', 'Nathanael Bagaskara Herlambang', 31, '2018-03-08', '2018-06-08'),
('MG033', 'Rizal Adi Saputro', 30, '2018-04-02', '2018-05-02'),
('MG034', 'Rahmat Indra Wijaya', 30, '2018-04-02', '2018-05-02'),
('MG035', 'Sakawi Perkasa', 30, '2018-04-02', '2018-05-02'),
('MG036', 'Yesi Ayusta S', 31, '2018-05-08', '2018-07-06'),
('MG037', 'Tasya Patria', 31, '2018-05-08', '2018-07-06'),
('MG038', 'Andyka Putra Wibowo', 32, '2018-05-23', '2018-08-20'),
('MG039', 'Edwin Nur Ardiansah', 32, '2018-05-23', '2018-08-20'),
('MG040', 'Mahendra Rizki', 32, '2018-05-23', '2018-08-20'),
('MG041', 'Asyhab Arno Wijaya', 33, '2018-05-20', '2018-07-14'),
('MG042', 'Dika Dermalasari', 33, '2018-05-28', '2018-07-14'),
('MG043', 'Oktabia Ismi Fatikasari', 20, '2018-06-26', '2018-09-29'),
('MG044', 'Cahyaning Rizky', 20, '2018-07-17', '2018-12-17'),
('MG045', 'Aine Ammarhayani', 20, '2018-07-17', '2018-12-17'),
('MG046', 'Firda Maulana Jodi', 20, '2018-07-17', '2018-12-17'),
('MG047', 'Citra Ayu Anggita Aprilia', 20, '2018-07-17', '2018-12-17'),
('MG048', 'Fadila Nur Khasanah', 20, '2018-07-17', '2018-12-17'),
('MG049', 'Adam Rizananda', 34, '2018-08-01', '2018-08-31'),
('MG050', 'Loversnita Arsyila\'la', 34, '2018-08-01', '2018-08-31'),
('MG051', 'Naufal Arda Irfandi', 34, '2018-08-01', '2018-08-31'),
('MG052', 'Yoga Bramanditya', 34, '2018-08-01', '2018-08-31'),
('MG053', 'Ivan Luthfi Ibrahiem', 31, '2018-08-06', '2018-10-05'),
('MG054', 'Ankana Arsy Navarona', 31, '2018-08-06', '2018-10-05'),
('MG055', 'Ade Bangun Prakoso', 31, '2018-08-13', '2018-10-12'),
('MG056', 'Dwi Putranto Waskito H', 31, '2018-08-13', '2018-10-12'),
('MG057', 'Hasto Bowo Yaktipurna', 31, '2018-08-13', '2018-10-12'),
('MG058', 'Mohammad Akbar Ramadhan', 31, '2018-08-13', '2018-10-12'),
('MG059', 'Tyas Oktaviana', 27, '2018-09-03', '2018-11-16'),
('MG060', 'Widiastri Hesti Rahmawati', 27, '2018-09-03', '2018-11-16'),
('MG061', 'Christoporus Kurnia Chandra', 31, '2018-09-12', '2018-12-11'),
('MG062', 'Muhammad Wian Hadinata', 31, '2018-09-12', '2018-12-11'),
('MG063', 'Irvan Jody Oktafianto', 31, '2018-09-12', '2018-12-12'),
('MG064', 'Dicky Setiawan', 31, '2018-09-12', '2018-12-12'),
('MG065', 'Adika Putra P.', 22, '2018-10-01', '2019-03-30'),
('MG066', 'Iqbal Adriz Syachputra', 22, '2018-10-01', '2019-03-30'),
('MG067', 'M. Ardianto Furqon', 22, '2018-10-01', '2019-03-30'),
('MG068', 'Fenny Angesti Sukma', 31, '2018-10-15', '2018-11-15'),
('MG069', 'Nita Fatmala', 31, '2018-10-15', '2018-11-15'),
('MG070', 'Erlita Chintya Dewi', 35, '2018-10-22', '2018-11-22'),
('MG071', 'Septi Wiji Lestari', 35, '2018-10-22', '2018-11-22'),
('MG072', 'Andhika Dwi Hananto', 27, '2018-11-26', '2019-01-04'),
('MG073', 'Selfi Aini', 21, '2018-12-17', '2019-03-08'),
('MG074', 'Septiana Nur Aini', 21, '2018-12-17', '2019-03-08'),
('MG075', 'Andre Junio SP', 17, '2018-12-10', '2019-04-30'),
('MG076', 'Habib Didan Ananta', 17, '2018-12-10', '2019-04-30'),
('MG077', 'Yusuf Dharmawan LS', 17, '2018-12-10', '2019-04-30'),
('MG078', 'Ciadventy Kusmukti', 26, '2019-01-01', '2019-02-28'),
('MG079', 'Kevin Kurniawan Hartono D', 26, '2019-01-01', '2019-02-01'),
('MG080', 'Regina Ajeng ', 26, '2019-01-01', '2019-02-01'),
('MG081', 'HeirawanAnggiadma A', 24, '2019-01-21', '2019-03-21'),
('MG082', 'Dian Ariska', 24, '2019-01-15', '2019-03-15'),
('MG083', 'Dewi Purwaningsih', 24, '2019-01-21', '2019-03-04'),
('MG084', 'galuh Condro A', 24, '2019-01-21', '2019-03-04'),
('MG085', 'Irfan Hidayat', 27, '2019-01-02', '2019-02-09'),
('MG086', 'Refo Labib Mustofa', 29, '2019-01-02', '2019-02-02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `asal`
--
ALTER TABLE `asal`
  ADD PRIMARY KEY (`id_asal`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `asal`
--
ALTER TABLE `asal`
  MODIFY `id_asal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
