-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2020 pada 15.49
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpenew`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id_brand` int(10) NOT NULL,
  `nama_brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_brand`
--

INSERT INTO `tbl_brand` (`id_brand`, `nama_brand`) VALUES
(1, 'Xiaomi'),
(2, 'Samsung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kabupaten`
--

CREATE TABLE `tbl_kabupaten` (
  `id_kabupaten` int(10) NOT NULL,
  `nama_kabupaten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kabupaten`
--

INSERT INTO `tbl_kabupaten` (`id_kabupaten`, `nama_kabupaten`) VALUES
(1, 'Sleman'),
(2, 'Gunungkidul'),
(3, 'Bantul'),
(4, 'Yogyakarta'),
(5, 'Kulonprogo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komen`
--

CREATE TABLE `tbl_komen` (
  `id_komen` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `isi_komen` text NOT NULL,
  `tgl_komen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_komen`
--

INSERT INTO `tbl_komen` (`id_komen`, `id_user`, `id_produk`, `isi_komen`, `tgl_komen`) VALUES
(1, 42, 29, 'dawda', '0000-00-00'),
(3, 42, 1, 'dwad', '2020-12-02'),
(4, 42, 1, 'wadwd', '2020-12-02'),
(5, 41, 1, 'dwadad', '2020-12-02'),
(6, 41, 32, 'wadad', '2020-12-02'),
(7, 41, 32, 'awdq', '2020-12-02'),
(8, 41, 29, 'sadadw', '2020-12-02'),
(9, 44, 30, 'dwadwada', '2020-12-02'),
(10, 44, 29, 'Gakii', '2020-12-04'),
(11, 42, 29, 'dwadwa', '2020-12-05'),
(12, 42, 29, 'dwadwaawda', '2020-12-05'),
(13, 42, 29, 'dwadwaawda', '2020-12-05'),
(14, 42, 29, 'wa', '2020-12-05'),
(15, 44, 29, 'awda', '2020-12-05'),
(16, 44, 29, 'dwadawd', '2020-12-05'),
(17, 44, 29, 'dwadawdsda', '2020-12-05'),
(18, 44, 29, 'dwa', '2020-12-05'),
(19, 44, 29, 'asuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', '2020-12-05'),
(20, 44, 29, 'dwad', '2020-12-05'),
(21, 44, 1, 'dwad', '2020-12-05'),
(22, 44, 1, 'dwad', '2020-12-05'),
(23, 44, 1, 'tesss123', '2020-12-05'),
(24, 44, 29, 'fewaf', '2020-12-07'),
(25, 44, 34, 'asiiiii', '2020-12-07'),
(26, 44, 34, 'dawdwqadq', '2020-12-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konfirmasi`
--

CREATE TABLE `tbl_konfirmasi` (
  `id_konfirmasi` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_konfirmasi` varchar(50) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_konfirmasi`
--

INSERT INTO `tbl_konfirmasi` (`id_konfirmasi`, `id_user`, `status_konfirmasi`, `id_produk`, `date`) VALUES
(22, 44, 'BelumDikonfirmasi', 29, '2020-12-07'),
(23, 44, 'Disetujui', 30, '2020-12-07'),
(24, 44, 'Disetujui', 33, '2020-12-07'),
(25, 44, 'Disetujui', 30, '2020-12-07'),
(26, 44, 'Disetujui', 34, '2020-12-07'),
(27, 44, 'Disetujui', 29, '2020-12-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_brand` int(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `nama_p` varchar(200) NOT NULL,
  `layar` varchar(100) NOT NULL,
  `cpu` varchar(100) NOT NULL,
  `kamera` varchar(100) NOT NULL,
  `battrey` varchar(100) NOT NULL,
  `lama_pemakaian` varchar(100) NOT NULL,
  `gambar1` varchar(100) NOT NULL,
  `gambar2` varchar(100) NOT NULL,
  `gambar3` varchar(100) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `id_user`, `id_brand`, `harga`, `nama_p`, `layar`, `cpu`, `kamera`, `battrey`, `lama_pemakaian`, `gambar1`, `gambar2`, `gambar3`, `detail`) VALUES
(1, 41, 1, 5000000, 'Samsung Galaxy Note 5', '5,5 inch', 'snapdragon 810', '12 mp', '4000 mah', '2 bulan', '1.jpg', '2.jpg', '3.jpg', 'Mulusss bangettt'),
(29, 41, 1, 234234234, 'Xiaomi Redmi Note 7 Muluss', 'wadwad', 'wadwa', 'wada', 'awdwa', 'awda', '4.jpg', '1.jpg', '5.jpg', '\r\n                              wadawdwa          '),
(30, 40, 1, 324, 'dwadaw', '5,5', 'Snapdragon 675', '12 mp', '4000mah', '-+ 2 bulan', '5.jpg', '3.jpg', '5.jpg', '\r\n                         awdawdwad               '),
(32, 42, 2, 23420000, 'Sampung Galaxy note 7', '5,5 inch', 'Snapdragon 675', '12 mp', '4000mah', '-+ 2 bulan', '7.jpg', '3.jpg', '2.jpg', '\r\n                       sadadwad                 '),
(33, 42, 2, 1899000, '[Standar] Samsung Galaxy J7 plus 32gb Gold', '5 inch', 'Snapdragon 675', '!3mp', '4000mah', '-+ 2 bulan', 'galaxy.jpg', '4.jpg', '2.jpg', 'dawdawd\r\n                                        '),
(34, 47, 1, 233242, 'awdawdwa', 'wadwad', 'wadwad', 'dwadwa', 'wadwadwa', 'awdwad', '10258705_20181125083115.jpeg', 'proxy.duckduckgo.com.png', '3799201_201811250834510243.png', '\r\n                  dwadawdawdaw                      ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `id_konfirmasi` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `tgl_tansaksi` date NOT NULL,
  `tgl_tenggat` date NOT NULL,
  `bukti_bayar` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_konfirmasi`, `id_user`, `id_produk`, `tgl_tansaksi`, `tgl_tenggat`, `bukti_bayar`, `keterangan`, `status`) VALUES
(3, 23, 44, 30, '2020-12-07', '2020-09-07', 'meong.png', '\r\n                                      dwadwad  ', 'diterima'),
(19, 25, 44, 30, '2020-12-07', '2020-12-08', '3799201_201811250822500214.jpg', '\r\n                                       adwa ', 'diterima'),
(20, 26, 44, 34, '2020-12-07', '2020-12-08', 'UntitledDASDW.png', '\r\n                                        wadwdad', NULL),
(21, 27, 44, 29, '2020-12-07', '2020-12-08', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `id_kabupaten` int(10) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `status_user` varchar(50) NOT NULL,
  `tgl_gabung` date DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `notlp` varchar(100) DEFAULT NULL,
  `detail_alamat` text DEFAULT NULL,
  `fotop` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_kabupaten`, `username`, `email`, `password`, `level`, `status_user`, `tgl_gabung`, `nama_lengkap`, `notlp`, `detail_alamat`, `fotop`) VALUES
(1, NULL, 'admin', 'admin@gmail.com', 'admin', 'admin', 'aktif', NULL, NULL, NULL, NULL, NULL),
(12, 3, 'pembeli', 'asdasd@mail.com', '123', 'pembeli', 'aktif', '2020-12-16', 'wahyu', '23423423', '\r\n             dwad                dwadwa           ', '9062651_201811250938040747.jpg'),
(40, 1, 'nugroho', 'Donal@gmail.com', '123', 'penjual', 'aktif', '2020-11-18', 'Sandi Nugroho', '234234234', '\r\n                    wadawdawd                    ', '69185852.jpg'),
(41, 1, 'wahyu', 'wahyu@amikom.ac.id', '123', 'penjual', 'aktif', '2020-11-19', 'Wahyu Nugroho', '0895396784047', '\r\n                             dsfsd           ', 'meong.png'),
(42, 2, 'penjual1', 'nueg44@gmail.com', '123', 'penjual', 'aktif', '2020-11-28', 'Penjual tess', '123143', 'adsasdwadaw\r\n                                        dawd', '17362620_1646046522369871_3877348430341832145_n.jpg'),
(43, NULL, 'aa', 'Donal@gmail.com', '123', 'penjual', 'aktif', '2020-12-02', NULL, NULL, NULL, NULL),
(44, 4, 'bb', 'nueg44@gmail.com', '123', 'pembeli', 'aktif', '2020-12-02', 'sayaa', '2324234', 'dwadwadwadawd\r\n                                        ', '3799201_201811250822500214.jpg'),
(45, NULL, 'penjualtes', 'nueg44@gmail.com', 'admin', 'penjual', 'aktif', '2020-12-04', NULL, NULL, NULL, NULL),
(46, 2, 'pembelites', 'nueg44@gmail.com', '123', 'pembeli', 'aktif', '2020-12-04', 'sugi', '234234', '\r\n                 dwadwadawd                       ', 'proxy.duckduckgo.com.png'),
(47, 3, 'new', 'nueg44@gmail.com', '123', 'penjual', 'aktif', '2020-12-05', 'dwadwa', 'awdwad', '\r\n                 wadwadwadawd                       ', '10258705_20181125083115.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indeks untuk tabel `tbl_kabupaten`
--
ALTER TABLE `tbl_kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indeks untuk tabel `tbl_komen`
--
ALTER TABLE `tbl_komen`
  ADD PRIMARY KEY (`id_komen`),
  ADD KEY `id_user` (`id_user`,`id_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_kabupaten` (`id_kabupaten`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id_brand` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_kabupaten`
--
ALTER TABLE `tbl_kabupaten`
  MODIFY `id_kabupaten` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_komen`
--
ALTER TABLE `tbl_komen`
  MODIFY `id_komen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  MODIFY `id_konfirmasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_komen`
--
ALTER TABLE `tbl_komen`
  ADD CONSTRAINT `tbl_komen_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`),
  ADD CONSTRAINT `tbl_komen_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD CONSTRAINT `tbl_produk_ibfk_1` FOREIGN KEY (`id_brand`) REFERENCES `tbl_brand` (`id_brand`),
  ADD CONSTRAINT `tbl_produk_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`id_kabupaten`) REFERENCES `tbl_kabupaten` (`id_kabupaten`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
