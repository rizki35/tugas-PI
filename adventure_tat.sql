-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Jan 2016 pada 11.09
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adventure_tat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_member`
--

CREATE TABLE `data_member` (
  `uid` int(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nomer` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_member`
--

INSERT INTO `data_member` (`uid`, `username`, `password`, `nama`, `email`, `nomer`, `alamat`) VALUES
(2, 'setya212', 'qwerty212', 'arie agung', 'arr@ymail.com', '08777777777', 'semarang'),
(3, 'arie', 'setya212', 'arie', 'arie@gmail.com', '890000', 'Jepara'),
(4, 'aleo', '123456789', 'aleo', 'aleojos@yahoo.com', '098676464324', 'semarang'),
(5, 'ekak', '12345678', 'ekakbudiatmono', 'ekakbudi@gmail.com', '087862563667874', 'semarang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(200) NOT NULL,
  `tiket_pesawat` varchar(10) NOT NULL,
  `tiket_keretaapi` varchar(10) NOT NULL,
  `tiket_minibus` varchar(10) NOT NULL,
  `tiket_bus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `tiket_pesawat`, `tiket_keretaapi`, `tiket_minibus`, `tiket_bus`) VALUES
(1, 'TP-01', 'TK-01', 'TM-01', 'TB-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_bus`
--

CREATE TABLE `tiket_bus` (
  `asal` varchar(20) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tiket_bus`
--

INSERT INTO `tiket_bus` (`asal`, `tujuan`, `hari`, `jam`, `kode`) VALUES
('semarang', 'jakarta', 'senin', '11.00', 'TB-01'),
('semrang', 'jepara', 'selasa', '12.00', 'TB-02'),
('semarang', 'bali', 'rabu', '08.00', 'TB-03'),
('semarang', 'bandung', 'kamis', '12.00', 'TB-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_keretaapi`
--

CREATE TABLE `tiket_keretaapi` (
  `asal` varchar(20) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tiket_keretaapi`
--

INSERT INTO `tiket_keretaapi` (`asal`, `tujuan`, `hari`, `jam`, `kode`) VALUES
('semarang', 'jepara', 'selasa', '10.00', 'TK-01'),
('semarang', 'jakarta', 'senin', '11.00', 'TK-02'),
('semarang', 'bandung', 'rabu', '16.00', 'TK-03'),
('semarang', 'jogja', 'kamis', '11.00', 'TK-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_minibus`
--

CREATE TABLE `tiket_minibus` (
  `asal` varchar(20) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tiket_minibus`
--

INSERT INTO `tiket_minibus` (`asal`, `tujuan`, `hari`, `jam`, `kode`) VALUES
('semarang', 'jepara', 'senin', '11.00', 'TM-01'),
('semarang', 'bali', 'senin', '18.00', 'TM-02'),
('semarang', 'bandung', 'rabu', '13.00', 'TM-03'),
('semarang', 'jakarta', 'kamis', '09.00', 'TM-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_pesawat`
--

CREATE TABLE `tiket_pesawat` (
  `asal` varchar(20) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tiket_pesawat`
--

INSERT INTO `tiket_pesawat` (`asal`, `tujuan`, `hari`, `jam`, `kode`) VALUES
('semarang', 'jepara', 'selasa', '12.00', 'TP-01'),
('jakarta', 'semarang', 'senin', '12.00', 'TP-02'),
('semarang', 'bali', 'senin', '16.00', 'TP-03'),
('semarang', 'bandung', 'rabu', '10.00', 'TP-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(200) NOT NULL,
  `uid` int(200) NOT NULL,
  `id_tiket` int(200) NOT NULL,
  `asal` varchar(10) NOT NULL,
  `tujuan` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `uid`, `id_tiket`, `asal`, `tujuan`, `hari`, `jam`) VALUES
(2, 2, 1, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_member`
--
ALTER TABLE `data_member`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `tiket_keretaapi` (`tiket_keretaapi`),
  ADD KEY `tiket_minibus` (`tiket_minibus`),
  ADD KEY `tiket_bus` (`tiket_bus`),
  ADD KEY `tiket_pesawat` (`tiket_pesawat`);

--
-- Indexes for table `tiket_bus`
--
ALTER TABLE `tiket_bus`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tiket_keretaapi`
--
ALTER TABLE `tiket_keretaapi`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tiket_minibus`
--
ALTER TABLE `tiket_minibus`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tiket_pesawat`
--
ALTER TABLE `tiket_pesawat`
  ADD PRIMARY KEY (`kode`) USING BTREE;

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `id_tiket` (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_member`
--
ALTER TABLE `data_member`
  MODIFY `uid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`tiket_pesawat`) REFERENCES `tiket_pesawat` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_ibfk_2` FOREIGN KEY (`tiket_minibus`) REFERENCES `tiket_minibus` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_ibfk_3` FOREIGN KEY (`tiket_keretaapi`) REFERENCES `tiket_keretaapi` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_ibfk_4` FOREIGN KEY (`tiket_bus`) REFERENCES `tiket_bus` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `data_member` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_tiket`) REFERENCES `tiket` (`id_tiket`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
