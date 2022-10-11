-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2021 pada 15.05
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `problem`
--

CREATE TABLE `problem` (
  `id_lapor` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Umur` int(11) NOT NULL,
  `Agama` varchar(200) NOT NULL,
  `Isi_pengaduan` varchar(1000) NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `problem`
--

INSERT INTO `problem` (`id_lapor`, `Nama`, `Umur`, `Agama`, `Isi_pengaduan`, `Tanggal`) VALUES
(17, 'Zulhelmi', 44, 'Islam', 'Terjadi percekcokkan di Jln.Pertempuran Link VII Kel Pulo Brayan kota ,antara DONA TERESIA Dan ANTON JHON ,ANTON JHON MAULANA Menuduh DONA TERESIA Telah berselingkuh dan keluarga DONA TERESIA Ayahnya Bapak AHWAT Mau Menjual Anak Nya ke Kamboja mendengar Dan Atas tuduhan Tersebut Lalu ANTON MAULANA melakukan Kekesalannya Di sosial Media FaceBook.', '2020-01-08 00:00:34'),
(18, 'Tini Poli Lubis', 30, 'Islam', 'telah terjadi perselisihan tentang Kesalaah Pahaman antara Pihak Pertama dan Kedua adu mulut sehingga terjadi Perkelahian antara pihak pertama dan kedua di Jln Karya Gg Rukun Kel Karang Berombak Kec Medan Barat', '2020-01-08 08:38:27'),
(19, 'Muh Salim', 14, 'Islam', 'Terjadi percekcokan di jln.Pulo Brayan kota medan,yang berujung penganiayaan antara ALPIAYUS GULO dan AFSAH Br HARAHAP yang mana ALPIAYUS GULO Memaki Perkataan Lont*  Kepada AFSAH Br HARAHAP dan hingga di tampar Saudari AFSAH Br HARAHAP.', '2019-09-24 01:30:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggap`
--

CREATE TABLE `tanggap` (
  `id_tanggap` int(11) NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Nama_pelapor` varchar(500) NOT NULL,
  `Alamat` varchar(1000) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanggap`
--

INSERT INTO `tanggap` (`id_tanggap`, `Tanggal`, `Nama_pelapor`, `Alamat`, `Keterangan`) VALUES
(1, '2020-01-08 03:00:58', 'Zulhelmi', 'Jln.Pertempuran Link VII Kel Pulo Brayan kota ', 'Selesai'),
(2, '2020-01-08 06:50:11', 'Tini Poli Lubis', 'Jln Karya Gg Rukun Kel Karang Berombak Kec Medan Barat', 'Selesai'),
(3, '2021-10-15 05:19:27', 'Muh.Salim', 'jln.Pulo Brayan kota medan', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(2, 'admin', 'admin', 'admin', 'admin'),
(3, 'pengujung', 'pengunjung', 'pengunjung', 'pengunjung'),
(4, 'masyarakat', 'masyarakat', 'masyarakat', 'pengunjung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `valid`
--

CREATE TABLE `valid` (
  `id_valid` int(11) NOT NULL,
  `Nama_personil` varchar(300) NOT NULL,
  `Bersangkutan` varchar(300) NOT NULL,
  `Tempat` varchar(300) NOT NULL,
  `Isi_kegiatan` varchar(1500) NOT NULL,
  `Hasil` varchar(1000) NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `valid`
--

INSERT INTO `valid` (`id_valid`, `Nama_personil`, `Bersangkutan`, `Tempat`, `Isi_kegiatan`, `Hasil`, `Tanggal`) VALUES
(4, 'Bripka Zulkifli SH', 'Anto Jhon Maulana dan Dona Teresia', 'Budi Pembangunan medan Kantor Lurah  Pulo Brayan Kota Kecamatan Medan Barat. ', 'Setelah dikumpulkan keterangan dari kedua belah pihak yg mana Korban adalah DONA TERESIA Dan ANTON JHON MAULANA*Adalah Suami Istri Siri yang menikah thn 2018 dan *ANTON JHON MAULANA Menuduh DONA TERESIA Telah berselingkuh dan keluarga DONA TERESIA Ayahnya Bapak AHWAT Mau Menjual Anak Nya ke Kamboja mendengar Dan Atas tuduhan Tersebut Lalu ANTON MAULANA melakukan Kekesalannya Di sosial Media FaceBook Yang MenPosting Kalimat yang Tidak Menyenangkan MemFitnah DONA TERESIA memaki Dan Keluarganya Lalu Perbuatan ANTON JHON MAULANA menulis Selebaran yang dibuatnya Dengan tulisan DONA SAMA ASIONG BERDUAAN DI KAMAR TELANJANG BULAT dari pengakuan ANTON JHON MAULANA Sebayak 10 lembar yg disebarkan di lingkungan setempat, Setelah kita mediasi Percekcokan  berujung Pengerusakan antara   DONA TERESIA  dan ANTON JHON MAULANA kemudian kita adakan mediasi agar kedua belah pihak mau berdamai dan membuat surat perjanjian Perdamaian dengan Poin Poin Yang Disepakati', 'Dengan adanya kesepakatan Damai tersebut diatas maka kedua belah pihak saling memaafkan dan tidak  Mengulangi lagi perbuatannya dan di Buat Surat Perjanjian Perdamaian. Kedua belah pihak mengucapkan terima kasih atas adanya mediasi ini, sehingga terciptanya kerukunan antar warga. ', '2020-01-08 03:00:13'),
(5, 'Aipda Iswandi Ginting dan Aipda Prayuda', 'Samsudin Matondang dan M.Irfan Siregar', 'Jln Karya Gg Salak Kel Berombak Kec Medan Barat', 'Kronologis Kejadian pada tanggal 24 Februari 2020 pukul 16.30wib telah terjadi perselisihan tentang Kesalah Pahaman antara Pihak Pertama dan Kedua adu mulut sehingga terjadi Perkelahian antara pihak pertama dan kedua di Jln Karya Gg Rukun Kel Karang Berombak Kec Medan Barat.Kami melaksanakan giat Mediasi terhadap Pihak pertama dan Kedua untuk melakukan Perdamaian untuk tidak mengulangi lagi perbuatan nya dan pihak pertama bersedia untuk mengobati pihak kedua.\r\n', 'Pihak Pertama dan pihak kedua melakukan Perdamaian di saksikan oleh    Kepling ling 14 (Tini poli lubis),Pihak bersedia untuk mengobati pihak kedua, Pihak Pertama dan kedua tidak lagi mengulangi perbuatannya.\r\n\r\n', '2020-01-08 06:35:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`id_lapor`);

--
-- Indeks untuk tabel `tanggap`
--
ALTER TABLE `tanggap`
  ADD PRIMARY KEY (`id_tanggap`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `valid`
--
ALTER TABLE `valid`
  ADD PRIMARY KEY (`id_valid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `problem`
--
ALTER TABLE `problem`
  MODIFY `id_lapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tanggap`
--
ALTER TABLE `tanggap`
  MODIFY `id_tanggap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `valid`
--
ALTER TABLE `valid`
  MODIFY `id_valid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
