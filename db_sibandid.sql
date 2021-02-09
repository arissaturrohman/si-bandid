-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Feb 2021 pada 02.15
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sibandid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_apbdes`
--

CREATE TABLE `tb_apbdes` (
  `id_apbdes` int(11) NOT NULL,
  `apbdes` varchar(100) NOT NULL,
  `perdes` varchar(100) NOT NULL,
  `perkades` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_apbdes`
--

INSERT INTO `tb_apbdes` (`id_apbdes`, `apbdes`, `perdes`, `perkades`, `id_user`, `tahun`, `validasi`, `catatan`) VALUES
(1, 'APBDes_76844963.xlsx', 'PERDes_98240053.xlsx', '', 2, 2021, 'Revisi', 'Perdes Tidak Sesuai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_apbdes_perub`
--

CREATE TABLE `tb_apbdes_perub` (
  `id_apbdes_perub` int(11) NOT NULL,
  `apbdes_perub` varchar(100) NOT NULL,
  `perdes` varchar(100) NOT NULL,
  `perkades` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_apbdes_perub`
--

INSERT INTO `tb_apbdes_perub` (`id_apbdes_perub`, `apbdes_perub`, `perdes`, `perkades`, `id_user`, `tahun`, `validasi`, `catatan`) VALUES
(1, 'APBDes_Perub_29015961.xlsx', 'PERDes_20897178.xlsx', '', 2, 2021, 'Diterima', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ba_kas`
--

CREATE TABLE `tb_ba_kas` (
  `id_ba_kas` int(11) NOT NULL,
  `ba_kas` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bulanan`
--

CREATE TABLE `tb_bulanan` (
  `id_bulanan` int(11) NOT NULL,
  `bulanan` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_habis_pakai`
--

CREATE TABLE `tb_habis_pakai` (
  `id_habis_pakai` int(11) NOT NULL,
  `habis_pakai` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ippd`
--

CREATE TABLE `tb_ippd` (
  `id_ippd` int(11) NOT NULL,
  `ippd` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lpkj`
--

CREATE TABLE `tb_lpkj` (
  `id_lpkj` int(11) NOT NULL,
  `lkpj` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lppd`
--

CREATE TABLE `tb_lppd` (
  `id_lppd` int(11) NOT NULL,
  `lppd` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_omspan`
--

CREATE TABLE `tb_omspan` (
  `id_omspan` int(11) NOT NULL,
  `omspan` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_realisasi_add`
--

CREATE TABLE `tb_realisasi_add` (
  `id_realisasi_add` int(11) NOT NULL,
  `realisasi_add` varchar(100) NOT NULL,
  `foto_add_1` varchar(100) NOT NULL,
  `foto_add_2` varchar(100) NOT NULL,
  `foto_add_3` varchar(100) NOT NULL,
  `foto_add_4` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_realisasi_add`
--

INSERT INTO `tb_realisasi_add` (`id_realisasi_add`, `realisasi_add`, `foto_add_1`, `foto_add_2`, `foto_add_3`, `foto_add_4`, `id_user`, `tahun`, `validasi`, `catatan`) VALUES
(4, 'ADD_95685406.docx', 'foto1_76599990.jpg', 'foto2_81433830.jpg', 'foto3_42374826.jpg', 'foto4_85875449.jpg', 2, 2021, 'Menunggu Revisi Divalidasi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_realisasi_apbdes`
--

CREATE TABLE `tb_realisasi_apbdes` (
  `id_realisasi_apbdes` int(11) NOT NULL,
  `realisasi_apbdes` varchar(100) NOT NULL,
  `foto_apbdes_1` varchar(100) NOT NULL,
  `foto_apbdes_2` varchar(100) NOT NULL,
  `foto_apbdes_3` varchar(100) NOT NULL,
  `foto_apbdes_4` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_realisasi_apbdes`
--

INSERT INTO `tb_realisasi_apbdes` (`id_realisasi_apbdes`, `realisasi_apbdes`, `foto_apbdes_1`, `foto_apbdes_2`, `foto_apbdes_3`, `foto_apbdes_4`, `id_user`, `tahun`, `validasi`, `catatan`) VALUES
(2, 'APBDES_79340713.docx', 'foto1_68591209.jpg', 'foto2_92551638.jpg', 'foto3_80790005.jpg', 'foto4_97631488.jpg', 2, 2021, 'Menunggu Revisi Divalidasi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_realisasi_apbdes_dana`
--

CREATE TABLE `tb_realisasi_apbdes_dana` (
  `id_realisasi_apbdes_dana` int(11) NOT NULL,
  `realisasi_apbdes_dana` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_realisasi_dd`
--

CREATE TABLE `tb_realisasi_dd` (
  `id_realisasi_dd` int(11) NOT NULL,
  `realisasi_dd` varchar(100) NOT NULL,
  `foto_dd_1` varchar(100) NOT NULL,
  `foto_dd_2` varchar(100) NOT NULL,
  `foto_dd_3` varchar(100) NOT NULL,
  `foto_dd_4` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_realisasi_dd`
--

INSERT INTO `tb_realisasi_dd` (`id_realisasi_dd`, `realisasi_dd`, `foto_dd_1`, `foto_dd_2`, `foto_dd_3`, `foto_dd_4`, `id_user`, `tahun`, `validasi`, `catatan`) VALUES
(14, 'P_DD_56672098.docx', 'foto1_54367452.jpg', 'foto2_80905836.jpg', 'foto3_48249049.jpg', 'foto4_39627230.jpg', 2, 2021, 'Menunggu Revisi Divalidasi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_realisasi_pad`
--

CREATE TABLE `tb_realisasi_pad` (
  `id_realisasi_pad` int(11) NOT NULL,
  `realisasi_pad` varchar(100) NOT NULL,
  `foto_pad_1` varchar(100) NOT NULL,
  `foto_pad_2` varchar(100) NOT NULL,
  `foto_pad_3` varchar(100) NOT NULL,
  `foto_pad_4` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_realisasi_pad`
--

INSERT INTO `tb_realisasi_pad` (`id_realisasi_pad`, `realisasi_pad`, `foto_pad_1`, `foto_pad_2`, `foto_pad_3`, `foto_pad_4`, `id_user`, `tahun`, `validasi`, `catatan`) VALUES
(3, 'PAD_20716381.docx', 'foto1_77718515.jpg', 'foto2_6630435.jpg', 'foto3_70116198.jpg', 'foto4_94981604.jpg', 2, 2021, 'Menunggu Revisi Divalidasi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekap_realisasi_apbdes`
--

CREATE TABLE `tb_rekap_realisasi_apbdes` (
  `id_rekap_realisasi_apbdes` int(11) NOT NULL,
  `rekap_realisasi_apbdes` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_retribusi`
--

CREATE TABLE `tb_retribusi` (
  `id_retribusi` int(11) NOT NULL,
  `retribusi` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rkpdes`
--

CREATE TABLE `tb_rkpdes` (
  `id_rkpdes` int(11) NOT NULL,
  `rkpdes` varchar(100) NOT NULL,
  `perdes` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rkpdes`
--

INSERT INTO `tb_rkpdes` (`id_rkpdes`, `rkpdes`, `perdes`, `id_user`, `tahun`, `validasi`, `catatan`) VALUES
(1, 'RKPDes_46968144.xlsx', 'PERDes_70317574.xlsx', 2, 2021, 'Menunggu Revisi Divalidasi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rpd`
--

CREATE TABLE `tb_rpd` (
  `id_rpd` int(11) NOT NULL,
  `rpd` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rpd`
--

INSERT INTO `tb_rpd` (`id_rpd`, `rpd`, `id_user`, `tahun`, `validasi`, `catatan`) VALUES
(1, 'RPD_19196112.docx', 2, 2021, 'Menunggu Revisi Divalidasi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rpjmdes`
--

CREATE TABLE `tb_rpjmdes` (
  `id_rpjmdes` int(11) NOT NULL,
  `rpjmdes` varchar(100) NOT NULL,
  `perdes` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rpjmdes`
--

INSERT INTO `tb_rpjmdes` (`id_rpjmdes`, `rpjmdes`, `perdes`, `id_user`, `tahun`, `validasi`, `catatan`) VALUES
(5, 'RPJMDes_14836919.docx', 'PERDes_34755200.docx', 2, 2021, 'Menunggu Validasi', ''),
(6, 'RPJMDes_18961536.docx', 'PERDes_74221251.docx', 2, 2021, 'Menunggu Validasi', ''),
(7, 'RPJMDes_47127404.docx', 'PERDes_38229237.docx', 2, 2020, 'Menunggu Validasi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_smt_1`
--

CREATE TABLE `tb_smt_1` (
  `id_smt_1` int(11) NOT NULL,
  `smt_1` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_smt_2`
--

CREATE TABLE `tb_smt_2` (
  `id_smt_2` int(11) NOT NULL,
  `smt_2` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tanggung_jawab`
--

CREATE TABLE `tb_tanggung_jawab` (
  `id_tanggung_jawab` int(11) NOT NULL,
  `tanggung_jawab` varchar(100) NOT NULL,
  `perdes` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tutup_kas`
--

CREATE TABLE `tb_tutup_kas` (
  `id_tutup_kas` int(11) NOT NULL,
  `tutup_kas` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `validasi` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama_user`, `level`) VALUES
(1, 'admin', '$2y$10$JGgb2FSaT22Dt99kuI691..pr7WaAl375lac3nAJSOhSK1BDBYi6q', 'Admin', 'admin'),
(2, 'user', '$2y$10$3G9/XDZqKJcOI0o9WDhMP.3wGUJYD3vndfgVI5A8mCNWeCaHehiTC', 'Mranggen', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_apbdes`
--
ALTER TABLE `tb_apbdes`
  ADD PRIMARY KEY (`id_apbdes`);

--
-- Indeks untuk tabel `tb_apbdes_perub`
--
ALTER TABLE `tb_apbdes_perub`
  ADD PRIMARY KEY (`id_apbdes_perub`);

--
-- Indeks untuk tabel `tb_ba_kas`
--
ALTER TABLE `tb_ba_kas`
  ADD PRIMARY KEY (`id_ba_kas`);

--
-- Indeks untuk tabel `tb_bulanan`
--
ALTER TABLE `tb_bulanan`
  ADD PRIMARY KEY (`id_bulanan`);

--
-- Indeks untuk tabel `tb_habis_pakai`
--
ALTER TABLE `tb_habis_pakai`
  ADD PRIMARY KEY (`id_habis_pakai`);

--
-- Indeks untuk tabel `tb_ippd`
--
ALTER TABLE `tb_ippd`
  ADD PRIMARY KEY (`id_ippd`);

--
-- Indeks untuk tabel `tb_lpkj`
--
ALTER TABLE `tb_lpkj`
  ADD PRIMARY KEY (`id_lpkj`);

--
-- Indeks untuk tabel `tb_lppd`
--
ALTER TABLE `tb_lppd`
  ADD PRIMARY KEY (`id_lppd`);

--
-- Indeks untuk tabel `tb_omspan`
--
ALTER TABLE `tb_omspan`
  ADD PRIMARY KEY (`id_omspan`);

--
-- Indeks untuk tabel `tb_realisasi_add`
--
ALTER TABLE `tb_realisasi_add`
  ADD PRIMARY KEY (`id_realisasi_add`);

--
-- Indeks untuk tabel `tb_realisasi_apbdes`
--
ALTER TABLE `tb_realisasi_apbdes`
  ADD PRIMARY KEY (`id_realisasi_apbdes`);

--
-- Indeks untuk tabel `tb_realisasi_apbdes_dana`
--
ALTER TABLE `tb_realisasi_apbdes_dana`
  ADD PRIMARY KEY (`id_realisasi_apbdes_dana`);

--
-- Indeks untuk tabel `tb_realisasi_dd`
--
ALTER TABLE `tb_realisasi_dd`
  ADD PRIMARY KEY (`id_realisasi_dd`);

--
-- Indeks untuk tabel `tb_realisasi_pad`
--
ALTER TABLE `tb_realisasi_pad`
  ADD PRIMARY KEY (`id_realisasi_pad`);

--
-- Indeks untuk tabel `tb_rekap_realisasi_apbdes`
--
ALTER TABLE `tb_rekap_realisasi_apbdes`
  ADD PRIMARY KEY (`id_rekap_realisasi_apbdes`);

--
-- Indeks untuk tabel `tb_retribusi`
--
ALTER TABLE `tb_retribusi`
  ADD PRIMARY KEY (`id_retribusi`);

--
-- Indeks untuk tabel `tb_rkpdes`
--
ALTER TABLE `tb_rkpdes`
  ADD PRIMARY KEY (`id_rkpdes`);

--
-- Indeks untuk tabel `tb_rpd`
--
ALTER TABLE `tb_rpd`
  ADD PRIMARY KEY (`id_rpd`);

--
-- Indeks untuk tabel `tb_rpjmdes`
--
ALTER TABLE `tb_rpjmdes`
  ADD PRIMARY KEY (`id_rpjmdes`);

--
-- Indeks untuk tabel `tb_smt_1`
--
ALTER TABLE `tb_smt_1`
  ADD PRIMARY KEY (`id_smt_1`);

--
-- Indeks untuk tabel `tb_smt_2`
--
ALTER TABLE `tb_smt_2`
  ADD PRIMARY KEY (`id_smt_2`);

--
-- Indeks untuk tabel `tb_tanggung_jawab`
--
ALTER TABLE `tb_tanggung_jawab`
  ADD PRIMARY KEY (`id_tanggung_jawab`);

--
-- Indeks untuk tabel `tb_tutup_kas`
--
ALTER TABLE `tb_tutup_kas`
  ADD PRIMARY KEY (`id_tutup_kas`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_apbdes`
--
ALTER TABLE `tb_apbdes`
  MODIFY `id_apbdes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_apbdes_perub`
--
ALTER TABLE `tb_apbdes_perub`
  MODIFY `id_apbdes_perub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_ba_kas`
--
ALTER TABLE `tb_ba_kas`
  MODIFY `id_ba_kas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_bulanan`
--
ALTER TABLE `tb_bulanan`
  MODIFY `id_bulanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_habis_pakai`
--
ALTER TABLE `tb_habis_pakai`
  MODIFY `id_habis_pakai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_ippd`
--
ALTER TABLE `tb_ippd`
  MODIFY `id_ippd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_lpkj`
--
ALTER TABLE `tb_lpkj`
  MODIFY `id_lpkj` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_lppd`
--
ALTER TABLE `tb_lppd`
  MODIFY `id_lppd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_omspan`
--
ALTER TABLE `tb_omspan`
  MODIFY `id_omspan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_realisasi_add`
--
ALTER TABLE `tb_realisasi_add`
  MODIFY `id_realisasi_add` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_realisasi_apbdes`
--
ALTER TABLE `tb_realisasi_apbdes`
  MODIFY `id_realisasi_apbdes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_realisasi_apbdes_dana`
--
ALTER TABLE `tb_realisasi_apbdes_dana`
  MODIFY `id_realisasi_apbdes_dana` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_realisasi_dd`
--
ALTER TABLE `tb_realisasi_dd`
  MODIFY `id_realisasi_dd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_realisasi_pad`
--
ALTER TABLE `tb_realisasi_pad`
  MODIFY `id_realisasi_pad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_rekap_realisasi_apbdes`
--
ALTER TABLE `tb_rekap_realisasi_apbdes`
  MODIFY `id_rekap_realisasi_apbdes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_retribusi`
--
ALTER TABLE `tb_retribusi`
  MODIFY `id_retribusi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_rkpdes`
--
ALTER TABLE `tb_rkpdes`
  MODIFY `id_rkpdes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_rpd`
--
ALTER TABLE `tb_rpd`
  MODIFY `id_rpd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_rpjmdes`
--
ALTER TABLE `tb_rpjmdes`
  MODIFY `id_rpjmdes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_smt_1`
--
ALTER TABLE `tb_smt_1`
  MODIFY `id_smt_1` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_smt_2`
--
ALTER TABLE `tb_smt_2`
  MODIFY `id_smt_2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_tanggung_jawab`
--
ALTER TABLE `tb_tanggung_jawab`
  MODIFY `id_tanggung_jawab` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_tutup_kas`
--
ALTER TABLE `tb_tutup_kas`
  MODIFY `id_tutup_kas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
